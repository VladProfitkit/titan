<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<? $this->setFrameMode( true ); ?>


<?
function rus2translit($string) {
    $converter = array(
        'а' => 'a',   'б' => 'b',   'в' => 'v',
        'г' => 'g',   'д' => 'd',   'е' => 'e',
        'ё' => 'e',   'ж' => 'zh',  'з' => 'z',
        'и' => 'i',   'й' => 'y',   'к' => 'k',
        'л' => 'l',   'м' => 'm',   'н' => 'n',
        'о' => 'o',   'п' => 'p',   'р' => 'r',
        'с' => 's',   'т' => 't',   'у' => 'u',
        'ф' => 'f',   'х' => 'h',   'ц' => 'c',
        'ч' => 'ch',  'ш' => 'sh',  'щ' => 'sch',
        'ь' => '\'',  'ы' => 'y',   'ъ' => '\'',
        'э' => 'e',   'ю' => 'yu',  'я' => 'ya',
        
        'А' => 'A',   'Б' => 'B',   'В' => 'V',
        'Г' => 'G',   'Д' => 'D',   'Е' => 'E',
        'Ё' => 'E',   'Ж' => 'Zh',  'З' => 'Z',
        'И' => 'I',   'Й' => 'Y',   'К' => 'K',
        'Л' => 'L',   'М' => 'M',   'Н' => 'N',
        'О' => 'O',   'П' => 'P',   'Р' => 'R',
        'С' => 'S',   'Т' => 'T',   'У' => 'U',
        'Ф' => 'F',   'Х' => 'H',   'Ц' => 'C',
        'Ч' => 'Ch',  'Ш' => 'Sh',  'Щ' => 'Sch',
        'Ь' => '\'',  'Ы' => 'Y',   'Ъ' => '\'',
        'Э' => 'E',   'Ю' => 'Yu',  'Я' => 'Ya',
    );
    return strtr($string, $converter);
}
function str2url($str) {
    // переводим в транслит
    $str = rus2translit($str);
    // в нижний регистр
    $str = strtolower($str);
    // заменям все ненужное нам на "-"
    $str = preg_replace('~[^-a-z0-9_]+~u', '-', $str);
    // удаляем начальные и конечные '-'
    $str = trim($str, "-");
    return $str;
}
?>



<?if( !empty( $arResult ) ){
	global $arTheme;?>
 
	<div class="menu_top_block catalog_block">
		<ul class="menu dropdown">
			<?foreach( $arResult as $key => $arItem ){?>
				<li class="full <?=($arItem["CHILD"] ? "has-child" : "");?> <?=($arItem["SELECTED"] ? "current opened" : "");?> m_<?=strtolower($arTheme["MENU_POSITION"]["VALUE"]);?> v_<?=strtolower($arTheme["MENU_TYPE_VIEW"]["VALUE"]);?>">
					<a class="icons_fa <?=($arItem["CHILD"] ? "parent" : "");?>" href="<?=$arItem["SECTION_PAGE_URL"]?>" >
						<?if($arItem["IMAGES"] && $arTheme["LEFT_BLOCK_CATALOG_ICONS"]["VALUE"] == "Y"){?>
							<span class="image"><img src="<?=$arItem["IMAGES"]["src"];?>" alt="<?=$arItem["NAME"];?>" /></span>
						<?}?>
						<span class="name"><?=$arItem["NAME"]?></span>
						<div class="toggle_block"></div>
						<div class="clearfix"></div>
					</a>
					<?if($arItem["CHILD"]){?>
						<ul class="dropdown">
							<?foreach($arItem["CHILD"] as $arChildItem){?>
								<li class="<?=($arChildItem["CHILD"] ? "has-childs" : "");?> <?if($arChildItem["SELECTED"]){?> current <?}?>">
									<?/*if($arChildItem["IMAGES"] && $arTheme['SHOW_CATALOG_SECTIONS_ICONS']['VALUE'] == 'Y' && $arTheme["MENU_TYPE_VIEW"]["VALUE"] !== 'BOTTOM'){?>
										<span class="image"><a href="<?=$arChildItem["SECTION_PAGE_URL"];?>"><img src="<?=$arChildItem["IMAGES"]["src"];?>" alt="<?=$arChildItem["NAME"];?>" /></a></span>
									<?}*/?>
									<a class="section" href="<?=$arChildItem["SECTION_PAGE_URL"];?>"><span><?=$arChildItem["NAME"];?></span></a>
									<?if($arChildItem["CHILD"]){?>
										<ul class="dropdown">
											<?foreach($arChildItem["CHILD"] as $arChildItem1){?>
												<li class="menu_item <?if($arChildItem1["SELECTED"]){?> current <?}?>">
													<a class="parent1 section1" href="<?=$arChildItem1["SECTION_PAGE_URL"];?>"><span><?=$arChildItem1["NAME"];?></span></a>
												</li>
											<?}?>
										</ul>
									<?}?>
									<div class="clearfix"></div>
								</li>
							<?}?>
							
							
							<li class="block-brands-menu">
								<div class="hr"></div>
								<span class="title">Бренды</span>
								<ul>
									<?
									$arrBrand = array();
									CModule::IncludeModule('iblock');
									$arFilter = array('IBLOCK_ID' => 23, 'LEFT_MARGIN' => $arItem['LEFT_MARGIN'], 'RIGHT_MARGIN' => $arItem['RIGHT_MARGIN']);
									$rsSections = CIBlockSection::GetList(array('LEFT_MARGIN' => 'ASC'), $arFilter);
									while ($arSection = $rsSections->Fetch())
									{		  
									    $arSelect = Array("ID", "NAME", "PROPERTY_BRAND", "DATE_ACTIVE_FROM");
									    $arFilter = Array("IBLOCK_ID"=>IntVal(23),"SECTION_ID" => $arSection["ID"], "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y");
									    $res = CIBlockElement::GetList(Array(), $arFilter, false, Array("nPageSize"=>50), $arSelect);
									    while($ob = $res->GetNextElement())
									    {
									   		$arFields = $ob->GetFields();
									    	$arrBrand[$arFields['PROPERTY_BRAND_VALUE']] = $arFields['PROPERTY_BRAND_VALUE'];
									    }									    
									}

									/*echo '<pre>'; 
									print_r($arrBrand);
									echo '</pre>';*/
									
									
									?>
									

									<?$arSelect = Array("ID", "NAME", "DATE_ACTIVE_FROM");
									$arFilter = Array("IBLOCK_ID"=>IntVal(12),"ID"=>$arrBrand, "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y");
									$res = CIBlockElement::GetList(Array(), $arFilter, false, Array("nPageSize"=>50), $arSelect);
									while($ob = $res->GetNextElement())
									{
									 $arFields = $ob->GetFields();?>
									 <li>
									 	<a href="<?=$arItem["SECTION_PAGE_URL"]?>filter/brand-is-<?=str2url($arFields['NAME'])?>/apply/"><?=$arFields['NAME'];?></a>
									 </li>
									<?}?>
									
								</ul>
							</li>

						</ul>
					<?}?>
				</li>
			<?}?>
		</ul>
	</div>
<?}?>