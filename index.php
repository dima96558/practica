<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Интернет-магазин \"Одежда\"");
?>

<h1>Наши товары :</h1>
<?
$APPLICATION->IncludeComponent("maximaster:main", "",
    array(
        "IBLOCK_ID" => 4),
    false
);?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>