<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
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
$this->setFrameMode(false);

$colspan = 2;
if ($arResult["CAN_EDIT"] == "Y") $colspan++;
if ($arResult["CAN_DELETE"] == "Y") $colspan++;
?>
<?if ($arResult["MESSAGE"] <> ''):?>
	<?ShowNote($arResult["MESSAGE"])?>
<?endif?>

<?foreach ($arResult["ELEMENTS"] as $item){?>
	<div class="info">
		<p><?=$item["NAME"]?></p>
		<table>
			<tr>
				<td>ИНН</td>
				<td><?$item["PROPERTIES"]["PROPERTY_20"]?></td>
			</tr>
			<tr>
				<td>КПП</td>
				<td><?$item["PROPERTIES"]["PROPERTY_21"]?></td>
			</tr>
			<tr>
				<td>ОГРН/ОГРНИП</td>
				<td><?$item["PROPERTIES"]["PROPERTY_22"]?></td>
			</tr>
			<tr>
				<td>Юридический адрес</td>
				<td><?$item["PROPERTIES"]["PROPERTY_23"]?></td>
			</tr>
			<tr>
				<td>Фактический адрес</td>
				<td><?$item["PROPERTIES"]["PROPERTY_24"]?></td>
			</tr>
			<tr>
				<td>Телефон</td>
				<td><?$item["PROPERTIES"]["PROPERTY_25"]?></td>
			</tr>
			<tr>
				<td>Почта</td>
				<td><?$item["PROPERTIES"]["PROPERTY_26"]?></td>
			</tr>
			<tr>
				<td>Банк</td>
				<td><?$item["PROPERTIES"]["PROPERTY_27"]?></td>
			</tr>
			<tr>
				<td>Расчетный счет</td>
				<td><?$item["PROPERTIES"]["PROPERTY_28"]?></td>
			</tr>
			<tr>
				<td>БИК</td>
				<td><?$item["PROPERTIES"]["PROPERTY_29"]?></td>
			</tr>
		</table>
		<a href="<?=$arParams["EDIT_URL"]?>?edit=Y&amp;CODE=<?=$item["ID"]?>" class="edit">Изменить</a>
		<a href="?delete=Y&amp;CODE=<?=$item["ID"]?>&amp;<?=bitrix_sessid_get()?>" onClick="return confirm('<?echo CUtil::JSEscape(str_replace("#ELEMENT_NAME#", $item["NAME"], GetMessage("IBLOCK_ADD_LIST_DELETE_CONFIRM")))?>')" class="edit">Удалить</a>
	</div>
<?}?>
<?if ($arParams["MAX_USER_ENTRIES"] > 0 && $arResult["ELEMENTS_COUNT"] < $arParams["MAX_USER_ENTRIES"]){?>
	<a href="<?=$arParams["EDIT_URL"]?>?edit=Y"><?=GetMessage("IBLOCK_ADD_LINK_TITLE")?></a>
<?}else{?>
	<?=GetMessage("IBLOCK_LIST_CANT_ADD_MORE")?>
<?}?>
<?if ($arResult["NAV_STRING"] <> ''):?><?=$arResult["NAV_STRING"]?><?endif?>
