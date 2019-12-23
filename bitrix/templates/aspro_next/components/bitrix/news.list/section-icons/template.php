<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<div class="wrapper_inner" style="background: #f9f9f9;">
	<div class="section-icons-block">
	<?foreach($arResult["ITEMS"] as $arItem):?>
		<?
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
		?>
		<div id="<?=$this->GetEditAreaId($arItem['ID']);?>">
			<a href="<?echo $arItem["PREVIEW_TEXT"];?>">
				<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"	/>	
				<div><?echo $arItem["NAME"]?></div>		
			
			</a>
		</div>
	<?endforeach;?>
	</div>
	<div class="button-show btn btn-default">Показать все</div>
	<div class="button-hide btn btn-default">Скрыть</div>
</div>
<script>
	$('.button-show').click(function(event) {
		$('.section-icons-block').find('div').show("slow");
		$(this).hide();
		$(this).next(".button-hide").show();

	});
	$('.button-hide').click(function(event) {
		$('.section-icons-block').find('div').not('div:nth-child(1),div:nth-child(2)').hide("slow");
		$(this).hide();
		$(this).prev(".button-show").show();
	});
	

</script>