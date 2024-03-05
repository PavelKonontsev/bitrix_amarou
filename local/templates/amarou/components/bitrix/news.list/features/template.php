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
<? $show_counter = false; ?>


  <div class="container">
    <div class="row mx-0">
      <div class="col-sm-12 col-md-12 col-lg-12 px-0 features-wrapper d-flex flex-wrap">

<?foreach($arResult["ITEMS"] as $arItem):?>
    <?
        $this->AddEditAction(
            $arItem['ID'],
            $arItem['EDIT_LINK'],
            CIBlock::GetArrayByID(
                $arItem["IBLOCK_ID"],
                "ELEMENT_EDIT"
            )
        );
        $this->AddDeleteAction(
            $arItem['ID'],
            $arItem['DELETE_LINK'],
            CIBlock::GetArrayByID(
                $arItem["IBLOCK_ID"],
                "ELEMENT_DELETE"),
            array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM'))
        );
    ?>

    <? if ($arItem['DISPLAY_PROPERTIES']['counter']['VALUE'] != '0' && $show_counter == false): ?>
        <? $show_counter = true; ?>
        <div class="feature-item bg-theme">
            <div class="slick-carousel m-slides-0"
                data-slick='{"slidesToShow": 1, "arrows": false, "dots": true, "autoPlay": true}'>
    <? endif; ?>

    <? if ($show_counter == false): ?>
        <div class="feature-item">
    <? endif;?>

          <div class="feature-item__content" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
            <h4 class="feature-item__title <? if ($show_counter == true): ?> color-white d-flex align-items-end mb-25 <? endif;?> ">
                <? if ($show_counter == true): ?>
                    <span class="counter"><?= number_format($arItem['DISPLAY_PROPERTIES']['counter']['VALUE']); ?></span><span><?= $arItem["NAME"]; ?></span>
                <?else:?>
                    <?= $arItem["NAME"]; ?>
                <?endif;?>
            </h4>
            <p class="feature-item__desc <? if ($show_counter == true): ?> color-white mb-0 <? endif;?> ">
                <?= $arItem["PREVIEW_TEXT"]; ?>
            </p>
            <? if ($show_counter == false): ?>
                <? if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])): ?>
                    <a href="<?echo $arItem["DETAIL_PAGE_URL"]?>" class="btn btn__link btn__secondary"><i class="icon-arrow-right"></i></a>
                <?endif;?>
            <?endif;?>
          </div>

    <? if ($show_counter == false): ?>
        </div>
    <? endif; ?>

<? endforeach; ?>

<? if ($show_counter == true): ?>
      </div>
    </div>
<? endif; ?>

      </div>
    </div>
  </div>


