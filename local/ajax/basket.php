<?require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");?>
<?
if (CModule::IncludeModule("sale") && CModule::IncludeModule("catalog")) {
    if (isset($_POST['id'])) {
        $PRODUCT_ID = $_POST['id'];
        $result = Add2BasketByProductID(
            $PRODUCT_ID,
            1
        );
    }
}


?>