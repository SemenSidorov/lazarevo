<?
foreach ($arResult["ELEMENTS"] as $key => $item) {
  $res = CIBlockElement::GetList([], ["IBLOCK_ID" => 10, "ID" => $item["ID"]], false, false, ["PROPERTY_*"]);
  $res = $res->Fetch();
  $arResult["ELEMENTS"][$key]["PROPERTIES"] = $res;
}
