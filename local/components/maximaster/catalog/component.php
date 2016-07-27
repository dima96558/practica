<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

  if (CModule::IncludeModule("iblock")) {
    $idSECTION = $_GET["SECTION_ID"];
    $arResult["SECTION"] = array();
    $arrResult["ELEMENT"] = array();
        $res = CIBlockSection::GetByID($idSECTION);
        if ($ar_res = $res->GetNext()) {
            $arResult["CHECK_SECTION"] = true;
            $arResult["SECTION"]["NAME"] = $ar_res['NAME'];
            $arResult["SECTION"]["PICTURE"] = $ar_res['PICTURE'];
        }
        $arFilter = Array(
            "SECTION_ID" => $idSECTION,
            "INCLUDE_SUBSECTIONS" => "Y"
        );

    $arSelect = Array(
        "ID",
        "IBLOCK_ID",
        "NAME",
        "DETAIL_PICTURE"
    );
    $res = CIBlockElement::GetList(
        Array(),
        $arFilter,
        false,
        false,
        $arSelect);
    while ($ob = $res->Fetch()) {
        $arResult["ELEMENT"]["NAME"] = $ob['NAME'];
        $arResult["ELEMENT"]["PICTURE"] = $ob['DETAIL_PICTURE'];
    }
}
$this->IncludeComponentTemplate();
