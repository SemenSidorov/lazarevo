<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
$curPage = $APPLICATION->GetCurPage();

CModule::IncludeModule('sale');
$data = CSaleBasket::GetList([], ["FUSER_ID" => CSaleBasket::GetBasketUserID(), "ORDER_ID" => false], false, false, []);
$inBasket = [];
while($d = $data->Fetch()){
	$inBasket[] = $d["PRODUCT_ID"];
}
$GLOBALS['inBasket'] = $inBasket;
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

  <?$APPLICATION->ShowHead();?>

  <title><?$APPLICATION->ShowTitle()?></title>

	<?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/style.css", true);?>
	<?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/slick.css", true);?>
	<?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/font-awesome.min.css", true);?>
	<?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/jquery-ui.css", true);?>
	<link href="https://allfont.ru/allfont.css?fonts=heroldctt" rel="stylesheet" type="text/css" />

	<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/jquery-3.4.1.min.js');?>
	<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/query-ui.js');?>
	<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/slick.min.js');?>
	<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/common.js');?>

	<script>
	  $( function() {
	    $( "#slider-range" ).slider({
	      range: true,
	      min: 1000,
	      max: 50000,
	      values: [ 1000, 48000 ],
	      slide: function( event, ui ) {
	        $( "#amount" ).val( ui.values[ 0 ] );
	        $( "#amount2" ).val( ui.values[ 1 ] );
	      }
	    });
	    $( "#amount" ).val( $( "#slider-range" ).slider( "values", 0 ) );
	    $( "#amount2" ).val( $( "#slider-range" ).slider( "values", 0 ) );
	  } );
	</script>
</head>
<body id="top">
<?$APPLICATION->ShowPanel()?>
<?$APPLICATION->IncludeComponent(
	"bitrix:catalog.section.list",
	"menu",
	Array(
		"ADD_SECTIONS_CHAIN" => "N",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"COMPONENT_TEMPLATE" => "menu",
		"COUNT_ELEMENTS" => "Y",
		"COUNT_ELEMENTS_FILTER" => "CNT_ACTIVE",
		"FILTER_NAME" => "sectionsFilter",
		"IBLOCK_ID" => "5",
		"IBLOCK_TYPE" => "catalog",
		"SECTION_CODE" => "",
		"SECTION_FIELDS" => array(0=>"",1=>"",),
		"SECTION_ID" => "",
		"SECTION_URL" => "",
		"SECTION_USER_FIELDS" => array(0=>"",1=>"",),
		"SHOW_PARENT_NAME" => "Y",
		"TOP_DEPTH" => "1",
		"VIEW_MODE" => "LINE"
	)
);?>
	<div class="menubg"></div>
	<header class="header">
		<div class="wrap flex">
			<div class="menu-button"></div>
			<div class="logo">
				<a href="/"><img src="<?=SITE_TEMPLATE_PATH?>/img/logo.png"></a>
			</div>
			<div class="adress">
				<a href="#"></a>
				Тульская обл, Щёкинский район, <br/>
				п. Лазарево, ул. Луговая, д. 1
			</div>
			<a href="tel:+74875172251" class="phone">+7 (48751) 72-251</a>
			<a href="tel:+74875172288" class="phone">+7 (48751) 72-288</a>
			<a href="mailto:info@lazarevo.ru" class="mail">info@lazarevo.ru</a>
			<div class="phones">
				<a href="tel:+74875172251">+7 (48751) 72-251</a>
				<a href="tel:+74875172288">+7 (48751) 72-288</a>
			</div>
			<div class="links">
				<a href="/personal/"></a>
				<a href="/personal/favorites/" class="favorites-header">
					<?
					global $USER;

					if($USER->IsAuthorized()){
					  $data = CUser::GetList(($by="ID"), ($order="ASC"), array('ID' => $USER->GetID()), array("SELECT" => array("UF_FAVORITES")));
					  $data = $data->Fetch();
						$count_favorites = count(json_decode($data["UF_FAVORITES"]));
						$GLOBALS['UF_FAVORITES'] = json_decode($data["UF_FAVORITES"]);
					}else{
						$count_favorites = count(json_decode($_COOKIE["UF_FAVORITES"]));
						$GLOBALS['UF_FAVORITES'] = json_decode($_COOKIE["UF_FAVORITES"]);
					}
					?>
					<span><?=$count_favorites?></span>
				</a>
				<a href="/personal/basket/" class="cart-header">
					<?
					CModule::IncludeModule('sale');
					$data = CSaleBasket::GetList([], ["FUSER_ID" => CSaleBasket::GetBasketUserID(), "ORDER_ID" => false], false, false, []);
					$count_basket = 0;
					while($d = $data->Fetch()){
						$count_basket++;
					}
					?>
					<span><?=$count_basket?></span>
				</a>
			</div>
			<a class="search-link"></a>
		</div>
	</header>
	<?$APPLICATION->IncludeComponent(
		"bitrix:menu",
		"new",
		Array(
			"ALLOW_MULTI_SELECT" => "N",
			"CHILD_MENU_TYPE" => "left",
			"DELAY" => "N",
			"MAX_LEVEL" => "1",
			"MENU_CACHE_GET_VARS" => array(0=>"",),
			"MENU_CACHE_TIME" => "3600",
			"MENU_CACHE_TYPE" => "N",
			"MENU_CACHE_USE_GROUPS" => "Y",
			"ROOT_MENU_TYPE" => "top",
			"USE_EXT" => "N"
		)
	);?>
	<div class="wrap">
		<?$APPLICATION->IncludeComponent(
			"bitrix:search.title",
			"new",
			Array(
				"CATEGORY_0" => array(0=>"iblock_catalog",),
				"CATEGORY_0_TITLE" => "",
				"CATEGORY_0_iblock_catalog" => array(0=>"5",),
				"CHECK_DATES" => "N",
				"CONTAINER_ID" => "title-search",
				"INPUT_ID" => "title-search-input",
				"NUM_CATEGORIES" => "1",
				"ORDER" => "date",
				"PAGE" => "#SITE_DIR#search/",
				"SHOW_INPUT" => "Y",
				"SHOW_OTHERS" => "N",
				"TOP_COUNT" => "5",
				"USE_LANGUAGE_GUESS" => "Y"
			)
		);?>
	</div>
	<?if($curPage !== "/"){?>
		<?$APPLICATION->IncludeComponent(
			"bitrix:breadcrumb",
			"new",
			Array(
				"PATH" => "",
				"SITE_ID" => "s1",
				"START_FROM" => "0"
			)
		);?>
		<?if(strpos($curPage, "/catalog/") === false){?>
			<div class="wrap">
				<h1 <?=$curPage == "/personal/basket/" ? 'class="basket-name"' : ""?>><?$APPLICATION->ShowTitle(false);?></h1>
			</div>
		<?}?>
	<?}?>
