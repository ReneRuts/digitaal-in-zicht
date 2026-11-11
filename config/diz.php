<?php

// Vul hier de echte links in (nu placeholders).
return [
    'mdls_url' => env('DIZ_MDLS_URL', 'https://mdls.org.uk'),
    'matrix_file' => 'data-matrix.xlsx', // plaats in storage/app/public/
    'sources' => [
        ['name' => 'Barometer Digitale Inclusie', 'url' => env('DIZ_URL_BAROMETER', '#')],
        ['name' => 'Digimeter', 'url' => env('DIZ_URL_DIGIMETER', '#')],
        ['name' => 'Media & Samenleving (M&S) rapport', 'url' => env('DIZ_URL_MS', '#')],
    ],
];