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
?>
<div class="block-name">
	рецепты
</div>
<div class="list2">
	<?foreach ($arResult["ITEMS"] as $item) {?>

	<div class="item">
		<img src="<?=$item["PREVIEW_PICTURE"]["SRC"]?>">
		<a href="<?=$item["DETAIL_PAGE_URL"]?>"><?=$item["NAME"]?></a>
	</div>

	<?}?>
</div>
<div class="button">
	<a href="/recipes/">Все рецепты</a>
</div>
