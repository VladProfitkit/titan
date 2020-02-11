<?php 
use Bitrix\Sale;

AddEventHandler("main", "OnBeforeProlog", "MyOnBeforePrologHandler",50);
AddEventHandler("sale", "OnOrderNewSendEmail", "OnOrderNewSendEmailHandler");

define("LOG_FILENAME", $_SERVER["DOCUMENT_ROOT"]."/log.txt");

function fileDump(&$arFields,$paramName = "arrName"){
    AddMessage2Log($paramName.' = '.print_r($arFields, true),'');
}


function MyOnBeforePrologHandler()
{
	global $APPLICATION;
   $pageurl = $APPLICATION->GetCurPage(false);
   $pageurlsub = substr($pageurl, 1, -1);
   $urlex = explode("/", $pageurlsub);

   $catalog = current($urlex);
   $elementend= end($urlex);
   $element = intval(preg_replace("/[^0-9]/", '', $elementend));
   if($elementend == $element)
   {
   
      if($catalog == "catalog" && gettype($element) == "integer" && $element != "")
      {
      	CModule::IncludeModule('iblock');
      	$arSelect = Array("ID", "NAME", "DATE_ACTIVE_FROM",'DETAIL_PAGE_URL');
      	$arFilter = Array("IBLOCK_ID"=>IntVal(23),"ID"=>$element, "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y");
      	$res = CIBlockElement::GetList(Array(), $arFilter, false, Array("nPageSize"=>1), $arSelect);
      	if($arFields = $res->fetch())
      	{
      	 	if($arFields['CODE'])
      	 	{ 		
      	 		header("HTTP/1.1 301 Moved Permanently"); 
      	 		header('Location: '.$_SERVER['HTTP_X_FORWARDED_PROTO']."://".$_SERVER['HTTP_HOST'].str_replace($element, $arFields['CODE'], $pageurl));
      	 		//echo $_SERVER['HTTP_X_FORWARDED_PROTO']."://".$_SERVER['HTTP_HOST'].str_replace($element, $arFields['CODE'], $pageurl);
      			exit;
      	 	}
       	}
      }
   }

}

function OnOrderNewSendEmailHandler($orderID, &$eventName, &$arFields){
  
    $order = Sale\Order::load($arFields['ORDER_ID']);
    $comment = $order->getField("USER_DESCRIPTION");
    $propertyCollection = $order->getPropertyCollection();
    $phonePropValue = $propertyCollection->getPhone();
    $phone = $phonePropValue->getValue();
    
    $arFields['PHONE'] = $phone;
    $arFields['COMMENT'] = $comment;
    
}
