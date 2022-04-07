<?php
class Enemy{
    const MAX_HP=100;
    public $name;
    public $hitpoint=100;
    public $attack=20;

    public function doAttack($hero)
    {
        echo "「". $this->name."の攻撃".PHP_EOL;
        echo "「". $hero->name."に".$this->attack."のダメージを与えた！".PHP_EOL;
    }
    public function tookDamage($damage)
    {
        $this->hitpoint-=$damage;
        if($this->hitpoint<0){
            $this->hitpoint=0;
        }
    }
}