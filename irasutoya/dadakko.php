<?php

class Dadakko extends Hero
{
    const MAX_HP=80;
    public function doAttack($enemy)
    {
        
        if(rand(1,3)===1){
            echo "「". $this->name."は駄々をこねている」".PHP_EOL;
            echo "「". $enemy->name."に".($this::MAX_HP-$this->hitpoint)."のダメージを与えた！」".PHP_EOL;
        $enemy->tookDamage($this::MAX_HP-$this->hitpoint);
        }else{
            parent::doAttack($enemy);
        }
        return true;
    }
}