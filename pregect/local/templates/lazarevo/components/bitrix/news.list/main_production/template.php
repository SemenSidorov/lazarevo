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
	Наше производство
</div>
<div class="flex text">
	<?=$arResult["~DESCRIPTION"]?>
</div>
<div class="list">
	<?foreach ($arResult["ITEMS"] as $item) {?>

	<div class="item"><img src="<?=$item["PREVIEW_PICTURE"]["SRC"]?>"></div>

	<?}?>
</div>
<div class="button">
	<a href="#">Читать подробнее</a>
</div>
