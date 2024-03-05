<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>

<ul class="header-topbar__links d-flex flex-wrap list-unstyled mb-0">
<? foreach($arResult as $arItem):?>
    <li><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
<? endforeach; ?>
</ul>

<?endif?>
