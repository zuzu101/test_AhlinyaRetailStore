<?php

namespace App\Helpers;

class ProductImageHelper
{
    /**
     * Get the appropriate image for a product based on its name
     *
     * @param string $productName
     * @return string
     */
    public static function getProductImage($productName)
    {
        // Convert to lowercase for case-insensitive matching
        $productLower = strtolower($productName);
        
        // Check if product contains "indomie" and "ayam goreng"
        if (str_contains($productLower, 'indomie') && str_contains($productLower, 'ayam goreng')) {
            return asset('images/indomie.jpg');
        }
        
        // For all other products, use placeholder
        return asset('images/placeholder.jpg');
    }
    
    /**
     * Get alt text for product image
     *
     * @param string $productName
     * @return string
     */
    public static function getAltText($productName)
    {
        $productLower = strtolower($productName);
        
        if (str_contains($productLower, 'indomie') && str_contains($productLower, 'ayam goreng')) {
            return 'Indomie Ayam Goreng';
        }
        
        return 'Gambar Produk';
    }
}
