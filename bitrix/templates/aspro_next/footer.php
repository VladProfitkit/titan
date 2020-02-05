						<?CNext::checkRestartBuffer();?>
						<?IncludeTemplateLangFile(__FILE__);?>
							<?if(!$isIndex):?>
								<?if($isBlog):?>
									</div> <?// class=col-md-9 col-sm-9 col-xs-8 content-md?>
									<div class="col-md-3 col-sm-3 hidden-xs hidden-sm right-menu-md">
										<div class="sidearea">
											<?$APPLICATION->ShowViewContent('under_sidebar_content');?>
											<?CNext::get_banners_position('SIDE', 'Y');?>
											<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "sect", "AREA_FILE_SUFFIX" => "sidebar", "AREA_FILE_RECURSIVE" => "Y"), false);?>
										</div>
									</div>
								</div><?endif;?>
								<?if($isHideLeftBlock):?>
									</div> <?// .maxwidth-theme?>
								<?endif;?>
								</div> <?// .container?>
							<?else:?>
								<?CNext::ShowPageType('indexblocks');?>
							<?endif;?>
							<?CNext::get_banners_position('CONTENT_BOTTOM');?>
						</div> <?// .middle?>
					<?//if(!$isHideLeftBlock && !$isBlog):?>
					<?if(($isIndex && $isShowIndexLeftBlock) || (!$isIndex && !$isHideLeftBlock) && !$isBlog):?>
						</div> <?// .right_block?>				
						<?if($APPLICATION->GetProperty("HIDE_LEFT_BLOCK") != "Y" && !defined("ERROR_404")):?>
							<div class="left_block">
								<?CNext::ShowPageType('left_block');?>
							</div>
						<?endif;?>
					<?endif;?>
				<?if($isIndex):?>
					</div>
				<?elseif(!$isWidePage):?>
					</div> <?// .wrapper_inner?>				
				<?endif;?>
			</div> <?// #content?>
			<?CNext::get_banners_position('FOOTER');?>
		</div><?// .wrapper?>
		<footer id="footer">
			<?if($APPLICATION->GetProperty("viewed_show") == "Y" || $is404):?>
				<?$APPLICATION->IncludeComponent(
					"bitrix:main.include", 
					"basket", 
					array(
						"COMPONENT_TEMPLATE" => "basket",
						"PATH" => SITE_DIR."include/footer/comp_viewed.php",
						"AREA_FILE_SHOW" => "file",
						"AREA_FILE_SUFFIX" => "",
						"AREA_FILE_RECURSIVE" => "Y",
						"EDIT_TEMPLATE" => "standard.php",
						"PRICE_CODE" => array(
							0 => "BASE",
						),
						"STORES" => array(
							0 => "",
							1 => "",
						),
						"BIG_DATA_RCM_TYPE" => "bestsell"
					),
					false
				);?>					
			<?endif;?>
			<?CNext::ShowPageType('footer');?>
		</footer>
		<div class="bx_areas">
			<?CNext::ShowPageType('bottom_counter');?>
		</div>
		<?CNext::ShowPageType('search_title_component');?>
		<?CNext::setFooterTitle();
		CNext::showFooterBasket();?>
		<script src="<?php echo SITE_TEMPLATE_PATH ?>/js/masonry.pkgd.min.js"></script>
		


		<script>
			$('.dropdown-toggle').hover(function() {
				$(".compact-block").masonry({
				  itemSelector: ".compact-element",
				  columnWidth: ".compact-element"
				});
			}, function() {
				/* Stuff to do when the mouse leaves the element */
			});
		
		</script>
	

		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-78894850-44"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'UA-78894850-44');
		</script>


		<div class="popup new_modal" id="modal_form"><!-- Сaмo oкнo --> 
		    <div class="form">
		         <a href="#" id="modal_close" class="close jqmClose"><i></i></a>
		      <div class="form_head"><h2>Условия доставки</h2></div>
		        <div class="modal_body">        
																																						<p>
						 Наш интернет-магазин предлагает несколько вариантов доставки:
					</p>
					<ul>
						<li>курьерская доставка<br>
					 </li>
						<li>самовывоз из магазина<br>
					 </li>
						<li>доставка в регионы<br>
					 </li>
					</ul>
					<h3>Курьерская доставка по Санкт-Петербургу и Ленинградской области<br>
					 </h3>
					<p>
						 Вы можете заказать доставку товара с помощью курьера, который прибудет по указанному адресу в будние дни и субботу с 9.00 до 19.00. Курьерская служба свяжется с вами и предложит выбрать удобное время доставки.
					</p>
					<p>
						 Стоимость доставки в пределах КАД - 500 рублей.<br>
					</p>
					<p>
						 Доставка <b>БЕСПЛАТНАЯ</b> при заказе от 20000 рублей.
					</p>
					<p>
						 Доставка по Ленинградской области составляет 500 рублей, плюс расстояние до места по тарифу 30 рублей/километр.
					</p>
					<h3>Самовывоз из магазина</h3>
					<p>
						 Самовывоз товара осуществляется по адресу: шоссе Революции, 69 В, офис 419 ( Б/Ц Азимут).<br>
						 Перед забором товара обязательно уточните готовность Вашего заказа по телефону.
					</p>
					<h3>Доставка в регионы<br>
					 </h3>
					 Доставка в регионы осуществляется при 100% предоплате заказанного товара. Доставка до терминала ТК оплачивается согласно прейскуранту на доставку.<br>
					 Стоимость доставки в регионы зависит от выбранного Вами товара и транспортной компании.<br>
					<h3>Получение товар</h3>
					<p>
						 При получении товара проверьте комплектности заказанного товара и отсутствии видимых дефектов.
					</p>
					<p>
						 При наличии претензий к внешнему виду и комплектности товара Вы в праве отказаться от товара.
					</p>
					 При доставке вам будут переданы все необходимые документы на покупку: товарный, кассовый чеки, а также гарантийный талон. <br>
					 При оформлении покупки на организацию, вам будут переданы счет-фактура и накладная, в которой необходимо поставить печать вашей организации или предоставить оригинальную доверенность на получение товара. <br>
					 Цена, указанная в переданных Вам курьером документах, является окончательной, курьер не обладает правом корректировки цены. Стоимость доставки выделяется в документах отдельной графой.
					<p>
					</p>
					<p>
					</p>
					<blockquote>
						 В случае возврата товара надлежащего качества покупатель обязан произвести оплату за доставку товара.<br>
					</blockquote>
					 В случае вопросов, пожеланий и претензий обращайтесь к нам по следующим координатам:<br>
					 Служба доставки: +7 (812) 372-60-50<br>
					 Электронная почта:&nbsp;<a href="mailto:info@titansystem.ru">info@titansystem.ru</a>


		        </div>
		    </div>
		</div>
		
		<div class="popup new_modal" id="modal_form_1"><!-- Сaмo oкнo --> 
		    <div class="form">
		         <a href="#" id="modal_close" class="close jqmClose"><i></i></a>
		      <div class="form_head"><h2>Условия оплаты</h2></div>
		        <div class="modal_body">         
					<?$APPLICATION->IncludeComponent(
						"bitrix:main.include", 
						".default", 
						array(
							"AREA_FILE_SHOW" => "file",
							"PATH" => SITE_DIR."include/payment.php",
							"EDIT_TEMPLATE" => "",
							"COMPONENT_TEMPLATE" => ".default",
							"COMPOSITE_FRAME_MODE" => "A",
							"COMPOSITE_FRAME_TYPE" => "AUTO"
						),
						false
					);?>						

		        </div>
		    </div>
		</div>
		
		<div id="overlay"></div><!-- Пoдлoжкa -->
        <?
            use Bitrix\Main\Page\Asset;
            Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/components/bitrix/catalog.bigdata.products/main_new/script.js");
        ?>
<!--        <script src="/bitrix/templates/aspro_next/components/bitrix/catalog.bigdata.products/main_new/script.js"></script>-->
	</body>
</html>