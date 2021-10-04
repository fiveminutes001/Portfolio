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
        'http://crockford.com/javascript/',
        'JavaScript: The Good Parts by Douglas Crockford'
    ],
    [
        'http://www.objectplayground.com/',
        'Js OOP video'
    ],
    [
        'http://www.cupcakeipsum.com',
        'Sample text'
    ],
    [
        'https://davidwalsh.name/event-delegate',
        'How JavaScript Event Delegation Works'
    ],
    [
        'https://youtu.be/8aGhZQkoFbQ',
        'Js event loop'
    ],
    [
        'https://developer.mozilla.org/en-US/docs/Glossary',
        'MDN glossary'
    ],
    [
        'https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference',
        'Js reference'
    ],
    [
        'https://addyosmani.com/resources/essentialjsdesignpatterns/book/',
        'Learning JavaScript Design Patterns'
    ],
    [
        'https://ultimatecourses.com/blog/mastering-the-module-pattern#private-methods',
        'Js Modules Patterns'
    ],
    [
        'https://christianheilmann.com/2007/08/22/again-with-the-module-pattern-reveal-something-to-the-world/',
        'Js Revealing Module Patterns'
    ],
];
$footer = '';

$first_column = $header;

foreach ($links_array as $link) {
    $output = $output . new_link($link);
}

$output = $output . $footer;

echo json_encode($output);
