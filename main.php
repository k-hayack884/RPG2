<?php
require_once('./irasutoya/Hero.php');
require_once('./irasutoya/Enemy.php');
require_once('./irasutoya/okoruhito.php');
require_once('./irasutoya/dadakko.php');

echo 'やったぜ'.PHP_EOL;

$man=new Hero("男性");
$dadakko=new Dadakko("駄々をこねる人");
$okoru_hito=new Okoruhito("ものすごく怒る人");
$odoru_hito=new Enemy("踊る女性");

$turn=1;
while ($okoru_hito->getHp()>0 && $odoru_hito->getHp()>0){
echo $turn."ターン開始！".PHP_EOL;
echo $man->getName()."のHPは".$man->getHp()."/".$man::MAX_HP."です".PHP_EOL;
echo $dadakko->getName()."のHPは".$dadakko->getHp()."/".$dadakko::MAX_HP."です".PHP_EOL;
echo $okoru_hito->getName()."のHPは".$okoru_hito->getHp()."/".$okoru_hito::MAX_HP."です".PHP_EOL;
echo $odoru_hito->getName()."のHPは".$odoru_hito->getHp()."/".$odoru_hito::MAX_HP."です".PHP_EOL;

// $man->doAttack($odoru_hito);
// $dadakko->doAttack($odoru_hito);
$okoru_hito->doAttack($odoru_hito);
// $odoru_hito->doAttack($man);
$odoru_hito->doAttack($dadakko);

$turn++;
echo PHP_EOL;
}
echo "戦闘終了！".PHP_EOL;
 