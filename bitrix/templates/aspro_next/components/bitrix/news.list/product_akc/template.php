<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<? $this->setFrameMode( true ); ?>
<?if($arResult["ITEMS"]){?>
	<div class="news_akc_block clearfix">
        <?
        $rand_key = array_rand($arResult["ITEMS"], 1);
        $randomItem = $arResult["ITEMS"][$rand_key];
        ?>
        <div id="<?=$this->GetEditAreaId($randomItem['ID']);?>" class="item inner_wrap">
            <?if($randomItem["PREVIEW_PICTURE"]){
                $img_source=$randomItem["PREVIEW_PICTURE"];
            }elseif($randomItem["DETAIL_PICTURE"]){
                $img_source=$randomItem["DETAIL_PICTURE"];
            }?>
            <?if($img_source){?>
                <div class="img shine">
                    <?$img = CFile::ResizeImageGet($img_source, array("width" => 615, "height" => 400), BX_RESIZE_IMAGE_PROPORTIONAL_ALT, true, false, false, 75 );?>
                    <a href="<?=$randomItem["DETAIL_PAGE_URL"]?>">
                        <img class="img-responsive" src="<?=$img["src"]?>" alt="<?=$randomItem["NAME"];?>"  />
                    </a>
                </div>
            <?}?>
        </div>
	</div>
<?}?>