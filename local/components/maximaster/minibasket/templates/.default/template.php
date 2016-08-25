<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->addExternalCss("/local/styles.css");
$APPLICATION->SetTitle($arResult["SECTION"]["NAME"]);
?>
<div class="mbasket">
    <a  href="http://ivanchikov.bitrix.develop.maximaster.ru/basket/index.php"><div class="b-image">  </div> </a>
    <div class="basket-text">
    <?if (!empty($arResult)):?>
     Количество товаров : <?echo $arResult["QUANTILY"]?> </br>
     Итоговая цена : <?echo $arResult["PRICE"]?>
    <?endif;?>
        <?if (empty($arResult)):?>
          <h3> Корзина пуста </h3>
        <?endif;?>
    </div>
</div>
    



