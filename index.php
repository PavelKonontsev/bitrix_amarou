<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle('Главная');
?> 

<!-- ============================
    Slider
============================== -->
<section class="slider slider-layout1">
    <?$APPLICATION->IncludeComponent(
        "bitrix:news.list",
        "slider",
        array(
            "ACTIVE_DATE_FORMAT" => "d.m.Y",
            "ADD_SECTIONS_CHAIN" => "N",
            "AJAX_MODE" => "N",
            "AJAX_OPTION_ADDITIONAL" => "",
            "AJAX_OPTION_HISTORY" => "N",
            "AJAX_OPTION_JUMP" => "N",
            "AJAX_OPTION_STYLE" => "Y",
            "CACHE_FILTER" => "N",
            "CACHE_GROUPS" => "Y",
            "CACHE_TIME" => "36000000",
            "CACHE_TYPE" => "A",
            "CHECK_DATES" => "Y",
            "DETAIL_URL" => "",
            "DISPLAY_BOTTOM_PAGER" => "N",
            "DISPLAY_DATE" => "N",
            "DISPLAY_NAME" => "Y",
            "DISPLAY_PICTURE" => "Y",
            "DISPLAY_PREVIEW_TEXT" => "Y",
            "DISPLAY_TOP_PAGER" => "N",
            "FIELD_CODE" => array(
                0 => "NAME",
                1 => "PREVIEW_TEXT",
                2 => "PREVIEW_PICTURE",
                3 => "DETAIL_TEXT",
                4 => "",
            ),
            "FILTER_NAME" => "",
            "HIDE_LINK_WHEN_NO_DETAIL" => "N",
            "IBLOCK_ID" => "1",
            "IBLOCK_TYPE" => "index",
            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
            "INCLUDE_SUBSECTIONS" => "N",
            "MESSAGE_404" => "",
            "NEWS_COUNT" => "2",
            "PAGER_BASE_LINK_ENABLE" => "N",
            "PAGER_DESC_NUMBERING" => "N",
            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
            "PAGER_SHOW_ALL" => "N",
            "PAGER_SHOW_ALWAYS" => "N",
            "PAGER_TEMPLATE" => ".default",
            "PAGER_TITLE" => "Новости",
            "PARENT_SECTION" => "",
            "PARENT_SECTION_CODE" => "",
            "PREVIEW_TRUNCATE_LEN" => "",
            "PROPERTY_CODE" => array(
                0 => "btn_title_1",
                1 => "btn_title_2",
                2 => "btn_url_1",
                3 => "btn_url_2",
                4 => "",
            ),
            "SET_BROWSER_TITLE" => "N",
            "SET_LAST_MODIFIED" => "N",
            "SET_META_DESCRIPTION" => "N",
            "SET_META_KEYWORDS" => "N",
            "SET_STATUS_404" => "N",
            "SET_TITLE" => "N",
            "SHOW_404" => "N",
            "SORT_BY1" => "ACTIVE_FROM",
            "SORT_BY2" => "SORT",
            "SORT_ORDER1" => "DESC",
            "SORT_ORDER2" => "ASC",
            "STRICT_SECTION_CHECK" => "N",
            "COMPONENT_TEMPLATE" => "slider"
        ),
        false
    );?>
</section><!-- /.slider -->

<!-- ========================
features
=========================== -->
<section class="features-latout1 py-0">
    <?$APPLICATION->IncludeComponent(
        "bitrix:news.list",
        "features",
        array(
            "ACTIVE_DATE_FORMAT" => "d.m.Y",
            "ADD_SECTIONS_CHAIN" => "N",
            "AJAX_MODE" => "N",
            "AJAX_OPTION_ADDITIONAL" => "",
            "AJAX_OPTION_HISTORY" => "N",
            "AJAX_OPTION_JUMP" => "N",
            "AJAX_OPTION_STYLE" => "Y",
            "CACHE_FILTER" => "N",
            "CACHE_GROUPS" => "Y",
            "CACHE_TIME" => "36000000",
            "CACHE_TYPE" => "A",
            "CHECK_DATES" => "Y",
            "DETAIL_URL" => "",
            "DISPLAY_BOTTOM_PAGER" => "N",
            "DISPLAY_DATE" => "N",
            "DISPLAY_NAME" => "N",
            "DISPLAY_PICTURE" => "N",
            "DISPLAY_PREVIEW_TEXT" => "N",
            "DISPLAY_TOP_PAGER" => "N",
            "FIELD_CODE" => array(
                0 => "CODE",
                1 => "XML_ID",
                2 => "NAME",
                3 => "PREVIEW_TEXT",
                4 => "",
            ),
            "FILTER_NAME" => "",
            "HIDE_LINK_WHEN_NO_DETAIL" => "N",
            "IBLOCK_ID" => "2",
            "IBLOCK_TYPE" => "index",
            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
            "INCLUDE_SUBSECTIONS" => "N",
            "MESSAGE_404" => "",
            "NEWS_COUNT" => "5",
            "PAGER_BASE_LINK_ENABLE" => "N",
            "PAGER_DESC_NUMBERING" => "N",
            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
            "PAGER_SHOW_ALL" => "N",
            "PAGER_SHOW_ALWAYS" => "N",
            "PAGER_TEMPLATE" => ".default",
            "PAGER_TITLE" => "Новости",
            "PARENT_SECTION" => "",
            "PARENT_SECTION_CODE" => "",
            "PREVIEW_TRUNCATE_LEN" => "",
            "PROPERTY_CODE" => array(
                0 => "counter",
                1 => "",
            ),
            "SET_BROWSER_TITLE" => "N",
            "SET_LAST_MODIFIED" => "N",
            "SET_META_DESCRIPTION" => "N",
            "SET_META_KEYWORDS" => "N",
            "SET_STATUS_404" => "Y",
            "SET_TITLE" => "N",
            "SHOW_404" => "N",
            "SORT_BY1" => "counter",
            "SORT_BY2" => "SORT",
            "SORT_ORDER1" => "ASC",
            "SORT_ORDER2" => "ASC",
            "STRICT_SECTION_CHECK" => "N",
            "COMPONENT_TEMPLATE" => "features",
            "TEMPLATE_THEME" => "blue",
            "MEDIA_PROPERTY" => "",
            "SLIDER_PROPERTY" => "",
            "SEARCH_PAGE" => "/search/",
            "USE_RATING" => "N",
            "USE_SHARE" => "N"
        ),
        false
    );?>
</section>


<!-- ========================
  About Layout 2
=========================== -->
<section class="about-layout2">
    <?$APPLICATION->IncludeComponent(
        "bitrix:main.include",
        "",
        Array(
            "AREA_FILE_SHOW" => "file",
            "AREA_FILE_SUFFIX" => "inc",
            "EDIT_TEMPLATE" => "",
            "PATH" => SITE_TEMPLATE_PATH."/includes/about-layout.php"
        )
    );?>
</section><!-- /.About Layout 2 -->


<!-- ========================
    Services Layout 2
=========================== -->
<section class="services-layout2 pb-90">
  <div class="bg-img"><img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/backgrounds/3.jpg" alt="banner"></div>
  <div class="container">
    <?$APPLICATION->IncludeComponent(
        "bitrix:main.include",
        "",
        Array(
            "AREA_FILE_SHOW" => "file",
            "AREA_FILE_SUFFIX" => "inc",
            "EDIT_TEMPLATE" => "",
            "PATH" => SITE_TEMPLATE_PATH."/includes/services-layout.php"
        )
    );?>

    <?$APPLICATION->IncludeComponent("bitrix:news.list", "services", Array(
        "COMPONENT_TEMPLATE" => ".default",
            "IBLOCK_TYPE" => "index",   // Тип информационного блока (используется только для проверки)
            "IBLOCK_ID" => "3", // Код информационного блока
            "NEWS_COUNT" => "6",    // Количество новостей на странице
            "SORT_BY1" => "ACTIVE_FROM",    // Поле для первой сортировки новостей
            "SORT_ORDER1" => "DESC",    // Направление для первой сортировки новостей
            "SORT_BY2" => "SORT",   // Поле для второй сортировки новостей
            "SORT_ORDER2" => "ASC", // Направление для второй сортировки новостей
            "FILTER_NAME" => "",    // Фильтр
            "FIELD_CODE" => array(  // Поля
                0 => "NAME",
                1 => "PREVIEW_TEXT",
                2 => "",
            ),
            "PROPERTY_CODE" => array(   // Свойства
                0 => "icon",
                1 => "list",
                2 => "url",
                3 => "",
            ),
            "CHECK_DATES" => "Y",   // Показывать только активные на данный момент элементы
            "DETAIL_URL" => "", // URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
            "AJAX_MODE" => "N", // Включить режим AJAX
            "AJAX_OPTION_JUMP" => "N",  // Включить прокрутку к началу компонента
            "AJAX_OPTION_STYLE" => "Y", // Включить подгрузку стилей
            "AJAX_OPTION_HISTORY" => "N",   // Включить эмуляцию навигации браузера
            "AJAX_OPTION_ADDITIONAL" => "", // Дополнительный идентификатор
            "CACHE_TYPE" => "A",    // Тип кеширования
            "CACHE_TIME" => "36000000", // Время кеширования (сек.)
            "CACHE_FILTER" => "N",  // Кешировать при установленном фильтре
            "CACHE_GROUPS" => "Y",  // Учитывать права доступа
            "PREVIEW_TRUNCATE_LEN" => "",   // Максимальная длина анонса для вывода (только для типа текст)
            "ACTIVE_DATE_FORMAT" => "d.m.Y",    // Формат показа даты
            "SET_TITLE" => "N", // Устанавливать заголовок страницы
            "SET_BROWSER_TITLE" => "N", // Устанавливать заголовок окна браузера
            "SET_META_KEYWORDS" => "N", // Устанавливать ключевые слова страницы
            "SET_META_DESCRIPTION" => "N",  // Устанавливать описание страницы
            "SET_LAST_MODIFIED" => "N", // Устанавливать в заголовках ответа время модификации страницы
            "INCLUDE_IBLOCK_INTO_CHAIN" => "N", // Включать инфоблок в цепочку навигации
            "ADD_SECTIONS_CHAIN" => "N",    // Включать раздел в цепочку навигации
            "HIDE_LINK_WHEN_NO_DETAIL" => "N",  // Скрывать ссылку, если нет детального описания
            "PARENT_SECTION" => "", // ID раздела
            "PARENT_SECTION_CODE" => "",    // Код раздела
            "INCLUDE_SUBSECTIONS" => "N",   // Показывать элементы подразделов раздела
            "STRICT_SECTION_CHECK" => "N",  // Строгая проверка раздела для показа списка
            "DISPLAY_DATE" => "N",  // Выводить дату элемента
            "DISPLAY_NAME" => "Y",  // Выводить название элемента
            "DISPLAY_PICTURE" => "N",   // Выводить изображение для анонса
            "DISPLAY_PREVIEW_TEXT" => "Y",  // Выводить текст анонса
            "PAGER_TEMPLATE" => ".default", // Шаблон постраничной навигации
            "DISPLAY_TOP_PAGER" => "N", // Выводить над списком
            "DISPLAY_BOTTOM_PAGER" => "N",  // Выводить под списком
            "PAGER_TITLE" => "Сервисы", // Название категорий
            "PAGER_SHOW_ALWAYS" => "N", // Выводить всегда
            "PAGER_DESC_NUMBERING" => "N",  // Использовать обратную навигацию
            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",   // Время кеширования страниц для обратной навигации
            "PAGER_SHOW_ALL" => "N",    // Показывать ссылку "Все"
            "PAGER_BASE_LINK_ENABLE" => "N",    // Включить обработку ссылок
            "SET_STATUS_404" => "N",    // Устанавливать статус 404
            "SHOW_404" => "N",  // Показ специальной страницы
            "MESSAGE_404" => "",    // Сообщение для показа (по умолчанию из компонента)
        ),
        false
    );?>

  </div><!-- /.container -->
</section><!-- /.Services Layout 2 -->


<!-- =====================
     Clients
  ======================== -->
<section class="clients bg-gray">
    <?$APPLICATION->IncludeComponent("bitrix:news.list", "clients", Array(
        "ACTIVE_DATE_FORMAT" => "d.m.Y",    // Формат показа даты
            "ADD_SECTIONS_CHAIN" => "N",    // Включать раздел в цепочку навигации
            "AJAX_MODE" => "N", // Включить режим AJAX
            "AJAX_OPTION_ADDITIONAL" => "", // Дополнительный идентификатор
            "AJAX_OPTION_HISTORY" => "N",   // Включить эмуляцию навигации браузера
            "AJAX_OPTION_JUMP" => "N",  // Включить прокрутку к началу компонента
            "AJAX_OPTION_STYLE" => "Y", // Включить подгрузку стилей
            "CACHE_FILTER" => "N",  // Кешировать при установленном фильтре
            "CACHE_GROUPS" => "Y",  // Учитывать права доступа
            "CACHE_TIME" => "36000000", // Время кеширования (сек.)
            "CACHE_TYPE" => "A",    // Тип кеширования
            "CHECK_DATES" => "Y",   // Показывать только активные на данный момент элементы
            "DETAIL_URL" => "", // URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
            "DISPLAY_BOTTOM_PAGER" => "N",  // Выводить под списком
            "DISPLAY_DATE" => "N",  // Выводить дату элемента
            "DISPLAY_NAME" => "N",  // Выводить название элемента
            "DISPLAY_PICTURE" => "Y",   // Выводить изображение для анонса
            "DISPLAY_PREVIEW_TEXT" => "N",  // Выводить текст анонса
            "DISPLAY_TOP_PAGER" => "N", // Выводить над списком
            "FIELD_CODE" => array(  // Поля
                0 => "PREVIEW_PICTURE",
                1 => "",
            ),
            "FILTER_NAME" => "",    // Фильтр
            "HIDE_LINK_WHEN_NO_DETAIL" => "N",  // Скрывать ссылку, если нет детального описания
            "IBLOCK_ID" => "4", // Код информационного блока
            "IBLOCK_TYPE" => "index",   // Тип информационного блока (используется только для проверки)
            "INCLUDE_IBLOCK_INTO_CHAIN" => "N", // Включать инфоблок в цепочку навигации
            "INCLUDE_SUBSECTIONS" => "N",   // Показывать элементы подразделов раздела
            "MESSAGE_404" => "",    // Сообщение для показа (по умолчанию из компонента)
            "NEWS_COUNT" => "12",   // Количество новостей на странице
            "PAGER_BASE_LINK_ENABLE" => "N",    // Включить обработку ссылок
            "PAGER_DESC_NUMBERING" => "N",  // Использовать обратную навигацию
            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",   // Время кеширования страниц для обратной навигации
            "PAGER_SHOW_ALL" => "N",    // Показывать ссылку "Все"
            "PAGER_SHOW_ALWAYS" => "N", // Выводить всегда
            "PAGER_TEMPLATE" => ".default", // Шаблон постраничной навигации
            "PAGER_TITLE" => "Новости", // Название категорий
            "PARENT_SECTION" => "", // ID раздела
            "PARENT_SECTION_CODE" => "",    // Код раздела
            "PREVIEW_TRUNCATE_LEN" => "",   // Максимальная длина анонса для вывода (только для типа текст)
            "PROPERTY_CODE" => array(   // Свойства
                0 => "",
                1 => "",
            ),
            "SET_BROWSER_TITLE" => "N", // Устанавливать заголовок окна браузера
            "SET_LAST_MODIFIED" => "N", // Устанавливать в заголовках ответа время модификации страницы
            "SET_META_DESCRIPTION" => "N",  // Устанавливать описание страницы
            "SET_META_KEYWORDS" => "N", // Устанавливать ключевые слова страницы
            "SET_STATUS_404" => "N",    // Устанавливать статус 404
            "SET_TITLE" => "N", // Устанавливать заголовок страницы
            "SHOW_404" => "N",  // Показ специальной страницы
            "SORT_BY1" => "ACTIVE_FROM",    // Поле для первой сортировки новостей
            "SORT_BY2" => "SORT",   // Поле для второй сортировки новостей
            "SORT_ORDER1" => "DESC",    // Направление для первой сортировки новостей
            "SORT_ORDER2" => "ASC", // Направление для второй сортировки новостей
            "STRICT_SECTION_CHECK" => "N",  // Строгая проверка раздела для показа списка
        ),
        false
    );?>
</section><!-- /.clients -->


<!-- =========================
     Banner layout 1
    =========================== -->
<section class="banner-layout3 py-0 bg-gray">
    <?$APPLICATION->IncludeComponent(
        "bitrix:main.include",
        "",
        Array(
            "AREA_FILE_SHOW" => "file",
            "AREA_FILE_SUFFIX" => "inc",
            "EDIT_TEMPLATE" => "",
            "PATH" => SITE_TEMPLATE_PATH."/includes/banner-layout.php"
        )
    );?>
</section><!-- /.Banner layout 1 -->



<!-- ===========================
  portfolio standard carousel
============================= -->
<section class="portfolio-standard portfolio-standard-carousel pt-20 pb-60 bg-gray">
  <div class="container">

    <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-6">
        <div class="heading mb-40">
          <h2 class="heading__subtitle">Explore Recent Works</h2>
          <h3 class="heading__title">Featured Projects</h3>
        </div><!-- /.heading -->
      </div><!-- /.col-lg-6 -->
    </div><!-- /.row -->

    <? $APPLICATION->IncludeComponent(
        "bitrix:news",
        "projects",
        array(
            "ADD_ELEMENT_CHAIN" => "Y",
            "ADD_SECTIONS_CHAIN" => "N",
            "AJAX_MODE" => "N",
            "AJAX_OPTION_ADDITIONAL" => "",
            "AJAX_OPTION_HISTORY" => "N",
            "AJAX_OPTION_JUMP" => "N",
            "AJAX_OPTION_STYLE" => "Y",
            "BROWSER_TITLE" => "-",
            "CACHE_FILTER" => "N",
            "CACHE_GROUPS" => "Y",
            "CACHE_TIME" => "36000000",
            "CACHE_TYPE" => "A",
            "CHECK_DATES" => "Y",
            "DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",
            "DETAIL_DISPLAY_BOTTOM_PAGER" => "N",
            "DETAIL_DISPLAY_TOP_PAGER" => "N",
            "DETAIL_FIELD_CODE" => array(
                0 => "NAME",
                1 => "TAGS",
                2 => "PREVIEW_PICTURE",
                3 => "DETAIL_TEXT",
                4 => "",
            ),
            "DETAIL_PAGER_SHOW_ALL" => "N",
            "DETAIL_PAGER_TEMPLATE" => "",
            "DETAIL_PAGER_TITLE" => "Страница",
            "DETAIL_PROPERTY_CODE" => array(
                0 => "",
                1 => "",
            ),
            "DETAIL_SET_CANONICAL_URL" => "N",
            "DISPLAY_BOTTOM_PAGER" => "N",
            "DISPLAY_DATE" => "N",
            "DISPLAY_NAME" => "Y",
            "DISPLAY_PICTURE" => "Y",
            "DISPLAY_PREVIEW_TEXT" => "Y",
            "DISPLAY_TOP_PAGER" => "N",
            "HIDE_LINK_WHEN_NO_DETAIL" => "N",
            "IBLOCK_ID" => "5",
            "IBLOCK_TYPE" => "index",
            "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
            "LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
            "LIST_FIELD_CODE" => array(
                0 => "NAME",
                1 => "TAGS",
                2 => "PREVIEW_TEXT",
                3 => "PREVIEW_PICTURE",
                4 => "",
            ),
            "LIST_PROPERTY_CODE" => array(
                0 => "",
                1 => "",
            ),
            "MESSAGE_404" => "",
            "META_DESCRIPTION" => "-",
            "META_KEYWORDS" => "-",
            "NEWS_COUNT" => "6",
            "PAGER_BASE_LINK_ENABLE" => "N",
            "PAGER_DESC_NUMBERING" => "N",
            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
            "PAGER_SHOW_ALL" => "N",
            "PAGER_SHOW_ALWAYS" => "N",
            "PAGER_TEMPLATE" => ".default",
            "PAGER_TITLE" => "Новости",
            "PREVIEW_TRUNCATE_LEN" => "",
            "SEF_FOLDER" => "/projects/",
            "SEF_MODE" => "Y",
            "SET_LAST_MODIFIED" => "N",
            "SET_STATUS_404" => "N",
            "SET_TITLE" => "N",
            "SHOW_404" => "N",
            "SORT_BY1" => "ACTIVE_FROM",
            "SORT_BY2" => "SORT",
            "SORT_ORDER1" => "DESC",
            "SORT_ORDER2" => "ASC",
            "STRICT_SECTION_CHECK" => "N",
            "USE_CATEGORIES" => "N",
            "USE_FILTER" => "N",
            "USE_PERMISSIONS" => "N",
            "USE_RATING" => "N",
            "USE_RSS" => "N",
            "USE_SEARCH" => "Y",
            "USE_SHARE" => "N",
            "COMPONENT_TEMPLATE" => "projects",
            "SEF_URL_TEMPLATES" => array(
                "news" => "",
                "section" => "",
                "detail" => "#ELEMENT_CODE#/",
                "search" => "search/",
            )
        ),
        false,
    );?>

  </div><!-- /.container -->
</section><!-- /.portfolio standard carousel -->

<!-- =========================
   Banner layout 4
  =========================== -->
<section class="banner-layout4 bg-overlay bg-parallax">
    <div class="bg-img"><img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/banners/4.jpg" alt="background"></div>
    <?$APPLICATION->IncludeComponent(
        "bitrix:main.include",
        "",
        Array(
            "AREA_FILE_SHOW" => "file",
            "AREA_FILE_SUFFIX" => "inc",
            "EDIT_TEMPLATE" => "",
            "PATH" => SITE_TEMPLATE_PATH."/includes/banner-layout-2.php"
        )
    );?>
</section><!-- /.Banner layout 4 -->

<!-- ==========================
    contact layout 2
  =========================== -->
<section class="contact-layout2 py-0 bg-gray">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-12">
        <div class="contact-panel mt--130">
          <div class="testimonials testimonials-layout1 bg-overlay bg-overlay-theme">
            <div class="bg-img">
              <img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/banners/6.jpg" alt="banner">
            </div>

            <?$APPLICATION->IncludeComponent("bitrix:news.list", "testimonials", Array(
                "ACTIVE_DATE_FORMAT" => "d.m.Y",    // Формат показа даты
                    "ADD_SECTIONS_CHAIN" => "N",    // Включать раздел в цепочку навигации
                    "AJAX_MODE" => "N", // Включить режим AJAX
                    "AJAX_OPTION_ADDITIONAL" => "", // Дополнительный идентификатор
                    "AJAX_OPTION_HISTORY" => "N",   // Включить эмуляцию навигации браузера
                    "AJAX_OPTION_JUMP" => "N",  // Включить прокрутку к началу компонента
                    "AJAX_OPTION_STYLE" => "Y", // Включить подгрузку стилей
                    "CACHE_FILTER" => "N",  // Кешировать при установленном фильтре
                    "CACHE_GROUPS" => "Y",  // Учитывать права доступа
                    "CACHE_TIME" => "36000000", // Время кеширования (сек.)
                    "CACHE_TYPE" => "A",    // Тип кеширования
                    "CHECK_DATES" => "Y",   // Показывать только активные на данный момент элементы
                    "DETAIL_URL" => "", // URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
                    "DISPLAY_BOTTOM_PAGER" => "N",  // Выводить под списком
                    "DISPLAY_DATE" => "N",  // Выводить дату элемента
                    "DISPLAY_NAME" => "N",  // Выводить название элемента
                    "DISPLAY_PICTURE" => "Y",   // Выводить изображение для анонса
                    "DISPLAY_PREVIEW_TEXT" => "Y",  // Выводить текст анонса
                    "DISPLAY_TOP_PAGER" => "N", // Выводить над списком
                    "FIELD_CODE" => array(  // Поля
                        0 => "NAME",
                        1 => "PREVIEW_TEXT",
                        2 => "PREVIEW_PICTURE",
                        3 => "",
                    ),
                    "FILTER_NAME" => "",    // Фильтр
                    "HIDE_LINK_WHEN_NO_DETAIL" => "N",  // Скрывать ссылку, если нет детального описания
                    "IBLOCK_ID" => "6", // Код информационного блока
                    "IBLOCK_TYPE" => "index",   // Тип информационного блока (используется только для проверки)
                    "INCLUDE_IBLOCK_INTO_CHAIN" => "N", // Включать инфоблок в цепочку навигации
                    "INCLUDE_SUBSECTIONS" => "N",   // Показывать элементы подразделов раздела
                    "MESSAGE_404" => "",    // Сообщение для показа (по умолчанию из компонента)
                    "NEWS_COUNT" => "5",    // Количество новостей на странице
                    "PAGER_BASE_LINK_ENABLE" => "N",    // Включить обработку ссылок
                    "PAGER_DESC_NUMBERING" => "N",  // Использовать обратную навигацию
                    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",   // Время кеширования страниц для обратной навигации
                    "PAGER_SHOW_ALL" => "N",    // Показывать ссылку "Все"
                    "PAGER_SHOW_ALWAYS" => "N", // Выводить всегда
                    "PAGER_TEMPLATE" => ".default", // Шаблон постраничной навигации
                    "PAGER_TITLE" => "Новости", // Название категорий
                    "PARENT_SECTION" => "", // ID раздела
                    "PARENT_SECTION_CODE" => "",    // Код раздела
                    "PREVIEW_TRUNCATE_LEN" => "",   // Максимальная длина анонса для вывода (только для типа текст)
                    "PROPERTY_CODE" => array(   // Свойства
                        0 => "company",
                        1 => "rating",
                        2 => "",
                    ),
                    "SET_BROWSER_TITLE" => "N", // Устанавливать заголовок окна браузера
                    "SET_LAST_MODIFIED" => "N", // Устанавливать в заголовках ответа время модификации страницы
                    "SET_META_DESCRIPTION" => "N",  // Устанавливать описание страницы
                    "SET_META_KEYWORDS" => "N", // Устанавливать ключевые слова страницы
                    "SET_STATUS_404" => "N",    // Устанавливать статус 404
                    "SET_TITLE" => "N", // Устанавливать заголовок страницы
                    "SHOW_404" => "N",  // Показ специальной страницы
                    "SORT_BY1" => "rating", // Поле для первой сортировки новостей
                    "SORT_BY2" => "",   // Поле для второй сортировки новостей
                    "SORT_ORDER1" => "ASC", // Направление для первой сортировки новостей
                    "SORT_ORDER2" => "",    // Направление для второй сортировки новостей
                    "STRICT_SECTION_CHECK" => "N",  // Строгая проверка раздела для показа списка
                    "COMPONENT_TEMPLATE" => ".default"
                ),
                false
            );?>

          </div><!-- /.testimonials-layout1 -->

            <div class="contact-panel__form">
                <?$APPLICATION->IncludeComponent(
                    "custom:main.feedback",
                    ".default",
                    array(
                        "EMAIL_TO" => "pavel.konontsev@mail.ru",
                        "EVENT_MESSAGE_ID" => array(
                            0 => "7",
                        ),
                        "OK_TEXT" => "Спасибо, ваше сообщение принято.",
                        "REQUIRED_FIELDS" => array(
                            0 => "NAME",
                            1 => "EMAIL",
                            2 => "MESSAGE",
                            3 => "user_phone",
                            4 => "industry",
                        ),
                        "USE_CAPTCHA" => "N",
                        "COMPONENT_TEMPLATE" => ".default"
                    ),
                    false
                );?>
            </div>

        </div><!-- /.contact__panel -->
      </div><!-- /.col-lg-12 -->
    </div><!-- /.row -->
  </div><!-- /.container -->
</section><!-- /.contact layout 2 -->


<!-- ===========================
  counters
============================= -->
<section class="counters-layout2">
  <div class="bg-img"><img src="<?=SITE_TEMPLATE_PATH?>/assets/images/backgrounds/2.jpg" alt="background"></div>
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-8">
        <div class="heading-layout3 mb-70">
          <h2 class="heading__subtitle">Work With All The Major Industry Suppliers</h2>
          <h3 class="heading__title">Committed To Delivering High Quality Construction Projects And Innovate Design!
          </h3>
        </div><!-- /.heading -->
      </div><!-- /.col-lg-8 -->
    </div><!-- /.row -->

    <?$APPLICATION->IncludeComponent("bitrix:news.list", "counters", Array(
        "COMPONENT_TEMPLATE" => ".default",
            "IBLOCK_TYPE" => "index",   // Тип информационного блока (используется только для проверки)
            "IBLOCK_ID" => "7", // Код информационного блока
            "NEWS_COUNT" => "4",    // Количество новостей на странице
            "SORT_BY1" => "counter",    // Поле для первой сортировки новостей
            "SORT_ORDER1" => "ASC", // Направление для первой сортировки новостей
            "SORT_BY2" => "SORT",   // Поле для второй сортировки новостей
            "SORT_ORDER2" => "ASC", // Направление для второй сортировки новостей
            "FILTER_NAME" => "",    // Фильтр
            "FIELD_CODE" => array(  // Поля
                0 => "NAME",
                1 => "PREVIEW_TEXT",
                2 => "",
            ),
            "PROPERTY_CODE" => array(   // Свойства
                0 => "url_1",
                1 => "url_2",
                2 => "url_3",
                3 => "url_name_1",
                4 => "url_name_2",
                5 => "url_name_3",
                6 => "counter",
                7 => "",
            ),
            "CHECK_DATES" => "Y",   // Показывать только активные на данный момент элементы
            "DETAIL_URL" => "", // URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
            "AJAX_MODE" => "N", // Включить режим AJAX
            "AJAX_OPTION_JUMP" => "N",  // Включить прокрутку к началу компонента
            "AJAX_OPTION_STYLE" => "Y", // Включить подгрузку стилей
            "AJAX_OPTION_HISTORY" => "N",   // Включить эмуляцию навигации браузера
            "AJAX_OPTION_ADDITIONAL" => "", // Дополнительный идентификатор
            "CACHE_TYPE" => "A",    // Тип кеширования
            "CACHE_TIME" => "36000000", // Время кеширования (сек.)
            "CACHE_FILTER" => "N",  // Кешировать при установленном фильтре
            "CACHE_GROUPS" => "Y",  // Учитывать права доступа
            "PREVIEW_TRUNCATE_LEN" => "",   // Максимальная длина анонса для вывода (только для типа текст)
            "ACTIVE_DATE_FORMAT" => "d.m.Y",    // Формат показа даты
            "SET_TITLE" => "N", // Устанавливать заголовок страницы
            "SET_BROWSER_TITLE" => "N", // Устанавливать заголовок окна браузера
            "SET_META_KEYWORDS" => "N", // Устанавливать ключевые слова страницы
            "SET_META_DESCRIPTION" => "N",  // Устанавливать описание страницы
            "SET_LAST_MODIFIED" => "N", // Устанавливать в заголовках ответа время модификации страницы
            "INCLUDE_IBLOCK_INTO_CHAIN" => "N", // Включать инфоблок в цепочку навигации
            "ADD_SECTIONS_CHAIN" => "N",    // Включать раздел в цепочку навигации
            "HIDE_LINK_WHEN_NO_DETAIL" => "N",  // Скрывать ссылку, если нет детального описания
            "PARENT_SECTION" => "", // ID раздела
            "PARENT_SECTION_CODE" => "",    // Код раздела
            "INCLUDE_SUBSECTIONS" => "N",   // Показывать элементы подразделов раздела
            "STRICT_SECTION_CHECK" => "N",  // Строгая проверка раздела для показа списка
            "DISPLAY_DATE" => "N",  // Выводить дату элемента
            "DISPLAY_NAME" => "N",  // Выводить название элемента
            "DISPLAY_PICTURE" => "N",   // Выводить изображение для анонса
            "DISPLAY_PREVIEW_TEXT" => "N",  // Выводить текст анонса
            "PAGER_TEMPLATE" => ".default", // Шаблон постраничной навигации
            "DISPLAY_TOP_PAGER" => "N", // Выводить над списком
            "DISPLAY_BOTTOM_PAGER" => "N",  // Выводить под списком
            "PAGER_TITLE" => "Новости", // Название категорий
            "PAGER_SHOW_ALWAYS" => "N", // Выводить всегда
            "PAGER_DESC_NUMBERING" => "N",  // Использовать обратную навигацию
            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",   // Время кеширования страниц для обратной навигации
            "PAGER_SHOW_ALL" => "N",    // Показывать ссылку "Все"
            "PAGER_BASE_LINK_ENABLE" => "N",    // Включить обработку ссылок
            "SET_STATUS_404" => "N",    // Устанавливать статус 404
            "SHOW_404" => "N",  // Показ специальной страницы
            "MESSAGE_404" => "",    // Сообщение для показа (по умолчанию из компонента)
        ),
        false
    );?>

  </div><!-- /.container -->
</section><!-- /.counters -->

<!-- ======================
  Blog Grid
========================= -->
<section class="blog-grid pb-60">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
        <div class="heading text-center mb-50">
          <h2 class="heading__subtitle">Insight and Trends</h2>
          <h3 class="heading__title">Recent Articles</h3>
          <span class="divider-line mx-auto"></span>
        </div><!-- /.heading -->
      </div><!-- /.col-lg-6 -->
    </div><!-- /.row -->

    <?$APPLICATION->IncludeComponent(
	"bitrix:news", 
	"blog", 
	array(
		"ADD_ELEMENT_CHAIN" => "Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "Y",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"BROWSER_TITLE" => "-",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_ACTIVE_DATE_FORMAT" => "j F Y",
		"DETAIL_DISPLAY_BOTTOM_PAGER" => "N",
		"DETAIL_DISPLAY_TOP_PAGER" => "N",
		"DETAIL_FIELD_CODE" => array(
			0 => "NAME",
			1 => "TAGS",
			2 => "PREVIEW_TEXT",
			3 => "PREVIEW_PICTURE",
			4 => "DATE_CREATE",
			5 => "",
		),
		"DETAIL_PAGER_SHOW_ALL" => "N",
		"DETAIL_PAGER_TEMPLATE" => "",
		"DETAIL_PAGER_TITLE" => "Страница",
		"DETAIL_PROPERTY_CODE" => array(
			0 => "category",
			1 => "",
		),
		"DETAIL_SET_CANONICAL_URL" => "N",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "8",
		"IBLOCK_TYPE" => "blog",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"LIST_ACTIVE_DATE_FORMAT" => "j F Y",
		"LIST_FIELD_CODE" => array(
			0 => "NAME",
			1 => "TAGS",
			2 => "PREVIEW_TEXT",
			3 => "PREVIEW_PICTURE",
			4 => "DATE_CREATE",
			5 => "",
		),
		"LIST_PROPERTY_CODE" => array(
			0 => "category",
			1 => "",
		),
		"MESSAGE_404" => "",
		"META_DESCRIPTION" => "-",
		"META_KEYWORDS" => "-",
		"NEWS_COUNT" => "3",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PREVIEW_TRUNCATE_LEN" => "",
		"SEF_FOLDER" => "/blog/",
		"SEF_MODE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"USE_CATEGORIES" => "N",
		"USE_FILTER" => "N",
		"USE_PERMISSIONS" => "N",
		"USE_RATING" => "N",
		"USE_RSS" => "N",
		"USE_SEARCH" => "Y",
		"USE_SHARE" => "N",
		"COMPONENT_TEMPLATE" => "blog",
		"SEF_URL_TEMPLATES" => array(
			"news" => "",
			"section" => "",
			"detail" => "#ELEMENT_CODE#/",
			"search" => "search/",
		)
	),
	false
);
    ?>

  </div><!-- /.container -->
</section><!-- /.blog Grid -->

    <!-- =========================
         contact layout3
    =========================  -->
    <section class="contact-layout3 py-0">
        <?$APPLICATION->IncludeComponent(
	"bitrix:map.yandex.view", 
	"map", 
	array(
		"COMPONENT_TEMPLATE" => "map",
		"INIT_MAP_TYPE" => "MAP",
		"MAP_DATA" => "a:4:{s:10:\"yandex_lat\";d:40.64415187599347;s:10:\"yandex_lon\";d:-73.96165250717385;s:12:\"yandex_scale\";i:15;s:10:\"PLACEMARKS\";a:1:{i:0;a:3:{s:3:\"LON\";d:-73.961511734011;s:3:\"LAT\";d:40.644805246923;s:4:\"TEXT\";s:55:\"2307 Beverley Rd Brooklyn, New York 11226 United States\";}}}",
		"MAP_WIDTH" => "100%",
		"MAP_HEIGHT" => "620",
		"CONTROLS" => array(
			0 => "ZOOM",
			1 => "SMALLZOOM",
			2 => "SEARCH",
		),
		"OPTIONS" => array(
			0 => "ENABLE_SCROLL_ZOOM",
			1 => "ENABLE_DBLCLICK_ZOOM",
			2 => "ENABLE_DRAGGING",
		),
		"MAP_ID" => "",
		"API_KEY" => ""
	),
	false
);?>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-4 offset-lg-8">
            <div class="contact-panel__info bg-white">
              <div class="contact-panel__block">
                <h5 class="contact-panel__block__title">Our Location</h5>
                <ul class="contact-panel__block__list list-unstyled">
                  <li>
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        Array(
                            "AREA_FILE_SHOW" => "file",
                            "AREA_FILE_SUFFIX" => "inc",
                            "EDIT_TEMPLATE" => "",
                            "PATH" => SITE_TEMPLATE_PATH."/includes/address.php"
                        )
                    );?>
                  </li>
                </ul>
              </div><!-- /.contact-panel__info__block -->
              <div class="contact-panel__block">
                <h5 class="contact-panel__block__title">Quick Contact</h5>
                <ul class="contact-panel__block__list list-unstyled">
                  <li></a>Email:
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        Array(
                            "AREA_FILE_SHOW" => "file",
                            "AREA_FILE_SUFFIX" => "inc",
                            "EDIT_TEMPLATE" => "",
                            "PATH" => SITE_TEMPLATE_PATH."/includes/mail.php"
                        )
                    );?>
                  </li>
                  <li>Call Us:
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        Array(
                            "AREA_FILE_SHOW" => "file",
                            "AREA_FILE_SUFFIX" => "inc",
                            "EDIT_TEMPLATE" => "",
                            "PATH" => SITE_TEMPLATE_PATH."/includes/phone.php"
                        )
                    );?>
                  </li>
                </ul>
              </div><!-- /.contact-panel__info__block -->
              <div class="contact-panel__block">
                <h5 class="contact-panel__block__title">Opening Hours</h5>
                <ul class="contact-panel__block__list list-unstyled">
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        Array(
                            "AREA_FILE_SHOW" => "file",
                            "AREA_FILE_SUFFIX" => "inc",
                            "EDIT_TEMPLATE" => "",
                            "PATH" => SITE_TEMPLATE_PATH."/includes/hours.php"
                        )
                    );?>
                </ul>
              </div><!-- /.contact-panel__info__block -->
              <a href="contacs.html" class="btn btn__primary btn__block">
                <i class="icon-arrow-right"></i><span>Request A Quote</span>
              </a>
            </div>
          </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.contact-layout3 -->

<? require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php'); ?>
