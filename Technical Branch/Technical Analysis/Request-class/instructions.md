This tutorial covers:  

✅ Creating a **Laravel project**  
✅ Installing **Spatie permissions**  
✅ Creating a **Post model & migration**  
✅ Implementing **Form Request Validation**  
✅ Using **authorize()** to restrict post creation  
✅ Setting up **Blade UI**  

---

## **Step 1: Create a Laravel Project**
If you haven't already, create a new Laravel project:

```sh
composer create-project laravel/laravel blog-app
```

Move into the project directory:

```sh
cd blog-app
```

---

## **Step 2: Install Laravel Breeze for Authentication**
We'll use **Breeze** to set up authentication with Blade views:

```sh
composer require laravel/breeze --dev
php artisan breeze:install
npm install && npm run dev
php artisan migrate
```

Then, start the development server:

```sh
php artisan serve
```

Now, visit [http://127.0.0.1:8000/register](http://127.0.0.1:8000/register) and create an account.

---

## **Step 3: Install Spatie Role & Permission Package**
We need this package to manage **roles** and **permissions**.

```sh
composer require spatie/laravel-permission
```

Publish the configuration file:

```sh
php artisan vendor:publish --provider="Spatie\Permission\PermissionServiceProvider"
```

Run migrations:

```sh
php artisan migrate
```

---

## **Step 4: Set Up Roles and Permissions**
In **`DatabaseSeeder.php`**, add roles and permissions:

```php
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Create permissions
        Permission::create(['name' => 'create-posts']);

        // Create roles
        $admin = Role::create(['name' => 'admin']);
        $user = Role::create(['name' => 'user']);

        // Assign permission to role
        $admin->givePermissionTo('create-posts');

        // Assign role to first user
        $firstUser = User::first();
        if ($firstUser) {
            $firstUser->assignRole('admin');
        }
    }
}
```

Run the seeder:

```sh
php artisan db:seed
```

Now, the first registered user is an **admin** who can create posts.

---

## **Step 5: Modify the User Model**
In **`app/Models/User.php`**, add the `HasRoles` trait:

```php
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasRoles;
}
```

---

## **Step 6: Create the Post Model and Migration**
Run the following command:

```sh
php artisan make:model Post -m
```

Edit the migration file in **`database/migrations`**:

```php
public function up()
{
    Schema::create('posts', function (Blueprint $table) {
        $table->id();
        $table->foreignId('user_id')->constrained()->onDelete('cascade');
        $table->string('title');
        $table->text('content');
        $table->timestamps();
    });
}
```

Run migrations:

```sh
php artisan migrate
```

---

## **Step 7: Create a Form Request Class**
Run:

```sh
php artisan make:request StorePostRequest
```

Modify **`app/Http/Requests/StorePostRequest.php`**:

```php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
{
    public function authorize(): bool
    {
        return auth()->user()->can('create-posts');
    }

    public function rules(): array
    {
        return [
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ];
    }
}
```

Now, only users with **`create-posts`** permission can submit this request.

---

## **Step 8: Update the Controller**
Modify **`app/Http/Controllers/PostController.php`**:

```php
namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $posts = Post::latest()->get();
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        if (!auth()->user()->can('create-posts')) {
            abort(403);
        }

        return view('posts.create');
    }

    public function store(StorePostRequest $request)
    {
        Post::create([
            'user_id' => auth()->id(),
            'title' => $request->title,
            'content' => $request->content,
        ]);

        return redirect()->route('posts.index')->with('success', 'Post created successfully!');
    }
}
```

---

## **Step 9: Update Routes**
Modify **`routes/web.php`**:

```php
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('posts.index');
});

Route::resource('posts', PostController::class)->middleware('auth');
```

---

## **Step 10: Create Blade Views**
### **1️⃣ posts/index.blade.php**
Create **`resources/views/posts/index.blade.php`**:

```blade
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Posts') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @if(auth()->user()->can('create-posts'))
                        <a href="{{ route('posts.create') }}" class="btn btn-primary">Create Post</a>
                    @endif

                    @foreach ($posts as $post)
                        <div class="mt-4 p-4 border rounded">
                            <h3>{{ $post->title }}</h3>
                            <p>{{ $post->content }}</p>
                            <small>By: {{ $post->user->name }}</small>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
```

---

### **2️⃣ posts/create.blade.php**
Create **`resources/views/posts/create.blade.php`**:

```blade
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Post') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('posts.store') }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label for="title">Title</label>
                            <input type="text" name="title" id="title" class="w-full border rounded">
                        </div>
                        <div class="mb-6">
                            <label for="content">Content</label>
                            <textarea name="content" id="content" class="w-full border rounded"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Create Post</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
```

---

## **Final Step: Test the Application**
1. Login as an **admin** and create a post.
2. Try logging in as a regular user and see if they can create posts.

Now you have a **fully functional Laravel blog** where only users with **permission** can create posts! 🎉🚀