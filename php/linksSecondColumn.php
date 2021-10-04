<?php

function new_link($arr)
{
    $url = $arr[0];
    $desc = $arr[1];

    return '<a href="' . $url . '"><div class="w3-tag w3-round w3-green" style="padding: 3px; margin-top: 6px">
        <div class="w3-tag w3-round w3-green w3-border w3-border-white" style="margin-top: 0px">' . $desc . '
        </div></div></a>';
}

$header = '';
$links_array = [
    [
        'https://blog.logrocket.com/history-of-frontend-frameworks/',
        'History of front-end frameworks'
    ],
    [
        'https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Array',
        'Js Array Methods'
    ],
    [
        'https://www.udacity.com/blog/2021/02/javascript-json.html',
        'JSON (Article, Udacity)'
    ],
    [
        'https://stackoverflow.com/questions/27991366/what-is-the-difference-between-state-and-props-in-react',
        'React Props vs. State'
    ],
    [
        'https://www.w3.org/TR/CSS21/selector.html%23id-selectors',
        'CSS selectors'
    ],
    [
        'https://web.dev/javascript-this/',
        'Js THIS operator (Article, Udacity)'
    ],
    [
        'https://www.youtube.com/watch?v=f687hBjwFcM',
        'React hooks video'
    ],
];
$footer = '';

$first_column = $header;

foreach ($links_array as $link) {
    $output = $output . new_link($link);
}

$output = $output . $footer;

echo json_encode($output);
