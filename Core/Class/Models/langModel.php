<?php

class langModel{
    public String $lang;
 

public function __construct(int $index){
    $oui=['English','French','German','Spanish','Italian'];
    $this->lang = $oui[$index];

}

}