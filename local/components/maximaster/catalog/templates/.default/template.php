<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->addExternalCss("/local/styles.css");
$APPLICATION->SetTitle($arResult["SECTION"]["NAME"]);
?>
<?if (!empty($arResult)):?>
<div class="catalog">
    <?if ($arResult["CHECK_SECTION"]):?>
        <div class="flex-cont section">
            <div class="flex-block left-block">
                <? echo CFile::ShowImage($arResult["SECTION"]["PICTURE"], 200, 200, "border=0", "", false); ?>
            </div>
            <div class="flex-block right-block">
                <h3><?echo $arResult["SECTION"]["NAME"]?></h3>
            </div>
        </div>
    <?endif?>
    <?foreach($arResult["ELEMENT"] as $arItem):?>
        <div class="flex-cont section">
            <div class="flex-block left-block">
                <? echo CFile::ShowImage($arItem["PICTURE"], 200, 200, "border=0", "", false); ?>
            </div>
            <div class="flex-block right-block">
                <h3><?echo $arItem["NAME"]?></h3>
            </div>
        </div>
    <?endforeach?>
</div>
<?endif?>