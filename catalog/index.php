<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
?>
<?$APPLICATION->IncludeComponent(
    "bitrix:catalog",
    "",
    Array(
        "TEMPLATE_THEME" => "blue",
        "IBLOCK_TYPE" => "catalog",
        "IBLOCK_ID" => "4"),
    false
);?>
<?require(  $_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>