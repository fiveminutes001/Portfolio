<?php

function new_link($arr)
{
    $url = $arr[0];
    $desc = $arr[1];

    return '<a
    href="' . $url . '"
>
    <div
        class="w3-tag w3-round w3-green"
        style="padding: 3px; margin-top: 6px"
    >
        <div
            class="w3-tag w3-round w3-green w3-border w3-border-white"
            style="margin-top: 0px"
        >
            ' . $desc . '
        </div>
    </div>
</a>';
}


$links_array = [['https://redfin.engineering/node-modules-at-war-why-commonjs-and-es-modules-cant-get-along-9617135eeca1', 'CommonJS vs. ES modules']];
$output = '';

foreach ($links_array as $link) {
    $output = $output . new_link($link);
}

echo json_encode($output);
// echo json_encode('<div class="column" style="margin-bottom: 6px">
//     <a href="html/gitCommands.html">
//         <button class="btn" style="width: 100%">
//             <i class="fa fa-folder"></i>
//             Useful Commands
//         </button>
//     </a>
//     <h6><u>JS</u></h6>
//     <a
//         href=""
//     >
//         <div
//             class="w3-tag w3-round w3-green"
//             style="padding: 3px; margin-top: 6px"
//         >
//             <div
//                 class="w3-tag w3-round w3-green w3-border w3-border-white"
//                 style="margin-top: 0px"
//             >
                
//             </div>
//         </div>
//     </a>
//     <a
//         href="https://developer.mozilla.org/en-US/docs/Web/JavaScript/Guide/Modules"
//     >
//         <div
//             class="w3-tag w3-round w3-green"
//             style="padding: 3px; margin-top: 6px"
//         >
//             <div
//                 class="w3-tag w3-round w3-green w3-border w3-border-white"
//                 style="margin-top: 0px"
//             >
//                 ES modules
//             </div>
//         </div>
//     </a>
//     <a
//         href="https://fulcrum.rocks/blog/why-use-postgresql-database/"
//     >
//         <div
//             class="w3-tag w3-round w3-green"
//             style="padding: 3px; margin-top: 6px"
//         >
//             <div
//                 class="w3-tag w3-round w3-green w3-border w3-border-white"
//                 style="margin-top: 0px"
//             >
//                 Why use PostgreSql/NoSql database
//             </div>
//         </div>
//     </a>
//     <a href="https://www.npmjs.com/">
//         <div
//             class="w3-tag w3-round w3-green"
//             style="padding: 3px; margin-top: 6px"
//         >
//             <div
//                 class="w3-tag w3-round w3-green w3-border w3-border-white"
//                 style="margin-top: 0px"
//             >
//                 NPMJS
//             </div>
//         </div>
//     </a>

//     <a href="https://github.com/goldbergyoni/nodebestpractices">
//         <div
//             class="w3-tag w3-round w3-green"
//             style="padding: 3px; margin-top: 6px"
//         >
//             <div
//                 class="w3-tag w3-round w3-green w3-border w3-border-white"
//                 style="margin-top: 0px"
//             >
//                 NodeJs - best practices
//             </div>
//         </div>
//     </a>

//     <a
//         href="https://elad.explainit.online/udacity/FullJs/pdf/EventLoop.pdf"
//     >
//         <div
//             class="w3-tag w3-round w3-green"
//             style="padding: 3px; margin-top: 6px"
//         >
//             <div
//                 class="w3-tag w3-round w3-green w3-border w3-border-white"
//                 style="margin-top: 0px"
//             >
//                 FullJs - Event Loop
//             </div>
//         </div>
//     </a>

//     <a
//         href="https://elad.explainit.online/udacity/FullJs/L2-eventLoop.js"
//     >
//         <div
//             class="w3-tag w3-round w3-green"
//             style="padding: 3px; margin-top: 6px"
//         >
//             <div
//                 class="w3-tag w3-round w3-green w3-border w3-border-white"
//                 style="margin-top: 0px"
//             >
//                 FullJs file
//             </div>
//         </div>
//     </a>

//     <a
//         href="https://blog.logrocket.com/history-of-frontend-frameworks/"
//     >
//         <div
//             class="w3-tag w3-round w3-green"
//             style="padding: 3px; margin-top: 6px"
//         >
//             <div
//                 class="w3-tag w3-round w3-green w3-border w3-border-white"
//                 style="margin-top: 0px"
//             >
//                 History of front-end frameworks
//             </div>
//         </div>
//     </a>

//     <a
//         href="https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Array"
//     >
//         <div
//             class="w3-tag w3-round w3-green"
//             style="padding: 3px; margin-top: 6px"
//         >
//             <div
//                 class="w3-tag w3-round w3-green w3-border w3-border-white"
//                 style="margin-top: 0px"
//             >
//                 Js Array Methods
//             </div>
//         </div>
//     </a>

//     <a
//         href="https://www.udacity.com/blog/2021/02/javascript-json.html"
//     >
//         <div
//             class="w3-tag w3-round w3-green"
//             style="padding: 3px; margin-top: 6px"
//         >
//             <div
//                 class="w3-tag w3-round w3-green w3-border w3-border-white"
//                 style="margin-top: 0px"
//             >
//                 JSON (Article, Udacity)
//             </div>
//         </div>
//     </a>

//     <a
//         href="https://stackoverflow.com/questions/27991366/what-is-the-difference-between-state-and-props-in-react"
//     >
//         <div
//             class="w3-tag w3-round w3-green"
//             style="padding: 3px; margin-top: 6px"
//         >
//             <div
//                 class="w3-tag w3-round w3-green w3-border w3-border-white"
//                 style="margin-top: 0px"
//             >
//                 React Props vs. State
//             </div>
//         </div>
//     </a>

//     <a
//         href="https://www.udacity.com/blog/2021/02/javascript-json.html"
//     >
//         <div
//             class="w3-tag w3-round w3-green"
//             style="padding: 3px; margin-top: 6px"
//         >
//             <div
//                 class="w3-tag w3-round w3-green w3-border w3-border-white"
//                 style="margin-top: 0px"
//             >
//                 JSON (Article, Udacity)
//             </div>
//         </div>
//     </a>

//     <a
//         href="https://www.w3.org/TR/CSS21/selector.html%23id-selectors"
//     >
//         <div
//             class="w3-tag w3-round w3-green"
//             style="padding: 3px; margin-top: 6px"
//         >
//             <div
//                 class="w3-tag w3-round w3-green w3-border w3-border-white"
//                 style="margin-top: 0px"
//             >
//                 CSS selectors
//             </div>
//         </div>
//     </a>
//     <a href="https://web.dev/javascript-this/">
//         <div
//             class="w3-tag w3-round w3-green"
//             style="padding: 3px; margin-top: 6px"
//         >
//             <div
//                 class="w3-tag w3-round w3-green w3-border w3-border-white"
//                 style="margin-top: 0px"
//             >
//                 Js THIS operator (Article, Udacity)
//             </div>
//         </div>
//     </a>

//     <a href="https://www.youtube.com/watch?v=f687hBjwFcM">
//         <div
//             class="w3-tag w3-round w3-green"
//             style="padding: 3px; margin-top: 6px"
//         >
//             <div
//                 class="w3-tag w3-round w3-green w3-border w3-border-white"
//                 style="margin-top: 0px"
//             >
//                 React hooks video
//             </div>
//         </div>
//     </a>
// </div>

// <div class="column" style="margin-bottom: 6px">
//     <a href="https://developer.mozilla.org/en-US/docs/Web/API">
//         <div
//             class="w3-tag w3-round w3-blue"
//             style="padding: 3px; margin-top: 6px"
//         >
//             <div
//                 class="w3-tag w3-round w3-blue w3-border w3-border-white"
//                 style="margin-top: 0px"
//             >
//                 Web APIs
//             </div>
//         </div>
//     </a>

//     <a href="https://www.w3.org/2009/cheatsheet/">
//         <div
//             class="w3-tag w3-round w3-blue"
//             style="padding: 3px; margin-top: 6px"
//         >
//             <div
//                 class="w3-tag w3-round w3-blue w3-border w3-border-white"
//                 style="margin-top: 0px"
//             >
//                 W3 cheat sheet
//             </div>
//         </div>
//     </a>

//     <a
//         href="https://docs.google.com/document/d/1WiOTIPb9LW8mtPpylyJrWiWS5ReLePh2w7GLrlln6JU/edit?usp=sharing"
//     >
//         <div
//             class="w3-tag w3-round w3-blue"
//             style="padding: 3px; margin-top: 6px"
//         >
//             <div
//                 class="w3-tag w3-round w3-blue w3-border w3-border-white"
//                 style="margin-top: 0px"
//             >
//                 Interview questions
//             </div>
//         </div>
//     </a>

//     <a
//         href="https://www.w3.org/TR/DOM-Level-3-Events/#ui-events-intro"
//     >
//         <div
//             class="w3-tag w3-round w3-blue"
//             style="padding: 3px; margin-top: 6px"
//         >
//             <div
//                 class="w3-tag w3-round w3-blue w3-border w3-border-white"
//                 style="margin-top: 0px"
//             >
//                 W3 working draft
//             </div>
//         </div>
//     </a>

//     <a href="http://crockford.com/javascript/">
//         <div
//             class="w3-tag w3-round w3-blue"
//             style="padding: 3px; margin-top: 6px"
//         >
//             <div
//                 class="w3-tag w3-round w3-blue w3-border w3-border-white"
//                 style="margin-top: 0px"
//             >
//                 JavaScript: The Good Parts by Douglas Crockford
//             </div>
//         </div>
//     </a>

//     <a href="http://www.objectplayground.com/">
//         <div
//             class="w3-tag w3-round w3-blue"
//             style="padding: 3px; margin-top: 6px"
//         >
//             <div
//                 class="w3-tag w3-round w3-blue w3-border w3-border-white"
//                 style="margin-top: 0px"
//             >
//                 Js OOP video
//             </div>
//         </div>
//     </a>
// </div>

// <div class="column" style="margin-bottom: 6px">
//     <a href="http://www.cupcakeipsum.com">
//         <div
//             class="w3-tag w3-round w3-purple"
//             style="padding: 3px; margin-top: 6px"
//         >
//             <div
//                 class="
//                     w3-tag w3-round w3-purple w3-border w3-border-white
//                 "
//                 style="margin-top: 0px"
//             >
//                 Sample text
//             </div>
//         </div>
//     </a>

//     <a href="https://davidwalsh.name/event-delegate">
//         <div
//             class="w3-tag w3-round w3-purple"
//             style="padding: 3px; margin-top: 6px"
//         >
//             <div
//                 class="
//                     w3-tag w3-round w3-purple w3-border w3-border-white
//                 "
//                 style="margin-top: 0px"
//             >
//                 How JavaScript Event Delegation Works
//             </div>
//         </div>
//     </a>

//     <a href="https://youtu.be/8aGhZQkoFbQ">
//         <div
//             class="w3-tag w3-round w3-purple"
//             style="padding: 3px; margin-top: 6px"
//         >
//             <div
//                 class="
//                     w3-tag w3-round w3-purple w3-border w3-border-white
//                 "
//                 style="margin-top: 0px"
//             >
//                 Js event loop
//             </div>
//         </div>
//     </a>

//     <a href="https://developer.mozilla.org/en-US/docs/Glossary">
//         <div
//             class="w3-tag w3-round w3-purple"
//             style="padding: 3px; margin-top: 6px"
//         >
//             <div
//                 class="
//                     w3-tag w3-round w3-purple w3-border w3-border-white
//                 "
//                 style="margin-top: 0px"
//             >
//                 MDN glossary
//             </div>
//         </div>
//     </a>

//     <a
//         href="https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference"
//     >
//         <div
//             class="w3-tag w3-round w3-purple"
//             style="padding: 3px; margin-top: 6px"
//         >
//             <div
//                 class="
//                     w3-tag w3-round w3-purple w3-border w3-border-white
//                 "
//                 style="margin-top: 0px"
//             >
//                 Js reference
//             </div>
//         </div>
//     </a>

//     <a
//         href="https://addyosmani.com/resources/essentialjsdesignpatterns/book/"
//     >
//         <div
//             class="w3-tag w3-round w3-purple"
//             style="padding: 3px; margin-top: 6px"
//         >
//             <div
//                 class="
//                     w3-tag w3-round w3-purple w3-border w3-border-white
//                 "
//                 style="margin-top: 0px"
//             >
//                 Learning JavaScript Design Patterns
//             </div>
//         </div>
//     </a>

//     <a
//         href="https://ultimatecourses.com/blog/mastering-the-module-pattern#private-methods"
//     >
//         <div
//             class="w3-tag w3-round w3-purple"
//             style="padding: 3px; margin-top: 6px"
//         >
//             <div
//                 class="
//                     w3-tag w3-round w3-purple w3-border w3-border-white
//                 "
//                 style="margin-top: 0px"
//             >
//                 Js Modules Patterns
//             </div>
//         </div>
//     </a>

//     <a
//         href="https://christianheilmann.com/2007/08/22/again-with-the-module-pattern-reveal-something-to-the-world/"
//     >
//         <div
//             class="w3-tag w3-round w3-purple"
//             style="padding: 3px; margin-top: 6px"
//         >
//             <div
//                 class="
//                     w3-tag w3-round w3-purple w3-border w3-border-white
//                 "
//                 style="margin-top: 0px"
//             >
//                 Js Revealing Module Patterns
//             </div>
//         </div>
//     </a>
// </div>');
