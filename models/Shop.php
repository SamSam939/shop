<?php 
/**
 * Class Shop
 * модель для работы с товаром
 */
class Shop
{
/**
 * Получение списка 
 */


    public static function getShopCategory($sectionId){
        $pdo = DBConnect::getConnection();

        $query = "SELECT furniture_id, furniture_name, discription, furniture_img, section_id 
        FROM furniture
        WHERE section_id = $sectionId";
    
        return $pdo->query($query)->fetchAll();
    }

    public static function getProductsByFurnName($furnitureName){
        $pdo = DBConnect::getConnection();

        $query = "SELECT *
        FROM product
        INNER JOIN  furniture  ON product.prod_id = furniture.furniture_id
        WHERE furniture.furniture_name = '$furnitureName'";
    
        return $pdo->query($query)->fetchAll();

    }

    public static function getItem($productId){
        $pdo = DBConnect::getConnection();
        $query = "SELECT *
        FROM product
        WHERE product_id = $productId";

        return $pdo->query($query)->fetchAll();
    }
    
}