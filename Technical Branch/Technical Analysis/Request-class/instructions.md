Here’s a **step-by-step tutorial** on using **Form Request Classes** in Laravel with a **Product Management** example.  

---

# **Laravel Form Request Classes – Best Practice**  

## **Introduction**  

Handling form validation inside controllers can make your code messy and hard to maintain. Instead, Laravel provides **Form Request Classes** that allow us to **encapsulate validation logic** separately.  

In this tutorial, you’ll learn:  
✔ What **Form Request Classes** are and why they’re useful.  
✔ How to create and use a Form Request class in a **Product Management** example.  
✔ How to customize validation messages and handle authorization.  

---

## **1. What is a Form Request Class?**  

A **Form Request Class** is a Laravel feature that lets you move request validation logic out of your controller and into a dedicated class.  

### **🚀 Why Use Form Request Classes?**  
✅ Keeps controllers **clean and readable**  
✅ Allows **reusable** validation rules  
✅ Supports **custom error messages**  
✅ Can handle **authorization logic**  

---

## **2. Creating a Form Request Class**  

First, generate a Form Request class using Artisan:  

```bash
php artisan make:request StoreProductRequest
```

This creates a new file in:  
📂 `app/Http/Requests/StoreProductRequest.php`  

---

## **3. Defining Validation Rules**  

Open **`StoreProductRequest.php`** and define the rules inside the `rules()` method:  

```php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; // Change this to add authorization logic
    }

    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'description' => 'nullable|string|max:1000',
        ];
    }
}
```

### **📝 What This Code Does**  
- Ensures `name`, `price`, and `stock` are **required**.  
- Restricts `price` to **positive numbers**.  
- Limits `description` to **1000 characters** but makes it **optional**.  

---

## **4. Using the Form Request in the Controller**  

Now, modify your **ProductController** to use this Form Request:  

```php
use App\Http\Requests\StoreProductRequest;
use App\Models\Product;

public function store(StoreProductRequest $request)
{
    Product::create($request->validated());

    return response()->json(['message' => 'Product created successfully']);
}
```

### **📝 Why Use `$request->validated()`?**  
- It **ensures only validated fields** are passed.  
- Protects against **mass assignment vulnerabilities**.  

---

## **5. Customizing Validation Messages**  

You can define **custom error messages** inside your Form Request class:  

```php
public function messages(): array
{
    return [
        'name.required' => 'Please enter a product name.',
        'price.required' => 'Price is required and must be a positive number.',
        'stock.required' => 'Stock count is required and must be an integer.',
        'description.max' => 'Description cannot exceed 1000 characters.',
    ];
}
```

---

## **6. Adding Authorization Logic**  

The `authorize()` method can be used to **restrict access** based on user roles:  

```php
public function authorize(): bool
{
    return auth()->user()?->isAdmin(); // Only admins can create products
}
```

If `authorize()` returns `false`, Laravel will automatically **reject the request**.  

---

## **7. Handling JSON Requests (For APIs)**  

If an API request **fails validation**, Laravel **automatically** returns a JSON response like this:  

```json
{
    "message": "The given data was invalid.",
    "errors": {
        "price": ["Price is required and must be a positive number."]
    }
}
```

To customize the error response, override the `failedValidation()` method:  

```php
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

protected function failedValidation(Validator $validator)
{
    throw new HttpResponseException(response()->json([
        'success' => false,
        'errors' => $validator->errors(),
    ], 422));
}
```

---

## **8. Testing the Request Class**  

### **🛠 Testing via Postman or API Client**  

Send a **POST request** to `/products` with **invalid data**, and you should see the validation errors.  

Example invalid request:  

```json
{
    "name": "",
    "price": -5,
    "stock": "not_a_number"
}
```

Response:  

```json
{
    "errors": {
        "name": ["Please enter a product name."],
        "price": ["Price must be a positive number."],
        "stock": ["Stock count must be an integer."]
    }
}
```

---

## **9. Best Practices Recap**  

✅ **Always use Form Request classes for validation**  
✅ **Keep controllers clean by handling validation separately**  
✅ **Use `$request->validated()` to ensure only valid data is used**  
✅ **Customize validation messages for better user experience**  
✅ **Use `authorize()` for permission-based validation**  
✅ **Handle API responses properly for JSON requests**  

---

## **Conclusion**  

You’ve now learned how to **properly handle validation** in Laravel using **Form Request Classes** with a **Product Management** example. 🎯  

By following this approach, your Laravel applications will be:  
✔ More **organized**  
✔ More **secure**  
✔ Easier to **maintain**  

🚀 **Next Steps:** Try implementing **update product validation** using another Form Request class (`UpdateProductRequest`).  
