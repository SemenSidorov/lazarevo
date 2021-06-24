<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Восстановление пароля");
?><?$APPLICATION->IncludeComponent(
	"bitrix:main.auth.forgotpasswd",
	"new",
	array(
		"AUTH_AUTH_URL" => "/personal/auch/",
		"AUTH_REGISTER_URL" => "/personal/auch/registration/",
		"COMPONENT_TEMPLATE" => "new"
	),
	false
);?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
