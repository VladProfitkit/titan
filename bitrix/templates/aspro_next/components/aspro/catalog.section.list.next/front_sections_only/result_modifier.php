<?
if(!empty($arParams['FOR_SELECT_CUSTOM_BRAND_SECTION_GOODS']['IBLOCK_ID'])&&!empty($arParams['FOR_SELECT_CUSTOM_BRAND_SECTION_GOODS']['CODE'])){
    $arSelectBrand = Array("ID", "PROPERTY_SECTION_GOODS_HAND");
    $arFilterBrand = Array("IBLOCK_ID"=>$arParams['FOR_SELECT_CUSTOM_BRAND_SECTION_GOODS']['IBLOCK_ID'], "CODE"=>$arParams['FOR_SELECT_CUSTOM_BRAND_SECTION_GOODS']['CODE']);
    $brandTask = CIBlockElement::GetList(Array(), $arFilterBrand, false, Array("nPageSize"=>1), $arSelectBrand);
    while($obTask = $brandTask->GetNextElement()) {
        $arFieldsBrandTask = $obTask->GetFields();
    }

    if(!empty($arFieldsBrandTask['PROPERTY_SECTION_GOODS_HAND_VALUE'])){
        $arFilterGoods = Array("IBLOCK_CODE"=>'sections_with_brand_goods', "ID"=>$arFieldsBrandTask['PROPERTY_SECTION_GOODS_HAND_VALUE']);
        $brandGoods = CIBlockElement::GetList(Array(), $arFilterGoods, false, Array("nPageSize"=>1), array());
        $arBuffer = array();
        while($obGoods = $brandGoods->GetNextElement()) {
            $arFieldsBrandGoods = $obGoods->GetFields();
            if(!empty($arFieldsBrandGoods['DETAIL_PICTURE'])){
                $rsFile = CFile::GetByID($arFieldsBrandGoods["DETAIL_PICTURE"]);

                if($arFile = $rsFile->Fetch()){
                    $arFile['SRC'] = '/upload/'.$arFile['SUBDIR'].'/'.$arFile['FILE_NAME'];
                    $arFieldsBrandGoods['PICTURE'] = $arFile;
                }
            }

            if(!empty($arFieldsBrandGoods['PREVIEW_TEXT'])){
                $arFieldsBrandGoods['SECTION_PAGE_URL'] = $arFieldsBrandGoods['PREVIEW_TEXT'];
                $arFieldsBrandGoods['CUSTOM_URI'] = 'Y';
            }

            array_push($arBuffer,$arFieldsBrandGoods);
        }
        if(!empty($arBuffer)){
            $arResult['SECTIONS'] = array_merge($arResult['SECTIONS'], $arBuffer);
            $arResult['SECTIONS_COUNT'] = count($arResult['SECTIONS']);
        }
    }
}
?>