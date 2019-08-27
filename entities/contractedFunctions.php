<?php
require_once "config.php";
config::connexion();

function BindValue($requette, $names, $values)
{
    if (count($names) && count($values) && count($names) == count($values)) {
        for ($i = 0; $i < count($names); $i++) {
            $requette->bindValue(":" . $names[$i], $values[$i]);
        }
        return $requette;
    }
}

function differenceDate($date)
{
    date_default_timezone_set('Africa/Douala');
    $chaine_c = strtotime(date("m/j/Y H:i", time()));
    $dates=strtotime($date)+900;
     return $dates-$chaine_c;
}

function tester(callable $callback){
    echo "je veux boire <br>";
$callback();
}
// tester( function(){
//     echo"manger";
// });
?>
