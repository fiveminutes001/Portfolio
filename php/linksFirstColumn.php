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
        'html/gitCommands.html',
        'useful commands'
    ],
    [
        'https://redfin.engineering/node-modules-at-war-why-commonjs-and-es-modules-cant-get-along-9617135eeca1',
        'CommonJS vs. ES modules'
    ],
    [
        'https://developer.mozilla.org/en-US/docs/Web/JavaScript/Guide/Modules',
        'ES modules'
    ],
    [
        'https://fulcrum.rocks/blog/why-use-postgresql-database/',
        'Why use PostgreSql/NoSql database'
    ],
    [
        'https://www.npmjs.com/',
        'NPMJS'
    ],
    [
        'https://github.com/goldbergyoni/nodebestpractices',
        'NodeJs - best practices'
    ],
    [
        'https://stackoverflow.com/questions/30008114/how-do-i-promisify-native-xhr',
        'using promises with XHR request'
    ],
    [
        'https://elad.explainit.online/udacity/FullJs/pdf/EventLoop.pdf',
        'FullJs - Event Loop'
    ],
    [
        'https://elad.explainit.online/udacity/FullJs/L2-eventLoop.js',
        'FullJs file'
    ],
    [
        'https://www.codementor.io/howitworks/mentorship',
        'Codementor'
    ],
    [
        'https://github.com/sdmg15/Best-websites-a-programmer-should-visit',
        'Best-websites-a-programmer-should-visit'
    ],
    [
        'https://github.com/fiveminutes001/FarmData2/blob/main/CONTRIBUTING.md',
        'How to contribute on GIT'
    ],
    [
        'https://www.typescriptlang.org/docs/handbook/declaration-files/do-s-and-don-ts.html',
        'TypeScripts official Do\'s and Don\'ts documentation'
    ],
    [
        'https://github.com/microsoft/TypeScript/wiki/Performance',
        'Microsoft\'s guide to performant TypeScript'
    ],
    [
        'https://2ality.com/2020/04/migrating-to-typescript.html',
        'Strategies for migrating to TypeScript'
    ],
];
$footer = '';

$first_column = $header;

foreach ($links_array as $link) {
    $output = $output . new_link($link);
}

$output = $output . $footer;

echo json_encode($output);
