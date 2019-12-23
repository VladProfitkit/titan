<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();?>
<?if($GET["debug"] == "y")
	error_reporting(E_ERROR | E_PARSE);
IncludeTemplateLangFile(__FILE__);
global $APPLICATION, $arRegion, $arSite, $arTheme;
$arSite = CSite::GetByID(SITE_ID)->Fetch();
$htmlClass = ($_REQUEST && isset($_REQUEST['print']) ? 'print' : false);
$bIncludedModule = (\Bitrix\Main\Loader::includeModule("aspro.next"));?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?=LANGUAGE_ID?>" lang="<?=LANGUAGE_ID?>" <?=($htmlClass ? 'class="'.$htmlClass.'"' : '')?>>
<head>
	<title><?$APPLICATION->ShowTitle()?></title>
	<?$APPLICATION->ShowMeta("viewport");?>
	<?$APPLICATION->ShowMeta("HandheldFriendly");?>
	<?$APPLICATION->ShowMeta("apple-mobile-web-app-capable", "yes");?>
	<?$APPLICATION->ShowMeta("apple-mobile-web-app-status-bar-style");?>
	<?$APPLICATION->ShowMeta("SKYPE_TOOLBAR");?>
	<?$APPLICATION->ShowHead();?>
	<?$APPLICATION->AddHeadString('<script>BX.message('.CUtil::PhpToJSObject( $MESS, false ).')</script>', true);?>
	<?if($bIncludedModule)
		CNext::Start(SITE_ID);?>
		<meta name="yandex-verification" content="db2428e7fd50878f" />
		<meta name="google-site-verification" content="yECfR8BTupVUavuBbY3inyM6CZxLbt4BSYmCvkmoQME" />

</head>
<body class="<?=($bIncludedModule ? "fill_bg_".strtolower(CNext::GetFrontParametrValue("SHOW_BG_BLOCK")) : "");?>" id="main">


<!-- Yandex.Metrika counter upd-->
<script type="text/javascript" >
  (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
  m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
  (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

  ym(47589331, "init", {
       clickmap:true,
       trackLinks:true,
       accurateTrackBounce:true,
       webvisor:true,
       ecommerce:"dataLayer"
  });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/47589331"; style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<!-- Yandex.Metrika counter -->
<!--<script type="text/javascript" >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter47589331 = new Ya.Metrika({
                    id:47589331,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    ecommerce:"dataLayer"
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
    
    

    
</script>-->

<script>
	$('body').on('click','.show-category',function () {
		console.log("test");
    var thisButton = $(this);
    if(thisButton.hasClass('open')) {
        thisButton.removeClass("open");
        thisButton.html('Еще');
    }else{
        thisButton.addClass("open");
        thisButton.html('Скрыть');
    }

    $( ".hidden-category" ).toggle();
	return false;
}); 
</script>
<!--<noscript><div><img src="https://mc.yandex.ru/watch/47589331" style="position:absolute; left:-9999px;" alt="" /></div></noscript>-->
<!-- /Yandex.Metrika counter -->

	<div id="panel"><?$APPLICATION->ShowPanel();?></div>
	<?if(!$bIncludedModule):?>
		<?$APPLICATION->SetTitle(GetMessage("ERROR_INCLUDE_MODULE_ASPRO_NEXT_TITLE"));?>
		<center><?$APPLICATION->IncludeFile(SITE_DIR."include/error_include_module.php");?></center></body></html><?die();?>
	<?endif;?>

	<?$arTheme = $APPLICATION->IncludeComponent("aspro:theme.next", ".default", array("COMPONENT_TEMPLATE" => ".default"), false, array("HIDE_ICONS" => "Y"));?>
	<?include_once('defines.php');?>
	<?CNext::SetJSOptions();?>

	<div class="wrapper1 <?=($isIndex && $isShowIndexLeftBlock ? "with_left_block" : "");?> <?=CNext::getCurrentPageClass();?> <?=CNext::getCurrentThemeClasses();?>">
		<?CNext::get_banners_position('TOP_HEADER');?>

		<div class="header_wrap visible-lg visible-md title-v<?=$arTheme["PAGE_TITLE"]["VALUE"];?><?=($isIndex ? ' index' : '')?>">
			<header id="header">
				<?CNext::ShowPageType('header');?>
			</header>
		</div>
		<?CNext::get_banners_position('TOP_UNDERHEADER');?>

		<?if($arTheme["TOP_MENU_FIXED"]["VALUE"] == 'Y'):?>
			<div id="headerfixed">
				<?CNext::ShowPageType('header_fixed');?>
			</div>
		<?endif;?>

		<div id="mobileheader" class="visible-xs visible-sm">
			<?CNext::ShowPageType('header_mobile');?>
			<div id="mobilemenu" class="<?=($arTheme["HEADER_MOBILE_MENU_OPEN"]["VALUE"] == '1' ? 'leftside':'dropdown')?>">
				<?CNext::ShowPageType('header_mobile_menu');?>
			</div>
		</div>

		<?/*filter for contacts*/
		if($arRegion)
		{
			if($arRegion['LIST_STORES'] && !in_array('component', $arRegion['LIST_STORES']))
			{
				if($arTheme['STORES_SOURCE']['VALUE'] != 'IBLOCK')
					$GLOBALS['arRegionality'] = array('ID' => $arRegion['LIST_STORES']);
				else
					$GLOBALS['arRegionality'] = array('PROPERTY_STORE_ID' => $arRegion['LIST_STORES']);
			}
		}
		if($isIndex)
		{
			$GLOBALS['arrPopularSections'] = array('UF_POPULAR' => 1);
			$GLOBALS['arrFrontElements'] = array('PROPERTY_SHOW_ON_INDEX_PAGE_VALUE' => 'Y');
		}?>

		<div class="wraps hover_<?=$arTheme["HOVER_TYPE_IMG"]["VALUE"];?>" id="content">
			<?if(!$is404 && !$isForm && !$isIndex):?>
				<?$APPLICATION->ShowViewContent('section_bnr_content');?>
				<?if($APPLICATION->GetProperty("HIDETITLE") !== 'Y'):?>
					<!--title_content-->
					<?CNext::ShowPageType('page_title');?>
					<!--end-title_content-->
				<?endif;?>
				<?$APPLICATION->ShowViewContent('top_section_filter_content');?>
			<?endif;?>

			<?if($isIndex):?>
				<div class="wrapper_inner front <?=($isShowIndexLeftBlock ? "" : "wide_page");?>">
			<?elseif(!$isWidePage):?>
				<div class="wrapper_inner <?=($isHideLeftBlock ? "wide_page" : "");?>">
			<?endif;?>

				<?if(($isIndex && $isShowIndexLeftBlock) || (!$isIndex && !$isHideLeftBlock) && !$isBlog):?>
					<div class="right_block <?=(defined("ERROR_404") ? "error_page" : "");?> wide_<?=CNext::ShowPageProps("HIDE_LEFT_BLOCK");?>">
				<?endif;?>
					<div class="middle <?=($is404 ? 'error-page' : '');?>">
						<?CNext::get_banners_position('CONTENT_TOP');?>
						<?if(!$isIndex):?>
							<div class="container">
								<?//h1?>
								<?if($isHideLeftBlock && !$isWidePage):?>
									<div class="maxwidth-theme">
								<?endif;?>
								<?if($isBlog):?>
									<div class="row">
										<div class="col-md-9 col-sm-12 col-xs-12 content-md <?=CNext::ShowPageProps("ERROR_404");?>">
								<?endif;?>
						<?endif;?>
						<?CNext::checkRestartBuffer();?>