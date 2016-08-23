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
          $arResult["ELEMENT"]["ID"] = $ob['ID'];
          $arResult["ELEMENT"]["PICTURE"] = $ob['DETAIL_PICTURE'];
          $arResult["BREND"][$ob['ID']] = $ob['ID'];
          $arResult["ELEMENT"]["COUNTRY"] = $ob['PROPERTY_COUNTRY_VALUE'];
          $arResult["ELEMENT"]["BREND"] = $ob['PROPERTY_BREND_NAME'];
          $arResult["ELEMENT"]["TEXT"] = $ob['DETAIL_TEXT'];
      }

      $res = CCatalogProduct::GetList(
          array(), $arFilter, false,array()
      );
      if ($ob = $res->Fetch()) {
          $arResult["ELEMENT"]["NUMBER"] = $ob['QUANTITY'];
      }

      $res = \CPrice::GetList([],[
              "PRODUCT_ID" => $idELEMENT]
      );
      if ($ob = $res->Fetch()) {
          $arResult["ELEMENT"]["PRICE"] = $ob['PRICE'];
      }





      $this->IncludeComponentTemplate();
  }
