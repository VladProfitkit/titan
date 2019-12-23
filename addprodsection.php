<?require_once($_SERVER['DOCUMENT_ROOT'] . "/bitrix/modules/main/include/prolog_before.php");?>
<?

if(!$_SESSION['count'])
{
	$_SESSION['count'] = 0;
}
CModule::IncludeModule('iblock');
$arSelect = Array("ID", "NAME",'IBLOCK_SECTION_ID',"PROPERTY_MATERIAL");
$arFilter = Array("IBLOCK_ID"=>IntVal(23),"PROPERTY_MATERIAL"=>4819	, "PROPERTY_SECTION_PRODUCT"=>false,"SECTION_ID"=>479, "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y"); //"PROPERTY_TIP" "PROPERTY_NAZNACHENIE" "PROPERTY_MONTAZH"
$res = CIBlockElement::GetList(Array(), $arFilter, false, array('nTopCount'=>100), $arSelect);
$count=0;
while($ob = $res->GetNextElement())
{
		$count++;
		$arFields = $ob->GetFields();
		
		$ELEMENT_ID = $arFields['ID'];  // код элемента
		$PROPERTY_CODE = "SECTION_PRODUCT";  // код свойства
		$PROPERTY_VALUE =479;  // раздел

		// Установим новое значение для данного свойства данного элемента
		CIBlockElement::SetPropertyValuesEx($ELEMENT_ID, false, array($PROPERTY_CODE => $PROPERTY_VALUE));
}
if($count==0)
{
    echo '<div>Все!</div>';
 	 echo $_SESSION['count'];
 	 unset($_SESSION['count']);
}
else
{
	$_SESSION['count'] += $count;
    die('<div>Удаление элементов... </div> <script>document.location="?add";</script>');
}
?> 