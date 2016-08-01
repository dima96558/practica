<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->addExternalCss("/local/styles.css");
$APPLICATION->SetTitle($arResult["SECTION"]["NAME"]);
?>
<?if (!empty($arResult)):?>
<div class="catalog">
    <?foreach($arResult["ELEMENT"] as $arItem):?>
        <? $ID =$arItem["ID"] ; ?>
            <a  href="http://ivanchikov.bitrix.develop.maximaster.ru/catalog/element.php?ELEMENT_ID=<?=$ID?>">
           <div class="flex-cont ">
            <div class="flex-block left-block">
                <? echo CFile::ShowImage($arItem["PICTURE"], 200, 200, "border=0", "", false); ?>
            </div>
            <div class="flex-block right-block">
                <h3><?echo $arItem["NAME"]?></h3>
                <h3><?echo $arItem["PRICE"] . " рублей"?></h3>
                <h3><?echo $arItem["TEXT"] ?></h3>
            </div>
        </div>
       </a>
    <?endforeach?>
</div>
<?endif?>


<?
$APPLICATION->IncludeComponent("maximaster:brend", "",
    array(
         "BREND_ID" => $arResult[1]
    ),
    false   
); ?>
