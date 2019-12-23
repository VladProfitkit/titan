<?if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();?>
<?$APPLICATION->IncludeComponent(
	"bitrix:map.yandex.view",
	"",
	Array(
		"CONTROLS" => array("ZOOM","MINIMAP","TYPECONTROL","SCALELINE"),
		"INIT_MAP_TYPE" => "MAP",
		"MAP_DATA" => "a:4:{s:10:\"yandex_lat\";d:59.96195157807399;s:10:\"yandex_lon\";d:30.464361560851994;s:12:\"yandex_scale\";i:15;s:10:\"PLACEMARKS\";a:2:{i:0;a:3:{s:3:\"LON\";d:30.463374507933;s:3:\"LAT\";d:59.961542720542;s:4:\"TEXT\";s:20:\"ОФИС 419###RN###\";}i:1;a:3:{s:3:\"LON\";d:30.464576137573;s:3:\"LAT\";d:59.96140822807;s:4:\"TEXT\";s:10:\"СКЛАД\";}}}",
		"MAP_HEIGHT" => "500",
		"MAP_ID" => "",
		"MAP_WIDTH" => "100%",
		"OPTIONS" => array("ENABLE_DBLCLICK_ZOOM","ENABLE_DRAGGING")
	)
);?>