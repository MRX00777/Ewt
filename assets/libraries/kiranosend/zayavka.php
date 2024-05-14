<?php


$webSite = 'Заявки с сайта KIRANO'; // Указываем название сайта
$name = $_POST['name'];
$phone = $_POST['tel'];
$info = "Внедрение";

$token = "1195077988:AAGYUpfLUgHDNIBjWXNH8dYCCc2XSXizq7k";
$chatId = "-1001516483369"; // chatId - группы "Правки по сайтам - KIRANO"

$arr = [
	'Новая заявка с сайта: ' => $webSite,
	'Имя: ' => $name,
	'Телефон: ' => $phone,
	'Заявка на: ' => $info,
];




$message = '';

foreach ($arr as $key => $value) {
	$message .= "<b>" . $key . "</b> " . $value . "%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chatId}&parse_mode=html&text={$message}", "r");

if ($sendToTelegram) {
	header('Location: ./success.php');
} else {
	header('Location: ./error.php');
}
