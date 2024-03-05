<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
if ($arResult["PAGE_URL"])
{
    ?>
        <?
        if (is_array($arResult["BOOKMARKS"]) && !empty($arResult["BOOKMARKS"]))
        {
            foreach(array_reverse($arResult["BOOKMARKS"]) as $name => $arBookmark)
            {
                ?><?=$arBookmark["ICON"]?><?
            }
        }
        ?>
    <?
}
else
{
    ?><?=GetMessage("SHARE_ERROR_EMPTY_SERVER")?><?
}
?>
