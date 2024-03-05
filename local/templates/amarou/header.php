<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <? $APPLICATION->ShowHead(); ?>
    <title><? $APPLICATION->ShowTitle(false); ?></title>
<!--     <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" /> -->

    <link href="<?= SITE_TEMPLATE_PATH ?>/assets/images/favicon/favicon.png" rel="icon">


    <?
        $APPLICATION->SetAdditionalCSS('https://fonts.googleapis.com/css?family=Rubik:400,500,600,700%7cRoboto:400,500,700&display=swap');
        $APPLICATION->SetAdditionalCSS('https://use.fontawesome.com/releases/v5.1.1/css/all.css');
        $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/assets/css/libraries.css');
        $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/assets/css/style.css');
        $APPLICATION->SetAdditionalCSS('/bitrix/css/main/font-awesome.css');

    ?>
</head>

<body>
    <?$APPLICATION->ShowPanel();?>
    <div class="wrapper">
<!--     <div class="preloader">
      <div class="spinner"><span class="cube1"></span><span class="cube2"></span></div>
    </div> -->

    <!-- =========================
        Header
    =========================== -->
    <header class="header header-light header-layout1">
      <div class="header-topbar d-none d-xl-block">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-12 col-md-7 col-lg-7">
              <div class="d-flex flex-wrap justify-content-between">
                <ul class="contact-list list-unstyled mb-0 d-flex flex-wrap">
                  <li>
                    <i class="icon-phone"></i><span>Phone:&nbsp;</span>
                    <a href="tel:556554117">
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
                    </a>
                  </li>
                  <li>
                    <i class="icon-envelope"></i><span>Email:&nbsp;</span>
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
                  <li><i class="icon-clock"></i><span>
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
                  </span></li>
                </ul>
              </div>
            </div><!-- /.col-lg-7 -->
            <div class="col-sm-12 col-md-5 col-lg-5 d-flex flex-wrap justify-content-end">
                <?$APPLICATION->IncludeComponent(
                    "bitrix:menu",
                    "header_menu",
                    Array(
                        "ALLOW_MULTI_SELECT" => "N",
                        "CHILD_MENU_TYPE" => "",
                        "DELAY" => "N",
                        "MAX_LEVEL" => "1",
                        "MENU_CACHE_GET_VARS" => array(""),
                        "MENU_CACHE_TIME" => "3600",
                        "MENU_CACHE_TYPE" => "N",
                        "MENU_CACHE_USE_GROUPS" => "Y",
                        "ROOT_MENU_TYPE" => "header_menu",
                        "USE_EXT" => "N"
                    )
                );?>
                <?$APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    Array(
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => SITE_TEMPLATE_PATH."/includes/social_links.php"
                    )
                );?>
            </div><!-- /.col-lg-5 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </div><!-- /.header-topbar -->
      <nav class="navbar navbar-expand-lg">
        <div class="container-fluid px-0">
          <a class="navbar-brand" href="/">
            <?$APPLICATION->IncludeComponent(
                "bitrix:main.include",
                "",
                Array(
                    "AREA_FILE_SHOW" => "file",
                    "AREA_FILE_SUFFIX" => "inc",
                    "EDIT_TEMPLATE" => "",
                    "PATH" => SITE_TEMPLATE_PATH."/includes/logo.php"
                )
            );?>
          </a>
          <button class="navbar-toggler" type="button">
            <span class="menu-lines"><span></span></span>
          </button>
            <?$APPLICATION->IncludeComponent("bitrix:menu", "main_menu", Array(
                "ALLOW_MULTI_SELECT" => "N",    // Разрешить несколько активных пунктов одновременно
                    "CHILD_MENU_TYPE" => "left",    // Тип меню для остальных уровней
                    "DELAY" => "N", // Откладывать выполнение шаблона меню
                    "MAX_LEVEL" => "2", // Уровень вложенности меню
                    "MENU_CACHE_GET_VARS" => "",    // Значимые переменные запроса
                    "MENU_CACHE_TIME" => "3600",    // Время кеширования (сек.)
                    "MENU_CACHE_TYPE" => "N",   // Тип кеширования
                    "MENU_CACHE_USE_GROUPS" => "Y", // Учитывать права доступа
                    "ROOT_MENU_TYPE" => "top",  // Тип меню для первого уровня
                    "USE_EXT" => "N",   // Подключать файлы с именами вида .тип_меню.menu_ext.php
                    "COMPONENT_TEMPLATE" => "horizontal_multilevel"
                ),
                false
            );?>
          <div class="header-actions d-flex align-items-center">
            <button type="button" class="action-btn__search"><i class="fas fa-search"></i></button>
            <a href="/request-quote.php" class="btn btn__primary action-btn__request">
              <span>Request A Quote</span><i class="icon-arrow-right"></i>
            </a>
          </div>
        </div><!-- /.container -->
      </nav><!-- /.navabr -->
    </header><!-- /.Header -->
