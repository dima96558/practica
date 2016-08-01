<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

  if (CModule::IncludeModule("iblock")) {
    $idSECTION = $_GET["SECTION_ID"];
    $idBREND = $_GET["BREND_ID"];
    if(!is_null($idSECTION)&&!is_null($idBREND)) {
        $res = CIBlockSection::GetByID($idSECTION);
        if ($ar_res = $res->GetNext()) {
            $arResult["CHECK_SECTION"] = true;
            $arResult["SECTION"]["NAME"] = $ar_res['NAME'];
            $arResult["SECTION"]["PICTURE"] = $ar_res['PICTURE'];
        }
        $arFilter = Array(
            "SECTION_ID" => $idSECTION,
            "INCLUDE_SUBSECTIONS" => "Y",
            "PROPERTY_BREND" => $idBREND
        );

        $arSelect = Array(
            "ID",
            "IBLOCK_ID",
            "NAME",
            "PREVIEW_PICTURE",
            "PREVIEW_TEXT",
            "PROPERTY_PRICE"
        );
        $res = CIBlockElement::GetList(
            Array(),
            $arFilter,
            false,
            false,
            $arSelect);
        $i = 0;
        while ($ob = $res->Fetch()) {
            $arResult["ELEMENT"][$i]["NAME"] = $ob['NAME'];
            $arResult["ELEMENT"][$i]["ID"] = $ob['ID'];
            $arResult["BREND"][$ob['ID']] = $ob['ID'];
            $arResult["ELEMENT"][$i]["PICTURE"] = $ob['PREVIEW_PICTURE'];
            $arResult["ELEMENT"][$i]["TEXT"] = $ob['PREVIEW_TEXT'];
            $arResult["ELEMENT"][$i]["PRICE"] = $ob['PROPERTY_PRICE_VALUE'];
            $i++;
        }
    }
    elseif (!is_null($idSECTION)){
        $res = CIBlockSection::GetByID($idSECTION);
        if ($ar_res = $res->GetNext()) {
            $arResult["CHECK_SECTION"] = true;
            $arResult["SECTION"]["NAME"] = $ar_res['NAME'];
            $arResult["SECTION"]["PICTURE"] = $ar_res['PICTURE'];
        }
        $arFilter = Array(
            "SECTION_ID" => $idSECTION,
            "INCLUDE_SUBSECTIONS" => "Y"
        );

        $arSelect = Array(
            "ID",
            "IBLOCK_ID",
            "NAME",
            "PREVIEW_PICTURE",
            "PREVIEW_TEXT",
            "PROPERTY_PRICE"
        );
        $res = CIBlockElement::GetList(
            Array(),
            $arFilter,
            false,
            false,
            $arSelect);
        $i = 0;
        while ($ob = $res->Fetch()) {
            $arResult["ELEMENT"][$i]["NAME"] = $ob['NAME'];
            $arResult["ELEMENT"][$i]["ID"] = $ob['ID'];
            $arResult["BREND"][$ob['ID']] = $ob['ID'];
            $arResult["ELEMENT"][$i]["PICTURE"] = $ob['PREVIEW_PICTURE'];
            $arResult["ELEMENT"][$i]["TEXT"] = $ob['PREVIEW_TEXT'];
            $arResult["ELEMENT"][$i]["PRICE"] = $ob['PROPERTY_PRICE_VALUE'];
            $i++;
        }
    }
      else{
          $arFilter = Array(
              "PROPERTY_BREND" => $idBREND,
          );

          $arSelect = Array(
              "ID",
              "IBLOCK_ID",
              "NAME",
              "PREVIEW_PICTURE",
              "PREVIEW_TEXT",
              "PROPERTY_PRICE"
          );
          $res = CIBlockElement::GetList(
              Array(),
              $arFilter,
              false,
              false,
              $arSelect);
          $i = 0;
          while ($ob = $res->Fetch()) {
              $arResult["ELEMENT"][$i]["NAME"] = $ob['NAME'];
              $arResult["ELEMENT"][$i]["ID"] = $ob['ID'];
              $arResult["BREND"][$ob['ID']] = $ob['ID'];
              $arResult["ELEMENT"][$i]["PICTURE"] = $ob['PREVIEW_PICTURE'];
              $arResult["ELEMENT"][$i]["TEXT"] = $ob['PREVIEW_TEXT'];
              $arResult["ELEMENT"][$i]["PRICE"] = $ob['PROPERTY_PRICE_VALUE'];
              $i++;
          }
      }
      $arResult["SECTION_ID"]["ID"]=$idSECTION;
}
$this->IncludeComponentTemplate();
