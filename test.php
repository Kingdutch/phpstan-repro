<?php declare(strict_types=1);

namespace Kingdutch\ReproductionApp;

require_once "vendor/autoload.php";


use React\Promise\ExtendedPromiseInterface;
use function React\Promise\all as promise_all;

function expectedReturn() : ExtendedPromiseInterface {
  $deliveries = [1, 0, 1, 1, 0];
  return promise_all($deliveries)
    ->then(fn (array $results) => array_sum($results));
}

expectedReturn()->done(fn ($r) => var_dump($r));
