<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");?>

<?
CModule::IncludeModule('iblock');

/**/ /**/

/*// раздел
$E_SECTION = 525;

//свойство
$E_VAL = 8416;
$E_NAME = "PROPERTY_TIP";

// группы
$E_GROUP = array('35025','35026','35027');







$arFilter = Array('IBLOCK_ID'=>23, 'GLOBAL_ACTIVE'=>'Y', 'SECTION_ID'=>$E_SECTION);
$db_list = CIBlockSection::GetList(Array($by=>$order), $arFilter, true);
while($ar_result = $db_list->GetNext())
{
 $sections[] = $ar_result['ID'];
}

$arSelect = Array("ID", "NAME", "DATE_ACTIVE_FROM","PROPERTY_MONTAZH");
$arFilter = Array("IBLOCK_ID"=>IntVal(23),$E_NAME=>$E_VAL, "SECTION_ID"=>$sections, "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y");//
$res = CIBlockElement::GetList(Array(), $arFilter, false, Array("nPageSize"=>1500), $arSelect);
while($ob = $res->GetNextElement())
{
	$arFields = $ob->GetFields();
	

	if($arFields['ID'])
	{
		$ELEMENT_ID = $arFields['ID'];  // код элемента
		$PROPERTY_CODE = "MAYBENEEDED";  // код свойства
		$PROPERTY_VALUE = $E_GROUP;  // значение свойства

		// Установим новое значение для данного свойства данного элемента
		CIBlockElement::SetPropertyValuesEx($ELEMENT_ID, false, array($PROPERTY_CODE => $PROPERTY_VALUE));
	}
}*/










/*$arSelect = Array("ID", "NAME", "DATE_ACTIVE_FROM",'PROPERTY_SECTION_PRODUCT');
$arFilter = Array("IBLOCK_ID"=>IntVal(23), "SECTION_ID"=>525, "PROPERTY_SECTION_PRODUCT"=>598, "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y");//
$res = CIBlockElement::GetList(Array(), $arFilter, false, Array("nPageSize"=>1500), $arSelect);
while($ob = $res->GetNextElement())
{
	$arFields = $ob->GetFields();
	

	if($arFields['ID'])
	{

		echo '<pre>'; 
		print_r($arFields);
		echo '</pre>';
		
		$ELEMENT_ID = $arFields['ID'];  // код элемента
		$PROPERTY_CODE = "SECTION_PRODUCT";  // код свойства
		$PROPERTY_VALUE = "";  // значение свойства

		// Установим новое значение для данного свойства данного элемента
		CIBlockElement::SetPropertyValuesEx($ELEMENT_ID, false, array($PROPERTY_CODE => $PROPERTY_VALUE));
	}
}*/





?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>