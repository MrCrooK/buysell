<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

if( !CModule::IncludeModule('iblock') )
	return;

$arResult['SECTIONS'] = array();

if ($arResult['PROPERTIES'][$arParams['SECTIONS_CODE']]['VALUE'] && is_array($arResult['PROPERTIES'][$arParams['SECTIONS_CODE']]['VALUE'])) {
	foreach($arResult['PROPERTIES'][$arParams['SECTIONS_CODE']]['VALUE'] as $sect){
		$arResult['SECTIONS'][] = $sect;
	}
}
elseif($arResult['PROPERTIES'][$arParams['SECTIONS_CODE']]['VALUE']){
	$arResult['SECTIONS'][] = $arResult['PROPERTIES'][$arParams['SECTIONS_CODE']]['VALUE'];
}

if( $arParams['SECTIONS_CODE']!='' && is_array($arResult['SECTIONS']) && count($arResult['PROPERTIES'][$arParams['SECTIONS_CODE']]['VALUE'])>0)
{
	$SEC_ID = $arResult['SECTIONS'][0];
	if( IntVal($SEC_ID)>0 )
	{
		$res = CIBlockSection::GetByID($SEC_ID);
		if($arFileds = $res->GetNext())
		{
			$arResult['SECOND_IBLOCK_ID'] = $arFileds['IBLOCK_ID'];
		}
	}
}

if( ($arParams['CATALOG_IBLOCK_ID'])>0 && $arParams['CATALOG_BRAND_CODE']!='' )
{
	$propRes = CIBlockProperty::GetList(array('SORT'=>'ASC','ID'=>'DESC'),array('ACTIVE'=>'Y','IBLOCK_ID'=>$arParams['CATALOG_IBLOCK_ID'],'CODE'=>$arParams['CATALOG_BRAND_CODE']));
	if($arFields = $propRes->GetNext())
	{
		$arResult['PROP'] = $arFields;
	}
}