<?

if ($arResult['PROPERTIES']['review']['VALUE']) {

    $arFilter = array(
            "ID" => $arResult['PROPERTIES']['review']['VALUE'], //VALUE
            "IBLOCK_ID" => $arResult['PROPERTIES']['review']['LINK_IBLOCK_ID'], //LINK_IBLOCK_ID
            "ACTIVE" => "Y",
            "ACTIVE_DATE" => "Y",
            // "SECTION_GLOBAL_ACTIVE" => "Y",
            // "SECTION_ID" => $arParams["SECTION_ID"],
            // "SECTION_CODE" => $arParams["SECTION_CODE"]
        );

    $arSelectFields = array(
        'ID', 'NAME', 'PREVIEW_PICTURE', 'PREVIEW_TEXT', 'PROPERTY_company', 'PROPERTY_rating'
    );

    $DBRes = CIBlockElement::GetList(false, $arFilter, false, false, $arSelectFields);
    $res = $DBRes->Fetch();
    $res['PREVIEW_PICTURE'] = CFile::GetByID($res['PREVIEW_PICTURE'])->Fetch();

    $arResult['REVIEW'] = $res;

}

?>
