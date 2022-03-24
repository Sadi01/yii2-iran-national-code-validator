Yii2 Iran National Code Validator
===========================
NationalCodeValidator validates that the attribute value is a valid Iran national code.

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run console command

```
composer require sadi01/yii2-iran-national-code-validator "*"
```

Or add the package to the `require` section of your `composer.json` file:

```json
{
    "require": {
      "sadi01/yii2-iran-national-code-validator": "*"
    }
}
```

then run `composer update`.

Usage
-----

Once the validator is installed, simply use it in your model's rules :

```php
public function rules()
    {
        return [
            ['national_code', NationalCodeValidator::class],
        ];
    }

```