<?php

use Core\Validator;

it('validates a string', function() {
    $result = \Core\Validator::string('foober');

    expect($result)->toBeTrue();
});

it('validates that a number is greater than a given amount', function() {
    expect(Validator::greaterThan(10, 1))->toBeTrue();
    expect(Validator::greaterThan(10, 100))->toBeFalse();
})->only();