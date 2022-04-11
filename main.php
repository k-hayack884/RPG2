<?php
 
require_once('./irasutoya/work.php');
require_once('./irasutoya/message.php');
require_once('./irasutoya/Hero.php');
require_once('./irasutoya/Enemy.php');
require_once('./irasutoya/okoruhito.php');
require_once('./irasutoya/pien.php');
require_once('./irasutoya/dadakko.php');

$messageObject = new Message;
$parties=array();
$parties[]=new Hero("男性");
$parties[]=new Dadakko("駄々をこねる人");
$parties[]=new Okoruhito("ものすごく怒る人");
$parties[]=new Pien("ぴえんな人");

$enemies=array();
$enemies[]=new Enemy("踊る女性",100,20);
$enemies[]=new Enemy("スーパー日本人",100,40);
$enemies[]=new Enemy("鼻が高い人",100,10);
$turn=1;

$finishFlag=false;
function isFinish($objects)
{
    $deathCount=0;
    foreach ($objects as $object) {
        if ($object->getHp() > 0) {
            return false;
        }
        $deathCount++;
    } 
    if ($deathCount === count($objects)) {
        return true;
    }
}

while (!$finishFlag){
echo $turn."ターン開始！".PHP_EOL;
$messageObject->displayStatusMessage($parties);
$messageObject->displayStatusMessage($enemies);
echo PHP_EOL;
$messageObject->displayAttackMessage($parties,$enemies);
$messageObject->displayAttackMessage($enemies,$parties);

$finishFlag = isFinish($parties);
if ($finishFlag) {
    $message = "パーティが全滅した ....".PHP_EOL;
    break;
}

$finishFlag = isFinish($enemies);
if ($finishFlag) {
    $message = "いらすとやの群れをやっつけた！".PHP_EOL;;
    break;
}


$turn++;
echo PHP_EOL;
}

echo $message;
echo "戦闘終了！".PHP_EOL;
echo PHP_EOL;
$messageObject->displayStatusMessage($parties);
$messageObject->displayStatusMessage($enemies);

