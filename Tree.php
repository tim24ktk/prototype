<?php

abstract class Tree
{
  protected $id;
  protected $min;
  protected $max;


  public function getQuantity()
  {
    return rand($this->min, $this->max);
  }

  public function setId($id)
  {
    $this->id = $id;
  }
}
