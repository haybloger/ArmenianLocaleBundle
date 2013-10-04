Armenian Locale Bundle
====================

This Bundle Integrates Armenian to Symfony2

Install
=======
```bash
php composer.phar require "tigran/armenian-locale-bundle";
php composer.phar update;
```

Activate The Bundle in SymfonyppKernel file

Usage
=============
<p>Translit Helper (thanks to hayeren.am project for JS Logic :) </p>
```php
$this->get("armenian.locale.translit")->latinToArmenian("Barev");  // should be converted to "Բարև"
```
