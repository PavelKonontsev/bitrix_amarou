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


<div class="slick-carousel" data-slick='{"slidesToShow": 1, "arrows": true, "dots": false, "infinite": true}'>

<?foreach($arResult["ITEMS"] as $arItem):?>
    <?
    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
    ?>
  <div class="testimonial-item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
    <div class="testimonial-item__rating">
    <? $rating = $arItem["DISPLAY_PROPERTIES"]['rating']['VALUE'];
        while ($rating > 0):
    ?>
        <i class="fas fa-star"></i>
    <?
        $rating -= 1;
        endwhile;
    ?>
    </div>
    <p class="testimonial-item__desc"><?= $arItem["PREVIEW_TEXT"] ?></p>
    <div class="testimonial-item__meta">
      <div class="testimonial-item__thumb">
        <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="author thumb">
      </div><!-- /.testimonial-thumb -->
      <div>
        <h4 class="testimonial-item__meta-title"><?= $arItem["NAME"]; ?></h4>
        <p class="testimonial-item__meta-desc"><?= $arItem["DISPLAY_PROPERTIES"]['company']['VALUE']; ?></p>
      </div>
    </div><!-- /.testimonial-meta -->
  </div><!-- /. testimonial-item -->
 <? endforeach; ?>

</div>
