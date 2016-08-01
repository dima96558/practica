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
          $arResult["ELEMENT"]["PRICE"] = $ob['PROPERTY_PRICE_VALUE'];
          $arResult["BREND"][$ob['ID']] = $ob['ID'];
          $arResult["ELEMENT"]["COUNTRY"] = $ob['PROPERTY_COUNTRY_VALUE'];
          $arResult["ELEMENT"]["NUMBER"] = $ob['PROPERTY_NUMBER_VALUE'];
          $arResult["ELEMENT"]["BREND"] = $ob['PROPERTY_BREND_NAME'];
          $arResult["ELEMENT"]["TEXT"] = $ob['DETAIL_TEXT'];
      }

if (CModule::IncludeModule("sale"))
{
    $arFields = array(
        "PRODUCT_ID" => $arResult["ELEMENT"]["ID"],
        "PRODUCT_PRICE_ID" => 0,
        "PRICE" => $arResult["ELEMENT"]["PRICE"],
        "CURRENCY" => "RUB",
        "WEIGHT" => 530,
        "QUANTITY" => 1,
        "LID" => LANG,
        "DELAY" => "N",
        "CAN_BUY" => "Y",
        "NAME" => $arResult["ELEMENT"]["NAME"],
        "CALLBACK_FUNC" => "MyBasketCallback",
        "MODULE" => "my_module",
        "NOTES" => "",
        "ORDER_CALLBACK_FUNC" => "MyBasketOrderCallback",
        "DETAIL_PAGE_URL" => "/".LANG."/detail.php?ID=51"
    );

    $arProps = array();

    $arProps[] = array(
        "NAME" => "Цвет",
        "CODE" => "color",
        "VALUE" => "черный"
    );

    $arProps[] = array(
        "NAME" => "Размер",
        "VALUE" => "1.5 x 2.5"
    );

    $arFields["PROPS"] = $arProps;

    CSaleBasket::Add($arFields);
}
    
}
$this->IncludeComponentTemplate();
