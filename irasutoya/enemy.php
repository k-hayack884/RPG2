<?php
class Enemy{
    const MAX_HP=100;
    private $name;
    private $hitpoint=100;
    private $attack=20;
    public function __construct($name,$attack)
    {
       $this->name=$name;
       $this->attack=$attack;
    }

    public function doAttack($hero)
    {
        echo "「". $this->getName()."の攻撃」".PHP_EOL;
        echo "「". $hero->getName()."に".$this->attack."のダメージを与えた！」".PHP_EOL;
        $hero->tookDamage($this->attack);
    }
    public function tookDamage($damage)
    {
        $this->hitpoint-=$damage;
        if($this->hitpoint<0){
            $this->hitpoint=0;
        }
    }
    public function getName()
    {
       return $this->name;
    }
    // public function setName($name)
    // {
    //    $this->name=$name;
    // }
    public function getHp()
    {
       return $this->hitpoint;
    }
    public function getAttack()
    {
        return $this->attack;
    }
}