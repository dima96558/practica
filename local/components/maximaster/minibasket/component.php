<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

if (CModule::IncludeModule("sale") && CModule::IncludeModule("catalog")) {

$arBasketItems = array();

$dbBasketItems = CSaleBasket::GetList(
    array(
    ),
    array(
        "FUSER_ID" => CSaleBasket::GetBasketUserID(),
        "LID" => s1,
        "ORDER_ID" => "NULL"
    ),
    false,
    false,
    array("QUANTITY", "PRICE")
);
  while ($ob = $dbBasketItems->Fetch()) {
    $arResult["QUANTILY"]++ ;
      $arResult["PRICE"]+=$ob["PRICE"]*$ob["QUANTITY"]  ;
  }
  



  $this->IncludeComponentTemplate();
}