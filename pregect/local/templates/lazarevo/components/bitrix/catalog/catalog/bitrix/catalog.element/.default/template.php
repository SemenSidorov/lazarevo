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
$this->setFrameMode(true);
global $UF_FAVORITES;
global $inBasket;
?>

<div class="wrap">
	<div class="item-page">
		<div class="categories">
			<a href="#">Колбасы варёные</a>
			<a href="#">Ветчина, рулеты</a>
			<a href="#">Копчености и копчено-вареная продукция</a>
			<a href="#">Сало, шпик</a>
			<a href="#">Полуфабрикаты</a>
			<a href="#">Субпродукты</a>
			<a href="#">Мясо</a>
			<a href="#">Сосиски, сардельки</a>
			<a href="#">Молочная продукция</a>
			<a href="#">Колбасы варёные</a>
			<a href="#">Ветчина, рулеты</a>
			<a href="#">Копчености и копчено-вареная продукция</a>
			<a href="#">Сало, шпик</a>
			<a href="#">Полуфабрикаты</a>
			<a href="#">Субпродукты</a>
			<a href="#">Мясо</a>
			<a href="#">Сосиски, сардельки</a>
			<a href="#">Молочная продукция</a>
		</div>
		<div class="main-info flex">
			<div class="photos">
				<div class="badges">
					<?if($arResult["PRICES"]["RUB"]["VALUE_VAT"] !== $arResult["PRICES"]["RUB"]["DISCOUNT_VALUE_VAT"]){?>
						<a href="#" class="c1">Акция</a>
					<?}?>
					<?if($arResult["PROPERTIES"]["NEW"]["VALUE"] == "Y"){?>
						<a href="#" class="c2">Новинка</a>
					<?}?>
				</div>
				<div class="slider-for">
          <?foreach ($arResult["PROPERTIES"]["ADD_PICTURES"]["VALUE"] as $file) {?>
					<div class="item"><img src="<?=$file["SRC"]?>"></div>
          <?}?>
				</div>
				<div class="slider-nav">
          <?foreach ($arResult["PROPERTIES"]["ADD_PICTURES"]["VALUE"] as $file) {?>
					<div class="item"><img src="<?=$file["SRC"]?>"></div>
          <?}?>
				</div>
			</div>
			<div class="info">
				<h1><?=$arResult["NAME"]?></h1>
				<div class="items">
					<?=$arResult["SECTION_NAME"]?>
				</div>
				<div></div>
				<?
					$otzv = [
						"1" => "Отзыв",
						"2" => "Отзыва",
						"3" => "Отзыва",
						"4" => "Отзыва",
						"5" => "Отзывов",
						"6" => "Отзывов",
						"7" => "Отзывов",
						"8" => "Отзывов",
						"9" => "Отзывов",
						"0" => "Отзывов",
					];
				?>
				<a href="#" class="comments">
					<?if(strlen($arResult['PROPERTIES']['BLOG_COMMENTS_CNT']['VALUE']) > 0){
						echo $arResult['PROPERTIES']['BLOG_COMMENTS_CNT']['VALUE'];
						if($arResult['PROPERTIES']['BLOG_COMMENTS_CNT']['VALUE'] > 4 && $arResult['PROPERTIES']['BLOG_COMMENTS_CNT']['VALUE'] < 20){
							echo " Отзывов";
						}else{
							echo " " . $otzv[($arResult['PROPERTIES']['BLOG_COMMENTS_CNT']['VALUE'] % 10)];
						}
					}else{
						echo "0 Отзывов";
					}
					?>
				</a>
				<div class="rating">
					<?$APPLICATION->IncludeComponent(
						"bitrix:iblock.vote",
						"bootstrap_v4",
						array(
							"IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
							"IBLOCK_ID" => $arParams["IBLOCK_ID"],
							"ELEMENT_ID" => $arResult["ID"],
							"CACHE_TYPE" => "A",
							"CACHE_TIME" => "3600",
							"MAX_VOTE" => "5",
							"VOTE_NAMES" => array(
							  0 => "0",
							  1 => "1",
							  2 => "2",
							  3 => "3",
							  4 => "4",
							  5 => "",
							),
							"SET_STATUS_404" => "Y",
							"DISPLAY_AS_RATING" => "vote_avg"
						),
						false
					);?>
					<!-- <i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star bad"></i> -->
				</div>
				<div class="price">
          <?if($arResult["PRICES"]["RUB"]["VALUE_VAT"] !== $arResult["PRICES"]["RUB"]["DISCOUNT_VALUE_VAT"]){?>
					<span class="old">
						<?=$arResult["PRICES"]["RUB"]["PRINT_VALUE_VAT"]?>
					</span>
					<?}?>
					<div class="new">
						<span><?=$arResult["PRICES"]["RUB"]["PRINT_DISCOUNT_VALUE_VAT"]?></span> / за <?=$arResult["CATALOG_MEASURE_NAME"]?>
					</div>
				</div>
				<button data-id="<?=$arResult["ID"]?>" class="tocart <?=in_array($arResult["ID"], $inBasket) ? 'active' : ""?>">В корзину <span></span></button>
				<div class="number">
					<span class="minus"></span>
					<input style="color: black;" type="text" value="1">
					<span class="plus"></span>
				</div>
				<div class="detail add-favorite <?=in_array($arResult["ID"], $UF_FAVORITES) ? "active" : ""?>" data-id="<?=$arResult["ID"]?>"></div>
				<!--a href="#" class="fav-link"></a-->
				<ul>
				<?foreach ($arResult["PROPERTIES"]["GOST"]["VALUE"] as $value) {?>
					<li><?=$value?></li>
				<?}?>
				</ul>
			</div>
		</div>
		<div class="tabs">
			<ul class="tabNavigation">
				<li><a href="#t1">Описание</a></li>
				<li><a href="#t2">Характеристики</a></li>
				<li><a href="#t3">Отзывы</a></li>
			</ul>
			<div id="t1" class="tab-content">
				<?=$arResult["~DETAIL_TEXT"]?>
			</div>
			<div id="t2" class="tab-content">
				<table>
					<?foreach ($arResult["PROPERTIES"]["CHARACTERISTICS"]["VALUE"] as $key => $val) {?>
					<tr>
						<td><?=$arResult["PROPERTIES"]["CHARACTERISTICS"]["DESCRIPTION"][$key]?></td><td><?=$val?></td>
					</tr>
					<?}?>
				</table>
			</div>
			<div id="t3" class="tab-content">
				<?$APPLICATION->IncludeComponent(
					"bitrix:catalog.comments",
					"",
					Array(
						"AJAX_POST" => "Y",
						"BLOG_TITLE" => "",
						"BLOG_URL" => $arParams['BLOG_URL'],
						"BLOG_USE" => "Y",
						"CACHE_GROUPS" => $arParams['CACHE_GROUPS'],
						"CACHE_TIME" => "3600",
						"CACHE_TYPE" => "A",
						"COMMENTS_COUNT" => "10",
						"COMPONENT_TEMPLATE" => ".default",
						"ELEMENT_CODE" => "",
						"ELEMENT_ID" => $arResult['ID'],
						"EMAIL_NOTIFY" => "N",
						"FB_USE" => "N",
						"IBLOCK_ID" => $arParams["IBLOCK_ID"],
						"IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
						"PATH_TO_SMILE" => "",
						"RATING_TYPE" => "",
						"SHOW_DEACTIVATED" => "N",
						"SHOW_RATING" => "Y",
						"SHOW_SPAM" => "Y",
						"TEMPLATE_THEME" => "black",
						"URL_TO_COMMENT" => $APPLICATION->GetCurPage(),
						"VK_USE" => "N",
						"WIDTH" => ""
					),
					$component,
					Array(
						'HIDE_ICONS' => 'Y'
					)
				);?>
				<?/*$APPLICATION->IncludeComponent(
					"bitrix:catalog.comments",
					"",
					Array(
						"BLOG_USE" => "N",
						"CACHE_TIME" => "0",
						"CACHE_TYPE" => "A",
						"CHECK_DATES" => "Y",
						"COMMENTS_COUNT" => "5",
						"ELEMENT_CODE" => "",
						"ELEMENT_ID" => $arResult["ID"],
						"FB_USE" => "N",
						"IBLOCK_ID" => "5",
						"IBLOCK_TYPE" => "catalog",
						"SHOW_DEACTIVATED" => "N",
						"TEMPLATE_THEME" => "blue",
						"URL_TO_COMMENT" => "",
						"VK_USE" => "N",
						"WIDTH" => ""
					)
				);*/?>
				<!-- <div class="flex">
					<div class="reviews-form">
						<div class="name">
							Добавить отзыв
						</div>
						<div class="field">
							<div class="rating-area">
								<input type="radio" id="star-5" name="rating" value="5">
								<label for="star-5" title="Оценка «5»"></label>
								<input type="radio" id="star-4" name="rating" value="4">
								<label for="star-4" title="Оценка «4»"></label>
								<input type="radio" id="star-3" name="rating" value="3">
								<label for="star-3" title="Оценка «3»"></label>
								<input type="radio" id="star-2" name="rating" value="2">
								<label for="star-2" title="Оценка «2»"></label>
								<input type="radio" id="star-1" name="rating" value="1">
								<label for="star-1" title="Оценка «1»"></label>
							</div>
							<input type="text" placeholder="Имя">
						</div>
						<textarea placeholder="Отзыв"></textarea>
						<input type="submit" value="Отправить">
					</div>
					<div class="reviews">
						<div class="item">
							<div class="name flex">
								<div>Петр</div>
								<div>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star bad"></i>
								</div>
							</div>
							<p>Отличный товар, все сделано очень качественно. Магазин доставил быыстро и в кратчайшие сроки, все было хорошо упаковано</p>
						</div>
						<div class="item">
							<div class="name flex">
								<div>Петр</div>
								<div>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star bad"></i>
								</div>
							</div>
							<p>Отличный товар, все сделано очень качественно. Магазин доставил быыстро и в кратчайшие сроки, все было хорошо упаковано</p>
						</div>
					</div>
				</div> -->
			</div>
		</div>
		<?$GLOBALS['sectionFilter'] = ["!ID" => $arResult["ID"]];?>
		<?$APPLICATION->IncludeComponent(
			"bitrix:catalog.section",
			"similar",
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
				"CONVERT_CURRENCY" => "N",
				"CUSTOM_FILTER" => "null",
				"DETAIL_URL" => "",
				"DISABLE_INIT_JS_IN_COMPONENT" => "N",
				"DISPLAY_BOTTOM_PAGER" => "N",
				"DISPLAY_COMPARE" => "N",
				"DISPLAY_TOP_PAGER" => "N",
				"ELEMENT_SORT_FIELD" => "sort",
				"ELEMENT_SORT_FIELD2" => "id",
				"ELEMENT_SORT_ORDER" => "asc",
				"ELEMENT_SORT_ORDER2" => "desc",
				"ENLARGE_PRODUCT" => "STRICT",
				"FILTER_NAME" => "sectionFilter",
				"HIDE_NOT_AVAILABLE" => "Y",
				"HIDE_NOT_AVAILABLE_OFFERS" => "Y",
				"IBLOCK_ID" => "5",
				"IBLOCK_TYPE" => "catalog",
				"INCLUDE_SUBSECTIONS" => "Y",
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
				"PRICE_CODE" => array("RUB"),
				"PRICE_VAT_INCLUDE" => "Y",
				"PRODUCT_BLOCKS_ORDER" => "price,props,sku,quantityLimit,quantity,buttons",
				"PRODUCT_ID_VARIABLE" => "id",
				"PRODUCT_PROPS_VARIABLE" => "prop",
				"PRODUCT_QUANTITY_VARIABLE" => "quantity",
				"PRODUCT_ROW_VARIANTS" => "[{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false}]",
				"PRODUCT_SUBSCRIPTION" => "N",
				"PROPERTY_CODE_MOBILE" => array(),
				"RCM_PROD_ID" => $_REQUEST["PRODUCT_ID"],
				"RCM_TYPE" => "personal",
				"SECTION_CODE" => "",
				"SECTION_ID" => $arResult["IBLOCK_SECTION_ID"],
				"SECTION_ID_VARIABLE" => "SECTION_ID",
				"SECTION_URL" => "",
				"SECTION_USER_FIELDS" => array("", ""),
				"SEF_MODE" => "N",
				"SET_BROWSER_TITLE" => "N",
				"SET_LAST_MODIFIED" => "N",
				"SET_META_DESCRIPTION" => "N",
				"SET_META_KEYWORDS" => "N",
				"SET_STATUS_404" => "N",
				"SET_TITLE" => "N",
				"SHOW_404" => "N",
				"SHOW_ALL_WO_SECTION" => "N",
				"SHOW_CLOSE_POPUP" => "N",
				"SHOW_DISCOUNT_PERCENT" => "N",
				"SHOW_FROM_SECTION" => "N",
				"SHOW_MAX_QUANTITY" => "N",
				"SHOW_OLD_PRICE" => "N",
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
</div>
