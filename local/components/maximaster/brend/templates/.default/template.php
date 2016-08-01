<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->addExternalCss("/local/styles.css");
$APPLICATION->SetTitle();
?>



</div>
<div class="right-column">
    <h3> Список брендов  <h3>
            <div class="menu">
            <ul class="menu-text">
                <? $SECTION_ID = $arResult["SECTION_ID"]["ID"] ; ?>
            <?foreach($arResult as $arItem):?>
                <? $BREND_ID =$arItem["ID"] ?>
               <li class="link"> <a  href="http://ivanchikov.bitrix.develop.maximaster.ru/catalog/index.php?BREND_ID=<?=$BREND_ID?><? if(!is_null($SECTION_ID)) {echo '&SECTION_ID='. $SECTION_ID;}?>"> <?echo $arItem["NAME"]?> </a> </li> </br>
            <?endforeach?>
                </ul>
                </div>
</div>
</div>
    