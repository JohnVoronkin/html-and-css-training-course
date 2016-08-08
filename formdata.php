<?php 


$result = mail("test@test.ru","Анкета сайта","Контактная информация пользователя: \nФИО - $_POST[name] $_POST[lastName] \nПароль - $_POST[password] \nЛюбите ли Вы экономить время? - $_POST[time] \nСообщение пользователя - $_POST[messages]");


if($result) {
	echo "<p>Сообщение отправлено успешно</p>";
} else {
	echo "<p>Сообщение НЕ отправлено</p>";
}



?>