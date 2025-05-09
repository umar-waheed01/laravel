<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f4f4;
    }
    .navbar {
        background-color: #333;
        color: white;
        padding: 10px;
    }
    .navbar a {
        color: white;
        text-decoration: none;
        padding: 14px 20px;
        display: inline-block;
    }
    .navbar a:hover {
        background-color: #575757;
    }
    h1, h2 {
        text-align: center;
    }
    p {
        text-align: center;
    }
    .footer {
        text-align: center;
        padding: 10px;
        background-color: #333;
        color: white;
    }
</style>
<body>
    <h1>basic landing page</h1>
    <div class="navbar">
        <a href="/">Home</a>
        <a href="/about">About</a>
        <a href="/contact">Contact</a>
        <a href="/signup">Sign Up</a>
        <a href="/login">Login</a>
    </div>
    <h2>Welcome to the basic landing page</h2>
    <p>This is a simple landing page created using Blade templating engine.</p>
    <p>Here you can add your content, images, and other elements as needed.</p>
    <p>Feel free to customize the layout and style according to your preferences.</p>
    <p>Thank you for visiting!</p>
    <p>Let all your things have their places, let each part of your business have its time. - Benjamin Franklin</p>
    <p>For more information, you can check out the <a href="https://laravel.com/docs/blade">Laravel Blade documentation</a>.</p>
    <p>To learn more about Laravel, visit the <a href="https://laravel.com/docs">Laravel documentation</a>.</p>
    <p>For more information about Blade templating, check out the <a href="https://laravel.com/docs/blade">Blade documentation</a>.</p>
    <p>To learn more about Laravel, visit the <a href="https://laravel.com/docs">Laravel documentation</a>.</p>
    <div class="footer">
        <P>Footer</P>
    </div>
</body>
</html>