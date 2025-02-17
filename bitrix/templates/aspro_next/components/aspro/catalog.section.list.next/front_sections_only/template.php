<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<? $this->setFrameMode( true );?>
<?if($arResult['SECTIONS']):?>
    <div class="sections_wrapper">
        <?if($arParams["TITLE_BLOCK"] || $arParams["TITLE_BLOCK_ALL"]):?>
            <div class="top_block">
                <h3 class="title_block"><?=$arParams["TITLE_BLOCK"];?></h3>
                <a href="<?=SITE_DIR.$arParams["ALL_URL"];?>"><?=$arParams["TITLE_BLOCK_ALL"] ;?></a>
            </div>
        <?endif;?>
        <div class="list items">
            <div class="row margin0 flexbox">
                <?foreach($arResult['SECTIONS'] as $arSection):
                    $this->AddEditAction($arSection['ID'], $arSection['EDIT_LINK'], CIBlock::GetArrayByID($arSection["IBLOCK_ID"], "ELEMENT_EDIT"));
                    $this->AddDeleteAction($arSection['ID'], $arSection['DELETE_LINK'], CIBlock::GetArrayByID($arSection["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));?>
                    <?if($arParams['USE_FILTER_SECTION'] == 'Y' && $arParams['BRAND_NAME'] && empty($arSection['CUSTOM_URI']))
                    {
                        $arSection["SECTION_PAGE_URL"] .= "filter/brand-is-".CUtil::translit($arParams['BRAND_NAME'], "ru")."/apply/";
                    }?>
                    <div class="col-m-20 col-md-3 col-sm-4 col-xs-6">
                        <div class="item" id="<?=$this->GetEditAreaId($arSection['ID']);?>">
                            <div class="img shine">
                                <?if($arSection["PICTURE"]["SRC"]):?>
                                    <?$img = CFile::ResizeImageGet($arSection["PICTURE"]["ID"], array( "width" => 120, "height" => 120 ), BX_RESIZE_IMAGE_EXACT, true );?>
                                    <a href="<?=$arSection["SECTION_PAGE_URL"]?>" class="thumb"><img src="<?=$img["src"]?>" alt="<?=($arSection["PICTURE"]["ALT"] ? $arSection["PICTURE"]["ALT"] : $arSection["NAME"])?>" title="<?=($arSection["PICTURE"]["TITLE"] ? $arSection["PICTURE"]["TITLE"] : $arSection["NAME"])?>" /></a>
                                <?elseif($arSection["~PICTURE"]):?>
                                    <?$img = CFile::ResizeImageGet($arSection["~PICTURE"], array( "width" => 120, "height" => 120 ), BX_RESIZE_IMAGE_EXACT, true );?>
                                    <a href="<?=$arSection["SECTION_PAGE_URL"]?>" class="thumb"><img src="<?=$img["src"]?>" alt="<?=($arSection["PICTURE"]["ALT"] ? $arSection["PICTURE"]["ALT"] : $arSection["NAME"])?>" title="<?=($arSection["PICTURE"]["TITLE"] ? $arSection["PICTURE"]["TITLE"] : $arSection["NAME"])?>" /></a>
                                <?else:?>
                                    <a href="<?=$arSection["SECTION_PAGE_URL"]?>" class="thumb"><img src="<?=SITE_TEMPLATE_PATH?>/images/no_photo_medium.png" alt="<?=$arSection["NAME"]?>" title="<?=$arSection["NAME"]?>" height="90" /></a>
                                <?endif;?>
                            </div>
                            <div class="name">
                                <a href="<?=$arSection['SECTION_PAGE_URL'];?>" class="dark_link"><?=$arSection['NAME'];?></a>
                            </div>
                        </div>
                    </div>
                <?endforeach;?>
            </div>
        </div>
    </div>
<?endif;?>