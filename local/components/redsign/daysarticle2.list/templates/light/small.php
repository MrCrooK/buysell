<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<? $this->setFrameMode(true); ?>
		<!-- third view -->
<?if(count($arResult["ITEMS"])>0):?>
	<?foreach($arResult["ITEMS"] as $key => $arItem):?>
		<? if (isset($arItem['OFFERS']) && !empty($arItem['OFFERS'])) { 
			$element = $arItem['OFFERS'][0];
		 } else {
			$element = $arItem;
		 } 
		 if (isset($arItem['OFFERS'][0]['DAYSARTICLE2']) && !empty($arItem['OFFERS'][0]['DAYSARTICLE2'])) { 
			$timer = $arItem['OFFERS'][0]['DAYSARTICLE2'];
		 } else {
			$timer = $arItem['DAYSARTICLE2'];
		 } ?>
		<div class="daysarticle light_wrap view3" id="<?=$element['ID']?>">
			<div class="title">
				<h4><?=GetMessage("DA2_BLOCK_TITLE")?></h4>
				<a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><?=$arItem["NAME"]?></a>
			</div>

				<?if($arItem["PREVIEW_PICTURE"]["SRC"]!=""):?>
					<a class="img_wrap" href="<?=$arItem["DETAIL_PAGE_URL"]?>">
						<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" border="" alt="" />
					</a>
				<?elseif($arItem["DETAIL_PICTURE"]["SRC"]!=""):?>
					<a class="img_wrap" href="<?=$arItem["DETAIL_PAGE_URL"]?>">
						<img src="<?=$arItem["DETAIL_PICTURE"]["SRC"]?>" border="" alt="" />
					</a>
				<?endif;?>

			<div class="time_wrap">
				<span><?=GetMessage("DA2_TIME")?></span>
				<? if ($timer["TIMER"]["DAYS"]==0) { ?>
					<div class="digits" data-dateto="<? echo strtotime($timer['DATE_TO']); ?>">
						<div class="digit" id="hours"><span class="number js-hours" data-time=""></span><div class="digit_outter"></div></div>
						<div class="digit" id="minutes"><span class="number js-minutes" data-time=""></span><div class="digit_outter"></div></div>
						<div class="digit" id="seconds"><span class="number js-seconds" data-time=""></span><div class="digit_outter"></div></div>
						<div class="digit progress"><span class="number"><?=$timer["DINAMICA_EX"]["PHP_DATA"]["persent"]?></span><div class="digit_outter"></div></div>
					</div>
					<div class="digit_titles">
						<span class="digit_title"><?=GetMessage("DA2_TIME_HOUR")?></span>
						<span class="digit_title"><?=GetMessage("DA2_TIME_MIN")?></span>
						<span class="digit_title"><?=GetMessage("DA2_TIME_SEC")?></span>
						<span class="digit_title percent">%</span>
					</div>
				<? } else { ?>
					<div class="digits" data-dateto="<? echo strtotime($timer['DATE_TO']); ?>">
						<div class="digit" id="days"><span class="number js-days" data-time=""></span><div class="digit_outter"></div></div>
						<div class="digit" id="hours"><span class="number js-hours" data-time=""></span><div class="digit_outter"></div></div>
						<div class="digit" id="minutes"><span class="number js-minutes" data-time=""></span><div class="digit_outter"></div></div>
						<div class="digit progress"><span class="number"><?=$timer["DINAMICA_EX"]["PHP_DATA"]["persent"]?></span><div class="digit_outter"></div></div>
					</div>
					<div class="digit_titles">
						<span class="digit_title"><?=GetMessage("DA2_TIME_DAY")?></span>
						<span class="digit_title"><?=GetMessage("DA2_TIME_HOUR")?></span>
						<span class="digit_title"><?=GetMessage("DA2_TIME_MIN")?></span>
						<span class="digit_title percent">%</span>
					</div>
				<? } ?>
				<div class="progress_bar">
					<div class="progress" style="width: <?=$timer["DINAMICA_EX"]["PHP_DATA"]["persent"]?>%;"></div>
				</div>
			</div>
			<div class="prices_wrap">
				<span class="price"><?=$element["PRICES"][$arParams["PRICE_CODE"]]["PRINT_VALUE"]?></span>
				<span class="discount_price"><?=$element["PRICES"][$arParams["PRICE_CODE"]]["PRINT_DISCOUNT_VALUE"]?></span>
				<span class="discount"><?=GetMessage("DISCOUNT_VALUE")?> <span><?=$timer["DISCOUNT_FORMATED"]?></span></span>
				<div class="triangle"></div>
			</div>
		</div>
		<!-- /third view -->
	    <script>
	    	$(document).ready(function() {
	    		$(".circle").knob();
	    	});
	    </script>
	<? endforeach; ?>
<? endif; ?>