<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
?>
<?
$APPLICATION->IncludeComponent("maximaster:element", "",
    array(),
    false
)
;?>
<?require(  $_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>