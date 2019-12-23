<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "Вы можете приехать к нам в офис, связаться по телефону и почте.");
$APPLICATION->SetPageProperty("title", "Контакты ");
$APPLICATION->SetTitle("Контакты");?>

<?CNext::ShowPageType('page_contacts');?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>