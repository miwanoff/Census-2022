<?php
require_once "Census.php";
require_once "Country.php";

$censuses = [new Census(1959, 41869000, "Перший післявоєнний перепис"),
    new Census(1970, 47126500, "Нас побільшало"),
    new Census(1979, 49754600, "Просто перепис"),
    new Census(1989, 51706700, "Останній перепис у XX столітті"),
    new Census(2001, 48475100, "Перший перепис у XXI столітті")];
//print_r($censuses);
$country = new Country("Україна", 603628, $censuses);
print_r($country);
echo "Щільність населення 1979 році: " . $country->density(1979) . "\n";
echo "Рік із найбільшим населенням: " . $country->maxYear() . "\n";
$country->findWord("перепис");