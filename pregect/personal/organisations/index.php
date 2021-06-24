<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Мои организации");
if(!$USER->IsAuthorized()){
	LocalRedirect("/personal/auch/");
}
?>
<div class="wrap">
	<div class="cabinet-page">
		<h1>Личный кабинет</h1>
		<div class="content">
			<nav class="menu flex">
				<a href="/personal/"><img src="<?=SITE_TEMPLATE_PATH?>/img/cabinet-menu1.png"> Мои данные</a>
				<a href="/personal/order/list/"><img src="<?=SITE_TEMPLATE_PATH?>/img/cabinet-menu2.png"> Мои заказы</a>
				<a><img src="<?=SITE_TEMPLATE_PATH?>/img/cabinet-menu4.png"> Мои организации</a>
			</nav>
      <?$APPLICATION->IncludeComponent(
	"bitrix:iblock.element.add",
	"new",
	array(
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"ALLOW_DELETE" => "Y",
		"ALLOW_EDIT" => "Y",
		"COMPONENT_TEMPLATE" => "new",
		"CUSTOM_TITLE_DATE_ACTIVE_FROM" => "",
		"CUSTOM_TITLE_DATE_ACTIVE_TO" => "",
		"CUSTOM_TITLE_DETAIL_PICTURE" => "",
		"CUSTOM_TITLE_DETAIL_TEXT" => "",
		"CUSTOM_TITLE_IBLOCK_SECTION" => "",
		"CUSTOM_TITLE_NAME" => "",
		"CUSTOM_TITLE_PREVIEW_PICTURE" => "",
		"CUSTOM_TITLE_PREVIEW_TEXT" => "",
		"CUSTOM_TITLE_TAGS" => "",
		"DEFAULT_INPUT_SIZE" => "30",
		"DETAIL_TEXT_USE_HTML_EDITOR" => "N",
		"ELEMENT_ASSOC" => "CREATED_BY",
		"GROUPS" => array(
			0 => "6",
		),
		"IBLOCK_ID" => "10",
		"IBLOCK_TYPE" => "user",
		"LEVEL_LAST" => "Y",
		"MAX_FILE_SIZE" => "0",
		"MAX_LEVELS" => "100000",
		"MAX_USER_ENTRIES" => "100000",
		"NAV_ON_PAGE" => "10",
		"PREVIEW_TEXT_USE_HTML_EDITOR" => "N",
		"PROPERTY_CODES" => array(
			0 => "20",
			1 => "21",
			2 => "22",
			3 => "23",
			4 => "24",
			5 => "25",
			6 => "26",
			7 => "27",
			8 => "28",
			9 => "29",
			10 => "NAME",
		),
		"PROPERTY_CODES_REQUIRED" => array(
			0 => "NAME",
		),
		"RESIZE_IMAGES" => "N",
		"SEF_MODE" => "N",
		"STATUS" => "ANY",
		"STATUS_NEW" => "N",
		"USER_MESSAGE_ADD" => "",
		"USER_MESSAGE_EDIT" => "",
		"USE_CAPTCHA" => "N"
	),
	false
);?>
		</div>
	</div>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
