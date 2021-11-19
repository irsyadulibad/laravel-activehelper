# laravel-activehelper
Active State Helper for Laravel Blade

> Lightweight and simple
<br/>

![GitHub](https://img.shields.io/github/license/irsyadulibad/laravel-activehelper)
![GitHub repo size](https://img.shields.io/github/repo-size/irsyadulibad/laravel-activehelper?label=size)
![Hits](https://hits.seeyoufarm.com/api/count/incr/badge.svg?url=irsyadulibad/laravel-activehelper)

<br/>

## Introduction
Basically we do like this.
```blade
<li class="sidebar {{ Request::is('post') ? 'active' : 'no' }} ">Post</li>
<li class="sidebar {{ Request::is('page') ? 'active' : 'no' }} ">Page</li>
```

It would be nice if we can make shorter. right ?
```blade
<li class="sidebar @active('post')">Post</li>
<li class="sidebar @active('page.index')">Page</li>
```

<br/>

## Installation
Installation is best done via [composer](https://getcomposer.org):
```
composer require irsyadulibad/laravel-activehelper
```
Add the service provider in ``config/app.php``
```php
'providers' => [
  .....,
  Irsyadulibad\LaravelActivehelper\ActiveHelperServiceProvider::class,
]
```

## Usage
It will check the name of the currently active route. If match, it will return active string
```blade
<li class="sidebar @active('post')">Post</li>
```
### Nested State
You can also do it on nested navbar items,in some case you need to grouping the item by category or model name
```blade
<li class="nav-item @active('user')">
  <a href="#">User</a>
  <ul>
    <li class="nav-link @active('user.index')">
      <a href="#">List Users</a>
    </li>
    <li class="nav-link @active('user.create')">
      <a href="#">Add User</a>
    </li>
</li>
```
### More States
To check for more than one match states, you can add comma to the parameter
```blade
@active('user.index,post.create')
```

<br />

## Author's Profile:

Github: [https://github.com/irsyadulibad]\
Website: [http://irsyadulibad.my.id]\
Facebook: [https://facebook.com/irsyadulibad.dev]
