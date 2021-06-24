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

<div class="flex">
	<?foreach ($arResult["ITEMS"] as $item) {?>

	<div class="item">
		<div class="add-favorite <?=in_array($item["ID"], $UF_FAVORITES) ? "active" : ""?>" data-id="<?=$item["ID"]?>"></div>
		<div class="badges">
			<?if($item["PRICES"]["RUB"]["VALUE_VAT"] !== $item["PRICES"]["RUB"]["DISCOUNT_VALUE_VAT"]){?>
				<a href="#" class="c1">Акция</a>
			<?}?>
			<?if($item["PROPERTIES"]["NEW"]["VALUE"] == "Y"){?>
				<a href="#" class="c2">Новинка</a>
			<?}?>
		</div>
		<div class="image">
			<img src="<?=$item["PREVIEW_PICTURE"]["SRC"]?>">
		</div>
		<div class="name"><?=$item["NAME"]?></div>
		<p>
		<?foreach ($item["PROPERTIES"]["GOST"]["VALUE"] as $value) {?>
			<?=$value?><br/>
		<?}?>
		</p>
		<a href="<?=$item["DETAIL_PAGE_URL"]?>" class="more">Подробнее</a>
		<div class="flex">
			<div class="price">
				<?if($item["PRICES"]["RUB"]["VALUE_VAT"] !== $item["PRICES"]["RUB"]["DISCOUNT_VALUE_VAT"]){?>
				<span class="old">
					<?=$item["PRICES"]["RUB"]["PRINT_VALUE_VAT"]?>
				</span>
				<?}?>
				<div class="new">
					<span><?=$item["PRICES"]["RUB"]["PRINT_DISCOUNT_VALUE_VAT"]?></span> / за <?=$item["CATALOG_MEASURE_NAME"]?>
				</div>
			</div>
			<a <?=in_array($item["ID"], $inBasket) ? 'href="/personal/basket/"' : ""?> data-id="<?=$item["ID"]?>" class="tocart <?=in_array($item["ID"], $inBasket) ? 'active' : ""?>"></a>
		</div>
		<div class="items">
			<span><?=$item["SECTION_NAME"]?></span>
		</div>
		<a href="<?=$item["DETAIL_PAGE_URL"]?>" class="link"></a>
	</div>

	<?}?>
</div>
<?=$arResult["NAV_STRING"]?>
