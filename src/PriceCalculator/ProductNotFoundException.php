<?php

namespace Training\PHPUnit\ShoppingBasket\PriceCalculator;

/**
 * Thrown if the product can not be found
 */
class ProductNotFoundException extends \Exception
{

    /**
     * @var string
     */
    private $uniqueCode;

    /**
     * Construct with the unique code of the product that could not be found.
     *
     * @param string $uniqueCode
     */
    public function __construct($uniqueCode)
    {
        parent::__construct("Can not find product with code [$uniqueCode]");
        $this->uniqueCode = $uniqueCode;
    }

    /**
     * @return string
     */
    public function getUniqueCode()
    {
        return $this->uniqueCode;
    }

}