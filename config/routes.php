<?php

return [
	'exit'=> 'exit/index',
	'enter'=> 'enter/index',
	'registration'=> 'registration/index',
	'basket' => 'basket/index', // страница с корзиной
	'item/([0-9]+)' => 'shop/itemCard/$1', // просмотр оного товара 
	'shop/([a-z]+)/([a-z]+)' => 'shop/subCategory/$1/$2', // страница просмотра подкатегории
	'shop/([a-z]+)' => 'shop/category/$1', // страница просмотра товара по категории
	'' => 'index/index' // главная страница
];


