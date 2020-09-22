<?php
$tags = explode(',', file_get_contents('./test.html'));

$content = [];
foreach ($tags as $tag) {

    $item = [
        uniqid() => [
            'prefix' => trim(trim(explode(' ', explode('=', $tag)[1])[0], '"'), "'"),
            'body' => "$tag",
            'description' => trim(trim(explode(' ', explode('=', $tag)[1])[0], '"'), "'")
        ]
    ];
    $content[] = $item;
}

file_put_contents('html.json', json_encode($content));
