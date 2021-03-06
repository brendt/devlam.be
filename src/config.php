<?php

use Stitcher\File;

return [
    'environment' => env('ENVIRONMENT'),
    'siteUrl' => env('SITE_URL', 'http://devlam.be.test'),

    'publicDirectory' => env('PUBLIC_DIRECTORY', File::path('public')),
    'sourceDirectory' => File::path('src'),
    'templateDirectory' => File::path('resources/view'),

    'configurationFile' => File::path('src/site.yaml'),

    'cacheImages' => env('CACHE_IMAGES', true),
    'cacheStaticFiles' => env('CACHE_STATIC', true),

    'staticFiles' => [
    ],

    'errorPages' => [
    ],

    'minify' => true,
];
