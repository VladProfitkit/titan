<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();?>
<?$this->setFrameMode(true);?>
<?
global $arTheme;
$iVisibleItemsMenu = ($arTheme['MAX_VISIBLE_ITEMS_MENU']['VALUE'] ? $arTheme['MAX_VISIBLE_ITEMS_MENU']['VALUE'] : 10);
?>
<?if($arResult):?>
	<div class="table-menu">
		<table>
			<tr>
				<?foreach($arResult as $arItem):?>
					<?$bShowChilds = $arParams["MAX_LEVEL"] > 1;
					$bWideMenu = $arItem["PARAMS"]['FROM_IBLOCK'];?>
					<td class="menu-item unvisible <?=($arItem["CHILD"] ? "dropdown" : "")?> <?=($bWideMenu ? 'wide_menu' : '');?> <?=(isset($arItem["PARAMS"]["CLASS"]) ? $arItem["PARAMS"]["CLASS"] : "");?>  <?=($arItem["SELECTED"] ? "active" : "")?>">
						<div class="wrap">
							<a class="<?=($arItem["CHILD"] && $bShowChilds ? "dropdown-toggle" : "")?>" href="<?=$arItem["LINK"]?>">
								<div>
									<?=$arItem["TEXT"]?>
									<div class="line-wrapper"><span class="line"></span></div>
								</div>
							</a>
							<?if($arItem["CHILD"] && $bShowChilds):?>
								<span class="tail"></span>
								<div class="dropdown-menu-new ">
									<div class="compact-block row">  <!-- k --> 
									<?foreach($arItem["CHILD"] as $arSubItem):?>
										<?$bShowChilds = $arParams["MAX_LEVEL"] > 2;?>
										<?$bHasPicture = (isset($arSubItem['PARAMS']['PICTURE']) && $arSubItem['PARAMS']['PICTURE'] && $arTheme['SHOW_CATALOG_SECTIONS_ICONS']['VALUE'] == 'Y');?>
										<div class="compact-element col-md-4 <?=($arSubItem["SELECTED"] ? "active" : "")?>">
											<?if($bHasPicture && $bWideMenu):
												$arImg = CFile::ResizeImageGet($arSubItem['PARAMS']['PICTURE'], array('width' => 60, 'height' => 60), BX_RESIZE_PROPORTIONAL_ALT);
												if(is_array($arImg)):?>
													<div class="menu_img"><img src="<?=$arImg["src"]?>" alt="<?=$arSubItem["TEXT"]?>" title="<?=$arSubItem["TEXT"]?>" /></div>
												<?endif;?>
											<?endif;?>
											<div class="block-child">
											<a href="<?=$arSubItem["LINK"]?>" title="<?=$arSubItem["TEXT"]?>"><span class="name"><?=$arSubItem["TEXT"]?></span><?=($arSubItem["CHILD"] && $bShowChilds ? '<span class="arrow"><i></i></span>' : '')?></a>


											<?$arSort = array();?>

											<?if($arSubItem["CHILD"] && $bShowChilds):?>
												<?$iCountChilds = count($arSubItem["CHILD"]);?>
												
													<?foreach($arSubItem["CHILD"] as $key => $arSubSubItem):?>
														<?//$bShowChilds = $arParams["MAX_LEVEL"] > 3;?>
														<?if($arSubSubItem["PARAMS"]["UF_MENU_SORT"])
														{
															$arSort[$arSubSubItem["PARAMS"]["UF_MENU_SORT"]][] = $arSubSubItem;
														}
														else
														{
															$arSort["ALL"][] = $arSubSubItem;
														}?>
														
													<?endforeach;?>
													<?$keysort = array_keys($arSort);?>
													

													<?if($arSort["По монтажу"])
													{?>
														<div>
															<span class="title">По монтажу</span>
														<?foreach ($arSort["По монтажу"] as $key => $value) {?>
															<div class="<?=($value["SELECTED"] ? "active" : "")?>">
																<a href="<?=$value["LINK"]?>" title="<?=$value["TEXT"]?>"><span class="name"><?=$value["TEXT"]?></span></a>
																<!-- 1 -->
															</div>	
														<?}?>
														</div>
													<?}?>
													<?if($arSort["По управлению"])
													{?>
														<div>
															<span class="title">По управлению</span>
														<?foreach ($arSort["По управлению"] as $key => $value) {?>
															<div class="<?=($value["SELECTED"] ? "active" : "")?>">
																<a href="<?=$value["LINK"]?>" title="<?=$value["TEXT"]?>"><span class="name"><?=$value["TEXT"]?></span></a>
																<!-- 1 -->
															</div>	
														<?}?>
														</div>
													<?}?>

													<?if($arSort["Тип"])
													{?>
														<div>
															<span class="title">Тип</span>
														<?foreach ($arSort["Тип"] as $key => $value) {?>
															<div class="<?=($value["SELECTED"] ? "active" : "")?>">
																<a href="<?=$value["LINK"]?>" title="<?=$value["TEXT"]?>"><span class="name"><?=$value["TEXT"]?></span></a>
																<!-- 1 -->
															</div>	
														<?}?>
														</div>
													<?}?>

													<?if($arSort["Души и прочее"])
													{?>
														<div>
															<span class="title">Души и прочее</span>
														<?foreach ($arSort["Души и прочее"] as $key => $value) {?>
															<div class="<?=($value["SELECTED"] ? "active" : "")?>">
																<a href="<?=$value["LINK"]?>" title="<?=$value["TEXT"]?>"><span class="name"><?=$value["TEXT"]?></span></a>
																<!-- 1 -->
															</div>	
														<?}?>
														</div>
													<?}?>


													<?foreach ($keysort as $key => $value) {
														if($value == "ALL" || $value == "По монтажу" || $value == "По управлению" || $value == "Тип" || $value == "Души и прочее")
															continue;?>

														<?if($arSort[$value])
														{?>
															<div>
																<span class="title"><?=$value?></span>
															<?foreach ($arSort[$value] as $key => $value) {?>
															
																<div class="<?=($value["SELECTED"] ? "active" : "")?>">
																	<a href="<?=$value["LINK"]?>" title="<?=$value["TEXT"]?>"><span class="name"><?=$value["TEXT"]?></span></a>
																</div>	
															<?}?>
															</div>
														<?}?>
														
													<?}?>
													
													

													<?foreach ($arSort["ALL"] as $key => $value) {?>
														<div class="<?=($value["SELECTED"] ? "active" : "")?>">
															<a href="<?=$value["LINK"]?>" title="<?=$value["TEXT"]?>"><span class="name"><?=$value["TEXT"]?></span></a>
															<!-- 1 -->
														</div>		
													<?}?>
													
												<!-- 2 -->
												
											<?endif;?>




												


											</div>
										</div>
									<?endforeach;?>
									</div>
									
								</div>
							<?endif;?>
						</div>
					</td>
				<?endforeach;?>

				<td class="menu-item dropdown js-dropdown nosave unvisible">
					<div class="wrap">
						<a class="dropdown-toggle more-items" href="#">
							<span><?=\Bitrix\Main\Localization\Loc::getMessage("S_MORE_ITEMS");?></span>
						</a>
						<span class="tail"></span>
						<ul class="dropdown-menu"></ul>
					</div>
				</td>

			</tr>
		</table>
	</div>
<?endif;?>

<!-- 1 -->
<?/*if($arSubSubItem["CHILD"] && $bShowChilds):?>
	<div class="dropdown-menu">
		<?foreach($arSubSubItem["CHILD"] as $arSubSubSubItem):?>
			<div class="<?=($arSubSubSubItem["SELECTED"] ? "active" : "")?>">
				<a href="<?=$arSubSubSubItem["LINK"]?>" title="<?=$arSubSubSubItem["TEXT"]?>"><span class="name"><?=$arSubSubSubItem["TEXT"]?></span></a>
			</div>
		<?endforeach;?>
	</div>

<?endif;*/?>

<!-- 2 -->
<?/*if($iCountChilds > $iVisibleItemsMenu && $bWideMenu):?>
	<li><span class="colored more_items with_dropdown"><?=\Bitrix\Main\Localization\Loc::getMessage("S_MORE_ITEMS");?></span></li>
<?endif;*/?>