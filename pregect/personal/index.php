<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Персональный раздел");
if(!$USER->IsAuthorized()){
	LocalRedirect("/personal/auch/");
}
?>
<div class="wrap">
	<div class="cabinet-page">
		<h1>Личный кабинет</h1>
		<div class="content">
			<nav class="menu flex">
				<a><img src="<?=SITE_TEMPLATE_PATH?>/img/cabinet-menu1.png"> Мои данные</a>
				<a href="/personal/order/list/"><img src="<?=SITE_TEMPLATE_PATH?>/img/cabinet-menu2.png"> Мои заказы</a>
				<a href="/personal/organisations/"><img src="<?=SITE_TEMPLATE_PATH?>/img/cabinet-menu4.png"> Мои организации</a>
			</nav>
			<?$APPLICATION->IncludeComponent(
				"bitrix:main.profile",
				"new",
				array(
					"CHECK_RIGHTS" => "N",
					"SEND_INFO" => "N",
					"SET_TITLE" => "N",
					"USER_PROPERTY" => array(
					),
					"USER_PROPERTY_NAME" => "",
					"COMPONENT_TEMPLATE" => "new"
				),
				false
			);?>
		</div>
	</div>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
