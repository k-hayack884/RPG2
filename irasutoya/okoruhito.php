<?php

class Okoruhito extends Hero
{
    const MAX_HP=100;
    public $hitpoint = self::MAX_HP;
    public $charge=false;
    private $attack = 50;
    public function __construct($name)
    {
       parent::__construct($name,$this->hitpoint,$this->attack);
    }
    public function doAttack($enemy)
    {
        if($this->charge===false){
            echo "「ああああああああああああ!!」".PHP_EOL;
            echo "「". $this->getName()."はものすごく怒っている！！」".PHP_EOL;
            $this->charge=true;
        }else{
            echo "「くぁwせdrftgyふじこlp!!」".PHP_EOL;
            echo "「". $enemy->getName()."に".($this->attack)."のダメージを与えた！」".PHP_EOL;
            $enemy->tookDamage($this->attack);
            $this->charge=false;
        }
        return true;
    }
}