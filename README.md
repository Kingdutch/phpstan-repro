#PHPStan return type reproduction

This repository exists to illustrate an issue in return type widening by a PHPStan stub file.

## Usage

```
git clone https://github.com/Kingdutch/phpstan-repro.git
cd phpstan-repro
composer install
vendor/bin/phpstan analyse test.php
```

