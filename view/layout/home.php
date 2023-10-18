<main>
  <section class="slider">
    <!-- <i class="fa fa-angle-left slider-prev"></i>
          <ul class="slider-dots">
            <li class="slider-dot-item active" data-index="0"></li>
            <li class="slider-dot-item" data-index="1"></li>
            <li class="slider-dot-item" data-index="2"></li>
          </ul> -->
    <!-- <div class="slider-wrapper"> -->
    <!-- <div class="slider-main"> -->
    <div class="slider-item">
      <a href="#" class="slider-image">
        <img src="././public/images/banner2.png" alt="" />
      </a>
    </div>
    <div class="slider-item">
      <a href="#" class="slider-image">
        <img src="././public/images/banner1.png" alt="" />
      </a>
    </div>
    <div class="slider-item">
      <a href="#" class="slider-image">
        <img src="././public/images/banner.png" alt="" />
      </a>
    </div>
    <!-- </div> -->
    <!-- </div> -->
    <!-- <i class="fa fa-angle-right slider-next"></i> -->
  </section>

  <?php
  include "brand.php";
  ?>

  <?php
  include "product_new.php";
  ?>

  <section class="banner">
    <img src="././public/images/banner6.png" alt="" />
  </section>

  <section class="gender">
    <div class="container">
      <div class="gender-header gender-links">
        <h2 class="heading gender-link" onclick="openTab(event, 'Male')" id="defaultOpen">
          Nam
        </h2>
        <h2 class="heading gender-link" onclick="openTab(event, 'Female')">
          Nữ
        </h2>
      </div>

      <div class="gender-list" id="Male">
        <div class="gender-item" id="itemMale">
          <div class="gender-image">
            <a href="index.php?act=products_field&field=gender&condition=Nam&field2=id_cate&condition2=3" class="gender-img">
              <img src="././public/images/pd115.png" alt="" />
            </a>
          </div>
          <div class="gender-content">
            <a href="index.php?act=products_field&field=gender&condition=Nam&field2=id_cate&condition2=3" class="gender-name">Nam</a>
            <a href="index.php?act=products_field&field=gender&condition=Nam&field2=id_cate&condition2=3" class="gender-type">Phòng công nhân</a>
          </div>
        </div>
        <div class="gender-item" id="itemMale">
          <div class="gender-image">
            <a href="index.php?act=products_field&field=gender&condition=Nam&field2=id_cate&condition2=2" class="gender-img">
              <img src="././public/images/pd113.png" alt="" />
            </a>
          </div>
          <div class="gender-content">
            <a href="index.php?act=products_field&field=gender&condition=Nam&field2=id_cate&condition2=2" class="gender-name">Nam</a>
            <a href="index.php?act=products_field&field=gender&condition=Nam&field2=id_cate&condition2=2" class="gender-type">Phòng sinh viên</a>
          </div>
        </div>
        <div class="gender-item" id="itemMale">
          <div class="gender-image">
            <a href="index.php?act=products_field&field=gender&condition=Nam&field2=id_cate&condition2=4" class="gender-img">
              <img src="././public/images/pd114.png" alt="" />
            </a>
          </div>
          <div class="gender-content">
            <a href="index.php?act=products_field&field=gender&condition=Nam&field2=id_cate&condition2=4" class="gender-name">Nam</a>
            <a href="index.php?act=products_field&field=gender&condition=Nam&field2=id_cate&condition2=4" class="gender-type">Phòng gia đình</a>
          </div>
        </div>
        <div class="gender-item" id="itemMale">
          <div class="gender-image">
            <a href="index.php?act=products_field&field=gender&condition=Nam&field2=id_cate&condition2=5" class="gender-img">
              <img src="././public/images/pd113.png" alt="" />
            </a>
          </div>
          <div class="gender-content">
            <a href="index.php?act=products_field&field=gender&condition=Nam&field2=id_cate&condition2=5" class="gender-name">Nam</a>
            <a href="index.php?act=products_field&field=gender&condition=Nam&field2=id_cate&condition2=5" class="gender-type">Mặt kinh doanh</a>
          </div>
        </div>
        <div class="gender-item" id="itemMale">
          <div class="gender-image">
            <a href="index.php?act=products_field&field=gender&condition=Nam&field2=id_cate&condition2=6" class="gender-img">
              <img src="././public/images/pd110.png" alt="" />
            </a>
          </div>
          <div class="gender-content">
            <a href="index.php?act=products_field&field=gender&condition=Nam&field2=id_cate&condition2=6" class="gender-name">Nam</a>
            <a href="index.php?act=products_field&field=gender&condition=Nam&field2=id_cate&condition2=6" class="gender-type">Căn hộ</a>
          </div>
        </div>
      </div>

      <div class="gender-list" id="Female">
        <div class="gender-item" id="itemFemale">
          <div class="gender-image">
            <a href="index.php?act=products_field&field=gender&condition=Nữ&field2=id_cate&condition2=3" class="gender-img">
              <img src="././public/images/pd110.png" alt="" />
            </a>
          </div>
          <div class="gender-content">
            <a href="index.php?act=products_field&field=gender&condition=Nữ&field2=id_cate&condition2=3" class="gender-name">Nữ</a>
            <a href="index.php?act=products_field&field=gender&condition=Nữ&field2=id_cate&condition2=3" class="gender-type">Phòng công nhân</a>
          </div>
        </div>
        <div class="gender-item" id="itemFemale">
          <div class="gender-image">
            <a href="index.php?act=products_field&field=gender&condition=Nữ&field2=id_cate&condition2=2" class="gender-img">
              <img src="././public/images/pd114.png" alt="" />
            </a>
          </div>
          <div class="gender-content">
            <a href="index.php?act=products_field&field=gender&condition=Nữ&field2=id_cate&condition2=2" class="gender-name">Nữ</a>
            <a href="index.php?act=products_field&field=gender&condition=Nữ&field2=id_cate&condition2=2" class="gender-type">Phòng sinh viên</a>
          </div>
        </div>
        <div class="gender-item" id="itemFemale">
          <div class="gender-image">
            <a href="index.php?act=products_field&field=gender&condition=Nữ&field2=id_cate&condition2=4" class="gender-img">
              <img src="././public/images/pd113.png" alt="" />
            </a>
          </div>
          <div class="gender-content">
            <a href="index.php?act=products_field&field=gender&condition=Nữ&field2=id_cate&condition2=4" class="gender-name">Nữ</a>
            <a href="index.php?act=products_field&field=gender&condition=Nữ&field2=id_cate&condition2=4" class="gender-type">Phòng gia đình</a>
          </div>
        </div>
        <div class="gender-item" id="itemFemale">
          <div class="gender-image">
            <a href="index.php?act=products_field&field=gender&condition=Nữ&field2=id_cate&condition2=5" class="gender-img">
              <img src="././public/images/pd114.png" alt="" />
            </a>
          </div>
          <div class="gender-content">
            <a href="index.php?act=products_field&field=gender&condition=Nữ&field2=id_cate&condition2=5" class="gender-name">Nữ</a>
            <a href="index.php?act=products_field&field=gender&condition=Nữ&field2=id_cate&condition2=5" class="gender-type">Phòng kinh doanh</a>
          </div>
        </div>
        <div class="gender-item" id="itemFemale">
          <div class="gender-image">
            <a href="index.php?act=products_field&field=gender&condition=Nữ&field2=id_cate&condition2=6" class="gender-img">
              <img src="././public/images/pd115.png" alt="" />
            </a>
          </div>
          <div class="gender-content">
            <a href="index.php?act=products_field&field=gender&condition=Nữ&field2=id_cate&condition2=6" class="gender-name">Nữ</a>
            <a href="index.php?act=products_field&field=gender&condition=Nữ&field2=id_cate&condition2=6" class="gender-type">Căn hộ</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php
  include "product_feature.php";
  ?>

  <?php
  include "product_promo.php";
  ?>

  <section class="banner-slide">
    <div class="container">
      <div class="banner-slide-header">
        <h2 class="heading">KHUYẾN MÃI</h2>
      </div>

      <div class="banner-slide-list">
        <div class="banner-slide-item">
          <a href="#" class="banners-slide-image">
            <img src="././public/images/banner7.png" alt="" width="100%" />
          </a>
        </div>
        <div class="banner-slide-item">
          <a href="#" class="banners-slide-image">
            <img src="././public/images/banner8.png" alt="" width="100%"/>
          </a>
        </div>
      </div>
    </div>
  </section>

  <?php
  include "sport.php";
  ?>

  <?php
  include "news.php";
  ?>
</main>