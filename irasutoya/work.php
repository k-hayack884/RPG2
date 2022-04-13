<?php
class Work{
    private $name; 
    private $hitPoint;
    private $attack;
    private $special;
    public function __construct($name,$hitPoint=100,$attack=20,$special=20)
    {
        $this->name=$name;
        $this->hitPoint=$hitPoint;
        $this->attack=$attack;
        $this->special=$special;
    }

    public function getName()
    {
        return $this->name;
    }
    public function getHp()
    {
        $HP=$this->hitPoint;
       if($HP<0){
           $HP=0;
       }
       return $HP;
    }
    public function tookDamage($damage)
    {
        $this->hitPoint-=$damage;
        if($this->hitPoint<0){
            echo $this->getName()."は倒れた".PHP_EOL;
            $this->hitPoint=0;
            
        }
    }
    public function recoverDamage($heal,$target)
    {
        $this->hitPoint+=$heal;
        if($this->hitPoint>$target::MAX_HP){
            $this->hitPoint=$target::MAX_HP;
        }
    }

    public function doAttack($targets)
    {
       if(!$this->isEnableAttack($targets)){
           return false;
       }
        $target=$this->selectTarget($targets);
        echo "「". $this->getName()."の攻撃」".PHP_EOL;
        echo "「". $target->getName()."に".$this->attack."のダメージを与えた！」".PHP_EOL;
        $target->tookDamage($this->attack);
       return true;
        

    }

    public function isEnableAttack($targets)
    {
        if($this->hitPoint<=0){
            return false;
        }

        foreach($targets as $target){
            if($target->getHp()>0){
                return true;
            }
        }
    }

    public function selectTarget($targets)
    {
        $target = $targets[rand(0, count($targets) - 1)]; 
        while($target->getHp()<=0){
            $target = $targets[rand(0, count($targets) - 1)]; 
        }
        return $target;
    }
}
