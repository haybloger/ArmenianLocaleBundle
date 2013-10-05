Install
=======
```bash
php composer.phar require "tigran/armenian-locale-bundle";
php composer.phar update;
```
Activate The Bundle in Symfony's  AppKernel.php file
```php
new Azatyan\ArmenianLocaleBundle\AzatyanArmenianLocaleBundle(),
```
Usage
=============
<p>1. Translit Service (thanks to <a target="_blank" href="http://hayeren.am/">www.hayeren.am</a> project for JS Logic.</p>
```php
$this->get("armenian.locale.translit")->latinToArmenian("Barev");  // returns (string) "Բարև"
```
