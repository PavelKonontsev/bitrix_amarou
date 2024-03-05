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
      data-slick='{"slidesToShow": 3, "slidesToScroll": 1, "arrows": true, "dots": true, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 2}}, {"breakpoint": 767, "settings": {"slidesToShow": 2}}, {"breakpoint": 480, "settings": {"slidesToShow": 1}}]}'>

<?foreach($arResult["ITEMS"] as $arItem):?>
    <?
    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
    ?>
      <!-- portfolio item #1 -->
      <div class="portfolio-item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
        <div class="portfolio-item__img">
          <a class="popup-gallery-item" href="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>">
            <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="portfolio img">
          </a>
        </div><!-- /.portfolio-img -->
        <div class="portfolio-item__content">
          <div class="portfolio-item__cat">
            <?
                $tags = explode(',', $arItem["TAGS"]);
                foreach($tags as $tagItem):
                    $tagItem = trim($tagItem);
            ?>
                <a href="/projects/search/?tags=<?= str_replace(' ', '+', $tagItem) ?>"><?= $tagItem ?></a>
            <? endforeach; ?>
          </div><!-- /.portfolio-cat -->
          <h4 class="portfolio-item__title"><a href="<?= $arItem["DETAIL_PAGE_URL"]; ?>"><?= $arItem["NAME"]; ?></a>
          </h4>
          <p class="portfolio-item__desc"><?= $arItem["PREVIEW_TEXT"]; ?></p>
          <a href="<?= $arItem["DETAIL_PAGE_URL"]; ?>" class="btn btn__loadMore">
            <i class="icon-arrow-right"></i> <span>Explore More</span>
          </a>
        </div><!-- /.portfolio-content -->
      </div><!-- /.portfolio-item -->
<? endforeach; ?>

    </div><!-- /.slick-carousel -->
  </div><!-- /.col-lg-12 -->
</div><!-- /.row -->
