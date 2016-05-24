<?php

namespace Training\PHPUnit\ShoppingBasket\PriceCalculator;


/**
 * This calculates the total price of the contents of a shopping basket. 
 *
 * To use first add each product in turn (using addProduct).
 * Then call the getPrice method to get the total prices. 
 */
class ShoppingBasketPriceCalculator
{

    /**
     * Add a product via its unique code.
     * 
     * @param $productUniqueCode
     * @throws ProductNotFoundException
     */
    public function addProduct($productUniqueCode)
    {
        // TODO add implementation
    }


    /**
     * Returns the total price of the shopping basket (in pence)
     * 
     * @return int price in pence of shopping basket
     */
    public function getPrice()
    {
        // TODO add implementation
    }
}