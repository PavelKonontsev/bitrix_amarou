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


  <div class="slick-carousel carousel-arrows-light m-slides-0"
    data-slick='{"slidesToShow": 1, "arrows": true, "dots": true, "speed": 700,"fade": true,"cssEase": "linear"}'>

    <?foreach($arResult["ITEMS"] as $arItem):?>
    <?
    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
    ?>
    <div class="slide-item align-v-h bg-overlay" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
      <div class="bg-img"><img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="slide img"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-9">
            <div class="slide-item__content">
                <h1 class="slide-item__subtitle"><?= $arItem["PREVIEW_TEXT"]; ?></h1>
                <h2 class="slide-item__title"><?= $arItem["NAME"]; ?></h2>
                <p class="slide-item__desc"><?= $arItem["DETAIL_TEXT"]; ?></p>
                <? if ($arItem["DISPLAY_PROPERTIES"]['btn_url_1']['DISPLAY_VALUE'] != ''): ?>
                    <a href="<?= $arItem["DISPLAY_PROPERTIES"]['btn_url_1']['DISPLAY_VALUE']; ?>" class="btn btn__primary btn__lg mr-30">
                        <i class="icon-arrow-right"></i><span><?= $arItem["DISPLAY_PROPERTIES"]['btn_title_1']['DISPLAY_VALUE']; ?></span>
                    </a>
                <? endif; ?>
                <? if ($arItem["DISPLAY_PROPERTIES"]['btn_url_2']['DISPLAY_VALUE']): ?>
                    <a href="<?= $arItem["DISPLAY_PROPERTIES"]['btn_url_2']['DISPLAY_VALUE'] ?>" class="btn btn__white"><?= $arItem["DISPLAY_PROPERTIES"]['btn_title_2']['DISPLAY_VALUE']; ?></a>
                <? endif; ?>
            </div><!-- /.slide-content -->
          </div><!-- /.col-xl-9 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </div><!-- /.slide-item -->
    <?endforeach;?>

  </div><!-- /.carousel -->

