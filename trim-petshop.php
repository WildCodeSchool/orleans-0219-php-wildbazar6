<?php

function trimArray(array $inputArray) :array
{
    foreach ($inputArray as $key=>$value){
        $data[$key] = trim($value);
    }
    return $data;
}