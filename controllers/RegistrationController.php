<?php
require 'core/SignUp.php';

// обработка формы регистрации
if( $_SERVER['REQUEST_METHOD'] === 'POST' ){ // если форма отправлена
	list($errors, $input) = SignUp::validate_form();

	if($errors){
		SignUp::show_form($errors, $input);
	}else{
		SignUp::process_form($input);
	}
}else{
	SignUp::show_form();
}

class RegistrationController {


	
	public function actionIndex(){
		// подключаем вид с отображением главной страницы
		require ROOT . '/views/authorization/registration.php';

		return true;
	}

}
?>