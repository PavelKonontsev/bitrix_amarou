<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>

<div class="collapse navbar-collapse" id="mainNavigation">
<ul class="navbar-nav ml-auto">

<?
$previousLevel = 0;
foreach($arResult as $arItem):?>

    <?if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel):?>
        <?=str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"]));?>
    <?endif?>

    <?if ($arItem["IS_PARENT"]):?>

        <?if ($arItem["DEPTH_LEVEL"] == 1):?>
            <li class="nav__item with-dropdown">
                <a href="<?=$arItem["LINK"]?>" class="dropdown-toggle nav__item-link
                "><?=$arItem["TEXT"]?> <i class="fas fa-angle-down" ></i></a>

                <ul class="dropdown-menu">
        <?else:?>
            <li class="nav__item">
                <a href="<?=$arItem["LINK"]?>" class="nav__item-link"><?=$arItem["TEXT"]?></a>
            </li>
        <?endif?>

    <?else:?>

        <?if ($arItem["DEPTH_LEVEL"] == 1):?>
            <li class="nav__item with-dropdown">
                <a href="<?=$arItem["LINK"]?>" class="dropdown-toggle nav__item-link
                    <?if ($arItem["SELECTED"]):?> active<?endif?>
                "><?=$arItem["TEXT"]?></a>
            </li>
        <?else:?>
            <li class="nav__item"><a href="<?=$arItem["LINK"]?>" class="nav__item-link"><?=$arItem["TEXT"]?></a></li>
        <?endif?>

    <?endif?>

    <?$previousLevel = $arItem["DEPTH_LEVEL"];?>

<?endforeach?>

<?if ($previousLevel > 1)://close last item tags?>
    <?=str_repeat("</ul></li>", ($previousLevel-1) );?>
<?endif?>

</ul>
</div>

<?endif?>
