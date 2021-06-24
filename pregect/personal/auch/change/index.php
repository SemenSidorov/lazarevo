<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Изменение пароля");
?><?$APPLICATION->IncludeComponent(
	"bitrix:main.auth.changepasswd",
	"",
	Array(
		"AUTH_AUTH_URL" => "/personal/auch/",
		"AUTH_REGISTER_URL" => "/personal/auch/registration/"
	)
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>