    <?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->addExternalCss("/local/styles.css");
$APPLICATION->SetTitle($arResult["SECTION"]["NAME"]);
?>

<div class="element">
        <div class="flex-cont">
            <div >
                <? echo CFile::ShowImage($arResult["ELEMENT"]["PICTURE"], 500, 500, "class='my-foto'", "", false); ?>
            </div>
            <div class="text">
                <div class="text-text">
                <h3><?echo $arResult["ELEMENT"]["NAME"]?></h3>
                <h3><?echo $arResult["ELEMENT"]["PRICE"] . " руб."?></h3>
                <h3><?echo "В наличии имеется : " . $arResult["ELEMENT"]["NUMBER"] ?></h3>
                <h3><?echo "Производитель : " . $arResult["ELEMENT"]["COUNTRY"] ?></h3>
                <h3><?echo "Бренд : " . $arResult["ELEMENT"]["BREND"] ?></h3>
                <h3><?echo $arResult["ELEMENT"]["TEXT"]?></h3>
                </div>
                <div>
                <button class="ajax-sale" id="<?echo $arResult["ELEMENT"]["ID"]?>">  Купить </button>
                </div>    
            </div>
        </div>
</div>

<?
$APPLICATION->IncludeComponent("maximaster:brend", "",
    array(
        "BREND_ID" => $arResult["BREND"]
    ),
    false
); ?>

<script>
    jQuery(function(){

        $(".my-foto").imagezoomsl({

            zoomrange: [1, 12],
            zoomstart: 4,
            innerzoom: true,
            magnifierborder: "none"
        });
    });
</script>