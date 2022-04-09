<?php
class Message{
    public function displayStatusMessage($objects)
    {
        foreach($objects as $object){
            echo $object->getName()."のHPは".$object->getHp()."/".$object::MAX_HP."です".PHP_EOL;
        }
    }
    public function displayAttackMessage($objects,$targets)
    {
        foreach($objects as $object){
            if(get_class($object)==="Pien"){
                $object->doAttackPien($targets,$objects); 
               }else{
            $object->doAttack($targets);
               }
        }
    }
}