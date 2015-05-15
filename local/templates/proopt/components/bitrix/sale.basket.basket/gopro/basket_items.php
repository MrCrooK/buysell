<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$normalCount = IntVal( count($arResult['ITEMS']['AnDelCanBuy']) );

?><?=ShowError($arResult['ERROR_MESSAGE']);?><?

if( $arResult['HAVE_PRODUCT_TYPE']['ITEMS'] )
{
	?><div class="part items clearfix"><?

		ShowTable($arParams,$arResult);

		?><div class="btns clearfix"><?
			if($arParams['HIDE_COUPON']!='Y')
			{
				?><div class="coupon"><?
					$couponClass = "";
					if(array_key_exists('COUPON_VALID',$arResult))
					{
						$couponClass = ($arResult['COUPON_VALID']=='Y')?'good':'bad';
					} elseif (array_key_exists('COUPON',$arResult) && strlen($arResult['COUPON'])>0)
					{
						$couponClass = "good";
					}
					?><input class="cop <?=$couponClass?>" type="text" id="coupon" name="COUPON" value="<?=$arResult["COUPON"]?>" placeholder="<?=GetMessage('STB_COUPON_PROMT')?>" /><?
					?><input class="btn btn3" type="submit" name="BasketRefresh" value="<?=GetMessage('SALE_ACCEPT')?>" /><?
				?></div><?
			}
			?><span class="totaltext"><?
				?><span class="name"><?=GetMessage('SALE_EC_HEADER_LINK_PRODS')?>:</span>&nbsp;<span class="take_normalCount"><?=$normalCount?></span> <?
				?>&nbsp;<span class="name"><?=GetMessage('SALE_SUM')?>:</span>&nbsp;<span class="take_allSum_FORMATED"><?=$arResult['allSum_FORMATED']?></span><?
			?></span><?
			?><div class="clear"></div><?
			?><input class="btn btn3 clearitems" type="button" name="BasketRefresh" value="<?=GetMessage('SALE_BTN_DEL_ALL')?>" /><?
			?><input class="btn btn3 clearsolo" type="button" name="BasketRefresh" value="<?=GetMessage('SALE_DELETE')?>" /><?
			?><span class="separator"></span><?
			?><input class="btn btn1" type="submit" name="BasketOrder" value="<?=GetMessage('SALE_ORDER')?>" onclick="location.href='<?=$arParams['PATH_TO_ORDER']?>';return false;" /><?
		?></div><?

	?></div><?
}