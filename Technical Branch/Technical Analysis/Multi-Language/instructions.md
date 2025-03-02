# Laravel Multi-Language Support: A Complete Guide

## 1. Introduction

In this guide, we will implement multi-language support in a Laravel application. This will cover using Laravel's built-in localization features, setting up language files, implementing a language switcher, and using middleware to manage user language preferences.

## 2. Setting Up Localization in Laravel

### Step 1: Create a New Laravel Project

If you don’t have a Laravel project, create one:

```bash
composer create-project --prefer-dist laravel/laravel MultiLangApp
cd MultiLangApp
```

### Step 2: Configure Localization Settings

Open the `config/app.php` file and update the `locale` setting:

```php
'locale' => 'en',
'fallback_locale' => 'en',
```

This ensures that English is the default language.

## 3. Creating Language Files

Laravel stores translations in `resources/lang/`. By default, you have an `en` folder. Create a `fr` folder for French:

```bash
mkdir -p resources/lang/fr
```

Now create translation files:

### English (`resources/lang/en/messages.php`)

```php
<?php
return [
    'welcome' => 'Welcome to our application!',
    'language' => 'Language',
];
```

### French (`resources/lang/fr/messages.php`)

```php
<?php
return [
    'welcome' => 'Bienvenue dans notre application!',
    'language' => 'Langue',
];
```

## 4. Using Translations in Views

To display translated text in Blade templates, use the `__()` helper function:

```blade
<h1>{{ __('messages.welcome') }}</h1>
<p>{{ __('messages.language') }}</p>
```

## 5. Implementing a Language Switcher

We need a way to switch between languages dynamically.

### Step 1: Create Routes

Define routes for switching languages in `routes/web.php`:

```php
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

Route::get('lang/{locale}', function ($locale) {
    if (in_array($locale, ['en', 'fr'])) {
        Session::put('locale', $locale);
    }
    return Redirect::back();
})->name('switch.lang');
```

### Step 2: Create Middleware to Apply Language

Run this command to create middleware:

```bash
php artisan make:middleware LanguageMiddleware
```

Edit `app/Http/Middleware/LanguageMiddleware.php`:

```php
<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LanguageMiddleware
{
    public function handle($request, Closure $next)
    {
        if (Session::has('locale')) {
            App::setLocale(Session::get('locale'));
        }
        return $next($request);
    }
}
```

Register this middleware in `app/Http/Kernel.php`:

```php
protected $middlewareGroups = [
    'web' => [
        \App\Http\Middleware\LanguageMiddleware::class,
    ],
];
```

### Step 3: Add Language Switcher to Navbar

In `resources/views/layouts/app.blade.php`, add:

```blade
<a href="{{ route('switch.lang', 'en') }}">English</a> |
<a href="{{ route('switch.lang', 'fr') }}">Français</a>
```

## 6. Storing Translations in the Database (Optional)

If you want to store translations in the database, create a `translations` table:

```bash
php artisan make:model Translation -m
```

In `database/migrations/xxxx_xx_xx_create_translations_table.php`:

```php
public function up()
{
    Schema::create('translations', function (Blueprint $table) {
        $table->id();
        $table->string('key');
        $table->json('value');
        $table->timestamps();
    });
}
```

Run the migration:

```bash
php artisan migrate
```

In `app/Models/Translation.php`:

```php
class Translation extends Model
{
    protected $fillable = ['key', 'value'];
    protected $casts = ['value' => 'array'];
}
```

To fetch translations dynamically:

```php
function translate($key, $locale = null) {
    $locale = $locale ?? app()->getLocale();
    return Translation::where('key', $key)->first()->value[$locale] ?? $key;
}
```

Use it in Blade:

```blade
<p>{{ translate('welcome') }}</p>
```

## 7. Vue.js Integration (If Needed)

If you are using Vue.js in Laravel, install `vue-i18n`:

```bash
npm install vue-i18n@next
```

Create a `lang.js` file:

```javascript
import { createI18n } from 'vue-i18n';
const messages = {
    en: {
        welcome: 'Welcome to our application!',
    },
    fr: {
        welcome: 'Bienvenue dans notre application!',
    }
};
export const i18n = createI18n({
    locale: 'en',
    fallbackLocale: 'en',
    messages,
});
```

In your Vue app:

```javascript
import { createApp } from 'vue';
import App from './App.vue';
import { i18n } from './lang';
const app = createApp(App);
app.use(i18n);
app.mount('#app');
```

Use it in Vue components:

```vue
<template>
    <p>{{ $t('welcome') }}</p>
</template>
```

## 8. Conclusion

This guide covered: ✅ Setting up Laravel localization ✅ Creating language files ✅ Implementing a language switcher ✅ Using middleware for language persistence ✅ Storing translations in a database ✅ Vue.js integration (if needed)

You can now build a multi-language Laravel application. 🚀
