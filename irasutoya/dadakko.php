<?php

class Dadakko extends Hero
{
    const MAX_HP=80;
    public $hitpoint = self::MAX_HP;
    private $attack = 20;
    public function __construct($name)
    {
       parent::__construct($name,$this->hitpoint,$this->attack);
    }
    public function doAttack($enemy)
    {
        
        if(rand(1,3)===1){
            echo "「". $this->getName()."は駄々をこねている」".PHP_EOL;
            echo "「". $enemy->getName()."に".(self::MAX_HP-$this->getHp())."のダメージを与えた！」".PHP_EOL;
        $enemy->tookDamage(self::MAX_HP-$this->getHp());
        }else{
            parent::doAttack($enemy);
        }
        return true;
    }
}