<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
IncludeTemplateLangFile(__FILE__);
				?></div><?
			?></div><?
		?></div><!-- /content --><?
	?></div><!-- /body --><?
	// scripts
	?><script type="text/javascript">RSGoPro_SetSet();</script><?
	?><div id="footer" class="footer"><!-- footer --><?
		?><div class="centering"><?
			?><div class="centeringin line1 clearfix"><?
				?><div class="block one"><?
					?><div class="logo"><?
						?><a href="<?=SITE_DIR?>"><?
							$APPLICATION->IncludeFile(
								SITE_TEMPLATE_PATH."/include_areas/footer_logo.php",
								Array(),
								Array("MODE"=>"html")
							);
						?></a><?
					?></div><?
					?><div class="contacts clearfix"><?
						?><div class="phone1"><?
							?><a class="fancyajax fancybox.ajax recall" href="/recall/" title="<?=GetMessage('RSGOPRO.RECALL')?>"><i class="icon pngicons"></i><?=GetMessage('RSGOPRO.RECALL')?></a><?
							?><div class="phone"><?
								$APPLICATION->IncludeFile(
									SITE_TEMPLATE_PATH."/include_areas/footer_phone1.php",
									Array(),
									Array("MODE"=>"html")
								);
							?></div><?
						?></div><?
						?><div class="phone2"><?
							?><a class="fancyajax fancybox.ajax feedback" href="/feedback/" title="<?=GetMessage('RSGOPRO.FEEDBACK')?>"><i class="icon pngicons"></i><?=GetMessage('RSGOPRO.FEEDBACK')?></a><?
							?><div class="phone"><?
								$APPLICATION->IncludeFile(
									SITE_TEMPLATE_PATH."/include_areas/footer_phone2.php",
									Array(),
									Array("MODE"=>"html")
								);
							?></div><?
						?></div><?
					?></div><?
				?></div><?
				?><div class="block two"><?
				$APPLICATION->IncludeComponent(
					"bitrix:menu",
					"infootercatalog",
					array(
						"ROOT_MENU_TYPE" => "footercatalog",
						"MENU_CACHE_TYPE" => "A",
						"MENU_CACHE_TIME" => "3600",
						"MENU_CACHE_USE_GROUPS" => "Y",
						"MENU_CACHE_GET_VARS" => array(
						),
						"MAX_LEVEL" => "1",
						"CHILD_MENU_TYPE" => "",
						"USE_EXT" => "Y",
						"DELAY" => "N",
						"ALLOW_MULTI_SELECT" => "N",
						"BLOCK_TITLE" => "Товары",
						"LVL1_COUNT" => "6",
						"LVL2_COUNT" => "4",
						"ELLIPSIS_NAMES" => "Y"
					),
					false
				);
				?></div><?
				?><div class="block three"><?
					$APPLICATION->IncludeComponent(
						"bitrix:menu",
						"infooter",
						Array(
							"ROOT_MENU_TYPE" => "footer",
							"MAX_LEVEL" => "1",
							"CHILD_MENU_TYPE" => "",
							"USE_EXT" => "N",
							"MENU_CACHE_TYPE" => "A",
							"MENU_CACHE_TIME" => "3600",
							"MENU_CACHE_USE_GROUPS" => "Y",
							"MENU_CACHE_GET_VARS" => array(),
							"BLOCK_TITLE" => "Дополнительно",
						)
					);
				?></div><?
				?><div class="block four"><?
					?><div class="sovservice"><?
						$APPLICATION->IncludeFile(
							SITE_TEMPLATE_PATH."/include_areas/footer_socservice.php",
							Array(),
							Array("MODE"=>"html")
						);
					?></div><?
					?><div class="subscribe"><?
						$APPLICATION->IncludeComponent(
							"bitrix:subscribe.form",
							"footer",
							array(
								"USE_PERSONALIZATION" => "Y",
								"SHOW_HIDDEN" => "N",
								"PAGE" => "/personal/subscribe/",
								"CACHE_TYPE" => "A",
								"CACHE_TIME" => "36000000",
							),
							false
						);
					?></div><?
				?></div><?
			?></div><?
		?></div><?

		?><div class="line2"><?
			?><div class="centering"><?
				?><div class="centeringin clearfix"><?
					?><div class="sitecopy"><?
						$APPLICATION->IncludeFile(
							SITE_TEMPLATE_PATH."/include_areas/footer_sitecopy.php",
							Array(),
							Array("MODE"=>"html")
						);
					?></div><?
					?><div class="developercopy"><?
						/****************************************************************************************/
						/* Удаление ссылки на разработчика является грубым нарушением лицензионного соглашения и может являться причиной отказа в оказании технической поддержки. */
						/****************************************************************************************/
						?>
						<!--Powered by <a href="http://redsign.ru/" target="_blank">ALFA Systems</a>-->
						<!--LiveInternet counter--><script type="text/javascript">document.write("<a href='//www.liveinternet.ru/click' target=_blank><img src='//counter.yadro.ru/hit?t54.2;r" + escape(document.referrer) + ((typeof(screen)=="undefined")?"":";s"+screen.width+"*"+screen.height+"*"+(screen.colorDepth?screen.colorDepth:screen.pixelDepth)) + ";u" + escape(document.URL) +";h"+escape(document.title.substring(0,80)) +  ";" + Math.random() + "' border=0 width=88 height=31 alt='' title='LiveInternet: показано число просмотров и посетителей за 24 часа'><\/a>")</script><!--/LiveInternet-->
						<?
					?></div><?
				?></div><?
			?></div><?
		?></div><?
	?></div><!-- /footer --><?
	?><div id="fixedcomparelist"><?
		$APPLICATION->IncludeComponent(
			"bitrix:catalog.compare.list",
			"session",
			array(
				"IBLOCK_TYPE" => "catalog",
				"IBLOCK_ID" => "1",
				"NAME" => "CATALOG_COMPARE_LIST",
			),
			false
		);
	?></div><?
	$APPLICATION->IncludeComponent(
		"redsign:easycart",
		"gopro",
		array(
			"USE_VIEWED" => "Y",
			"USE_COMPARE" => "Y",
			"USE_BASKET" => "Y",
			"USE_FAVORITE" => "Y",
			"VIEWED_COUNT" => "10",
			"FAVORITE_COUNT" => "10",
			"COMPARE_NAME" => "CATALOG_COMPARE_LIST",
			"TEMPLATE_THEME" => "orange",
			"Z_INDEX" => "991",
			"MAX_WIDTH" => "1240",
			"USE_ONLINE_CONSUL" => "Y",
			"ONLINE_CONSUL_LINK" => "#",
			"INCLUDE_JQUERY" => "N",
			"INCLUDE_JQUERY_COOKIE" => "N",
			"INCLUDE_JQUERY_STICKY" => "N",
			"ADD_BODY_PADDING" => "Y",
			"ON_UNIVERSAL_AJAX_HANDLER" => "Y",
			"UNIVERSAL_AJAX_FINDER" => "action=ADD2BASKET",
			"COMPARE_IBLOCK_TYPE" => "catalog",
			"COMPARE_IBLOCK_ID" => "1",
			"COMPARE_RESULT_PATH" => "/catalog/compare/",
			"UNIVERSAL_AJAX_FINDER_COMPARE" => "action=ADD_TO_COMPARE_LIST",
			"UNIVERSAL_AJAX_FINDER_BASKET" => "action=ADD2BASKET",
			"UNIVERSAL_AJAX_FINDER_FAVORITE" => "action=add2favorite",
			"UNIVERSAL_AJAX_FINDER_COMPARE_ADD" => "action=ADD_TO_COMPARE_LIST",
			"UNIVERSAL_AJAX_FINDER_COMPARE_REMOVE" => "action=DELETE_FROM_COMPARE_LIST"
		),
		false
	);
	?><div style="display:none;">AlfaSystems GoPro GP261D21</div><?
?></body><?
?></html>