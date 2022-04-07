<?php
require_once('./irasutoya/Hero.php');
require_once('./irasutoya/Enemy.php');

echo 'やったぜ'.PHP_EOL;

$man=new Hero();
$odoru_hito=new Enemy();

$man->name="男性";
$odoru_hito->name="踊る女性";

echo $man->name."のHPは".$man->hitpoint."/".$man::MAX_HP."です".PHP_EOL;
echo $odoru_hito->name."のHPは".$odoru_hito->hitpoint."/".$odoru_hito::MAX_HP."です".PHP_EOL;

$man->doAttack($odoru_hito);
$odoru_hito->doAttack($man);
