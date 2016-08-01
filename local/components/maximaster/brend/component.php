<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

if (CModule::IncludeModule("iblock")) {

    $arFilter = Array(
        "ID" => $arParams["BREND_ID"],
    );
    $arSelect = Array(
        "ID",
        "PROPERTY_BREND.NAME",
        "PROPERTY_BREND"
    );
    $res = CIBlockElement::GetList(
        Array(),
        $arFilter,
        false,
        false,  
        $arSelect);
    while ($ob = $res->Fetch()) {
        $arResult[$ob['PROPERTY_BREND_NAME']]["NAME"] = $ob['PROPERTY_BREND_NAME'];
        $arResult[$ob['PROPERTY_BREND_NAME']]["ID"] = $ob['PROPERTY_BREND_VALUE'];
    }
    $arResult["SECTION_ID"] = $arParams["SECTION_ID"];
}
$this->IncludeComponentTemplate();
