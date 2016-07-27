<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
?>
<?
$APPLICATION->IncludeComponent("maximaster:catalog", "",
    array(),
    false
);?>
<?require(  $_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>