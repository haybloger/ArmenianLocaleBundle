Armenian Locale Bundle
====================

This Bundle Integrates Armenian to SF2

Install
=======
```bash
php composer.phar require "tigran/armenian-locale-bundle";
php composer.phar update;
```

Activate The Bundle in Symfony2 appKernel file if you can )



Usage
=============
<p>Translit Helper (thanks to hayeren.am project for JS Logic :) </p>
```php
$this->get("armenian.locale.translit")->latinToArmenian("Barev");  // should be converted to "Բարև"
```
