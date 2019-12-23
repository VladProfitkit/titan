<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?$this->setFrameMode(true);?>

<style>
    .maybsection-block .item a
    {
        display: -webkit-flex;
        display: -moz-flex;
        display: -ms-flex;
        display: -o-flex;
        display: flex;
        align-items: center;
        line-height: 18px;
        font-weight: 400;
        font-size: 13px;
        color: #000;
        height: 100%;
    }
    .maybsection-block .item a img
    {
        width: 90px!important;
       
        margin: 0!important;
         margin-right: 10px!important;
    }
   
    .maybsection-block .item:hover
    {
        box-shadow: 0 0 12px 0 rgba(0,0,0,0.15);
        
    }
    .maybsection-block .item:hover a
    {
        color: #00848d;
    } 
     .maybsection-block .item
    {
        border: 1px solid #eee;
        border-radius: 4px;
        padding: 10px 12px 10px;
        -webkit-transition: box-shadow ease-out 0.2s,border ease-out .2s;
        -moz-transition: box-shadow ease-out 0.2s,border ease-out .2s;
        -o-transition: box-shadow ease-out 0.2s,border ease-out .2s;
        transition: box-shadow ease-out 0.2s,border ease-out .2s;
        margin-bottom: 15px;
    }   

</style>
<div class="row maybsection-block">
	<?foreach($arResult["ITEMS"] as $arItem){?>
		<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
			<div class="item">
			
				<a href="<?=$arItem['DETAIL_PAGE_URL']?>">
					<img src="<?=$arItem["IMG"]["src"]?>" alt="<?=$a_alt;?>" title="<?=$a_title;?>" />
					<div>
						<div><?=$arItem['NAME'];?></div>


						<div class="cost prices clearfix">
							<?if( $arItem["OFFERS"]){?>
								<?$minPrice = false;
								if (isset($arItem['MIN_PRICE']) || isset($arItem['RATIO_PRICE'])){
									// $minPrice = (isset($arItem['RATIO_PRICE']) ? $arItem['RATIO_PRICE'] : $arItem['MIN_PRICE']);
									$minPrice = $arItem['MIN_PRICE'];
								}
								$offer_id=0;
								if($arParams["TYPE_SKU"]=="N"){
									$offer_id=$minPrice["MIN_ITEM_ID"];
								}
								$min_price_id=$minPrice["MIN_PRICE_ID"];
								if(!$min_price_id)
									$min_price_id=$minPrice["PRICE_ID"];
								if($minPrice["MIN_ITEM_ID"])
									$item_id=$minPrice["MIN_ITEM_ID"];
								$prefix = '';
								if('N' == $arParams['TYPE_SKU'] || $arParams['DISPLAY_TYPE'] !== 'block'){
									$prefix = GetMessage("CATALOG_FROM");
								}?>
								<div class="price only_price">
									<?if(strlen($minPrice["PRINT_VALUE"])):?>
										<?=$prefix;?> <span class="values_wrapper"><?=($minPrice['PRINT_DISCOUNT_VALUE'] ? $minPrice['PRINT_DISCOUNT_VALUE'] : $minPrice['PRINT_VALUE']);?></span><?if (($arParams["SHOW_MEASURE"]=="Y") && $strMeasure){?><span class="measure">/<?=$strMeasure?></span><?}?>
									<?endif;?>
								</div>
							<?}elseif ( $arItem["PRICES"] ){?>
								<? $arCountPricesCanAccess = 0;
								$min_price_id=0;
								foreach( $arItem["PRICES"] as $key => $arPrice ) { if($arPrice["CAN_ACCESS"]){$arCountPricesCanAccess++;} } ?>
								<?foreach($arItem["PRICES"] as $key => $arPrice){?>
									<?if($arPrice["CAN_ACCESS"]){
										$percent=0;
										if($arPrice["MIN_PRICE"]=="Y"){
											$min_price_id=$arPrice["PRICE_ID"];
										}?>
										<?$price = CPrice::GetByID($arPrice["ID"]);?>
										<?if($arCountPricesCanAccess > 1):?>
											<div class="price_name"><?=$price["CATALOG_GROUP_NAME"];?></div>
										<?endif;?>
										<div class="price only_price">
											<?if(strlen($arPrice["PRINT_VALUE"])):?>
												<span class="values_wrapper"><?=\Aspro\Functions\CAsproItem::getCurrentPrice("DISCOUNT_VALUE", $arPrice);?></span><?if (($arParams["SHOW_MEASURE"]=="Y") && $strMeasure){?><span class="measure">/<?=$strMeasure?></span><?}?>
											<?endif;?>
										</div>
									<?}?>
								<?}?>
							<?}?>
						</div>
					</div>
					
				</a>
			</div>
		</div>
	<?}?>
</div>





