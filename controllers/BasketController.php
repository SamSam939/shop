<?php
/**
 * Class BasketsController
 * класс для работы с корзиной
 */

class BasketController
{

	/**
	 * метод отображения страницы корзиной
	 */
	public function actionIndex(){
		// подключаем вид с отображением страницы с корзиной
		require ROOT . '/views/basket.php';

		return true;
	}
}
