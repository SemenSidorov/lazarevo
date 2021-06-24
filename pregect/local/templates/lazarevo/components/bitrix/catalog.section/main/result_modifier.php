<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

/**
 * @var CBitrixComponentTemplate $this
 * @var CatalogSectionComponent $component
 */

$component = $this->getComponent();
$arParams = $component->applyTemplateModifications();

$sects = [];
foreach ($arResult["ITEMS"] as $key => $item) {
  if(!isset($sects[$item["IBLOCK_SECTION_ID"]])){
    $sect = CIBlockSection::GetByID($item["IBLOCK_SECTION_ID"]);
    $sect = $sect->Fetch();
    $arResult["ITEMS"][$key]["SECTION_NAME"] = $sect["NAME"];
    $sects[$sect["ID"]] = $sect["NAME"];
  }else{
    $arResult["ITEMS"][$key]["SECTION_NAME"] = $sects[$item["IBLOCK_SECTION_ID"]];
  }
}
