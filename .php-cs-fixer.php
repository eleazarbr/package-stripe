<?php

use Ergebnis\PhpCsFixer\Config;

// Optionally override rules from a rule set by passing in an array of rules to be merged in:
$overrides = [
    'final_class' => false,
    'declare_strict_types' => false,
    'static_lambda' => false,
    'phpdoc_to_property_type' => [
        'scalar_types' => false,
    ],
    'php_unit_method_casing' => [
        'case' => 'snake_case',
    ],
    'php_unit_test_case_static_method_calls' => [
        'call_type' => 'this',
    ],
];

// RuleSet see: https://github.com/ergebnis/php-cs-fixer-config/blob/main/src/RuleSet/Php74.php
$config = Config\Factory::fromRuleSet(new Config\RuleSet\Php74(), $overrides);

$config->getFinder()->in([
    __DIR__ . '/src',
    __DIR__ . '/tests',
]);
$config->setCacheFile(__DIR__ . '/.build/php-cs-fixer/.php-cs-fixer.cache');

return $config;
