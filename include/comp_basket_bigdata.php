<?global $arRegion;
if($arRegion)
{
	if($arRegion['LIST_PRICES'])
	{
		if(reset($arRegion['LIST_PRICES']) != 'component')
			$arParams['PRICE_CODE'] = array_keys($arRegion['LIST_PRICES']);
	}
	if($arRegion['LIST_STORES'])
	{
		if(reset($arRegion['LIST_STORES']) != 'component')
			$arParams['STORES'] = $arRegion['LIST_STORES'];
	}
}
?>
<?$APPLICATION->IncludeComponent(
	"bitrix:catalog.bigdata.products",
	"next_new",
	Array(
		"={\"ADDITIONAL_PICT_PROP_\".\$ElementOfferIblockID}" => $arParams["OFFER_ADD_PICT_PROP"],
		"={\"CART_PROPERTIES_\".\$arParams[\"IBLOCK_ID\"]}" => $arParams["PRODUCT_PROPERTIES"],
		"={\"OFFER_TREE_PROPS_\".\$ElementOfferIblockID}" => $arParams["OFFER_TREE_PROPS"],
		"={\"PROPERTY_CODE_\".\$arParams[\"IBLOCK_ID\"]}" => $arParams["LIST_PROPERTY_CODE"],
		"ACTION_VARIABLE" => "ACTION",
		"ADDITIONAL_PICT_PROP_17" => "MORE_PHOTO",
		"ADDITIONAL_PICT_PROP_20" => "MORE_PHOTO",
		"ADDITIONAL_PICT_PROP_23" => "MORE_PHOTO",
		"ADD_PROPERTIES_TO_BASKET" => "N",
		"BASKET_URL" => SITE_DIR."basket/",
		"CACHE_GROUPS" => "N",
		"CACHE_TIME" => "86400",
		"CACHE_TYPE" => "N",
		"CART_PROPERTIES_17" => array(""),
		"CART_PROPERTIES_20" => array(""),
		"CART_PROPERTIES_23" => array(""),
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"CONVERT_CURRENCY" => "N",
		"CURRENCY_ID" => $arParams["CURRENCY_ID"],
		"DEPTH" => "2",
		"DETAIL_URL" => "",
		"DISPLAY_COMPARE" => "Y",
		"HIDE_NOT_AVAILABLE" => "Y",
		"IBLOCK_ID" => "23",
		"IBLOCK_TYPE" => "1c_catalog",
		"ID" => "",
		"LABEL_PROP_17" => "-",
		"LABEL_PROP_23" => "-",
		"LINE_ELEMENT_COUNT" => "5",
		"MESS_BTN_BUY" => "Купить",
		"MESS_BTN_DETAIL" => "Подробнее",
		"MESS_BTN_SUBSCRIBE" => "Подписаться",
		"MESS_NOT_AVAILABLE" => $arParams["MESS_NOT_AVAILABLE"],
		"OFFER_TREE_PROPS_20" => array(),
		"PAGE_ELEMENT_COUNT" => "20",
		"PARTIAL_PRODUCT_PROPERTIES" => "N",
		"PRICE_CODE" => array("Розница"),
		"PRICE_VAT_INCLUDE" => "N",
		"PRODUCT_ID_VARIABLE" => "ID",
		"PRODUCT_PROPS_VARIABLE" => $arParams["PRODUCT_PROPS_VARIABLE"],
		"PRODUCT_QUANTITY_VARIABLE" => $arParams["PRODUCT_QUANTITY_VARIABLE"],
		"PRODUCT_SUBSCRIPTION" => "N",
		"PROPERTY_CODE_17" => array("",""),
		"PROPERTY_CODE_20" => array("",""),
		"PROPERTY_CODE_23" => array(""),
		"RCM_TYPE" => "bestsell",
		"SALE_STIKER" => $arParams["SALE_STIKER"],
		"SECTION_CODE" => $arResult["VARIABLES"]["SECTION_CODE"],
		"SECTION_ELEMENT_CODE" => $arResult["VARIABLES"]["SECTION_CODE"],
		"SECTION_ELEMENT_ID" => $arResult["VARIABLES"]["SECTION_ID"],
		"SECTION_ID" => $arResult["VARIABLES"]["SECTION_ID"],
		"SHOW_DISCOUNT_PERCENT" => "Y",
		"SHOW_FROM_SECTION" => "N",
		"SHOW_IMAGE" => "Y",
		"SHOW_MEASURE_WITH_RATIO" => "N",
		"SHOW_NAME" => "Y",
		"SHOW_OLD_PRICE" => "Y",
		"SHOW_PRICE_COUNT" => "1",
		"SHOW_PRODUCTS_17" => "Y",
		"SHOW_PRODUCTS_23" => "N",
		"SHOW_RATING" => "Y",
		"STIKERS_PROP" => $arParams["STIKERS_PROP"],
		"STORES" => $arParams["STORES"],
		"TEMPLATE_THEME" => "blue",
		"USE_PRODUCT_QUANTITY" => "N",
		"USE_REGION" => ($arRegion?"Y":"N")
	),
false,
Array(
	'HIDE_ICONS' => 'Y'
)
);?>