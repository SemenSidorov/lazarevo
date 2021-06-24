<?
  foreach ($arResult["PROPERTIES"]["ADD_PICTURES"]["VALUE"] as $key => $file) {
    $arResult["PROPERTIES"]["ADD_PICTURES"]["VALUE"][$key] = CFile::GetFileArray($file);
  }
  $res = CIBlockSection::GetByID($arResult["IBLOCK_SECTION_ID"]);
  $res = $res->Fetch();
  $arResult["SECTION_NAME"] = $res["NAME"];
?>
