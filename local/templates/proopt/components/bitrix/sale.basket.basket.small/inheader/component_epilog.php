<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$arrIDs = array();
if(is_array($arResult["ITEMS"]) && count($arResult["ITEMS"])>0)
{
	foreach($arResult["ITEMS"] as $arItem)
	{
		$arrIDs[$arItem["PRODUCT_ID"]] = "Y";
	}
	?><script>RSGoPro_INBASKET = <?=json_encode($arrIDs)?>;</script><?
}