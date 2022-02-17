<?php
require_once __DIR__ ."/vendor/autoload.php";
use Cowsayphp\Farm;
use Cowsayphp\Farm\Cow;
// require_once "app/Email.php";
// require_once "app/User.php";

use app\Email;
use app\User;


$email = new Email();
$email->setEmail('$aa@sdf.com');
$user = new User();


$cow = Farm::create(Cow::class);
echo '<pre>'.$cow->say("Ohmg I'm a cow!").'</pre>';
