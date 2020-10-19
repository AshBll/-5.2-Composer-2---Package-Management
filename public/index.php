<?php
require_once '../vendor/autoload.php';
use App\Wcs\Hello;
$talk = new Hello();
$talk->talk();

echo "<br>" . "</br>";

use HelloWorld\SayHello;
$hello = new SayHello();
echo $hello->world();
?>
