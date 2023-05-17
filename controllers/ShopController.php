<?php
/**
 * Class ShopController
 * контроллер для обработки запросов по работе с новостями
 */
require ROOT . '/models/Shop.php';
class ShopController
{
	private $categories = [
		'livingroom' => 1,
		'bedroom' => 2,
		'kitchen' => 3,
		'playroom' => 4,
	];
	/**
	 * метод отображения списка продуктов - главной страницы работы с продуктом
	 */
    public function actionIndex(){
        echo 'Список продуктов';

		return true;
    }


	public function actionItemCard($itemID){
		$item = Shop::getItem($itemID);
		require ROOT . '/views/shop/item.php';
		return true;
	}

	public function actionSubCategory($category, $furnitureName){
		$shopSubCategory = Shop::getProductsByFurnName($furnitureName);
		require ROOT . '/views/shop/subCategory.php';
		return true;
	}

    /**
	 * метод для отображения одного продукта по id
	 */

	public function actionView($id){
		echo 'Товар по id ' . $id;

		// получение продуктов из бд по указанному id
		// работа с данным продуктом
		// формирование вывода продукта на страницу

		return true;
	}

	/**
	 * метод для отображения списка продуктов по категории
	 */
	public function actionCategory($category){
		
			// получаем данные из БД
		
		$shopCategory = Shop::getShopCategory($this->categories[$category]);
		require ROOT . '/views/shop/category.php';
		return true;
	}


}