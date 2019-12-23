<?
$catalog_id=\Bitrix\Main\Config\Option::get("aspro.next", "CATALOG_IBLOCK_ID", CNextCache::$arIBlocks[SITE_ID]['aspro_next_catalog']['aspro_next_catalog'][0]);
$arSections = CNextCache::CIBlockSection_GetList(array('SORT' => 'ASC', 'ID' => 'ASC', 'CACHE' => array('TAG' => CNextCache::GetIBlockCacheTag($catalog_id), 'GROUP' => array('ID'))), array('IBLOCK_ID' => $catalog_id, 'ACTIVE' => 'Y', 'GLOBAL_ACTIVE' => 'Y', 'ACTIVE_DATE' => 'Y', '<DEPTH_LEVEL' => $arParams['MAX_LEVEL']), false, array("ID","IBLOCK_ID", "NAME", "PICTURE", "LEFT_MARGIN", "RIGHT_MARGIN", "DEPTH_LEVEL", "SECTION_PAGE_URL", "IBLOCK_SECTION_ID", "UF_CATALOG_ICON"));
//смесители
$arSections['t1'] = array('ID'=>'t1','IBLOCK_SECTION_ID'=>464, 'NAME'=>'<b>По монтажу</b>', 'SECTION_PAGE_URL'=>'#');
$arSections['d10'] = array('ID'=>'d10','IBLOCK_SECTION_ID'=>'464', 'NAME'=>'Напольные смесители', 'SECTION_PAGE_URL'=>'/catalog/santekhnika/smesiteli/napolnye-smesiteli/');
$arSections['d11'] = array('ID'=>'d11','IBLOCK_SECTION_ID'=>'464', 'NAME'=>'Смесители на борт ванны', 'SECTION_PAGE_URL'=>'/catalog/santekhnika/smesiteli/smesiteli-na-bort-vanny/');
$arSections['d12'] = array('ID'=>'d12','IBLOCK_SECTION_ID'=>'464', 'NAME'=>'Смесители скрытого монтажа', 'SECTION_PAGE_URL'=>'/catalog/santekhnika/smesiteli/smesiteli-skrytogo-montazha/');

$arSections['t2'] = array('ID'=>'t2','IBLOCK_SECTION_ID'=>464, 'NAME'=>'<b>По управлению</b>', 'SECTION_PAGE_URL'=>'#');
$arSections['d6'] = array('ID'=>'d6','IBLOCK_SECTION_ID'=>'464', 'NAME'=>'Однорычажные', 'SECTION_PAGE_URL'=>'/catalog/santekhnika/smesiteli/smesitel-odnorychazhnyi/');
$arSections['d7'] = array('ID'=>'d7','IBLOCK_SECTION_ID'=>'464', 'NAME'=>'Двухвентильные', 'SECTION_PAGE_URL'=>'/catalog/santekhnika/smesiteli/smesitel-dvuhventilnyi/');
$arSections['d8'] = array('ID'=>'d8','IBLOCK_SECTION_ID'=>'464', 'NAME'=>'Сенсорный', 'SECTION_PAGE_URL'=>'/catalog/santekhnika/smesiteli/smesitel-sensornyi/');
$arSections['d9'] = array('ID'=>'d9','IBLOCK_SECTION_ID'=>'464', 'NAME'=>'Термостатические', 'SECTION_PAGE_URL'=>'/catalog/santekhnika/smesiteli/smesiteli-termostaticheskie/');

$arSections['t3'] = array('ID'=>'t3','IBLOCK_SECTION_ID'=>464, 'NAME'=>'<b>Души и прочее</b>', 'SECTION_PAGE_URL'=>'#');
$arSections['d36'] = array('ID'=>'d36','IBLOCK_SECTION_ID'=>'464', 'NAME'=>'Душевые системы', 'SECTION_PAGE_URL'=>'/catalog/santekhnika/smesiteli/dushevaya_sistema/');
$arSections['d37'] = array('ID'=>'d37','IBLOCK_SECTION_ID'=>'464', 'NAME'=>'Набор: смеситель и душевой гарнитур', 'SECTION_PAGE_URL'=>'/catalog/santekhnika/smesiteli/komplekt-smesitel-s-dushem/');

$arSections['t4'] = array('ID'=>'t4','IBLOCK_SECTION_ID'=>464, 'NAME'=>'<b>По назначению</b>', 'SECTION_PAGE_URL'=>'#');
$arSections['d1'] = array('ID'=>'d1','IBLOCK_SECTION_ID'=>'464', 'NAME'=>'Смесители для раковины', 'SECTION_PAGE_URL'=>'/catalog/santekhnika/smesiteli/smesiteli-dlya-rakoviny/');
$arSections['d2'] = array('ID'=>'d2','IBLOCK_SECTION_ID'=>'464', 'NAME'=>'Смесители для ванны и душа', 'SECTION_PAGE_URL'=>'/catalog/santekhnika/smesiteli/smesiteli-dlya-vanny/');
$arSections['d3'] = array('ID'=>'d3','IBLOCK_SECTION_ID'=>'464', 'NAME'=>'Смесители для душа', 'SECTION_PAGE_URL'=>'/catalog/santekhnika/smesiteli/smesiteli-dlya-dusha/');
$arSections['d4'] = array('ID'=>'d4','IBLOCK_SECTION_ID'=>'464', 'NAME'=>'Смесители для кухни', 'SECTION_PAGE_URL'=>'/catalog/santekhnika/smesiteli/smesiteli-dlya-kuhni/');
$arSections['d5'] = array('ID'=>'d5','IBLOCK_SECTION_ID'=>'464', 'NAME'=>'Смесители для биде',  'SECTION_PAGE_URL'=>'/catalog/santekhnika/smesiteli/smesiteli-dlya-bide/');	
/*$arSections['d35'] = array('ID'=>'d35','IBLOCK_SECTION_ID'=>'464', 'NAME'=>'Ручной душ', 'SECTION_PAGE_URL'=>'/catalog/santekhnika/smesiteli/ruchnoj-dush/');*/
$arSections['d34'] = array('ID'=>'d34','IBLOCK_SECTION_ID'=>'464', 'NAME'=>'С гигиеническим душем', 'SECTION_PAGE_URL'=>'/catalog/santekhnika/smesiteli/smesitel-s-gigienicheskim-dushem/');



//ванна
$arSections['t5'] = array('ID'=>'t5','IBLOCK_SECTION_ID'=>513, 'NAME'=>'<b>Тип</b>', 'SECTION_PAGE_URL'=>'#');
$arSections['d13'] = array('ID'=>'d13','IBLOCK_SECTION_ID'=>'513', 'NAME'=>'Акриловые', 'SECTION_PAGE_URL'=>'/catalog/santekhnika/vanny/akrilovye-vanny/');
$arSections['d14'] = array('ID'=>'d14','IBLOCK_SECTION_ID'=>'513', 'NAME'=>'Стальные', 'SECTION_PAGE_URL'=>'/catalog/santekhnika/vanny/stalnye-vanny/');
$arSections['d15'] = array('ID'=>'d15','IBLOCK_SECTION_ID'=>'513', 'NAME'=>'Чугунные', 'SECTION_PAGE_URL'=>'/catalog/santekhnika/vanny/chugunnye-vanny/');
$arSections['d16'] = array('ID'=>'d16','IBLOCK_SECTION_ID'=>'513', 'NAME'=>'Из литьевого мрамора', 'SECTION_PAGE_URL'=>'/catalog/santekhnika/vanny/mramornye-vanny/');
$arSections['d17'] = array('ID'=>'d17','IBLOCK_SECTION_ID'=>'513', 'NAME'=>'С гидромассажем', 'SECTION_PAGE_URL'=>'/catalog/santekhnika/vanny/vanny-s-gidromassazhem/');
$arSections['d18'] = array('ID'=>'d18','IBLOCK_SECTION_ID'=>'513', 'NAME'=>'С аэромассажем', 'SECTION_PAGE_URL'=>'/catalog/santekhnika/vanny/vanny-s-aeromassazhem/');

$arSections['t6'] = array('ID'=>'t6','IBLOCK_SECTION_ID'=>513, 'NAME'=>'<b>Форма ванны</b>', 'SECTION_PAGE_URL'=>'#');
$arSections['d19'] = array('ID'=>'d19','IBLOCK_SECTION_ID'=>'513', 'NAME'=>'Угловая', 'SECTION_PAGE_URL'=>'/catalog/santekhnika/vanny/vanny-uglovye/');
$arSections['d20'] = array('ID'=>'d20','IBLOCK_SECTION_ID'=>'513', 'NAME'=>'Круглая', 'SECTION_PAGE_URL'=>'/catalog/santekhnika/vanny/vanny-kruglye/');
$arSections['d21'] = array('ID'=>'d21','IBLOCK_SECTION_ID'=>'513', 'NAME'=>'Овальная', 'SECTION_PAGE_URL'=>'/catalog/santekhnika/vanny/vanny-ovalnye/');
$arSections['d22'] = array('ID'=>'d22','IBLOCK_SECTION_ID'=>'513', 'NAME'=>'Квадратная', 'SECTION_PAGE_URL'=>'/catalog/santekhnika/vanny/vanny-kvadratnye/');
$arSections['d23'] = array('ID'=>'d23','IBLOCK_SECTION_ID'=>'513', 'NAME'=>'Прямоугольная', 'SECTION_PAGE_URL'=>'/catalog/santekhnika/vanny/vanny-pryamougolnye/');
$arSections['d24'] = array('ID'=>'d24','IBLOCK_SECTION_ID'=>'513', 'NAME'=>'Асимметричная', 'SECTION_PAGE_URL'=>'/catalog/santekhnika/vanny/vanny-asimmetrichnye/');

$arSections['t7'] = array('ID'=>'t7','IBLOCK_SECTION_ID'=>513, 'NAME'=>'<b>Размеры</b>', 'SECTION_PAGE_URL'=>'#');
$arSections['d25'] = array('ID'=>'d25','IBLOCK_SECTION_ID'=>'513', 'NAME'=>'Маленькие', 'SECTION_PAGE_URL'=>'/catalog/santekhnika/vanny/malenkie-vanny/');
$arSections['d26'] = array('ID'=>'d26','IBLOCK_SECTION_ID'=>'513', 'NAME'=>'Большие', 'SECTION_PAGE_URL'=>'/catalog/santekhnika/vanny/bolshie-vanny/');
$arSections['d27'] = array('ID'=>'d27','IBLOCK_SECTION_ID'=>'513', 'NAME'=>'Узкие', 'SECTION_PAGE_URL'=>'/catalog/santekhnika/vanny/uzkie-vanny/');

$arSections['t8'] = array('ID'=>'t8','IBLOCK_SECTION_ID'=>513, 'NAME'=>'<b>Тип монтажа</b>', 'SECTION_PAGE_URL'=>'#');
$arSections['d28'] = array('ID'=>'d28','IBLOCK_SECTION_ID'=>'513', 'NAME'=>'Встраиваемые', 'SECTION_PAGE_URL'=>'/catalog/santekhnika/vanny/vstraivaemye-vanny/');
$arSections['d29'] = array('ID'=>'d29','IBLOCK_SECTION_ID'=>'513', 'NAME'=>'Отдельностоящие', 'SECTION_PAGE_URL'=>'/catalog/santekhnika/vanny/otdelnostoyashchie-vanny/');

$arSections['t9'] = array('ID'=>'t9','IBLOCK_SECTION_ID'=>513, 'NAME'=>'<b>Цвет</b>', 'SECTION_PAGE_URL'=>'#');
$arSections['d30'] = array('ID'=>'d30','IBLOCK_SECTION_ID'=>'513', 'NAME'=>'Белые', 'SECTION_PAGE_URL'=>'/catalog/santekhnika/vanny/belye-vanny/');

$arSections['t10'] = array('ID'=>'t10','IBLOCK_SECTION_ID'=>513, 'NAME'=>'<b>Комплектующие для ванн</b>', 'SECTION_PAGE_URL'=>'#');
$arSections['d31'] = array('ID'=>'d31','IBLOCK_SECTION_ID'=>'513', 'NAME'=>'Ножки для ванн', 'SECTION_PAGE_URL'=>'/catalog/santekhnika/vanny/nozhki-dlya-vann/');
$arSections['d32'] = array('ID'=>'d32','IBLOCK_SECTION_ID'=>'513', 'NAME'=>'Каркас', 'SECTION_PAGE_URL'=>'/catalog/santekhnika/vanny/karkas/');
$arSections['d33'] = array('ID'=>'d33','IBLOCK_SECTION_ID'=>'513', 'NAME'=>'Экран для ванны', 'SECTION_PAGE_URL'=>'/catalog/santekhnika/vanny/ekran-dlya-vanny/');


$arSections['t11'] = array('ID'=>'t11','IBLOCK_SECTION_ID'=>611, 'NAME'=>'<b>Тип</b>', 'SECTION_PAGE_URL'=>'#');
$arSections['d38'] = array('ID'=>'d38','IBLOCK_SECTION_ID'=>'611', 'NAME'=>'Овальное зеркало', 'SECTION_PAGE_URL'=>'/catalog/mebel_dlya_vannoy_komnaty/ovalnoe-zerkalo/');
$arSections['d39'] = array('ID'=>'d39','IBLOCK_SECTION_ID'=>'611', 'NAME'=>'Большое зеркало', 'SECTION_PAGE_URL'=>'/catalog/mebel_dlya_vannoy_komnaty/bolshoe-zerkalo/');
$arSections['d52'] = array('ID'=>'d52','IBLOCK_SECTION_ID'=>'611', 'NAME'=>'Прямоуголное зеркало', 'SECTION_PAGE_URL'=>'/catalog/mebel_dlya_vannoy_komnaty/pryamougolnoe-zerkalo/');
$arSections['d53'] = array('ID'=>'d53','IBLOCK_SECTION_ID'=>'611', 'NAME'=>'Среднее зеркало', 'SECTION_PAGE_URL'=>'/catalog/mebel_dlya_vannoy_komnaty/srednee-zerkalo/');

$arSections['t12'] = array('ID'=>'t12','IBLOCK_SECTION_ID'=>612, 'NAME'=>'<b>Тип</b>', 'SECTION_PAGE_URL'=>'#');

$arSections['d40'] = array('ID'=>'d40','IBLOCK_SECTION_ID'=>'612', 'NAME'=>'Зеркальный шкафчик', 'SECTION_PAGE_URL'=>'/catalog/mebel_dlya_vannoy_komnaty/zerkalnyi-shkafchik/');

$arSections['d41'] = array('ID'=>'d41','IBLOCK_SECTION_ID'=>'612', 'NAME'=>'Без зеркала', 'SECTION_PAGE_URL'=>'/catalog/mebel_dlya_vannoy_komnaty/shkaf-bez-zerkala/');

$arSections['d42'] = array('ID'=>'d42','IBLOCK_SECTION_ID'=>'612', 'NAME'=>'Напольные', 'SECTION_PAGE_URL'=>'/catalog/mebel_dlya_vannoy_komnaty/shkaf-napolnyi/');

$arSections['d44'] = array('ID'=>'d44','IBLOCK_SECTION_ID'=>'612', 'NAME'=>'Под раковину', 'SECTION_PAGE_URL'=>'/catalog/mebel_dlya_vannoy_komnaty/shkaf-pod-rakovinu/');


$arSections['t13'] = array('ID'=>'t13','IBLOCK_SECTION_ID'=>612, 'NAME'=>'<b>Монтаж</b>', 'SECTION_PAGE_URL'=>'#');

$arSections['d43'] = array('ID'=>'d43','IBLOCK_SECTION_ID'=>'612', 'NAME'=>'Подвесные', 'SECTION_PAGE_URL'=>'/catalog/mebel_dlya_vannoy_komnaty/shkaf-podvesnoi/');

$arSections['d45'] = array('ID'=>'d45','IBLOCK_SECTION_ID'=>'612', 'NAME'=>'Навесные', 'SECTION_PAGE_URL'=>'/catalog/mebel_dlya_vannoy_komnaty/shkaf-navesnoi/');

$arSections['t14'] = array('ID'=>'t14','IBLOCK_SECTION_ID'=>613, 'NAME'=>'<b>Тип</b>', 'SECTION_PAGE_URL'=>'#');

$arSections['d46'] = array('ID'=>'d46','IBLOCK_SECTION_ID'=>'613', 'NAME'=>'Напольные', 'SECTION_PAGE_URL'=>'/catalog/mebel_dlya_vannoy_komnaty/shkafy-penaly-napolnye/');

$arSections['d47'] = array('ID'=>'d47','IBLOCK_SECTION_ID'=>'613', 'NAME'=>'Подвесные', 'SECTION_PAGE_URL'=>'/catalog/mebel_dlya_vannoy_komnaty/shkafy-penaly-podvesnye/');

$arSections['t15'] = array('ID'=>'t15','IBLOCK_SECTION_ID'=>615, 'NAME'=>'<b>Тип</b>', 'SECTION_PAGE_URL'=>'#');

$arSections['d48'] = array('ID'=>'d48','IBLOCK_SECTION_ID'=>'615', 'NAME'=>'Напольные', 'SECTION_PAGE_URL'=>'/catalog/mebel_dlya_vannoy_komnaty/tumba-napolnaya/');

$arSections['d49'] = array('ID'=>'d49','IBLOCK_SECTION_ID'=>'615', 'NAME'=>'Подвесные', 'SECTION_PAGE_URL'=>'/catalog/mebel_dlya_vannoy_komnaty/tumba-podvesnaya/');

$arSections['d50'] = array('ID'=>'d50','IBLOCK_SECTION_ID'=>'615', 'NAME'=>'Тумбы с раковиной', 'SECTION_PAGE_URL'=>'/catalog/mebel_dlya_vannoy_komnaty/tumba-s-rakovinoi/');

$arSections['d51'] = array('ID'=>'d51','IBLOCK_SECTION_ID'=>'615', 'NAME'=>'Под раковину', 'SECTION_PAGE_URL'=>'/catalog/mebel_dlya_vannoy_komnaty/tumba-pod-rakovinu/');


//раковины

$arSections['t16'] = array('ID'=>'t16','IBLOCK_SECTION_ID'=>485, 'NAME'=>'<b>Тип</b>', 'SECTION_PAGE_URL'=>'#');
$arSections['d54'] = array('ID'=>'d54','IBLOCK_SECTION_ID'=>'485', 'NAME'=>'Раковины', 'SECTION_PAGE_URL'=>'/catalog/santekhnika/rakoviny_i_pedestaly/rakoviny/');
$arSections['d55'] = array('ID'=>'d55','IBLOCK_SECTION_ID'=>'485', 'NAME'=>'Пьедесталы', 'SECTION_PAGE_URL'=>'/catalog/santekhnika/rakoviny_i_pedestaly/pedestaly/');
$arSections['d56'] = array('ID'=>'d56','IBLOCK_SECTION_ID'=>'485', 'NAME'=>'Полупьедесталы', 'SECTION_PAGE_URL'=>'/catalog/santekhnika/rakoviny_i_pedestaly/polupedestaly/');

$arSections['t17'] = array('ID'=>'t17','IBLOCK_SECTION_ID'=>485, 'NAME'=>'<b>Монтаж раковины</b>', 'SECTION_PAGE_URL'=>'#');
$arSections['d57'] = array('ID'=>'d57','IBLOCK_SECTION_ID'=>'485', 'NAME'=>'Подвесные', 'SECTION_PAGE_URL'=>'/catalog/santekhnika/rakoviny_i_pedestaly/podvesnye-rakoviny/');
$arSections['d58'] = array('ID'=>'d58','IBLOCK_SECTION_ID'=>'485', 'NAME'=>'Над стиральной машиной', 'SECTION_PAGE_URL'=>'/catalog/santekhnika/rakoviny_i_pedestaly/rakoviny-nad-stiralnoy-mashinoy/');
$arSections['d59'] = array('ID'=>'d59','IBLOCK_SECTION_ID'=>'485', 'NAME'=>'Настольные', 'SECTION_PAGE_URL'=>'/catalog/santekhnika/rakoviny_i_pedestaly/rakoviny-nakladnye/');
$arSections['d60'] = array('ID'=>'d60','IBLOCK_SECTION_ID'=>'485', 'NAME'=>'Угловые', 'SECTION_PAGE_URL'=>'/catalog/santekhnika/rakoviny_i_pedestaly/rakoviny-uglovye/');

$arSections['t18'] = array('ID'=>'t18','IBLOCK_SECTION_ID'=>485, 'NAME'=>'<b>Размеры</b>', 'SECTION_PAGE_URL'=>'#');
$arSections['d61'] = array('ID'=>'d61','IBLOCK_SECTION_ID'=>'485', 'NAME'=>'Большие', 'SECTION_PAGE_URL'=>'/catalog/santekhnika/rakoviny_i_pedestaly/rakoviny-bolshie/');
$arSections['d62'] = array('ID'=>'d62','IBLOCK_SECTION_ID'=>'485', 'NAME'=>'Маленькие', 'SECTION_PAGE_URL'=>'/catalog/santekhnika/rakoviny_i_pedestaly/rakoviny-malenkie/');
$arSections['d63'] = array('ID'=>'d63','IBLOCK_SECTION_ID'=>'485', 'NAME'=>'Узкие', 'SECTION_PAGE_URL'=>'/catalog/santekhnika/rakoviny_i_pedestaly/rakoviny-uzkie/');
$arSections['d64'] = array('ID'=>'d64','IBLOCK_SECTION_ID'=>'485', 'NAME'=>'Глубокие', 'SECTION_PAGE_URL'=>'/catalog/santekhnika/rakoviny_i_pedestaly/rakoviny-glubokie/');

$arSections['t19'] = array('ID'=>'t19','IBLOCK_SECTION_ID'=>485, 'NAME'=>'<b>Материал</b>', 'SECTION_PAGE_URL'=>'#');
$arSections['d65'] = array('ID'=>'d65','IBLOCK_SECTION_ID'=>'485', 'NAME'=>'Керамические', 'SECTION_PAGE_URL'=>'/catalog/santekhnika/rakoviny_i_pedestaly/rakoviny-keramicheskie/');
$arSections['d66'] = array('ID'=>'d66','IBLOCK_SECTION_ID'=>'485', 'NAME'=>'Фаянсовые', 'SECTION_PAGE_URL'=>'/catalog/santekhnika/rakoviny_i_pedestaly/rakoviny-fayansovye/');
$arSections['d67'] = array('ID'=>'d67','IBLOCK_SECTION_ID'=>'485', 'NAME'=>'Фарфоровые', 'SECTION_PAGE_URL'=>'/catalog/santekhnika/rakoviny_i_pedestaly/rakoviny-farforovye/');

$arSections['t20'] = array('ID'=>'t20','IBLOCK_SECTION_ID'=>485, 'NAME'=>'<b>Цвет</b>', 'SECTION_PAGE_URL'=>'#');
$arSections['d68'] = array('ID'=>'d68','IBLOCK_SECTION_ID'=>'485', 'NAME'=>'Белые', 'SECTION_PAGE_URL'=>'/catalog/santekhnika/rakoviny_i_pedestaly/rakoviny-belye/');
$arSections['d69'] = array('ID'=>'d69','IBLOCK_SECTION_ID'=>'485', 'NAME'=>'Бежевые', 'SECTION_PAGE_URL'=>'/catalog/santekhnika/rakoviny_i_pedestaly/rakoviny-bejevye/');


//унитазы
$arSections['t21'] = array('ID'=>'t21','IBLOCK_SECTION_ID'=>479, 'NAME'=>'<b>Тип</b>', 'SECTION_PAGE_URL'=>'#');
$arSections['d70'] = array('ID'=>'d70','IBLOCK_SECTION_ID'=>'479', 'NAME'=>'Унитазы компакт', 'SECTION_PAGE_URL'=>'/catalog/santekhnika/unitazy_i_sideniya/unitaz-kompakt/');
$arSections['d71'] = array('ID'=>'d71','IBLOCK_SECTION_ID'=>'479', 'NAME'=>'Навесные', 'SECTION_PAGE_URL'=>'/catalog/santekhnika/unitazy_i_sideniya/navesnye-unitazy/');
$arSections['d72'] = array('ID'=>'d72','IBLOCK_SECTION_ID'=>'479', 'NAME'=>'Встроенные (приставные)', 'SECTION_PAGE_URL'=>'/catalog/santekhnika/unitazy_i_sideniya/vstroennye-unitazy/');
$arSections['d73'] = array('ID'=>'d73','IBLOCK_SECTION_ID'=>'479', 'NAME'=>'Напольные', 'SECTION_PAGE_URL'=>'/catalog/santekhnika/unitazy_i_sideniya/napolnye-unitazy/');
$arSections['d74'] = array('ID'=>'d74','IBLOCK_SECTION_ID'=>'479', 'NAME'=>'Без бачка', 'SECTION_PAGE_URL'=>'/catalog/santekhnika/unitazy_i_sideniya/unitazy-bez-bachka/');
$arSections['d75'] = array('ID'=>'d75','IBLOCK_SECTION_ID'=>'479', 'NAME'=>'Бачки для унитаза', 'SECTION_PAGE_URL'=>'/catalog/santekhnika/unitazy_i_sideniya/bachki-dlya-unitaza');

$arSections['t22'] = array('ID'=>'t22','IBLOCK_SECTION_ID'=>479, 'NAME'=>'<b>Выпуск</b>', 'SECTION_PAGE_URL'=>'#');
$arSections['d76'] = array('ID'=>'d76','IBLOCK_SECTION_ID'=>'479', 'NAME'=>'Косой', 'SECTION_PAGE_URL'=>'/catalog/santekhnika/unitazy_i_sideniya/unitazy-s-kosym-vypuskom/');
$arSections['d77'] = array('ID'=>'d77','IBLOCK_SECTION_ID'=>'479', 'NAME'=>'Вертикальный', 'SECTION_PAGE_URL'=>'/catalog/santekhnika/unitazy_i_sideniya/unitazy-s-vertikalnym-vypuskom/');
$arSections['d78'] = array('ID'=>'d78','IBLOCK_SECTION_ID'=>'479', 'NAME'=>'Горизонтальный', 'SECTION_PAGE_URL'=>'/catalog/santekhnika/unitazy_i_sideniya/unitazy-s-gorizontalnym-vypuskom/');

$arSections['t23'] = array('ID'=>'t23','IBLOCK_SECTION_ID'=>479, 'NAME'=>'<b>Материал</b>', 'SECTION_PAGE_URL'=>'#');
$arSections['d79'] = array('ID'=>'d79','IBLOCK_SECTION_ID'=>'479', 'NAME'=>'Фаянсовые', 'SECTION_PAGE_URL'=>'/catalog/santekhnika/unitazy_i_sideniya/fayansovye-unitazy/');
$arSections['d80'] = array('ID'=>'d80','IBLOCK_SECTION_ID'=>'479', 'NAME'=>'Фарфоровые', 'SECTION_PAGE_URL'=>'/catalog/santekhnika/unitazy_i_sideniya/farforovye-unitazy/');

//кухонные мойки
$arSections['t24'] = array('ID'=>'t24','IBLOCK_SECTION_ID'=>520, 'NAME'=>'<b>Тип</b>', 'SECTION_PAGE_URL'=>'#');
$arSections['d81'] = array('ID'=>'d81','IBLOCK_SECTION_ID'=>'520', 'NAME'=>'Врезные', 'SECTION_PAGE_URL'=>'/catalog/santekhnika/kukhonnye_moyki/vreznye/');
$arSections['d82'] = array('ID'=>'d82','IBLOCK_SECTION_ID'=>'520', 'NAME'=>'Угловые', 'SECTION_PAGE_URL'=>'/catalog/santekhnika/kukhonnye_moyki/uglovye/');
$arSections['d83'] = array('ID'=>'d83','IBLOCK_SECTION_ID'=>'520', 'NAME'=>'Двойные', 'SECTION_PAGE_URL'=>'/catalog/santekhnika/kukhonnye_moyki/dvoinye/');
$arSections['d84'] = array('ID'=>'d84','IBLOCK_SECTION_ID'=>'520', 'NAME'=>'С крылом', 'SECTION_PAGE_URL'=>'/catalog/santekhnika/kukhonnye_moyki/s-krylom/');
                                  
$arSections['t25'] = array('ID'=>'t25','IBLOCK_SECTION_ID'=>520, 'NAME'=>'<b>Форма</b>', 'SECTION_PAGE_URL'=>'#');
$arSections['d85'] = array('ID'=>'d85','IBLOCK_SECTION_ID'=>'520', 'NAME'=>'Круглые', 'SECTION_PAGE_URL'=>'/catalog/santekhnika/kukhonnye_moyki/kruglye/');
$arSections['d86'] = array('ID'=>'d86','IBLOCK_SECTION_ID'=>'520', 'NAME'=>'Квадратные', 'SECTION_PAGE_URL'=>'/catalog/santekhnika/kukhonnye_moyki/kvadratnye/');
$arSections['d87'] = array('ID'=>'d87','IBLOCK_SECTION_ID'=>'520', 'NAME'=>'Прямоугольные', 'SECTION_PAGE_URL'=>'/catalog/santekhnika/kukhonnye_moyki/pryamougolnye/');
$arSections['d88'] = array('ID'=>'d88','IBLOCK_SECTION_ID'=>'520', 'NAME'=>'Овальные', 'SECTION_PAGE_URL'=>'/catalog/santekhnika/kukhonnye_moyki/ovalnue/');

$arSections['t26'] = array('ID'=>'t26','IBLOCK_SECTION_ID'=>520, 'NAME'=>'<b>Материал</b>', 'SECTION_PAGE_URL'=>'#');
//$arSections['d88'] = array('ID'=>'d88','IBLOCK_SECTION_ID'=>'520', 'NAME'=>'Из камня', 'SECTION_PAGE_URL'=>'/catalog/santekhnika/kukhonnye_moyki/iz-kamnya/');
$arSections['d89'] = array('ID'=>'d89','IBLOCK_SECTION_ID'=>'520', 'NAME'=>'Гранитные', 'SECTION_PAGE_URL'=>'/catalog/santekhnika/kukhonnye_moyki/granitnye/');
$arSections['d90'] = array('ID'=>'d90','IBLOCK_SECTION_ID'=>'520', 'NAME'=>'Кварцевые', 'SECTION_PAGE_URL'=>'/catalog/santekhnika/kukhonnye_moyki/kvarcevye/');
$arSections['d91'] = array('ID'=>'d91','IBLOCK_SECTION_ID'=>'520', 'NAME'=>'Мраморные', 'SECTION_PAGE_URL'=>'/catalog/santekhnika/kukhonnye_moyki/mramornye/');

$arSections['t27'] = array('ID'=>'t27','IBLOCK_SECTION_ID'=>520, 'NAME'=>'<b>Размеры</b>', 'SECTION_PAGE_URL'=>'#');
$arSections['d92'] = array('ID'=>'d92','IBLOCK_SECTION_ID'=>'520', 'NAME'=>'Маленькие', 'SECTION_PAGE_URL'=>'/catalog/santekhnika/kukhonnye_moyki/malenkie/');
$arSections['d93'] = array('ID'=>'d93','IBLOCK_SECTION_ID'=>'520', 'NAME'=>'Большие', 'SECTION_PAGE_URL'=>'/catalog/santekhnika/kukhonnye_moyki/bolshie/');
$arSections['d94'] = array('ID'=>'d94','IBLOCK_SECTION_ID'=>'520', 'NAME'=>'Узкие', 'SECTION_PAGE_URL'=>'/catalog/santekhnika/kukhonnye_moyki/uzkie/');
$arSections['d95'] = array('ID'=>'d95','IBLOCK_SECTION_ID'=>'520', 'NAME'=>'Глубокие', 'SECTION_PAGE_URL'=>'/catalog/santekhnika/kukhonnye_moyki/glubokie/');

//$arSections['d2'] = array('ID'=>'d2','IBLOCK_SECTION_ID'=>'t1', 'NAME'=>'Потолочные люстры', 'SECTION_PAGE_URL'=>'/catalog/lyustry/potolochnye-lyustry/');

if($arSections){
	$arResult = array();
	$cur_page = $GLOBALS['APPLICATION']->GetCurPage(true);
	$cur_page_no_index = $GLOBALS['APPLICATION']->GetCurPage(false);

	foreach($arSections as $ID => $arSection){
		$arSections[$ID]['SELECTED'] = CMenu::IsItemSelected($arSection['SECTION_PAGE_URL'], $cur_page, $cur_page_no_index);
		if($arSection['UF_CATALOG_ICON'])
		{
			$img=CFile::ResizeImageGet($arSection['UF_CATALOG_ICON'], Array('width'=>36, 'height'=>36), BX_RESIZE_IMAGE_PROPORTIONAL, true);
			$arSections[$ID]['IMAGES']=$img;
		}
		elseif($arSection['PICTURE']){
			$img=CFile::ResizeImageGet($arSection['PICTURE'], Array('width'=>50, 'height'=>50), BX_RESIZE_IMAGE_PROPORTIONAL, true);
			$arSections[$ID]['IMAGES']=$img;
		}
		if($arSection['IBLOCK_SECTION_ID']){
			if(!isset($arSections[$arSection['IBLOCK_SECTION_ID']]['CHILD'])){
				$arSections[$arSection['IBLOCK_SECTION_ID']]['CHILD'] = array();
			}
			$arSections[$arSection['IBLOCK_SECTION_ID']]['CHILD'][] = &$arSections[$arSection['ID']];
		}

		if($arSection['DEPTH_LEVEL'] == 1){
			$arResult[] = &$arSections[$arSection['ID']];
		}
	}
}?>