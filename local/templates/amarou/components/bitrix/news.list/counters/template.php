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
?>

<div class="row">

<?foreach($arResult["ITEMS"] as $arItem):?>
    <?
    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
    ?>

    <div class="col-sm-6 col-md-3 col-lg-3" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
        <div class="counter-item">
            <h4 class="counter"><?= number_format($arItem["DISPLAY_PROPERTIES"]['counter']['VALUE']); ?></h4>
            <p class="counter-item__desc"><?= $arItem['NAME'] ?></p>
        </div>
        <hr>
        <p><?= $arItem["PREVIEW_TEXT"] ?></p>
        <ul class="list-items list-items-layout2 list-unstyled">
        <?
            $link_num = 1;
            while ($link_num < 4):
                $link_name = $arItem["DISPLAY_PROPERTIES"]["url_name_".$link_num]['VALUE'];
                $link_url = $arItem["DISPLAY_PROPERTIES"]["url_".$link_num]['VALUE'];
        ?>
                <? if ($link_name != ""): ?>
                <li>
                    <? if ($link_url != ""): ?><a href="<?= $link_url ?>"><? endif; ?>
                    <?= $link_name ?>
                    <? if ($link_url != ""): ?></a><? endif; ?>
                </li>
                <? endif;?>

        <?
                $link_num += 1;
            endwhile;
        ?>
        </ul>
    </div><!-- /.col-sm-3 -->
<?endforeach;?>

</div><!-- /.row -->
