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
$this->setFrameMode(true);?>


<h5 class="widget-title">Search</h5>
<div class="widget-content">
    <form class="widget-form__search" action="<?=$arResult["FORM_ACTION"]?>">
        <input type="text" name="q" class="form-control" placeholder="Search...">
        <button class="btn" name="s" type="submit" value="<?=GetMessage("BSF_T_SEARCH_BUTTON");?>"><i class="fa fa-search"></i></button>
    </form>
</div><!-- /.widget-content -->

