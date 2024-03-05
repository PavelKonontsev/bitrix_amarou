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
    <? var_export($arResult['REVIEW']); ?>
</pre> -->

<section class="portfolio-single pt-0 pb-50">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-12">
        <div class="portfolio-item">
          <div class="portfolio-item__img">
            <img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/portfolio/single/1.jpg" alt="portfolio" class="img-fluid">
          </div>
          <div class="portfolio-item__icon">
            <i class="icon-brick"></i>
          </div>
          <div class="portfolio-item__content text-center pt-0">
            <h1 class="portfolio-item__title"><?= $arResult['NAME'] ?></h1>
            <div class="portfolio-item__cat">
            <?
                $tags = explode(',', $arResult["TAGS"]);
                foreach($tags as $tagItem):
                    $tagItem = trim($tagItem);
            ?>
                <a href="/projects/search/?tags=<?= str_replace(' ', '+', $tagItem) ?>"><?= $tagItem ?></a>
            <? endforeach; ?>
            </div><!-- /.portfolio-cat -->
            <p class="portfolio-item__desc"><?= $arResult['PREVIEW_TEXT'] ?></p>
          </div><!-- /.portfolio-content -->
        </div><!-- /.portfolio-item  -->

      </div><!-- /.col-lg-12 -->
    </div><!-- /.row -->
    <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-1">
        <div class="text-block">
          <h5 class="text-block__title mb-30">Overview</h5>
          <div class="text-block__content">
            <?= $arResult['DETAIL_TEXT']; ?>
          </div>
        </div><!-- /.text-block -->
      </div><!-- /.col-lg-6 -->
      <div class="col-sm-12 col-md-12 col-lg-3 offset-lg-1">
        <ul class="portfolio-item__meta-list list-unstyled mt-60 mb-30">
          <? if ($arResult['REVIEW']): ?>
          <li><strong>Client:</strong><span><?= $arResult['REVIEW']['PROPERTY_COMPANY_VALUE']; ?></span></li>
          <? endif;?>
          <!-- <li><strong>Location:</strong><span>Tanta, Algharbia, Egypt</span></li> -->
          <li><strong>Services:</strong><span><?= $arResult["TAGS"] ?></span></li>
        </ul>
        <a href="/request-quote.php" class="btn btn__primary btn__block">
          <i class="icon-arrow-right"></i><span>Schedule An Appointment</span>
        </a>
      </div><!-- /.col-lg-5 -->
    </div><!-- /.row -->
  </div><!-- /.container -->


  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-12">
        <div class="portfolio-slider carousel-arrows-light slick-carousel mb-60"
          data-slick='{"slidesToShow": 1, "arrows": true, "dots": true, "centerMode": true, "centerPadding": "300px","responsive": [ {"breakpoint": 992, "settings": {"centerPadding": "40px"}}]}'>
          <img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/portfolio/slider/1.jpg" alt="slider">
          <img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/portfolio/slider/5.jpg" alt="slider">
          <img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/portfolio/slider/4.jpg" alt="slider">
          <img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/portfolio/slider/2.jpg" alt="slider">
          <img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/portfolio/slider/3.jpg" alt="slider">
        </div>
      </div>
    </div>
  </div>


<? if ($arResult['REVIEW']): ?>
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-10 offset-lg-1">
        <div class="testimonials testimonials-layout2">
          <div class="bg-img"><img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/backgrounds/3.jpg" alt="banner"></div>
          <h3 class="heading__title color-gray">What Our Clients Say!!</h3>
          <div class="testimonial-item">
            <p class="testimonial-item__desc"><?= $arResult['REVIEW']['PREVIEW_TEXT'] ?></p>
            <div class="testimonial-item__meta d-flex align-items-center">
              <div class="testimonial-item__thumb">
                <img src="<?= $arResult['REVIEW']['PREVIEW_PICTURE']['SRC'] ?>" alt="<?= $arResult['REVIEW']['NAME'] ?>">
              </div><!-- /.testimonial-thumb -->
              <div>
                <h4 class="testimonial-item__meta-title"><?= $arResult['REVIEW']['NAME'] ?></h4>
                <p class="testimonial-item__meta-desc"><?= $arResult['REVIEW']['PROPERTY_COMPANY_VALUE'] ?></p>
              </div>
            </div>
          </div>
        </div>
      </div><!-- /.col-lg-10 -->
    </div><!-- /.row -->
  </div><!-- /.container -->
<? endif; ?>

</section><!-- /.portfolio single -->
