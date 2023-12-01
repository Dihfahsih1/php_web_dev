<?php
function greetInLanguage($name, $language = "English") {
    switch ($language) {
        case "Spanish":
        echo "Hola, $name!";
        break;

        case "French":
        echo "Bonjour, $name!";
        break;

        default:
        echo "Hello, $name!";
    }
}
greetInLanguage("Maria", "French");

function mydate(string $date, string $format = "") {
    echo 'this is today' . $date .''. $format .'';
}
mydate('12', '/');
