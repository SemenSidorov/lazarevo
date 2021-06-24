<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Авторизация");
?><?$APPLICATION->IncludeComponent("bitrix:main.auth.form", "new", Array(
	"AUTH_FORGOT_PASSWORD_URL" => "/personal/auch/forgot/",	// Страница для восстановления пароля
		"AUTH_REGISTER_URL" => "/personal/auch/registration/",	// Страница для регистрации
		"AUTH_SUCCESS_URL" => "/personal/",	// Страница после успешной авторизации
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>