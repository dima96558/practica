<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

  if (CModule::IncludeModule("iblock")) {
      
        $arFilter = Array(
            "IBLOCK_ID" => $arParams["IBLOCK_ID"]
        );


    $arSelect = Array(
        "ID",
        "IBLOCK_ID",
        "NAME",
        "PREVIEW_PICTURE",
        "PREVIEW_TEXT" ,
        "PROPERTY_PRICE"
    );
    $res = CIBlockElement::GetList(
        Array(),
        $arFilter,
        false,
        false,
        $arSelect);
      $i = 0;
    while ($ob = $res->Fetch()) {
        $arResult["ELEMENT"][$i]["NAME"] = $ob['NAME'];
        $arResult["ELEMENT"][$i]["ID"] = $ob['ID'];
        $arResult["ELEMENT"][$i]["PICTURE"] = $ob['PREVIEW_PICTURE'];
        $arResult["ELEMENT"][$i]["TEXT"] = $ob['PREVIEW_TEXT'];
        $ress = \CPrice::GetList([],[
                "PRODUCT_ID" => $ob['ID']]
        );
        if ($obb = $ress->Fetch()) {
            $arResult["ELEMENT"][$i]["PRICE"] = $obb['PRICE'];
        }
        $i++;
    }


}
$this->IncludeComponentTemplate();
