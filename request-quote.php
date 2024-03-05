<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Request A Quote");
?>
<div>
    <section class="contact-layout2 py-0 bg-gray">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="contact-panel">
              <div class="testimonials testimonials-layout1 bg-overlay bg-overlay-theme">
                <div class="bg-img">
                  <img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/banners/6.jpg" alt="banner">
                </div>

                <div class="slick-carousel"
                  data-slick='{"slidesToShow": 1, "arrows": true, "dots": false, "infinite": true}'>

                  <!-- Testimonial #1 -->
                  <div class="testimonial-item">
                    <div class="testimonial-item__rating">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                    </div>
                    <p class="testimonial-item__desc">They are the expertly trained team members who take extra step and
                      go the extra mile, to fulfill our promise to deliver dynamic solutions to our customers to fit
                      needs of a rapidly changing global environment!!
                    </p>
                    <div class="testimonial-item__meta">
                      <div class="testimonial-item__thumb">
                        <img src="assets/images/testimonials/thumbs/1.jpg" alt="author thumb">
                      </div><!-- /.testimonial-thumb -->
                      <div>
                        <h4 class="testimonial-item__meta-title">Martin Hope</h4>
                        <p class="testimonial-item__meta-desc">Pro Cons</p>
                      </div>
                    </div><!-- /.testimonial-meta -->
                  </div><!-- /. testimonial-item -->

                  <!-- Testimonial #2 -->
                  <div class="testimonial-item">
                    <div class="testimonial-item__rating">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                    </div>
                    <p class="testimonial-item__desc">My project was a simple & small task, but the persistence and
                      determination turned it into an awesome and great project which make me happy because they help me
                      accelerate my business.
                    </p>
                    <div class="testimonial-item__meta">
                      <div class="testimonial-item__thumb">
                        <img src="assets/images/testimonials/thumbs/2.jpg" alt="author thumb">
                      </div><!-- /.testimonial-thumb -->
                      <div>
                        <h4 class="testimonial-item__meta-title">John Peter</h4>
                        <p class="testimonial-item__meta-desc">7oroof Inc</p>
                      </div>
                    </div><!-- /.testimonial-meta -->
                  </div><!-- /. testimonial-item -->

                  <!-- Testimonial #3 -->
                  <div class="testimonial-item">
                    <div class="testimonial-item__rating">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                    </div>
                    <p class="testimonial-item__desc">My project was a simple & small task, but the persistence and
                      determination turned it into an awesome and great project which make me happy because they help me
                      accelerate my business.
                    </p>
                    <div class="testimonial-item__meta">
                      <div class="testimonial-item__thumb">
                        <img src="assets/images/testimonials/thumbs/3.jpg" alt="author thumb">
                      </div><!-- /.testimonial-thumb -->
                      <div>
                        <h4 class="testimonial-item__meta-title">John Peter</h4>
                        <p class="testimonial-item__meta-desc">7oroof Inc</p>
                      </div>
                    </div><!-- /.testimonial-meta -->
                  </div><!-- /. testimonial-item -->

                </div>

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
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
