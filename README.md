#PHPStan return type reproduction

This repository exists to illustrate an issue in return type widening by a PHPStan stub file.

## Output
```
 ------ ------------------------------------------------------------------------------------------------------------------------------------------------------
  Line   test.php
 ------ ------------------------------------------------------------------------------------------------------------------------------------------------------
  13     Function Kingdutch\ReproductionApp\expectedReturn() should return React\Promise\ExtendedPromiseInterface but returns React\Promise\PromiseInterface.
 ------ ------------------------------------------------------------------------------------------------------------------------------------------------------


 [ERROR] Found 1 error
```


## Usage

```
git clone https://github.com/Kingdutch/phpstan-repro.git
cd phpstan-repro
composer install
vendor/bin/phpstan analyse test.php
```

