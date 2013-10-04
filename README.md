ArmenianLocaleBundle
====================

Integrate Armenian to SF2

install
=======
Add this to composer.json and run composer update command
<b>"tigran/armenian-locale-bundle": "dev-master"</b>


Usage <br />
Translit
```php
$this->get("armenian.locale.translit")->latinToArmenian("Barev");  // should be converted to "Բարև"
```
