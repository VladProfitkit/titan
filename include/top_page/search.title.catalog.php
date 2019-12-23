<?$APPLICATION->IncludeComponent(
	"bitrix:search.title", 
	"corp", 
	array(
		"CATEGORY_0" => array(
			0 => "iblock_1c_catalog",
		),
		"CATEGORY_0_TITLE" => "ALL",
		"CATEGORY_0_iblock_1c_catalog" => array(
			0 => "all",
		),
		"CATEGORY_0_iblock_aspro_next_catalog" => array(
			0 => "all",
		),
		"CATEGORY_0_iblock_aspro_next_content" => array(
			0 => "all",
		),
		"CATEGORY_OTHERS_TITLE" => "OTHER",
		"CHECK_DATES" => "Y",
		"CONTAINER_ID" => "title-search_fixed",
		"CONVERT_CURRENCY" => "N",
		"INPUT_ID" => "title-search-input_fixed",
		"NUM_CATEGORIES" => "1",
		"ORDER" => "rank",
		"PAGE" => CNext::GetFrontParametrValue("CATALOG_PAGE_URL"),
		"PREVIEW_HEIGHT" => "38",
		"PREVIEW_TRUNCATE_LEN" => "50",
		"PREVIEW_WIDTH" => "38",
		"PRICE_CODE" => array(
			0 => "BASE",
		),
		"PRICE_VAT_INCLUDE" => "Y",
		"SHOW_ANOUNCE" => "N",
		"SHOW_INPUT" => "Y",
		"SHOW_INPUT_FIXED" => "Y",
		"SHOW_OTHERS" => "Y",
		"SHOW_PREVIEW" => "Y",
		"TOP_COUNT" => "10",
		"USE_LANGUAGE_GUESS" => "N",
		"COMPONENT_TEMPLATE" => "corp"
	),
	false,
	array(
		"ACTIVE_COMPONENT" => "Y"
	)
);?>