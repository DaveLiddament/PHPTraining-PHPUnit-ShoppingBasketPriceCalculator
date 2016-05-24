<?php

namespace Training\PHPUnit\ShoppingBasket\Repository;

use Training\PHPUnit\ShoppingBasket\Entity\Product;
use Training\PHPUnit\ShoppingBasket\PriceCalculator\ProductNotFoundException;


/**
 * Interface for finding Products by their unique code that are stored in the repository.
 * 
 */
interface ProductRepositoryInterface
{

    /**
     * Returns the Product by its unique code
     * 
     * @param string $uniqueCode
     * @return Product
     * @throws ProductNotFoundException
     */
    public function getProductByCode($uniqueCode);
}