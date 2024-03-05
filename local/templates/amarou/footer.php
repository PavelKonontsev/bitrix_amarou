<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
?>

    <!-- ========================
      Footer
    ========================== -->
    <footer class="footer">
      <div class="footer-primary">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-3 col-xl-5 footer-widget footer-widget-about">
                <h6 class="footer-widget-title">About Amarou</h6>
                <div class="footer-widget-content">
                    <p class="mb-20">
                        <?$APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            Array(
                                "AREA_FILE_SHOW" => "file",
                                "AREA_FILE_SUFFIX" => "inc",
                                "EDIT_TEMPLATE" => "",
                                "PATH" => SITE_TEMPLATE_PATH."/includes/about.php"
                            )
                        );?>
                    </p>
                    <a href="/request-quote.php" class="btn btn__primary btn__link ">
                      <i class="icon-arrow-right"></i><span>Request A Quote</span>
                    </a>
                </div>
            </div><!-- /.col-xl-4 -->
            <div class="col-6 col-sm-6 col-md-6 col-lg-2 col-xl-2 footer-widget footer-widget-nav">
              <h6 class="footer-widget-title">Services</h6>
              <div class="footer-widget-content">
                <nav>
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:menu",
                        "footer_menu",
                        array(
                            "ALLOW_MULTI_SELECT" => "N",
                            "CHILD_MENU_TYPE" => "",
                            "DELAY" => "N",
                            "MAX_LEVEL" => "1",
                            "MENU_CACHE_GET_VARS" => array(
                            ),
                            "MENU_CACHE_TIME" => "3600",
                            "MENU_CACHE_TYPE" => "N",
                            "MENU_CACHE_USE_GROUPS" => "Y",
                            "ROOT_MENU_TYPE" => "bottom_1",
                            "USE_EXT" => "N",
                            "COMPONENT_TEMPLATE" => "footer_menu"
                        ),
                        false
                    );?>
                </nav>
              </div><!-- /.footer-widget-content -->
            </div><!-- /.col-xl-2 -->
            <div class="col-6 col-sm-6 col-md-6 col-lg-2 col-xl-2 footer-widget footer-widget-nav">
              <h6 class="footer-widget-title">Company</h6>
              <div class="footer-widget-content">
                <nav>
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:menu",
                        "footer_menu",
                        array(
                            "ALLOW_MULTI_SELECT" => "N",
                            "CHILD_MENU_TYPE" => "",
                            "DELAY" => "N",
                            "MAX_LEVEL" => "1",
                            "MENU_CACHE_GET_VARS" => array(
                            ),
                            "MENU_CACHE_TIME" => "3600",
                            "MENU_CACHE_TYPE" => "N",
                            "MENU_CACHE_USE_GROUPS" => "Y",
                            "ROOT_MENU_TYPE" => "bottom_2",
                            "USE_EXT" => "N",
                            "COMPONENT_TEMPLATE" => "footer_menu"
                        ),
                        false
                    );?>
                </nav>
              </div><!-- /.footer-widget-content -->
            </div><!-- /.col-xl-2 -->
            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 footer-widget footer-widget-contact">
              <h6 class="footer-widget-title">Quick Contact</h6>
              <div class="footer-widget-content">
                <p class="mb-20">
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        Array(
                            "AREA_FILE_SHOW" => "file",
                            "AREA_FILE_SUFFIX" => "inc",
                            "EDIT_TEMPLATE" => "",
                            "PATH" => SITE_TEMPLATE_PATH."/includes/contact_text.php"
                        )
                    );?>
                </p>
                <span class="contact-number contact-number-white d-flex align-items-center mb-20">
                  <i class="icon-phone"></i>
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
                </span>
                <p class="mb-30">
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
                </p>
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
              </div><!-- /.footer-widget-content -->
            </div><!-- /.col-xl-4 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </div><!-- /.footer-primary -->
      <div class="footer-copyrights">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 text-center">
              <p class="mb-0"> &copy; 2020 Amarou. With Love by
                <a href="http://themeforest.net/user/7oroof">7oroof.com</a>
              </p>
            </div><!-- /.col-lg-12 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </div><!-- /.footer-copyrights-->
    </footer><!-- /.Footer -->
    <button id="scrollTopBtn"><i class="fas fa-long-arrow-alt-up"></i></button>

    <div class="search-popup">
      <i class="search-popup__close">&times;</i>
      <form class="search-popup__form">
        <input type="text" class="search-popup__form__input" placeholder="Type Words Then Enter">
        <button class="search-popup__btn"><i class="fas fa-search"></i></button>
      </form>
    </div><!-- /. search-popup -->

    </div><!-- /.wrapper -->
    <?
        $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/assets/js/jquery-3.5.1.min.js');
        $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/assets/js/plugins.js');
        $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/assets/js/main.js');
    ?>
</body>

</html>

