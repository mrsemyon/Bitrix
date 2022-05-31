<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Задание №1");
?><?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"contacts", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"IBLOCK_ID" => "5",
		"IBLOCK_TYPE" => "contacts",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "ФИО",
			2 => "Телефон",
			3 => "Адрес",
			4 => "",
		),
		"SET_TITLE" => "Y",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"COMPONENT_TEMPLATE" => "contacts"
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>