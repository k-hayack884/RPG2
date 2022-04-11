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

    public function doAttackPien($enemies,$menbers)
    {
        if(!$this->isEnableAttack($enemies)){
            return false;
        }
         

        if(rand(1,2)===1){
            $menber=$this->selectTarget($menbers);
            echo "「ぴえん」".PHP_EOL;
            echo "「". $menber->getName()."は".$this->special."のダメージを回復した！」".PHP_EOL;
        $menber->recoverDamage($this->special,$menber);
        }else{
            parent::doAttack($enemies);
        }
        return true;

    }
    public function getSpecial()
    {
        return $this->special;
    }
}