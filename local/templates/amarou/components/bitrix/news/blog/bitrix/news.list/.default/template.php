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
    <div class="col-sm-12 col-md-6 col-lg-4" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
        <div class="post-item">
            <div class="post-item__img">
                <a href="<?=$arItem["DETAIL_PAGE_URL"]?>">
                    <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="blog image">
                </a>
            </div><!-- /.blog-img -->
            <div class="post-item__content">
                <div class="post-item__meta d-flex flex-wrap align-items-center">
                    <span class="post-item__meta-date"><?= $arItem["DISPLAY_ACTIVE_FROM"] ?></span>
                    <div class="post-item__meta-cat">
                        <?
                            $cats = $arItem["DISPLAY_PROPERTIES"]['category']['VALUE'];
                            foreach($cats as $catItem):
                        ?>
                            <a href="/blog/search/?q=<?= str_replace(' ', '+', $catItem) ?>"><?= $catItem ?></a>
                        <? endforeach; ?>
                    </div><!-- /.blog-meta-cat -->
                </div><!-- /.blog-meta -->
                <h4 class="post-item__title"><a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><?= $arItem["NAME"]; ?></a>
                </h4>
                <p class="post-item__desc"><?= $arItem["PREVIEW_TEXT"]; ?></p>
                <a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="btn btn__secondary btn__link">
                    <i class="icon-arrow-right"></i>
                    <span>Read More</span>
                </a>
            </div><!-- /.blog-content -->
        </div><!-- /.post-item -->
    </div><!-- /.col-lg-4 -->

<? endforeach; ?>
    </div><!-- /.row -->
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
    <br /><?=$arResult["NAV_STRING"]?>
<?endif;?>
