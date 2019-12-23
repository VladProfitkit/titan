<?
$bUseMap = CNext::GetFrontParametrValue('CONTACTS_USE_MAP', SITE_ID) != 'N';
$bUseFeedback = CNext::GetFrontParametrValue('CONTACTS_USE_FEEDBACK', SITE_ID) != 'N';
?>

<?CNext::ShowPageType('page_title');?>

<div class="contacts maxwidth-theme" itemscope itemtype="http://schema.org/Organization">
	<div class="row">
		<div class="<?=($bUseMap ? 'col-md-4' : 'col-md-12')?>">
			<div>
				<span itemprop="description"><?$APPLICATION->IncludeFile(SITE_DIR."include/contacts-about.php", Array(), Array("MODE" => "html", "NAME" => "Contacts about"));?></span>
			</div>
			<br />
			<br />
			<table>
				<tbody>
					<tr class="print-6">
						<td align="left" valign="top"><i class="fa big-icon fa-map-marker"></i></td><td align="left" valign="top"><span class="dark_table">Адрес</span>
							<br />
							<span itemprop="address"><?$APPLICATION->IncludeFile(SITE_DIR."include/contacts-site-address.php", Array(), Array("MODE" => "html", "NAME" => "Address"));?></span>
						</td>
					</tr>
					<tr class="print-6">
						<td align="left" valign="top"><i class="fa big-icon  fa-phone"></i></td><td align="left" valign="top"> <span class="dark_table">Телефон</span>
							<br />
							<span itemprop="telephone"><?$APPLICATION->IncludeFile(SITE_DIR."include/contacts-site-phone.php", Array(), Array("MODE" => "html", "NAME" => "Phone"));?></span>
						</td>
					</tr>
					<tr class="print-6">
						<td align="left" valign="top"><i class="fa big-icon  fa-envelope"></i></td><td align="left" valign="top"> <span class="dark_table">E-mail</span>
							<br />
							<span itemprop="email"><?$APPLICATION->IncludeFile(SITE_DIR."include/contacts-site-email.php", Array(), Array("MODE" => "html", "NAME" => "Email"));?></span>
						</td>
					</tr>
					<tr class="print-6">
						<td align="left" valign="top"><i class="fa big-icon  fa-clock-o"></i></td><td align="left" valign="top"> <span class="dark_table">Режим работы</span>
							<br />
							<?$APPLICATION->IncludeFile(SITE_DIR."include/contacts-site-schedule.php", Array(), Array("MODE" => "html", "NAME" => "Schedule"));?>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
		<?if($bUseMap):?>
			<div class="col-md-8">
				<div>
					<div>
						<?$APPLICATION->IncludeFile(SITE_DIR."include/contacts-site-map.php", Array(), Array("MODE" => "html", "TEMPLATE" => "include_area.php", "NAME" => "Карта"));?>
					</div>
				</div>
				<div>
					<div style="font-size: 30px;display: block;margin: 25px 0 13px;">Пункты выдачи СДЭК</div>
					<div>	

						<script id="ISDEKscript" type="text/javascript" src="https://www.cdek.ru/website/edostavka/template/js/widjet.js"></script>
						
					
						<div id="forpvz" style="width:100%; height:600px;"></div>
					
						<script type="text/javascript">
						    var ourWidjet = new ISDEKWidjet ({
						        defaultCity: 'Санкт-Петербург', //какой город отображается по умолчанию
						        cityFrom: 'Санкт-Петербург', // из какого города будет идти доставка
						        country: 'Россия', // можно выбрать страну, для которой отображать список ПВЗ
						        link: 'forpvz', // id элемента страницы, в который будет вписан виджет
						        path: 'https://www.cdek.ru/website/edostavka/template/scripts/', //директория с бибилиотеками
						        servicepath: 'https://titansystem.ru/service.php' //ссылка на файл service.php на вашем сайте
						    });
						</script>
					</div>
				</div>



			</div>

		<?endif;?>
	</div>
</div>
<?if($bUseFeedback):?>
	<?Bitrix\Main\Page\Frame::getInstance()->startDynamicWithID("contacts-form-block");?>
	<?global $arTheme;?>
	<?$APPLICATION->IncludeComponent("bitrix:form.result.new", "inline",
		Array(
			"WEB_FORM_ID" => "3",
			"IGNORE_CUSTOM_TEMPLATE" => "N",
			"USE_EXTENDED_ERRORS" => "Y",
			"SEF_MODE" => "N",
			"CACHE_TYPE" => "A",
			"CACHE_TIME" => "3600000",
			"LIST_URL" => "",
			"EDIT_URL" => "",
			"SUCCESS_URL" => "?send=ok",
			"SHOW_LICENCE" => $arTheme["SHOW_LICENCE"]["VALUE"],
			"HIDDEN_CAPTCHA" => CNext::GetFrontParametrValue('HIDDEN_CAPTCHA'),
			"CHAIN_ITEM_TEXT" => "",
			"CHAIN_ITEM_LINK" => "",
			"VARIABLE_ALIASES" => Array(
				"WEB_FORM_ID" => "WEB_FORM_ID",
				"RESULT_ID" => "RESULT_ID"
			)
		)
	);?>
	<?Bitrix\Main\Page\Frame::getInstance()->finishDynamicWithID("contacts-form-block", "");?>
<?endif;?>