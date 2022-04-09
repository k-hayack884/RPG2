<?php
class Enemy extends Work{
    const MAX_HP=100;

    public function __construct($name,$hitPoint=100,$attack=20,$special=20)
    {
        parent::__construct($name, $hitPoint, $attack, $special);
    }

    // public function doAttack($heros)
    // {
    //     if ($this->getHp()<= 0) {
    //         return false;
    //     }
    //     $heroIndex = rand(0, count($heros) - 1); 
    //     $hero = $heros[$heroIndex];

    //     echo "「". $this->getName()."の攻撃」".PHP_EOL;
    //     echo "「". $hero->getName()."に".$this->attack."のダメージを与えた！」".PHP_EOL;
    //     $hero->tookDamage($this->attack);
    //     return true;
    // }
    // public function tookDamage($damage)
    // {
    //     $this->hitpoint-=$damage;
    //     if($this->hitpoint<0){
    //         echo $this->getName()."は倒れた".PHP_EOL;
    //         $this->hitpoint=0;
    //     }
    // }
    // public function getName()
    // {
    //    return $this->name;
    // }
    // // public function setName($name)
    // // {
    // //    $this->name=$name;
    // // }
    // public function getHp()
    // {
    //    return $this->hitpoint;
    // }
    // public function getAttack()
    // {
    //     return $this->attack;
    // }
}