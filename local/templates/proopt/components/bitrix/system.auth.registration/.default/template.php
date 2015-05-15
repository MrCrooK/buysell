<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?_c($_POST)?>
<?_c($arResult)?>
<div class="pcontent">
	<div class="right">
	<?
			ShowMessage($arParams['~AUTH_RESULT']);
			
			if($arResult['USE_EMAIL_CONFIRMATION']==='Y' && is_array($arParams['AUTH_RESULT']) &&  $arParams['AUTH_RESULT']['TYPE']==='OK')
			{
				ShowMessage( GetMessage('AUTH_EMAIL_SENT') );
			}
			
			if($arResult['USE_EMAIL_CONFIRMATION']==='Y')
			{
				//ShowMessage( GetMessage('AUTH_EMAIL_WILL_BE_SENT') );
			}
	?>
	</div>
	<div class="someform register clearfix<?if($arResult['SECURE_AUTH']):?> secure<?endif;?>">
		<form enctype="multipart/form-data" method="post" action="<?=$arResult['AUTH_URL']?>" name="bform" >
			<?
			if(strlen($arResult['BACKURL'])>0)
			{
				?><input type="hidden" name="backurl" value="<?=$arResult['BACKURL']?>" /><?
			}
			?><input type="hidden" name="AUTH_FORM" value="Y" /><?
			?><input type="hidden" name="TYPE" value="REGISTRATION" />

			<div class="line clearfix">
				<b>Я регистрируюсь как</b>
			</div>		
			<div class="line clearfix">
				<select type="text" name="UF_POST_BUY" maxlength="50" />
					<option value="0" <?if($_POST['UF_POST_BUY']==0) echo "selected"?>>Покупатель</option>
					<option value="1" <?if($_POST['UF_POST_BUY']==1) echo "selected"?>>Поставщик</option>
				</select>
			</div>			
			<div class="line clearfix">
				<b>Основные сведения</b>
			</div>		
			<div class="line clearfix">
				<input type="text" name="UF_INN" maxlength="50" value="<?=$_POST['UF_INN']?>" placeholder="ИНН *" />
			</div>
			<div class="line clearfix">
				<input type="text" name="UF_KPP" maxlength="50" value="<?=$_POST['UF_KPP']?>" placeholder="КПП *" />
			</div>
			<div class="line clearfix">
				<input type="text" name="UF_OGRN" maxlength="50" value="<?=$_POST['UF_OGRN']?>" placeholder="ОГРН *" />
			</div>
			<div class="line clearfix">
				<input type="text" name="UF_NAME" maxlength="50" value="<?=$_POST['UF_NAME']?>" placeholder="Полное наименование *" />
			</div>
			<div class="line clearfix">
				<input type="text" name="UF_SHORTNAME" maxlength="50" value="<?=$_POST['UF_SHORTNAME']?>" placeholder="Сокращенное наименование *" />
			</div>
			<div class="line clearfix">
				<b>Юридический адрес / Место нахождения </b>
			</div>	
			<div class="line clearfix">
			<?
				$APPLICATION->IncludeComponent(
					'bitrix:sale.ajax.locations',
					'mycity',
					array(
						'AJAX_CALL' => 'N',
						'COUNTRY_INPUT_NAME' => 'UF_CITY',
						'REGION_INPUT_NAME' => 'REGION_tmp',
						'CITY_INPUT_NAME' => $arParams['CITY_ID'],
						'CITY_OUT_LOCATION' => 'Y',
						'LOCATION_VALUE' => $arResult['LOCATION']['ID'],
						'ONCITYCHANGE' => '',
					),
					null,
					array('HIDE_ICONS' => 'Y')
				);
			?>
			</div>
			<div class="line clearfix">
				<input type="text" name="UF_INDEX" maxlength="50" value="<?=$_POST['UF_INDEX']?>" placeholder="Индекс *" />
			</div>
			<div class="line clearfix">
				<input type="text" name="UF_STREET" maxlength="50" value="<?=$_POST['UF_STREET']?>" placeholder="Улица *" />
			</div>
			<div class="line clearfix">
				<input type="text" name="UF_HOME" maxlength="50" value="<?=$_POST['UF_HOME']?>" placeholder="Дом *" />
			</div>
			<div class="line clearfix">
				<input type="text" name="UF_FLOAT" maxlength="50" value="<?=$_POST['UF_FLOAT']?>" placeholder="Офис (квартира)" />
			</div>
			<div class="line clearfix">
				<b>Фактический адрес / Почтовый адрес </b>
			</div>	
			<div class="line clearfix">
			<?
			$APPLICATION->IncludeComponent(
				"bitrix:sale.location.selector.steps",
				"regform",
				Array(
					"ID" => $_POST['UF_REALCITY'],
					"INPUT_NAME" => "UF_REALCITY",
				)
			);
			?>
			</div>			
			<div class="line clearfix">
				<input type="text" name="UF_REALINDEX" maxlength="50" value="<?=$_POST['UF_REALINDEX']?>" placeholder="Индекс *" />
			</div>
			<div class="line clearfix">
				<input type="text" name="UF_REALSTREET" maxlength="50" value="<?=$_POST['UF_REALSTREET']?>" placeholder="Улица *" />
			</div>
			<div class="line clearfix">
				<input type="text" name="UF_REALHOME" maxlength="50" value="<?=$_POST['UF_REALHOME']?>" placeholder="Дом *" />
			</div>
			<div class="line clearfix">
				<input type="text" name="UF_REALFLOAT" maxlength="50" value="<?=$_POST['UF_REALFLOAT']?>" placeholder="Офис (квартира)" />
			</div>			
			<div class="line clearfix">
				<b>Банковские реквизиты</b>
			</div>
			<div class="line clearfix">
				<input type="text" name="UF_RASCH" maxlength="50" value="<?=$_POST['UF_RASCH']?>" placeholder="Расчетный счет *" />
			</div>
			<div class="line clearfix">
				<input type="text" name="UF_LIC" maxlength="50" value="<?=$_POST['UF_LIC']?>" placeholder="Лицевой счет" />
			</div>			
			<div class="line clearfix">
				<input type="text" name="UF_KOR" maxlength="50" value="<?=$_POST['UF_KOR']?>" placeholder="Корреспондентский счет" />
			</div>
			<div class="line clearfix">
				<input type="text" name="UF_BIK" maxlength="50" value="<?=$_POST['UF_BIK']?>" placeholder="БИК *" />
			</div>
			<div class="line clearfix">
				<input type="text" name="UF_NAMEBANK" maxlength="50" value="<?=$_POST['UF_NAMEBANK']?>" placeholder="Название банка *" />
			</div>
			<div class="line clearfix">
				<input type="text" name="UF_ADRBANK" maxlength="50" value="<?=$_POST['UF_ADRBANK']?>" placeholder="Адрес банка" />
			</div>
			<div class="line clearfix">
				<b>Документы</b>
			</div>
			<div class="line clearfix arfiles">
				<div class="docs">
					<i class="icon pngicons pdf"></i>
					<span class="name">Копия выписки из ЕГРЮЛ *</span>
					<span class="description"></span><span class="size">(допускаются файлы, размером до 5 МБ)</span>
				</div>
				<input type="file" name="UF_EGRUL" maxlength="50" value="" id="UF_EGRUL" />
			</div>
			<div class="line clearfix arfiles">
				<div class="docs">
					<i class="icon pngicons pdf"></i>
					<span class="name">Копия учредительных документов *</span>
					<span class="description"></span><span class="size">(допускаются файлы, размером до 5 МБ)</span>
				</div>
				<input type="file" name="UF_UCHRED" maxlength="50" value="" id="UF_UCHRED" />
			</div>
			<div class="line clearfix arfiles">
				<div class="docs">
					<i class="icon pngicons pdf"></i>
					<span class="name">Копии документов, подтверждающих полномочия лица, подписавшего заявление *</span>
					<span class="description"></span><span class="size">(допускаются файлы, размером до 5 МБ)</span>
				</div>
				<input type="file" name="UF_POLPERSON" maxlength="50" value="" id="UF_POLPERSON" />
			</div>
			<div class="line clearfix arfiles">
				<div class="docs">
					<i class="icon pngicons pdf"></i>
					<span class="name">Копии документов, подтверждающих полномочия руководителя *</span>
					<span class="description"></span><span class="size">(допускаются файлы, размером до 5 МБ)</span>
				</div>
				<input type="file" name="UF_POLRUKOV" maxlength="50" value="" id="UF_POLRUKOV" />
			</div>			
			<div class="line clearfix">
				<b>Идентификационные данные</b>
			</div>			
			<div class="line clearfix">
				<input type="text" name="USER_LOGIN" maxlength="50" value="<?=$arResult['USER_LOGIN']?>" placeholder="Логин (имя доступа) в систему *" />
			</div>	
			<div class="line clearfix">
				<input type="text" name="USER_EMAIL" maxlength="255" value="<?=$arResult['USER_EMAIL']?>" placeholder="E-mail *" />
			</div>			
			<div class="line clearfix">
				<input type="text" name="UF_PHONE" maxlength="50" value="<?=$_POST['UF_PHONE']?>" class="phone" placeholder="Телефон *" />
			</div>		
			<div class="line password clearfix">
				<input class="text" type="password" name="USER_PASSWORD" maxlength="50" value="<?=$arResult['USER_PASSWORD']?>" placeholder="Пароль *" />
			</div>
			<?
			if($arResult['SECURE_AUTH'])
			{
				?><div class="line"><?
					?><noscript><?
					ShowError( GetMessage('AUTH_NONSECURE_NOTE') );
					?></noscript><?
				?></div><?
			}
			?>
			<div class="line clearfix">
				<input type="password" name="USER_CONFIRM_PASSWORD" maxlength="50" value="<?=$arResult['USER_CONFIRM_PASSWORD']?>" placeholder="Повторить ввод пароля *" />
			</div>
			<?
			// CAPTCHA
			if($arResult['USE_CAPTCHA']=='Y')
			{
				?><div class="line captcha clearfix"><?
					?><input type="hidden" name="captcha_sid" value="<?=$arResult['CAPTCHA_CODE']?>" /><?
					?><img src="/bitrix/tools/captcha.php?captcha_sid=<?=$arResult['CAPTCHA_CODE']?>" width="180" height="40" alt="CAPTCHA" /><?
					?><input class="text" type="text" name="captcha_word" maxlength="50" value="" placeholder="<?=GetMessage('CAPTCHA_REGF_PROMT')?>*" /><?
				?></div><?
			}
			// /CAPTCHA
			
			?>
			<div class="line buttons clearfix">
				<input class="btn btn1" type="submit" name="Register" value="<?=GetMessage('AUTH_REGISTER')?>" />
			</div>		
			<div class="line notes clearfix">
				<div>* <?=GetMessage('AUTH_REQ')?></div>
				<div><a href="<?=$arResult['AUTH_AUTH_URL']?>" rel="nofollow"><?=GetMessage('AUTH_AUTH')?></a></div>
			</div>
			<script>
				$('.arfiles input').change(function(){ $(this).parent(".arfiles").find(".docs>.size").text($(this).val()); });
			</script>
		</form>
	</div>
</div>