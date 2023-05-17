<?php
require 'core/SignIn.php';

// обработка формы регистрации
if( $_SERVER['REQUEST_METHOD'] === 'POST' ){ // если форма отправлена
	list($errors, $input) = SignIn::validate_form();

	if($errors){
		SignIn::show_form($errors, $input);
	}else{
		SignIn::process_form($input);
	}
}else{
	SignIn::show_form();
}

class EnterController{

	public function actionIndex(){
    // подключаем вид с отображением главной страницы
    require ROOT . '/views/authorization/enter.php';

    return true;
}
}
?>