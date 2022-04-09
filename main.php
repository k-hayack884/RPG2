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

$finishFlag=false;
while (!$finishFlag){
echo $turn."ターン開始！".PHP_EOL;

foreach($parties as $party){
    echo $party->getName()."のHPは".$party->getHp()."/".$party::MAX_HP."です".PHP_EOL;
}
foreach($enemies as $enemy){
    echo $enemy->getName()."のHPは".$enemy->getHp()."/".$enemy::MAX_HP."です".PHP_EOL;
}

foreach($parties as $party){
    $enemyIndex=rand(0,count($enemies)-1);
    $enemy=$enemies[$enemyIndex];
if(get_class($party)==="Pien"){
 $party->doAttackPien($enemy,$party); 
}else{
    $party->doAttack($enemy);
}
}
foreach($enemies as $enemy){
    $partyIndex=rand(0,count($parties)-1);
    $party=$parties[$partyIndex];

    $enemy->doAttack($party);
}
$deathCount = 0; 
foreach ($parties as $party) {
    if ($party->getHp() > 0) {
        $finishFlag = false;
        echo $party->getName()."は倒れた".PHP_EOL;
        break;
    }
    $deathCount++;
}
if ($deathCount === count($parties)) {
    $finishFlag = true;
    echo "パーティが全滅しました".PHP_EOL;
    break;
}

$deathCount = 0; 
foreach ($enemies as $enemy) {
    if ($enemy->getHp() > 0) {
        $finishFlag = false;
        echo $enemy->getName()."は倒れた".PHP_EOL;
        break;
    }
    $deathCount++;
}
if ($deathCount === count($enemies)) {
    $finishFlag = true;
    echo "いらすとやの群れをやっつけた！".PHP_EOL;
    break;
}

$turn++;
echo PHP_EOL;
}
echo "戦闘終了！".PHP_EOL;
echo PHP_EOL;
foreach($parties as $party){
    echo $party->getName()."のHPは".$party->getHp()."/".$party::MAX_HP."です".PHP_EOL;
}
foreach($enemies as $enemy){
    echo $enemy->getName()."のHPは".$enemy->getHp()."/".$enemy::MAX_HP."です".PHP_EOL;
}
 