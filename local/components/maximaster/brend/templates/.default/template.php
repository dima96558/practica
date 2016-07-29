<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->addExternalCss("/local/styles.css");
$APPLICATION->SetTitle();
?>



</div>
<div class="right-column">
    <h3> Список брендов  <h3>
            <div class="menu">
            <?foreach($arResult as $arItem):?>
               <div class="link"> <a  href="http://ivanchikov.bitrix.develop.maximaster.ru/"> <?echo $arItem?> </a> </div>
            <?endforeach?>
                </div>
</div>
</div>
