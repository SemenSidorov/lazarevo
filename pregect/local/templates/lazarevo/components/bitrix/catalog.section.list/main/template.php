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

<div class="index-categories">
	<div class="block-name">
		Продукция переработки
	</div>
	<div class="list">
		<?foreach ($arResult["SECTIONS"] as $item) {?>

		<div class="items">
			<div class="item">
				<img src="<?=$item["PICTURE"]["SRC"]?>">
				<img src="<?=$item["DETAIL_PICTURE"]["SRC"]?>">
				<a href="<?=$item["SECTION_PAGE_URL"]?>"><span><?=$item["NAME"]?></span></a>
				<a href="<?=$item["SECTION_PAGE_URL"]?>" class="link"></a>
			</div>
			<div class="item">
				<img src="<?=$item["PICTURE"]["SRC"]?>">
				<img src="<?=$item["DETAIL_PICTURE"]["SRC"]?>">
				<a href="<?=$item["SECTION_PAGE_URL"]?>"><span><?=$item["NAME"]?></span></a>
				<a href="<?=$item["SECTION_PAGE_URL"]?>" class="link"></a>
			</div>
		</div>

		<?}?>
	</div>
	<div class="flex">
		<?foreach ($arResult["SECTIONS"] as $item) {?>

		<div class="item">
			<img src="<?=$item["PICTURE"]["SRC"]?>">
			<img src="<?=$item["DETAIL_PICTURE"]["SRC"]?>">
			<a href="<?=$item["SECTION_PAGE_URL"]?>"><span><?=$item["NAME"]?></span></a>
			<a href="<?=$item["SECTION_PAGE_URL"]?>" class="link"></a>
		</div>

		<?}?>
	</div>
	<div class="button">
		<a href="/catalog/">Смотреть всю продукцию</a>
	</div>
</div>
