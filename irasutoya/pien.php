<?php
class Pien extends Hero{
    const MAX_HP=100;
    private $hitpoint=self::MAX_HP;
    private $attack=10;
    private $special=30;

    public function __construct($name)
    {
       parent::__construct($name,$this->hitpoint,$this->attack);
    }

    public function doAttackPien($enemy,$hero)
    {
        if(rand(1,2)===1){
            echo "「ぴえん」".PHP_EOL;
            echo "「". $hero->getName()."は".$this->special."のダメージを回復した！」".PHP_EOL;
        $hero->recoverDamage($this->special,$hero);
        }else{
            parent::doAttack($enemy);
        }
        return true;

    }
    public function getSpecial()
    {
        return $this->special;
    }
}