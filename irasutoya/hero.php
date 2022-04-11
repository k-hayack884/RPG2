<?php
class Hero extends Work{
    const MAX_HP=100;
    public function __construct($name,$hitPoint=100,$attack=20,$special=20)
    {
      parent::__construct($name,$hitPoint,$attack,$special);
    }

    // public function doAttack($enemies)
    // {
    //     if ($this->getHp()<= 0) {
    //         return false;
    //     }

    //     $enemyIndex = rand(0, count($enemies) - 1); // 添字は0から始まるので、-1する
    //     $enemy = $enemies[$enemyIndex];

    //     echo "「". $this->getName()."の攻撃」".PHP_EOL;
    //     echo "「". $enemy->getName()."に".$this->attack."のダメージを与えた！」".PHP_EOL;
    //     $enemy->tookDamage($this->attack);

    // }
    // public function tookDamage($damage)
    // {
    //     $this->hitpoint-=$damage;
    //     if($this->hitpoint<0){
    //         echo $this->getName()."は倒れた".PHP_EOL;
    //         $this->hitpoint=0;
            
    //     }
    // }
    // public function recoverDamage($heal,$target)
    // {
    //     $this->hitpoint+=$heal;
    //     if($this->hitpoint>$target::MAX_HP){
    //         $this->hitpoint=$target::MAX_HP;
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