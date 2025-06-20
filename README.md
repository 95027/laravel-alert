# Saicoder Alert

A simple, reusable Laravel package for showing beautiful toast alerts using Blade.  
Easy to configure, easy to use — no JavaScript library required.

---

## 🚀 Installation

**1️⃣ Require the package**

```bash
composer require saicoder/alert
```

2️⃣ Add to your main Blade layout

```bash
@include('alert::alert')
```

3️⃣ Use in controller

```bash
use Saicoder\Alert\Facades\Alert;

Alert::success('Your toast is working!');
Alert::danger('Your toast is working!');
Alert::info('Your toast is working!');
Alert::warning('Your toast is working!');

```

4️⃣ Publish config (optional)

This creates config/alert.php where you can customize alert colors, timeout, and other settings.

```bash
php artisan vendor:publish --tag=alert-config
```

```bash
return [
'colors' => [
'success' => '#28a745',
'danger' => '#dc3545',
'info' => '#17a2b8',
'warning' => '#ffc107',
],
'timeout' => 3000 // milliseconds
];
Change these values in config/alert.php to match your site theme.
```
---

Made with ❤️ by [Saicoder](https://github.com/95027) 🚀✨

