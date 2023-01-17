<?php

class Garden
{
  private $apples;
  private $pears;

  public function __construct($applesQuantity = 10, $pearsQuantity = 15)
  {
    $this->apples = $this->generate('Apple', $applesQuantity);
    $this->pears = $this->generate('Pear', $pearsQuantity);
  }

  private function generate($type, $quantity)
  {
    static $id = 1;
    $fruits = [];

    foreach (range(1, $quantity) as $i) {
      $fruit = new $type;
      $fruit->setId($id++);
      array_push($fruits, $fruit);
    }

    return $fruits;
  }

  public function getProducts()
  {
    $applesCount = 0;
    $pearsCount = 0;
    $applesWeight = 0;
    $pearsWeight = 0;

    foreach ($this->apples as $apple) {
      $applesCount += $apple->getQuantity();
    }

    foreach ($this->pears as $pear) {
      $pearsCount += $pear->getQuantity();
    }

    $products = [
      'apple' => [
        'quantity' => $applesCount,
      ],
      'pear' => [
        'quantity' => $pearsCount,
      ]
    ];

    return $products;
  }
}
