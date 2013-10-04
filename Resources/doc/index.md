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
<p>Translit Helper (thanks to hayeren.am project for JS Logic :) </p>
```php
$this->get("armenian.locale.translit")->latinToArmenian("Barev");  // should be converted to "Բարև"
```
