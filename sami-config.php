<?php

use Sami\Sami;
use Symfony\Component\Finder\Finder;

$iterator = Finder::create()
    ->files()
    ->name('*.php')
    ->exclude('stubs')
    ->in($dir = __DIR__.'/app');

return new Sami($iterator, array(
    'title' => 'Creative Hot House API',
    'build_dir' => __DIR__.'/build/%version%',
    'cache_dir' => __DIR__.'/cache/%version%',
    'default_opened_level' => 2,
));
