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
    public function doAttack($enemies)
    {
        if ($this->getHp()<= 0) {
            return false;
        }
        $enemyIndex = rand(0, count($enemies) - 1); // 添字は0から始まるので、-1する
        $enemy = $enemies[$enemyIndex];
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