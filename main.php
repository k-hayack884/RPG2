<?php
require_once('./irasutoya/Hero.php');
require_once('./irasutoya/Enemy.php');
require_once('./irasutoya/dadakko.php');

echo 'やったぜ'.PHP_EOL;

$man=new Hero();
$dadakko=new Dadakko();
$odoru_hito=new Enemy();

$man->name="男性";
$odoru_hito->name="踊る女性";
$dadakko->name="駄々をこねる人";
$turn=1;
while ($man->hitpoint>0 && $odoru_hito->hitpoint>0){
    echo $turn."ターン開始！".PHP_EOL;
echo $man->name."のHPは".$man->hitpoint."/".$man::MAX_HP."です".PHP_EOL;
echo $dadakko->name."のHPは".$dadakko->hitpoint."/".$dadakko::MAX_HP."です".PHP_EOL;
echo $odoru_hito->name."のHPは".$odoru_hito->hitpoint."/".$odoru_hito::MAX_HP."です".PHP_EOL;

// $man->doAttack($odoru_hito);
$dadakko->doAttack($odoru_hito);
// $odoru_hito->doAttack($man);
$odoru_hito->doAttack($dadakko);

$turn++;
echo PHP_EOL;
}
echo "戦闘終了！".PHP_EOL;
