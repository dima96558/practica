<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

  if (CModule::IncludeModule("iblock")) {
      $idELEMENT = $_GET["ELEMENT_ID"];
     $arrResult["ELEMENT"] = array();

      $arFilter = Array(
          "ID" => $idELEMENT,
      );

      $arSelect = Array(
          "ID",
          "IBLOCK_ID",
          "NAME",
          "DETAIL_PICTURE",
          "PROPERTY_NUMBER",
          "DETAIL_TEXT",
          "PROPERTY_COUNTRY",
          "PROPERTY_BREND.NAME",
          "PROPERTY_PRICE"
      );
      $res = CIBlockElement::GetList(
          Array(),
          $arFilter,
          false,
          false,
          $arSelect);
      if ($ob = $res->Fetch()) {
          $arResult["ELEMENT"]["NAME"] = $ob['NAME'];
          $arResult["ELEMENT"]["PICTURE"] = $ob['DETAIL_PICTURE'];
          $arResult["ELEMENT"]["PRICE"] = $ob['PROPERTY_PRICE_VALUE'];
          $arResult["BREND"][$ob['ID']] = $ob['ID'];
          $arResult["ELEMENT"]["COUNTRY"] = $ob['PROPERTY_COUNTRY_VALUE'];
          $arResult["ELEMENT"]["NUMBER"] = $ob['PROPERTY_NUMBER_VALUE'];
          $arResult["ELEMENT"]["BREND"] = $ob['PROPERTY_BREND_NAME'];
          $arResult["ELEMENT"]["TEXT"] = $ob['DETAIL_TEXT'];
      }

}
$this->IncludeComponentTemplate();
