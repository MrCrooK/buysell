<?require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle("Контакты");

?><div style="line-height:18px;">
<div>
Адрес: г. Москва, ул. Ленинградская, д. 66<br />
Телефон: 495212 85 06<br />
E-mail: sale@185.92.223.207<br />
График работы: Пон-Пятн с 8:00 до 18:00<br /><br /><br />
<p><b>Схема проезда:</b></p><?
$APPLICATION->IncludeComponent(
	"bitrix:map.yandex.view",
	".default",
	Array(
		"INIT_MAP_TYPE" => "MAP",
		"MAP_DATA" => "a:3:{s:10:\"yandex_lat\";s:7:\"55.7383\";s:10:\"yandex_lon\";s:7:\"37.5946\";s:12:\"yandex_scale\";i:10;}",
		"MAP_WIDTH" => "750",
		"MAP_HEIGHT" => "500",
		"CONTROLS" => array(0=>"ZOOM",1=>"SMALLZOOM",2=>"MINIMAP",3=>"TYPECONTROL",4=>"SCALELINE",),
		"OPTIONS" => array(0=>"ENABLE_DBLCLICK_ZOOM",1=>"ENABLE_DRAGGING",),
		"MAP_ID" => "contacts"
	)
);
?></div>
</div><?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');?>