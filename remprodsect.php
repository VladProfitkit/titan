<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");?>

<?
/*$ar_new_groups = Array();
	$SECTIONID = 556;

	CModule::IncludeModule('iblock');
	$arSelect = Array("ID", "NAME", "IBLOCK_SECTION_ID");
	$arFilter = Array("IBLOCK_ID"=>IntVal(23),"IBLOCK_SECTION_ID" => $SECTIONID);
	$res = CIBlockElement::GetList(Array(), $arFilter, false, Array("nPageSize"=>100), $arSelect);
	while($ob = $res->GetNextElement())
	{
		$arFields = $ob->GetFields();

		$db_old_groups = CIBlockElement::GetElementGroups($arFields['ID'], true);	 
		while($ar_group = $db_old_groups->Fetch())
		{
			if($SECTIONID != $ar_group["ID"])
			{

	 			$ar_new_groups[$arFields['ID']][] = $ar_group["ID"];
			}
			elseif($SECTIONID == $ar_group["ID"])
			{
				$ar_new_groups[$arFields['ID']][] = 522;
			}   
		}
		
		
		 
	}
	if($ar_new_groups)
	{
		foreach ($ar_new_groups as $key => $value) {
			CIBlockElement::SetElementSection($key, $value);
		}
	}
	else
	{
		echo 'end';
	}*/
	
	/*echo '<pre>'; 
	print_r($ar_new_groups);
	echo '</pre>';*/
	

?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>