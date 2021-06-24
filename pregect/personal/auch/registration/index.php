<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Регистрация");
?><?$APPLICATION->IncludeComponent(
	"bitrix:main.register",
	"new",
	Array(
		"AUTH" => "N",
		"REQUIRED_FIELDS" => array("EMAIL","PERSONAL_PHONE"),
		"SET_TITLE" => "N",
		"SHOW_FIELDS" => array("EMAIL","NAME","LAST_NAME","PERSONAL_PHONE"),
		"SUCCESS_PAGE" => "/personal/auch/confirm/",
		"USER_PROPERTY" => array(),
		"USER_PROPERTY_NAME" => "",
		"USE_BACKURL" => "Y"
	)
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>