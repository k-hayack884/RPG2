<?php

function isFinish($objects)
{
    $deathCount=0;
    foreach ($objects as $object) {
        if ($object->getHp() > 0) {
            return false;
        }
        $deathCount++;
    } 
    if ($deathCount === count($objects)) {
        return true;
    }
}