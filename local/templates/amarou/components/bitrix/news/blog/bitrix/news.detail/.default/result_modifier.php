<?

$arFilter = array(
        "IBLOCK_ID" => $arParams["IBLOCK_ID"],
        "ACTIVE" => "Y",
        "ACTIVE_DATE" => "Y",
        "SECTION_GLOBAL_ACTIVE" => "Y",
        "SECTION_ID" => $arParams["SECTION_ID"],
        "SECTION_CODE" => $arParams["SECTION_CODE"]
    );

$arOrder = array(
    $arParams["OFFERS_SORT_FIELD"] => $arParams["OFFERS_SORT_ORDER"],
    $arParams["OFFERS_SORT_FIELD2"] => $arParams["OFFERS_SORT_ORDER2"],
);

$arNavStartParams = array(
    "nElementID" => $arResult["ID"],
    "nPageSize" => 1
);


$end = false;

$DBRes = CIBlockElement::GetList($arOrder, $arFilter, false, $arNavStartParams);
while ($res = $DBRes->GetNext())
{

    if($res["ID"] == $arResult["ID"]) {
        $end = true;
    } else {
        $res['PREVIEW_PICTURE'] = CFile::GetByID($res['PREVIEW_PICTURE'])->Fetch();
        if($end) {
            $arResult["BLOG_RING"]["NEXT"] = $res;
        } else {
            $arResult["BLOG_RING"]["PREV"] = $res;
        }
    }
}

#resent articles
$arOrder = array(
    // $arParams["OFFERS_SORT_FIELD"] => $arParams["OFFERS_SORT_ORDER"],
    // $arParams["OFFERS_SORT_FIELD2"] => $arParams["OFFERS_SORT_ORDER2"],
    'date_active_from' => 'DESC',
);

$arSelectFields = array(
    'DETAIL_PAGE_URL', 'NAME', 'DISPLAY_ACTIVE_FROM', 'PREVIEW_PICTURE',
);

$arResult['BLOG_RECENT_CNT'] = 2;
$arResult['BLOG_RECENT'] = [];
$i = 0;

$DBRes = CIBlockElement::GetList($arOrder, $arFilter, false, false, $arSelectFields);
while ($res = $DBRes->GetNext()) {
    if($res["ID"] != $arResult["ID"]) {
        $res['PREVIEW_PICTURE'] = CFile::GetByID($res['PREVIEW_PICTURE'])->Fetch();
        array_push($arResult['BLOG_RECENT'], $res);
        $i += 1;
        if ($i >= $arResult['BLOG_RECENT_CNT']) {
            break;
        }
    }
}

?>
