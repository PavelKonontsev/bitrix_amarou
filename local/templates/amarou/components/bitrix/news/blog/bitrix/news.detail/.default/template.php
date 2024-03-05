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

<!-- <pre>
    <?= var_export($arResult["BLOG_RECENT"]) ?>
</pre> -->

<!-- ======================
  Blog Single
========================= -->
<section class="blog blog-single pt-0 pb-40">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-4">

        <aside class="sidebar mb-30">
            <div class="widget widget-search">
                <?
                $APPLICATION->SetTitle("");?><?$APPLICATION->IncludeComponent(
                    "bitrix:search.form",
                    "search",
                    array(
                        "PAGE" => "#SITE_DIR#blog/search/",
                        "USE_SUGGEST" => "N",
                        "COMPONENT_TEMPLATE" => "search"
                    ),
                    false
                );
                ?>
            </div><!-- /.widget-search -->

        <? if (count($arResult["BLOG_RECENT"]) > 0): ?>
          <div class="widget widget-posts">
            <h5 class="widget-title">Recent Posts</h5>
            <div class="widget-content">
              <div class="slick-carousel" data-slick='{"slidesToShow": 1, "arrows": false, "dots": true}'>

                <? foreach($arResult['BLOG_RECENT'] as $item): ?>
                    <div class="widget-post-item">
                      <div class="widget-post__img">
                        <a href="<?=$item["DETAIL_PAGE_URL"]?>"><img src="<?=$item["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$item["PREVIEW_PICTURE"]["DESCRIPTION"]?>"></a>
                      </div>
                      <div class="widget-post__content">
                        <span class="widget-post__date"><?=$item["DISPLAY_ACTIVE_FROM"]?></span>
                        <h6 class="widget-post__title"><a href="<?=$item["DETAIL_PAGE_URL"]?>"><?=$item["NAME"]?></a>
                        </h6>
                      </div>
                    </div>
                <? endforeach; ?>



              </div><!-- /.carousel -->
            </div><!-- /.widget-content -->
          </div><!-- /.widget-posts -->
        <? endif; ?>

            <div class="widget widget-tags">
                <?
                $APPLICATION->SetTitle("");?><?$APPLICATION->IncludeComponent("bitrix:search.tags.cloud", "tags_cloud", Array(
                    "CACHE_TIME" => "3600", // Время кеширования (сек.)
                        "CACHE_TYPE" => "A",    // Тип кеширования
                        "CHECK_DATES" => "N",   // Искать только в активных по дате документах
                        "COLOR_NEW" => "3E74E6",    // Цвет более позднего тега (пример: "C0C0C0")
                        "COLOR_OLD" => "C0C0C0",    // Цвет более раннего тега (пример: "FEFEFE")
                        "COLOR_TYPE" => "Y",    // Плавное изменение цвета
                        "FILTER_NAME" => "",    // Дополнительный фильтр
                        "FONT_MAX" => "50", // Максимальный размер шрифта (px)
                        "FONT_MIN" => "10", // Минимальный  размер шрифта (px)
                        "PAGE_ELEMENTS" => "6", // Количество тегов
                        "PERIOD" => "", // Период выборки тегов (дней)
                        "PERIOD_NEW_TAGS" => "",    // Период,  в течение которого считать тег новым (дней)
                        "SHOW_CHAIN" => "Y",    // Показывать цепочку навигации
                        "SORT" => "NAME",   // Сортировка тегов
                        "TAGS_INHERIT" => "Y",  // Сужать область поиска
                        "URL_SEARCH" => "blog/search/index.php",    // Путь к странице поиска (от корня сайта)
                        "WIDTH" => "100%",  // Ширина облака тегов (пример: "100%" или "100px", "100pt", "100in")
                        "arrFILTER" => array(   // Ограничение области поиска
                            0 => "iblock_blog",
                        ),
                        "arrFILTER_iblock_blog" => array(   // Искать в информационных блоках типа "iblock_blog"
                            0 => "8",
                        ),
                        "COMPONENT_TEMPLATE" => "gadget"
                    ),
                    false
                );
                ?>
            </div><!-- /.widget-tags -->
        </aside><!-- /.sidebar -->

      </div><!-- /.col-lg-4 -->

      <div class="col-sm-12 col-md-12 col-lg-8">
        <div class="post-item mb-0">
          <div class="post-item__img">
            <a href="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>">
              <img src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" alt="<?=$arResult["DETAIL_PICTURE"]["ALT"]?>">
            </a>
          </div><!-- /.entry-img -->
          <div class="post-item__content">
            <div class="post-item__meta d-flex align-items-center">
              <div class="post-item__meta-cat">
                <?
                    $categories = $arResult["PROPERTIES"]['category']['VALUE'];
                    foreach($categories as $catItem):
                ?>
                    <a href="/blog/search/?q=<?= str_replace(' ', '+', $catItem); ?>"><?= $catItem ?></a>
                <? endforeach; ?>
              </div><!-- /.blog-meta-cat -->
              <span class="post-item__meta-date"><?=$arResult["DISPLAY_ACTIVE_FROM"]?></span>
              <!-- author, пока не смотрел как сделать, чтобы пользователи могли создавать статьи и инфа о них была доступна-->
              <!-- <span class="post-item__meta-author"></span>  -->
            </div><!-- /.blog-meta -->
            <h1 class="post-item__title"><?=$arResult["NAME"]?></h1>
            <div class="post-item__desc">
              <?=$arResult["DETAIL_TEXT"]?>
            </div><!-- /.blog-desc -->
          </div><!-- /.entry-content -->
        </div><!-- /.post-item -->
        <?
        if(array_key_exists("USE_SHARE", $arParams) && $arParams["USE_SHARE"] == "Y")
        {
            ?>
            <div class="blog-share d-flex flex-wrap justify-content-between mb-30">
                <noindex>
                    <?$APPLICATION->SetTitle("");?><?$APPLICATION->IncludeComponent("bitrix:main.share", "share", Array(
                        "HANDLERS" => array(    // Используемые соц. закладки и сети
                                0 => "facebook",
                                1 => "twitter",
                                2 => "vk",
                            ),
                            "HIDE" => "N",  // Скрыть панель закладок по умолчанию
                            "PAGE_TITLE" => "", // Заголовок страницы
                            "PAGE_URL" => "",   // URL страницы относительно корня сайта
                            "SHORTEN_URL_KEY" => "",    // Ключ API для bit.ly
                            "SHORTEN_URL_LOGIN" => "",  // Логин для bit.ly
                            "COMPONENT_TEMPLATE" => ".default"
                        ),
                        false
                    );?>
                </noindex>
            </div>
            <?
        }
        ?>

        <div class="blog-tags d-flex flex-wrap">
          <strong class="mr-20 color-heading">Tags:</strong>
          <ul class="list-unstyled d-flex flex-wrap mb-40">
            <?
                $tags = explode(',', $arResult["TAGS"]);
                foreach($tags as $tagItem):
                    $tagItem = trim($tagItem);
            ?>
                <li><a href="/blog/search/?tags=<?= str_replace(' ', '+', $tagItem) ?>"><?= $tagItem ?></a></li>
            <? endforeach; ?>
          </ul>
        </div>

        <? if ($arResult["BLOG_RING"]["NEXT"] || $arResult["BLOG_RING"]["PREV"]): ?>
        <div class="blog-widget blog-nav mb-0">
          <div class="post-item__prev">
          <? if ($arResult["BLOG_RING"]["PREV"]): ?>
            <a href="<?= $arResult["BLOG_RING"]["PREV"]['DETAIL_PAGE_URL']; ?>">
              <div class="post-item__nav-img">
                <img src="<?= $arResult["BLOG_RING"]["PREV"]['PREVIEW_PICTURE']['SRC']; ?>" alt="<?= $arResult["BLOG_RING"]["PREV"]['PREVIEW_PICTURE']['DESCRIPTION']; ?>">

              </div>
              <div class="post-item__nav-content">
                <span>Previous</span>
                <h5><?= $arResult["BLOG_RING"]["PREV"]['NAME']; ?></h5>
              </div>
            </a>
          <? endif; ?>
          </div>
          <div class="post-item__next">
          <? if ($arResult["BLOG_RING"]["NEXT"]):  ?>
            <a href="<?= $arResult["BLOG_RING"]["NEXT"]['DETAIL_PAGE_URL']; ?>">
              <div class="post-item__nav-content">
                <span>Next</span>
                <h5><?= $arResult["BLOG_RING"]["NEXT"]['NAME']; ?></h5>
              </div>
              <div class="post-item__nav-img">
                <img src="<?= $arResult["BLOG_RING"]["NEXT"]['PREVIEW_PICTURE']['SRC']; ?>" alt="<?= $arResult["BLOG_RING"]["NEXT"]['PREVIEW_PICTURE']['DESCRIPTION']; ?>">

              </div>
            </a>
          <? endif; ?>
          </div>
        </div>
    <? endif; ?>

<!-- author, пока не смотрел как сделать, что пользователи могли создавать статьи и инфа о них была доступна. Возможно нужна редакция битрикс повыше чем Старт. -->
<!--         <div class="blog-widget">
          <div class="blog-author">
            <div class="post-item__author-avatar">
              <img src="assets/images/blog/author/1.jpg" alt="avatar">
            </div>
            <div class="post-item__author-content">
              <h6 class="post-item__author-name">Mahmoud Baghagho</h6>
              <p class="post-item__author-bio">Founded by Begha over many cups of tea at her kitchen table in 2009,
                our
                brand promise is simple: to
                provide powerful digital marketing solutions to small and medium businesses.</p>
              <ul class="social-icons list-unstyled mb-0">
                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-vimeo-v"></i></a> </li>
                <li><a href="#"><i class="fab fa-linkedin"></i></a> </li>
              </ul>
            </div>
          </div>
        </div> -->

      </div><!-- /.col-lg-8 -->
    </div><!-- /.row -->
  </div><!-- /.container -->
</section><!-- /.blog Single -->
