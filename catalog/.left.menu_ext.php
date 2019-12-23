<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
$aMenuLinksExt = array();

if($arMenuParametrs = CNext::GetDirMenuParametrs(__DIR__))
{
	if($arMenuParametrs['MENU_SHOW_SECTIONS'] == 'Y')
	{
		$catalog_id = \Bitrix\Main\Config\Option::get('aspro.next', 'CATALOG_IBLOCK_ID', CNextCache::$arIBlocks[SITE_ID]['aspro_next_catalog']['aspro_next_catalog'][0]);
		$arSections = CNextCache::CIBlockSection_GetList(array('SORT' => 'ASC', 'ID' => 'ASC', 'CACHE' => array('TAG' => CNextCache::GetIBlockCacheTag($catalog_id), 'MULTI' => 'Y')), array('IBLOCK_ID' => $catalog_id, 'ACTIVE' => 'Y', 'GLOBAL_ACTIVE' => 'Y', 'ACTIVE_DATE' => 'Y', '<DEPTH_LEVEL' => \Bitrix\Main\Config\Option::get("aspro.next", "MAX_DEPTH_MENU", 2)));
		//$arSections['t1'] = array('ID'=>'t1','IBLOCK_SECTION_ID'=>464, 'NAME'=>"<b>По назначению</b>", 'SECTION_PAGE_URL'=>'#', 'DEPTH_LEVEL'=>3);
$arSections['d1'] = array('ID'=>'d1','IBLOCK_SECTION_ID'=>'464', 'NAME'=>'Смесители для раковины', 'SECTION_PAGE_URL'=>'/catalog/santekhnika/smesiteli/smesiteli-dlya-rakoviny/', 'DEPTH_LEVEL'=>3, "UF_MENU_SORT" => "По назначению");
$arSections['d2'] = array('ID'=>'d2','IBLOCK_SECTION_ID'=>'464', 'NAME'=>'Смесители для ванны и душа', 'SECTION_PAGE_URL'=>'/catalog/santekhnika/smesiteli/smesiteli-dlya-vanny/', 'DEPTH_LEVEL'=>3, "UF_MENU_SORT" => "По назначению");
$arSections['d3'] = array('ID'=>'d3','IBLOCK_SECTION_ID'=>'464', 'NAME'=>'Смесители для душа', 'SECTION_PAGE_URL'=>'/catalog/santekhnika/smesiteli/smesiteli-dlya-dusha/', 'DEPTH_LEVEL'=>3, "UF_MENU_SORT" => "По назначению");
$arSections['d4'] = array('ID'=>'d4','IBLOCK_SECTION_ID'=>'464', 'NAME'=>'Смесители для кухни', 'SECTION_PAGE_URL'=>'/catalog/santekhnika/smesiteli/smesiteli-dlya-kuhni/', 'DEPTH_LEVEL'=>3, "UF_MENU_SORT" => "По назначению");
$arSections['d5'] = array('ID'=>'d5','IBLOCK_SECTION_ID'=>'464', 'NAME'=>'Смесители для биде', 'SECTION_PAGE_URL'=>'/catalog/santekhnika/smesiteli/smesiteli-dlya-bide/', 'DEPTH_LEVEL'=>3, "UF_MENU_SORT" => "По назначению");
$arSections['d35'] = array('ID'=>'d35','IBLOCK_SECTION_ID'=>'464', 'NAME'=>'С гигиеническим душем', 'SECTION_PAGE_URL'=>'/catalog/santekhnika/smesiteli/smesitel-s-gigienicheskim-dushem/', 'DEPTH_LEVEL'=>3, "UF_MENU_SORT" => "По назначению");
//$arSections['t2'] = array('ID'=>'t2','IBLOCK_SECTION_ID'=>464, 'NAME'=>'<b>По управлению</b>', 'SECTION_PAGE_URL'=>'#', 'DEPTH_LEVEL'=>3);
$arSections['d6'] = array('ID'=>'d6','IBLOCK_SECTION_ID'=>'464', 'NAME'=>'Однорычажные', 'SECTION_PAGE_URL'=>'/catalog/santekhnika/smesiteli/smesitel-odnorychazhnyi/', 'DEPTH_LEVEL'=>3, "UF_MENU_SORT" => "По управлению");
$arSections['d7'] = array('ID'=>'d7','IBLOCK_SECTION_ID'=>'464', 'NAME'=>'Двухвентильные', 'SECTION_PAGE_URL'=>'/catalog/santekhnika/smesiteli/smesitel-dvuhventilnyi/', 'DEPTH_LEVEL'=>3, "UF_MENU_SORT" => "По управлению");
$arSections['d8'] = array('ID'=>'d8','IBLOCK_SECTION_ID'=>'464', 'NAME'=>'Сенсорный', 'SECTION_PAGE_URL'=>'/catalog/santekhnika/smesiteli/smesitel-sensornyi/', 'DEPTH_LEVEL'=>3, "UF_MENU_SORT" => "По управлению");
$arSections['d9'] = array('ID'=>'d9','IBLOCK_SECTION_ID'=>'464', 'NAME'=>'Термостатические', 'SECTION_PAGE_URL'=>'/catalog/santekhnika/smesiteli/smesiteli-termostaticheskie/', 'DEPTH_LEVEL'=>3, "UF_MENU_SORT" => "По управлению");
//$arSections['t3'] = array('ID'=>'t3','IBLOCK_SECTION_ID'=>464, 'NAME'=>'<b>По монтажу</b>', 'SECTION_PAGE_URL'=>'#', 'DEPTH_LEVEL'=>3);
$arSections['d10'] = array('ID'=>'d10','IBLOCK_SECTION_ID'=>'464', 'NAME'=>'Напольные смесители', 'SECTION_PAGE_URL'=>'/catalog/santekhnika/smesiteli/napolnye-smesiteli/', 'DEPTH_LEVEL'=>3, "UF_MENU_SORT" => "По монтажу");
$arSections['d11'] = array('ID'=>'d11','IBLOCK_SECTION_ID'=>'464', 'NAME'=>'Смесители на борт ванны', 'SECTION_PAGE_URL'=>'/catalog/santekhnika/smesiteli/smesiteli-na-bort-vanny/', 'DEPTH_LEVEL'=>3, "UF_MENU_SORT" => "По монтажу");
$arSections['d12'] = array('ID'=>'d12','IBLOCK_SECTION_ID'=>'464', 'NAME'=>'Смесители скрытого монтажа', 'SECTION_PAGE_URL'=>'/catalog/santekhnika/smesiteli/smesiteli-skrytogo-montazha/', 'DEPTH_LEVEL'=>3, "UF_MENU_SORT" => "По монтажу");
$arSections['d36'] = array('ID'=>'d36','IBLOCK_SECTION_ID'=>'464', 'NAME'=>'Душевые системы', 'SECTION_PAGE_URL'=>'/catalog/santekhnika/smesiteli/dushevaya_sistema/', 'DEPTH_LEVEL'=>3, "UF_MENU_SORT" => "Души и прочее");
$arSections['d37'] = array('ID'=>'d37','IBLOCK_SECTION_ID'=>'464', 'NAME'=>'Набор: смеситель и душевой гарнитур', 'SECTION_PAGE_URL'=>'/catalog/santekhnika/smesiteli/komplekt-smesitel-s-dushem/', 'DEPTH_LEVEL'=>3, "UF_MENU_SORT" => "Души и прочее");	

//ванна
//$arSections['t4'] = array('ID'=>'t4','IBLOCK_SECTION_ID'=>513, 'NAME'=>'<b>Тип</b>', 'SECTION_PAGE_URL'=>'#');
$arSections['d13'] = array('ID'=>'d13','IBLOCK_SECTION_ID'=>'513', 'NAME'=>'Акриловые', 'SECTION_PAGE_URL'=>'/catalog/santekhnika/vanny/akrilovye-vanny/', 'DEPTH_LEVEL'=>3, "UF_MENU_SORT" => "Тип");
$arSections['d14'] = array('ID'=>'d14','IBLOCK_SECTION_ID'=>'513', 'NAME'=>'Стальные', 'SECTION_PAGE_URL'=>'/catalog/santekhnika/vanny/stalnye-vanny/', 'DEPTH_LEVEL'=>3, "UF_MENU_SORT" => "Тип");
$arSections['d15'] = array('ID'=>'d15','IBLOCK_SECTION_ID'=>'513', 'NAME'=>'Чугунные', 'SECTION_PAGE_URL'=>'/catalog/santekhnika/vanny/chugunnye-vanny/', 'DEPTH_LEVEL'=>3, "UF_MENU_SORT" => "Тип");
$arSections['d16'] = array('ID'=>'d16','IBLOCK_SECTION_ID'=>'513', 'NAME'=>'Из литьевого мрамора', 'SECTION_PAGE_URL'=>'/catalog/santekhnika/vanny/mramornye-vanny/', 'DEPTH_LEVEL'=>3, "UF_MENU_SORT" => "Тип");
$arSections['d17'] = array('ID'=>'d17','IBLOCK_SECTION_ID'=>'513', 'NAME'=>'С гидромассажем', 'SECTION_PAGE_URL'=>'/catalog/santekhnika/vanny/vanny-s-gidromassazhem/', 'DEPTH_LEVEL'=>3, "UF_MENU_SORT" => "Тип");
$arSections['d18'] = array('ID'=>'d18','IBLOCK_SECTION_ID'=>'513', 'NAME'=>'С аэромассажем', 'SECTION_PAGE_URL'=>'/catalog/santekhnika/vanny/vanny-s-aeromassazhem/', 'DEPTH_LEVEL'=>3, "UF_MENU_SORT" => "Тип");

//$arSections['t5'] = array('ID'=>'t5','IBLOCK_SECTION_ID'=>513, 'NAME'=>'<b>Форма ванны</b>', 'SECTION_PAGE_URL'=>'#');
$arSections['d19'] = array('ID'=>'d19','IBLOCK_SECTION_ID'=>'513', 'NAME'=>'Угловая', 'SECTION_PAGE_URL'=>'/catalog/santekhnika/vanny/vanny-uglovye/', 'DEPTH_LEVEL'=>3, "UF_MENU_SORT" => "Форма ванны");
$arSections['d20'] = array('ID'=>'d20','IBLOCK_SECTION_ID'=>'513', 'NAME'=>'Круглая', 'SECTION_PAGE_URL'=>'/catalog/santekhnika/vanny/vanny-kruglye/', 'DEPTH_LEVEL'=>3, "UF_MENU_SORT" => "Форма ванны");
$arSections['d21'] = array('ID'=>'d21','IBLOCK_SECTION_ID'=>'513', 'NAME'=>'Овальная', 'SECTION_PAGE_URL'=>'/catalog/santekhnika/vanny/vanny-ovalnye/', 'DEPTH_LEVEL'=>3, "UF_MENU_SORT" => "Форма ванны");
$arSections['d22'] = array('ID'=>'d22','IBLOCK_SECTION_ID'=>'513', 'NAME'=>'Квадратная', 'SECTION_PAGE_URL'=>'/catalog/santekhnika/vanny/vanny-kvadratnye/', 'DEPTH_LEVEL'=>3, "UF_MENU_SORT" => "Форма ванны");
$arSections['d23'] = array('ID'=>'d23','IBLOCK_SECTION_ID'=>'513', 'NAME'=>'Прямоугольная', 'SECTION_PAGE_URL'=>'/catalog/santekhnika/vanny/vanny-pryamougolnye/', 'DEPTH_LEVEL'=>3, "UF_MENU_SORT" => "Форма ванны");
$arSections['d24'] = array('ID'=>'d24','IBLOCK_SECTION_ID'=>'513', 'NAME'=>'Асимметричная', 'SECTION_PAGE_URL'=>'/catalog/santekhnika/vanny/vanny-asimmetrichnye/', 'DEPTH_LEVEL'=>3, "UF_MENU_SORT" => "Форма ванны");

//$arSections['t6'] = array('ID'=>'t6','IBLOCK_SECTION_ID'=>513, 'NAME'=>'<b>Размеры</b>', 'SECTION_PAGE_URL'=>'#');
$arSections['d25'] = array('ID'=>'d25','IBLOCK_SECTION_ID'=>'513', 'NAME'=>'Маленькие', 'SECTION_PAGE_URL'=>'/catalog/santekhnika/vanny/malenkie-vanny/', 'DEPTH_LEVEL'=>3, "UF_MENU_SORT" => "Размеры");
$arSections['d26'] = array('ID'=>'d26','IBLOCK_SECTION_ID'=>'513', 'NAME'=>'Большие', 'SECTION_PAGE_URL'=>'/catalog/santekhnika/vanny/bolshie-vanny/', 'DEPTH_LEVEL'=>3, "UF_MENU_SORT" => "Размеры");
$arSections['d27'] = array('ID'=>'d27','IBLOCK_SECTION_ID'=>'513', 'NAME'=>'Узкие', 'SECTION_PAGE_URL'=>'/catalog/santekhnika/vanny/uzkie-vanny/', 'DEPTH_LEVEL'=>3, "UF_MENU_SORT" => "Размеры");

//$arSections['t7'] = array('ID'=>'t7','IBLOCK_SECTION_ID'=>513, 'NAME'=>'<b>Тип монтажа</b>', 'SECTION_PAGE_URL'=>'#');
$arSections['d28'] = array('ID'=>'d28','IBLOCK_SECTION_ID'=>'513', 'NAME'=>'Встраиваемые', 'SECTION_PAGE_URL'=>'/catalog/santekhnika/vanny/vstraivaemye-vanny/', 'DEPTH_LEVEL'=>3, "UF_MENU_SORT" => "Тип монтажа");
$arSections['d29'] = array('ID'=>'d29','IBLOCK_SECTION_ID'=>'513', 'NAME'=>'Отдельностоящие', 'SECTION_PAGE_URL'=>'/catalog/santekhnika/vanny/otdelnostoyashchie-vanny/', 'DEPTH_LEVEL'=>3, "UF_MENU_SORT" => "Тип монтажа");

//$arSections['t8'] = array('ID'=>'t8','IBLOCK_SECTION_ID'=>513, 'NAME'=>'<b>Цвет</b>', 'SECTION_PAGE_URL'=>'#');
$arSections['d30'] = array('ID'=>'d30','IBLOCK_SECTION_ID'=>'513', 'NAME'=>'Белые', 'SECTION_PAGE_URL'=>'/catalog/santekhnika/vanny/belye-vanny/', 'DEPTH_LEVEL'=>3, "UF_MENU_SORT" => "Цвет");

//$arSections['t9'] = array('ID'=>'t9','IBLOCK_SECTION_ID'=>513, 'NAME'=>'<b>Комплектующие для ванн</b>', 'SECTION_PAGE_URL'=>'#');
$arSections['d31'] = array('ID'=>'d31','IBLOCK_SECTION_ID'=>'513', 'NAME'=>'Ножки для ванн', 'SECTION_PAGE_URL'=>'/catalog/santekhnika/vanny/nozhki-dlya-vann/', 'DEPTH_LEVEL'=>3, "UF_MENU_SORT" => "Комплектующие для ванн");
$arSections['d32'] = array('ID'=>'d32','IBLOCK_SECTION_ID'=>'513', 'NAME'=>'Каркас', 'SECTION_PAGE_URL'=>'/catalog/santekhnika/vanny/karkas/', 'DEPTH_LEVEL'=>3, "UF_MENU_SORT" => "Комплектующие для ванн");
$arSections['d33'] = array('ID'=>'d33','IBLOCK_SECTION_ID'=>'513', 'NAME'=>'Экран для ванны', 'SECTION_PAGE_URL'=>'/catalog/santekhnika/vanny/ekran-dlya-vanny/', 'DEPTH_LEVEL'=>3, "UF_MENU_SORT" => "Комплектующие для ванн");


$arSections['d38'] = array('ID'=>'d38','IBLOCK_SECTION_ID'=>'611', 'NAME'=>'Овальное зеркало', 'SECTION_PAGE_URL'=>'/catalog/mebel_dlya_vannoy_komnaty/ovalnoe-zerkalo/', 'DEPTH_LEVEL'=>3, "UF_MENU_SORT" => "Тип");
$arSections['d39'] = array('ID'=>'d39','IBLOCK_SECTION_ID'=>'611', 'NAME'=>'Большое зеркало', 'SECTION_PAGE_URL'=>'/catalog/mebel_dlya_vannoy_komnaty/bolshoe-zerkalo/', 'DEPTH_LEVEL'=>3, "UF_MENU_SORT" => "Тип");


$arSections['d40'] = array('ID'=>'d40','IBLOCK_SECTION_ID'=>'612', 'NAME'=>'Зеркальный шкафчик', 'SECTION_PAGE_URL'=>'/catalog/mebel_dlya_vannoy_komnaty/zerkalnyi-shkafchik/', 'DEPTH_LEVEL'=>3, "UF_MENU_SORT" => "Тип");

$arSections['d41'] = array('ID'=>'d41','IBLOCK_SECTION_ID'=>'612', 'NAME'=>'Без зеркала', 'SECTION_PAGE_URL'=>'/catalog/mebel_dlya_vannoy_komnaty/shkaf-bez-zerkala/', 'DEPTH_LEVEL'=>3, "UF_MENU_SORT" => "Тип");

$arSections['d42'] = array('ID'=>'d42','IBLOCK_SECTION_ID'=>'612', 'NAME'=>'Напольные', 'SECTION_PAGE_URL'=>'/catalog/mebel_dlya_vannoy_komnaty/shkaf-napolnyi/', 'DEPTH_LEVEL'=>3, "UF_MENU_SORT" => "Тип");

$arSections['d43'] = array('ID'=>'d43','IBLOCK_SECTION_ID'=>'612', 'NAME'=>'Подвесные', 'SECTION_PAGE_URL'=>'/catalog/mebel_dlya_vannoy_komnaty/shkaf-podvesnoi/', 'DEPTH_LEVEL'=>3, "UF_MENU_SORT" => "Монтаж");

$arSections['d44'] = array('ID'=>'d44','IBLOCK_SECTION_ID'=>'612', 'NAME'=>'Под раковину', 'SECTION_PAGE_URL'=>'/catalog/mebel_dlya_vannoy_komnaty/shkaf-pod-rakovinu/', 'DEPTH_LEVEL'=>3, "UF_MENU_SORT" => "Тип");

$arSections['d45'] = array('ID'=>'d45','IBLOCK_SECTION_ID'=>'612', 'NAME'=>'Навесные', 'SECTION_PAGE_URL'=>'/catalog/mebel_dlya_vannoy_komnaty/shkaf-navesnoi/', 'DEPTH_LEVEL'=>3, "UF_MENU_SORT" => "Монтаж");

$arSections['d46'] = array('ID'=>'d46','IBLOCK_SECTION_ID'=>'613', 'NAME'=>'Напольные', 'SECTION_PAGE_URL'=>'/catalog/mebel_dlya_vannoy_komnaty/shkafy-penaly-napolnye/', 'DEPTH_LEVEL'=>3, "UF_MENU_SORT" => "Тип");

$arSections['d47'] = array('ID'=>'d47','IBLOCK_SECTION_ID'=>'613', 'NAME'=>'Подвесные', 'SECTION_PAGE_URL'=>'/catalog/mebel_dlya_vannoy_komnaty/shkafy-penaly-podvesnye/', 'DEPTH_LEVEL'=>3, "UF_MENU_SORT" => "Тип");

$arSections['d48'] = array('ID'=>'d48','IBLOCK_SECTION_ID'=>'615', 'NAME'=>'Напольные', 'SECTION_PAGE_URL'=>'/catalog/mebel_dlya_vannoy_komnaty/tumba-napolnaya/', 'DEPTH_LEVEL'=>3, "UF_MENU_SORT" => "Тип");

$arSections['d49'] = array('ID'=>'d49','IBLOCK_SECTION_ID'=>'615', 'NAME'=>'Подвесные', 'SECTION_PAGE_URL'=>'/catalog/mebel_dlya_vannoy_komnaty/tumba-podvesnaya/', 'DEPTH_LEVEL'=>3, "UF_MENU_SORT" => "Тип");

$arSections['d50'] = array('ID'=>'d50','IBLOCK_SECTION_ID'=>'615', 'NAME'=>'Тумбы с раковиной', 'SECTION_PAGE_URL'=>'/catalog/mebel_dlya_vannoy_komnaty/tumba-s-rakovinoi/', 'DEPTH_LEVEL'=>3, "UF_MENU_SORT" => "Тип");

$arSections['d51'] = array('ID'=>'d51','IBLOCK_SECTION_ID'=>'615', 'NAME'=>'Под раковину', 'SECTION_PAGE_URL'=>'/catalog/mebel_dlya_vannoy_komnaty/tumba-pod-rakovinu/', 'DEPTH_LEVEL'=>3, "UF_MENU_SORT" => "Тип");

$arSections['d52'] = array('ID'=>'d52','IBLOCK_SECTION_ID'=>'611', 'NAME'=>'Прямоуголное зеркало', 'SECTION_PAGE_URL'=>'/catalog/mebel_dlya_vannoy_komnaty/pryamougolnoe-zerkalo/', 'DEPTH_LEVEL'=>3, "UF_MENU_SORT" => "Тип");
$arSections['d53'] = array('ID'=>'d53','IBLOCK_SECTION_ID'=>'611', 'NAME'=>'Среднее зеркало', 'SECTION_PAGE_URL'=>'/catalog/mebel_dlya_vannoy_komnaty/srednee-zerkalo/', 'DEPTH_LEVEL'=>3, "UF_MENU_SORT" => "Тип");

/*$arSections['d34'] = array('ID'=>'d13','IBLOCK_SECTION_ID'=>'464', 'NAME'=>'Ручной душ', 'SECTION_PAGE_URL'=>'/catalog/santekhnika/smesiteli/ruchnoj-dush/', 'DEPTH_LEVEL'=>3, "UF_MENU_SORT" => "По назначению");*/

		$arSectionsByParentSectionID = CNextCache::GroupArrayBy($arSections, array('MULTI' => 'Y', 'GROUP' => array('IBLOCK_SECTION_ID')));
	}
	if($arSections)
		CNext::getSectionChilds(false, $arSections, $arSectionsByParentSectionID, $arItemsBySectionID, $aMenuLinksExt);
}

$aMenuLinks = array_merge($aMenuLinks, $aMenuLinksExt);
?>