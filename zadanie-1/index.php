<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Задание №1");
?><?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"contacts", 
	array(
		"IBLOCK_ID" => "5",
		"IBLOCK_TYPE" => "contacts",
		"PROPERTY_CODE" => array(
			"FIO",
			"PHONE",
			"ADDRESS",
		),
		"FIELD_CODE" => array(
			"PROPERTY_ADDRESS.PROPERTY_CITY",
			"PROPERTY_ADDRESS.PROPERTY_STREET",
			"PROPERTY_ADDRESS.PROPERTY_HOUSE",
			"PROPERTY_ADDRESS.PROPERTY_APPARTMENT",
		),
		"COMPONENT_TEMPLATE" => "contacts"
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>