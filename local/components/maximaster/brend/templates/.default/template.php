<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->addExternalCss("/local/styles.css");
$APPLICATION->SetTitle();
?>



</div>
<div class="right-column">
    <h3> Список брендов  <h3>
            <div class="menu">
            <ul class="menu-text">
            <?foreach($arResult as $arItem):?>
                <? $ID =$arItem["ID"]?>
               <li class="link"> <a  href="http://ivanchikov.bitrix.develop.maximaster.ru/catalog/index.php?BREND_ID=<?=$ID?>"> <?echo $arItem["NAME"]?> </a> </li>
            <?endforeach?>
                </ul>
                </div>
</div>
</div>
    