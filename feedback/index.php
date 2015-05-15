<?$IS_AJAX = false;
if( isset($_SERVER['HTTP_X_REQUESTED_WITH']) || $_REQUEST['AJAX_CALL']=='Y' ){
	require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
	$IS_AJAX = true;
}
else{
	require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
	$APPLICATION->SetTitle("Обратная связь");
}
?>

<?$APPLICATION->IncludeComponent("bitrix:main.feedback", "gopro", array(
		"USE_CAPTCHA" => "Y",
		"OK_TEXT" => "Ваше сообщение успешно отправлено!",
		"EMAIL_TO" => "sale@185.92.223.207",
		"REQUIRED_FIELDS" => array(
		),
		"EVENT_MESSAGE_ID" => array(
		),
		"AJAX_MODE" => "Y",
		"AJAX_OPTION_JUMP" => "N",
	),
	false
);?>

<?if(!$IS_AJAX):?>
<?require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');?>
<?endif;?>