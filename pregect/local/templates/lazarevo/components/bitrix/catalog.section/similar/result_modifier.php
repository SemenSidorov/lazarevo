<?
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
