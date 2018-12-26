<?php

if (!empty($_POST)) {

	$message = "Вам пришло новое сообщение с сайта: \n" . ""
	. "Имя отправителя:" . $_POST['userName']
	. " \nEmail отправителя:". $_POST['userEmail']
	. " \nСообщение отправителя:". $_POST['message'];

	$headers = "From: sparrow113@rambler.ru";
	$to="sparrow113@yandex.ru";
	$subject="Сообщение с сайта";

	$resultMail = mail("sparrow113@rambler.ru", "Сообщение с сайта", $message, $headers);
	if ( $resultMail ) {
		echo "Сообщение отправлено успешно!";
		header("Location:thankyou.html");
	} else {
		echo "Что то пошло не так. Письмо не отправлено.";
	}
}

 ?>

 <form action="index.php" method="post">
	<input type="text" name="userName" placeholder="Ваше имя" style="display: block;">
	<input type="text" name="userEmail" placeholder="Ваш Email" style="display: block;">
	<textarea name="message" id="" cols="30" rows="10" placeholder="Сообщение" style="display: block;"></textarea>
	<input type="submit" value="Send Form!">
</form>