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
      <div class="col-sm-12 col-md-12 col-lg-12">
        <div class="slick-carousel"
          data-slick='{"slidesToShow": 4, "slidesToScroll": 1, "arrows": false, "dots": true, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 2}}, {"breakpoint": 767, "settings": {"slidesToShow": 2}}, {"breakpoint": 480, "settings": {"slidesToShow": 1}}]}'>

    <?foreach($arResult["ITEMS"] as $arItem):?>
        <?
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>

          <div class="service-item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
            <div class="service-item__content">
              <div class="service-item__icon">
                <i class="<?= $arItem["DISPLAY_PROPERTIES"]['icon']['VALUE']; ?>"></i>
              </div><!-- /.service-item__icon -->
              <h4 class="service-item__title"><?= $arItem["NAME"]; ?></h4>
              <p class="service-item__desc"><?= $arItem["PREVIEW_TEXT"]; ?></p>
              <ul class="list-items list-items-layout2 list-unstyled mb-30">
                <? foreach ($arItem["DISPLAY_PROPERTIES"]['list']['VALUE'] as $item): ?>
                    <li><?= $item; ?></li>
                <? endforeach; ?>
              </ul>
              <a href="<?= $arItem["DISPLAY_PROPERTIES"]['url']['VALUE']; ?>" class="btn btn__secondary">
                <i class="icon-arrow-right"></i>
                <span>Read More</span>
              </a>
            </div>
          </div><!-- /.service-item -->

    <? endforeach; ?>

        </div><!-- /.col-lg-12 -->
      </div>
    </div><!-- /.row -->
