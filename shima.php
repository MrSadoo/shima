<?php

function shima($name)
{
  $ends = array('ا', 'و');
  $lastLetter = mb_substr($name, -1, 1, "UTF-8");
  if(in_array($lastLetter, $ends)) {
    $name .= 'ی';
  }
  return $name;
}
