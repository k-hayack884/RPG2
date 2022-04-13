<?php
 
 require_once('lib/Loader.php');
 require_once('lib/Utility.php');
 // オートロード
 $loader = new Loader();
 // classesフォルダの中身をロード対象ディレクトリとして登録
 $loader->registerDirectory(__DIR__ . '/irasutoya');
 $loader->registerDirectory(__DIR__ . '/irasutoya/const');
 $loader->register();


// require_once('./irasutoya/Hero.php');
// require_once('./irasutoya/Enemy.php');
// require_once('./irasutoya/okoruhito.php');
// require_once('./irasutoya/pien.php');
// require_once('./irasutoya/dadakko.php');

$messageObject = new Message;
$parties=array();
$parties[]=new Hero(CharacterName::MAN);
$parties[]=new Dadakko(CharacterName::DADAKKKO);
$parties[]=new Okoruhito(CharacterName::OKORUHITO);
$parties[]=new Pien(CharacterName::PIEN);

$enemies=array();
$enemies[]=new Enemy(EnemyName::ODORUHITO,100,20);
$enemies[]=new Enemy(EnemyName::SUPERNIHONZIN,100,40);
$enemies[]=new Enemy(EnemyName::HANAGATAKAIHITO,100,10);
$turn=1;

$finishFlag=false;


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

