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

<div class="index-news">
	<div class="wrap">
		<div class="block-name">
			Новости
		</div>
		<div class="list">
			<?foreach ($arResult["ITEMS"] as $item) {?>

			<div class="item">
				<img src="<?=$item["PREVIEW_PICTURE"]["SRC"]?>">
				<div class="date"><?=$item["DISPLAY_ACTIVE_FROM"]?></div>
				<a href="<?=$item["DETAIL_PAGE_URL"]?>"><?=$item["NAME"]?></a>
				<a href="<?=$item["DETAIL_PAGE_URL"]?>" class="link"></a>
			</div>

			<?}?>
		</div>
		<div class="button">
			<a href="/news/">Все новости</a>
		</div>
	</div>
</div>
