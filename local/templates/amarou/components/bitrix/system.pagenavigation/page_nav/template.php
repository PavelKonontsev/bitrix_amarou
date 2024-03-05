<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);


if(!$arResult["NavShowAlways"])
{
    if ($arResult["NavRecordCount"] == 0 || ($arResult["NavPageCount"] == 1 && $arResult["NavShowAll"] == false))
        return;
}

$strNavQueryString = ($arResult["NavQueryString"] != "" ? $arResult["NavQueryString"]."&amp;" : "");
$strNavQueryStringFull = ($arResult["NavQueryString"] != "" ? "?".$arResult["NavQueryString"] : "");
?>

<div class="row">
    <div class="col-sm-12 col-md-12 col-lg-12 text-center">
        <nav class="pagination-area">
            <ul class="pagination justify-content-center">

<?if($arResult["bDescPageNumbering"] === true):?>

    <?if ($arResult["NavPageNomer"] < $arResult["NavPageCount"]):?>

        <?if($arResult["bSavePage"]):?>
            <li>
                <a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=$arResult["NavPageCount"]?>"><i class="fa fa-angle-double-left"></i></a>
            </li>
            <li>
                <a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]+1)?>"><i class="fa fa-angle-left"></i></a>
            </li>
        <?else:?>
            <li>
                <a href="<?=$arResult["sUrlPath"]?><?=$strNavQueryStringFull?>"><i class="fa fa-angle-double-left"></i></a>
            </li>
            <?if ($arResult["NavPageCount"] == ($arResult["NavPageNomer"]+1) ):?>
            <li>
                <a href="<?=$arResult["sUrlPath"]?><?=$strNavQueryStringFull?>"><i class="fa fa-angle-left"></i></a>
            </li>
            <?else:?>
                <li>
                    <a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]+1)?>"><i class="fa fa-angle-left"></i></a>
                </li>
            <?endif?>
        <?endif?>
    <?endif?>

    <?while($arResult["nStartPage"] >= $arResult["nEndPage"]):?>
        <?$NavRecordGroupPrint = $arResult["NavPageCount"] - $arResult["nStartPage"] + 1;?>

        <?if ($arResult["nStartPage"] == $arResult["NavPageNomer"]):?>
            <li><a class="current" href="#"><?=$NavRecordGroupPrint?></a></li>
        <?elseif($arResult["nStartPage"] == $arResult["NavPageCount"] && $arResult["bSavePage"] == false):?>
            <li><a href="<?=$arResult["sUrlPath"]?><?=$strNavQueryStringFull?>"><?=$NavRecordGroupPrint?></a></li>
        <?else:?>
            <li><a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=$arResult["nStartPage"]?>"><?=$NavRecordGroupPrint?></a></li>
        <?endif?>

        <?$arResult["nStartPage"]--?>
    <?endwhile?>

    <?if ($arResult["NavPageNomer"] > 1):?>
        <li>
            <a rel="next" href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]-1)?>"><i class="fa fa-angle-right"></i></a>
        </li>
        <li>
            <a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=1"><i class="fa fa-angle-double-right"></i></a>
        </li>
    <?endif?>

<?else:?>

    <?if ($arResult["NavPageNomer"] > 1):?>

        <?if($arResult["bSavePage"]):?>
            <li>
                <a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=1"><i class="fa fa-angle-double-left"></i></a>
            </li>
            <li>
                <a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]-1)?>"><i class="fa fa-angle-left"></i></a>
            </li>
        <?else:?>
            <li>
                <a href="<?=$arResult["sUrlPath"]?><?=$strNavQueryStringFull?>"><i class="fa fa-angle-double-left"></i></a>
            </li>
            <li>
            <?if ($arResult["NavPageNomer"] > 2):?>
                <a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]-1)?>"><i class="fa fa-angle-left"></i></a>
            <?else:?>
                <a href="<?=$arResult["sUrlPath"]?><?=$strNavQueryStringFull?>"><i class="fa fa-angle-left"></i></a>
            <?endif?>
            </li>
        <?endif?>
    <?endif?>

    <?while($arResult["nStartPage"] <= $arResult["nEndPage"]):?>
        <?if ($arResult["nStartPage"] == $arResult["NavPageNomer"]):?>
            <li><a class="current" href="#"><?=$arResult["nStartPage"]?></a></li>
        <?elseif($arResult["nStartPage"] == 1 && $arResult["bSavePage"] == false):?>
            <li><a href="<?=$arResult["sUrlPath"]?><?=$strNavQueryStringFull?>"><?=$arResult["nStartPage"]?></a></li>
        <?else:?>
            <li><a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=$arResult["nStartPage"]?>"><?=$arResult["nStartPage"]?></a></li>
        <?endif?>
        <?$arResult["nStartPage"]++?>
    <?endwhile?>

    <?if($arResult["NavPageNomer"] < $arResult["NavPageCount"]):?>
    <li>
        <a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]+1)?>"><i class="fa fa-angle-right"></i></a>
    </li>
    <li>
        <a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=$arResult["NavPageCount"]?>"><i class="fa fa-angle-double-right"></i></a>
    </li>
    <?endif?>

<?endif?>

<?if ($arResult["bShowAll"]):?>
    <li class="btn-all">

    <?if ($arResult["NavShowAll"]):?>
        <a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>SHOWALL_<?=$arResult["NavNum"]?>=0" rel="nofollow"><?=GetMessage("nav_paged")?></a>
    <?else:?>
        <a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>SHOWALL_<?=$arResult["NavNum"]?>=1" rel="nofollow"><?=GetMessage("nav_all")?></a>
    <?endif?>

   </li>
<?endif?>

            </ul>
        </nav><!-- .pagination-area -->
    </div><!-- /.col-lg-12 -->
</div><!-- /.row -->
