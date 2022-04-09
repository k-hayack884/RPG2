<?php
require_once('./irasutoya/Hero.php');
require_once('./irasutoya/Enemy.php');
require_once('./irasutoya/okoruhito.php');
require_once('./irasutoya/pien.php');
require_once('./irasutoya/dadakko.php');

echo 'やったぜ'.PHP_EOL;
$parties=array();
$parties[]=new Hero("男性");
$parties[]=new Dadakko("駄々をこねる人");
$parties[]=new Okoruhito("ものすごく怒る人");
$parties[]=new Pien("ぴえんな人");

$enemies=array();
$enemies[]=new Enemy("踊る女性",20);
$enemies[]=new Enemy("スーパー日本人",40);
$enemies[]=new Enemy("鼻が高い人",10);
$turn=1;
// while ($pien->getHp()>0 && $odoru_hito->getHp()>0){
echo $turn."ターン開始！".PHP_EOL;

foreach($parties as $party){
    echo $party->getName()."のHPは".$party->getHp()."/".$party::MAX_HP."です".PHP_EOL;
}
foreach($enemies as $enemy){
    echo $enemy->getName()."のHPは".$enemy->getHp()."/".$enemy::MAX_HP."です".PHP_EOL;
}

// $man->doAttack($odoru_hito);
// $dadakko->doAttack($odoru_hito);
// $okoru_hito->doAttack($odoru_hito);
$pien->doAttackPien($odoru_hito,$pien);
// $odoru_hito->doAttack($man);
$odoru_hito->doAttack($pien);

$turn++;
echo PHP_EOL;
// }
echo "戦闘終了！".PHP_EOL;
 