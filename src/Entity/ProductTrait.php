<?php

namespace Training\PHPUnit\ShoppingBasket\Entity;

/**
 * A product trait provides information about what the product actually is.
 *
 * Examples include:
 * - HOME_BRAND_PIZZA
 * - MEAL_DEAL_MAIN
 * - MEAL_DEAL_DRINK
 *
 * Products can have many traits.
 *
 */
class ProductTrait
{

    /**
     * @var string
     */
    private $traitName;


    /**
     * ProductTrait constructor.
     * @param string $traitName
     */
    public function __construct($traitName)
    {
        $this->traitName = $traitName;
    }


    /**
     * @return string
     */
    public function getTraitName()
    {
        return $this->traitName;
    }

}