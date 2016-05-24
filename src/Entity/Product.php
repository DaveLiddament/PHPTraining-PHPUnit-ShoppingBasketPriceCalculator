<?php

namespace Training\PHPUnit\ShoppingBasket\Entity;


/**
 * Holds information about a single product.
 *
 * Each product has:
 *
 * - a unique code (e.g. A125426)
 * - a name (e.g. Chicken and Bacon Sandwich)
 * - a price in pence
 * - traits
 */
class Product
{

    /**
     * @var string
     */
    private $uniqueCode;

    /**
     * @var string
     */
    private $name;

    /**
     * @var int
     */
    private $price;

    /**
     * @var ProductTrait[]
     */
    private $traits;

    
    /**
     * Product constructor
     * 
     * @param string $uniqueCode
     * @param string $name
     * @param int $price
     * @param ProductTrait[] $traits
     */
    public function __construct($uniqueCode, $name, $price, array $traits)
    {
        $this->uniqueCode = $uniqueCode;
        $this->name = $name;
        $this->price = $price;
        $this->traits = $traits;
    }

    /**
     * @return string
     */
    public function getUniqueCode()
    {
        return $this->uniqueCode;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @return ProductTrait[]
     */
    public function getTraits()
    {
        return $this->traits;
    }
    
}