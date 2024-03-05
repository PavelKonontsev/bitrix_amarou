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

<div class="container">
<div class="row align-items-center">

<?foreach($arResult["ITEMS"] as $arItem):?>
    <?
    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
    ?>
      <div class="col-6 col-sm-4 col-md-2 col-lg-2" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
        <div class="client">
          <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="client">
          <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="client">
        </div><!-- /.client -->
      </div><!-- /.col-lg-2 -->
<? endforeach; ?>

</div><!-- /.row -->
</div><!-- /.container -->
