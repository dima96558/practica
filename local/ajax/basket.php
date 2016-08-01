<? require_once ($_SERVER['DOCUMENT_ROOT']."/bitrix/modules/main/include.php");?>
<?
if (CModule::IncludeModule("sale")) {
    if (isset($_POST['id'])&&isset($_POST['quantity'])) {
        $PRODUCT_ID = intval($_POST['id']);
        $QUANTITY = intval($_POST['quantity']);
        $res = CIBlockElement::GetList(
            Array(),
            ["ID" => $PRODUCT_ID],
            false,
            false,
            ["ID", "IBLOCK_ID", "PROPERTY_COUNTRY", "PROPERTY_BRAND"]
        );
        $PROP = array(
            array(
                "NAME" => "Страна",
                "VALUE" => $res["PROPERTY_COUNTRY_VALUE"]
            ),
            array(
                "NAME" => "Бренд",
                "VALUE" => $result["UF_NAME"]
            )
        );
        Add2BasketByProductID(
            $PRODUCT_ID,
            $QUANTITY,
            array(),
            $PROP
        );
    }
}
?>