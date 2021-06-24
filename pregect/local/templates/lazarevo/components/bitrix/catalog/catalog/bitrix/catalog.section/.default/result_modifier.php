<?
  $res = CIBlockSection::GetByID($arResult["IBLOCK_SECTION_ID"]);
  $res = $res->Fetch();
  $arResult["SECTION_NAME"] = $res["NAME"];
?>
