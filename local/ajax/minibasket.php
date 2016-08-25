<?require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");?>
<?
if (CModule::IncludeModule("sale") && CModule::IncludeModule("catalog")) {
 $APPLICATION->IncludeComponent("maximaster:minibasket", "", array(), false);
}
?>