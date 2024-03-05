<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("About Us");
?>

    <!-- ========================
       page title
    =========================== -->
    <section class="page-title page-title-layout1 bg-overlay bg-parallax">
      <div class="bg-img"><img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/page-titles/1.jpg" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-5">
            <span class="pagetitle__subheading">We Work With Global Industries!</span>
            <h1 class="pagetitle__heading">We Help Build On Past & Prepare For Your Future.</h1>
            <a href="/projects/" class="btn btn__white">Our Services</a>
          </div><!-- /.col-xl-6 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.page-title -->

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

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
