<?php
extract($product);
// extract($product_color);
// extract($product_size);
$product_detail_image = $img_path_view . $image;
?>

<main class="main">
  <section class="page page-product-detail">
    <div class="container">
      <div class="page-list">
        <a href="#" class="page-name active">Trang chủ</a>
        <i class="fa fa-angle-right page-icon"></i>
        <a href="#" class="page-name current"><?= $pro_name ?></a>
      </div>
    </div>
  </section>

  <section class="product-detail">
    <div class="container">
      <div class="product-detail-container">
        <div class="product-detail-gallery">
          <div class="product-detail-slide">
            <?php
            if (!empty($product_detail_img)) {
              foreach ($product_detail_img as $pdi) {
                extract($pdi);
                $proDetailImg = $img_path_view . $pro_detail_image;
            ?>
                <div class="product-detail-slide-item">
                  <img src="<?= $proDetailImg ?>" alt="" class="product-detail-slide-image" />
                </div>
            <?php
              }
            } else {
              echo "<div class='product-detail-slide-item'>
                    <img src=" . $product_detail_image . " class='product-detail-slide-image' />
                    </div>";
            }
            ?>
            <!-- <div class="product-detail-slide-item">
              <img src="././public/images/pro-detail-1-02-small.avif" alt="" class="product-detail-slide-image" />
            </div>
            <div class="product-detail-slide-item">
              <img src="././public/images/pro-detail-1-03-small.avif" alt="" class="product-detail-slide-image" />
            </div>
            <div class="product-detail-slide-item">
              <img src="././public/images/pro-detail-1-04-small.avif" alt="" class="product-detail-slide-image" />
            </div> -->
            <div class="product-detail-slide-arrow">
              <button class="slick-product-arrow product-detail-arrow" onclick="plusSlides(-1)">
                <i class="fa fa-angle-left"></i>
              </button>
              <button class="slick-product-arrow product-detail-arrow" onclick="plusSlides(1)">
                <i class="fa fa-angle-right"></i>
              </button>
            </div>
          </div>
          <div class="product-detail-images">
            <?php
            if (!empty($product_detail_img)) {
              foreach ($product_detail_img as $pdi) {
                extract($pdi);
                $proDetailImg = $img_path_view . $pro_detail_image;
            ?>
                <img src="<?= $proDetailImg ?>" alt="" class="product-detail-image" />
            <?php
              }
            } else {
              echo "<img src=" . $product_detail_image . " class='product-detail-image' />";
            }
            ?>
            <!-- <img src="././public/images/pro-detail-1-02-full.avif" alt="" class="product-detail-image" />
            <img src="././public/images/pro-detail-1-03-full.avif" alt="" class="product-detail-image" />
            <img src="././public/images/pro-detail-1-04-full.avif" alt="" class="product-detail-image" /> -->
          </div>
        </div>
        <form class="product-detail-content" action="index.php?act=add_to_cart" method="post">
          <h4 class="product-detail-brand"><?= $brand_name ?></h4>
          <h2 class="product-detail-title">
            <?= $pro_name ?>
          </h2>
          <div class="product-detail-price">
            <?php
            if ($price_sale != 0) {
              echo "<span class='product-detail-price-sale'>" . number_format($price_sale, "0", ",", ".") . "đ</span>";
              echo "<span class='product-detail-price-old'>" . number_format($price, "0", ",", ".") . "đ</span>";
            } else {
              echo "<span class='product-detail-price-new'>" . number_format($price, "0", ",", ".") . "đ</span>";
            }
            ?>
          </div>
          <div class="product-detail-color">
            <h4 class="product-detail-heading">MÀU SẮC</h4>
            <div class="product-detail-radios">
              <div class="product-detail-radio product-detail-color-radio">
                <input type="radio" id="<?= $id_pro_color ?>" class="product-detail-radio-input" name="color" value="<?= $color ?>" checked />
                <label for="<?= $id_pro_color ?>" class="product-detail-radio-label" name="color"><?= $color ?></label>
              </div>
            </div>
          </div>
          <div class="product-detail-size">
            <h4 class="product-detail-heading">Kích thước</h4>
            <div class="product-detail-radios">
              <?php
              foreach ($product_size as $key => $value) {
                // extract($ps);
              ?>
                <div class="product-detail-radio product-detail-size-radio">
                  <input type="radio" name="size" id="<?= $value['size']  ?>" class="product-detail-radio-input" value="<?= $value['size'] ?>" <?= ($key === 0) ? "checked" : "" ?> />
                  <label for="<?= $value['size'] ?>" class="product-detail-radio-label"><?= $value['size'] ?></label>
                </div>
              <?php
              }
              ?>
              <!-- <div class="product-detail-radio product-detail-size-radio">
                <input type="radio" name="size" id="39" class="product-detail-radio-input" />
                <label for="39" class="product-detail-radio-label" name="size">39</label>
              </div>
              <div class="product-detail-radio product-detail-size-radio">
                <input type="radio" name="size" id="40" class="product-detail-radio-input" />
                <label for="40" class="product-detail-radio-label" name="size">40</label>
              </div>
              <div class="product-detail-radio product-detail-size-radio">
                <input type="radio" name="size" id="41" class="product-detail-radio-input" />
                <label for="41" class="product-detail-radio-label" name="size">41</label>
              </div> -->
            </div>
          </div>
          <div class="product-detail-size-tutor">
            <i class="fa-regular fa-ruler"></i>
            <a href="#">Hướng dẫn chọn kích thước</a>
          </div>
          <div class="product-detail-mani">
            <h4 class="product-detail-heading">Số lượng</h4>
            <div class="product-detail-work">
              <div class="product-detail-quantity">
                <input type="number" name="quantity" id="" value="1" step="1" min="1" />
              </div>
              <input type="hidden" name="id_pro" value="<?= $id_pro ?>">
              <input type="hidden" name="pro_name" value="<?= $pro_name ?>">
              <input type="hidden" name="price" value="<?= ($price_sale) ? $price_sale : $price ?>">
              <input type="hidden" name="image" value="<?= $image ?>">
              <!-- <input type="hidden" name="quantity" value="1"> -->
              <button class="product-detail-addcart" name="btn_insert_cart">
                Thêm vào giỏ phòng
              </button>
            </div>
          </div>
          <div class="product-detail-info">
            <div class="product-detail-info-item">
              <i class="fa-solid fa-box"></i>
              <span>Đổi trả phòng trong vòng 15 ngày</span>
              <a href="#">(Xem chi tiết)</a>
            </div>
            <div class="product-detail-info-item">
              <i class="fa-solid fa-0"></i>
              <i class="fa-solid fa-percent"></i>
              <span>Trả góp 0% lãi suất từ 3.000.000 VNĐ </span>
              <a href="#">(Xem chi tiết)</a>
            </div>
            <div class="product-detail-info-item">
              <i class="fa-solid fa-computer"></i>
              <span> Thanh toán trực tuyến nhanh chóng và an toàn.</span>
            </div>
            <div class="product-detail-info-item">
              <i class="fa-solid fa-shield"></i>
              <span>Phòng chính hãng 100%.</span>
              <a href="#">(Xem chi tiết)</a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </section>

  <?php
  include "product_info.php";
  ?>

  <?php
  include "product_relate.php";
  ?>
</main>