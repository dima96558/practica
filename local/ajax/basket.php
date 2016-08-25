<?require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");?>
<?
if (CModule::IncludeModule("sale") && CModule::IncludeModule("catalog")) {
    if (isset($_POST['id'])) {
        $PRODUCT_ID = $_POST['id'];
        
        $arFilter = Array(
            "ID" => $PRODUCT_ID,
        );

        $res = CIBlockElement::GetList(
            Array(),
            $arFilter,
            false,
            false,
            Array(
                "NAME"
            ));
        if ($ob = $res->Fetch()) {
            $arResult["NAME"] = $ob['NAME'];
        }

        $res = \CPrice::GetList([],[
                "PRODUCT_ID" => $PRODUCT_ID]
        );
        if ($ob = $res->Fetch()) {
            $arResult["PRICE"] = $ob['PRICE'];
        }
        
        $arFields = array(
            "PRODUCT_ID" => $PRODUCT_ID,
            "PRICE" => $arResult["PRICE"],
            "CURRENCY" => "RUB",
            "QUANTITY" => 1,
            "LID" => s1,
            "NAME" => $arResult["NAME"],
        );
        CSaleBasket::Add($arFields);
    }

}


?>