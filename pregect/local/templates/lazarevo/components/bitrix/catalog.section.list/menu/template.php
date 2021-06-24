<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);?>

<div class="site-menu tabs2 flex">
	<a class="close"></a>
	<ul class="tabNavigation">
		<div class="logo"><img src="<?=SITE_TEMPLATE_PATH?>/img/logo.png"></div>
		<?foreach ($arResult["SECTIONS"] as $item) {?>

		<li><a href="#cat<?=$item["ID"]?>"><img src="<?=$item["PICTURE"]["SRC"]?>"><?=$item["NAME"]?></a></li>

		<?}?>
	</ul>


	<div class="site-menu__wrapper">
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
		
		<div class="site-menu__tabs">
			<?foreach ($arResult["SECTIONS"] as $item) {?>

				<div id="cat<?=$item["ID"]?>" class="tab-content">
				
				
					<?$APPLICATION->IncludeComponent(
						"bitrix:catalog.section",
						"menu",
						Array(
							"ACTION_VARIABLE" => "action",
							"ADD_PICT_PROP" => "-",
							"ADD_PROPERTIES_TO_BASKET" => "Y",
							"ADD_SECTIONS_CHAIN" => "N",
							"ADD_TO_BASKET_ACTION" => "ADD",
							"AJAX_MODE" => "N",
							"AJAX_OPTION_ADDITIONAL" => "",
							"AJAX_OPTION_HISTORY" => "N",
							"AJAX_OPTION_JUMP" => "N",
							"AJAX_OPTION_STYLE" => "Y",
							"BACKGROUND_IMAGE" => "-",
							"BASKET_URL" => "/personal/basket/",
							"BROWSER_TITLE" => "-",
							"CACHE_FILTER" => "N",
							"CACHE_GROUPS" => "Y",
							"CACHE_TIME" => "36000000",
							"CACHE_TYPE" => "A",
							"COMPATIBLE_MODE" => "Y",
							"COMPONENT_TEMPLATE" => "menu",
							"CONVERT_CURRENCY" => "N",
							"CUSTOM_FILTER" => "{\"CLASS_ID\":\"CondGroup\",\"DATA\":{\"All\":\"AND\",\"True\":\"True\"},\"CHILDREN\":[]}",
							"DETAIL_URL" => "",
							"DISABLE_INIT_JS_IN_COMPONENT" => "N",
							"DISPLAY_BOTTOM_PAGER" => "N",
							"DISPLAY_COMPARE" => "N",
							"DISPLAY_TOP_PAGER" => "N",
							"ELEMENT_SORT_FIELD" => "id",
							"ELEMENT_SORT_FIELD2" => "sort",
							"ELEMENT_SORT_ORDER" => "desc",
							"ELEMENT_SORT_ORDER2" => "asc",
							"ENLARGE_PRODUCT" => "STRICT",
							"FILTER_NAME" => "arrFilter",
							"HIDE_NOT_AVAILABLE" => "Y",
							"HIDE_NOT_AVAILABLE_OFFERS" => "Y",
							"IBLOCK_ID" => "5",
							"IBLOCK_TYPE" => "catalog",
							"INCLUDE_SUBSECTIONS" => "A",
							"LABEL_PROP" => array(),
							"LAZY_LOAD" => "N",
							"LINE_ELEMENT_COUNT" => "3",
							"LOAD_ON_SCROLL" => "N",
							"MESSAGE_404" => "",
							"MESS_BTN_ADD_TO_BASKET" => "В корзину",
							"MESS_BTN_BUY" => "Купить",
							"MESS_BTN_DETAIL" => "Подробнее",
							"MESS_BTN_SUBSCRIBE" => "Подписаться",
							"MESS_NOT_AVAILABLE" => "Нет в наличии",
							"META_DESCRIPTION" => "-",
							"META_KEYWORDS" => "-",
							"OFFERS_LIMIT" => "5",
							"PAGER_BASE_LINK_ENABLE" => "N",
							"PAGER_DESC_NUMBERING" => "N",
							"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
							"PAGER_SHOW_ALL" => "N",
							"PAGER_SHOW_ALWAYS" => "N",
							"PAGER_TEMPLATE" => ".default",
							"PAGER_TITLE" => "Товары",
							"PAGE_ELEMENT_COUNT" => "18",
							"PARTIAL_PRODUCT_PROPERTIES" => "N",
							"PRICE_CODE" => array(0=>"RUB",),
							"PRICE_VAT_INCLUDE" => "Y",
							"PRODUCT_BLOCKS_ORDER" => "price,props,sku,quantityLimit,quantity,buttons",
							"PRODUCT_ID_VARIABLE" => "id",
							"PRODUCT_PROPS_VARIABLE" => "prop",
							"PRODUCT_QUANTITY_VARIABLE" => "quantity",
							"PRODUCT_ROW_VARIANTS" => "[{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false}]",
							"PRODUCT_SUBSCRIPTION" => "N",
							"RCM_PROD_ID" => $_REQUEST["PRODUCT_ID"],
							"RCM_TYPE" => "personal",
							"SECTION_CODE" => "",
							"SECTION_ID" => $item["ID"],
							"SECTION_NAME" => $item["NAME"],
							"SECTION_ID_VARIABLE" => "SECTION_ID",
							"SECTION_URL" => "",
							"SECTION_USER_FIELDS" => array(0=>"",1=>"",),
							"SEF_MODE" => "N",
							"SET_BROWSER_TITLE" => "N",
							"SET_LAST_MODIFIED" => "N",
							"SET_META_DESCRIPTION" => "N",
							"SET_META_KEYWORDS" => "N",
							"SET_STATUS_404" => "N",
							"SET_TITLE" => "N",
							"SHOW_404" => "N",
							"SHOW_ALL_WO_SECTION" => "Y",
							"SHOW_CLOSE_POPUP" => "N",
							"SHOW_DISCOUNT_PERCENT" => "N",
							"SHOW_FROM_SECTION" => "N",
							"SHOW_MAX_QUANTITY" => "N",
							"SHOW_OLD_PRICE" => "Y",
							"SHOW_PRICE_COUNT" => "1",
							"SHOW_SLIDER" => "N",
							"SLIDER_INTERVAL" => "3000",
							"SLIDER_PROGRESS" => "N",
							"TEMPLATE_THEME" => "blue",
							"USE_ENHANCED_ECOMMERCE" => "N",
							"USE_MAIN_ELEMENT_SECTION" => "N",
							"USE_PRICE_COUNT" => "N",
							"USE_PRODUCT_QUANTITY" => "N"
						)
					);?>
				</div>
			<?}?>
		</div>
		<div class="button">
			<a href="/catalog/">Перейти в каталог</a>
		</div>

	</div>



</div>
