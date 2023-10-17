<section class="product-same">
  <div class="container">
    <div class="product-same-header product-header">
      <h2 class="heading">Phòng liên quan</h2>
    </div>
    <div class="product-same-list">
      <?php
      foreach ($product_relate as $pr) {
        extract($pr);
        $link_product = "index.php?act=product_detail&id_pro=" . $id_pro;
        $product_relate_img = $img_path_view . $image;
        $percent_discount = number_format(($price_sale - $price) / $price * 100);
      ?>
        <div class="product-same-item product-item">
          <div class="product-same-image product-image">
            <a href="<?= $link_product ?>" class="product-same-img">
              <img src="<?= $product_relate_img ?>" alt="" />
            </a>
            <?php
            if ($price_sale != 0) {
              echo "<div class='product-same-tag product-tag'>" . $percent_discount . "%</div>";
            } else if ($id_cate == 1) {
              echo "<div class='product-new-tag product-tag'>Mới</div>";
            }
            ?>
          </div>
          <div class="product-same-content product-content">
            <span class="product-same-brand product-brand"><?= $brand_name ?></span>
            <h3 class="product-same-title product-title">
              <a href="<?= $link_product ?>"><?= $pro_name ?></a>
            </h3>
            <div class="product-cost">
              <?php
              if ($price_sale != 0) {
                echo "<span class='product-bestsell-price product-price product-price-sale'>" . number_format($price_sale, 0, ",", ".") . "đ</span>";
                echo "<span class='product-price-old'> " . number_format($price, 0, ",", ".") . "đ</span>";
              } else {
                echo "<span class='product-same-price product-price'>" . number_format($price, 0, ",", ".") . "đ</span>";
              }
              ?>
            </div>
          </div>
        </div>
      <?php
      }
      ?>
      <!-- <div class="product-same-item product-item">
        <div class="product-same-image product-image">
          <a href="#" class="product-same-img">
            <img src="././public/images/product-5.webp" alt="" />
          </a>
          <div class="product-same-tag product-tag">-10%</div>
        </div>
        <div class="product-same-content product-content">
          <span class="product-same-brand product-brand">Hoka</span>
          <h3 class="product-same-title product-title">
            <a href="#">Giày Chạy Bộ Nam Hoka Mach Supersonic</a>
          </h3>
          <div class="product-cost">
            <span class="product-same-price product-price">3.599.000₫</span>
          </div>
        </div>
      </div>
      <div class="product-same-item product-item">
        <div class="product-same-image product-image">
          <a href="#" class="product-same-img">
            <img src="././public/images/product-5.webp" alt="" />
          </a>
          <div class="product-same-tag product-tag">-10%</div>
        </div>
        <div class="product-same-content product-content">
          <span class="product-same-brand product-brand">Hoka</span>
          <h3 class="product-same-title product-title">
            <a href="#">Giày Chạy Bộ Nam Hoka Mach Supersonic</a>
          </h3>
          <div class="product-cost">
            <span class="product-same-price product-price">3.599.000₫</span>
          </div>
        </div>
      </div>
      <div class="product-same-item product-item">
        <div class="product-same-image product-image">
          <a href="#" class="product-same-img">
            <img src="././public/images/product-5.webp" alt="" />
          </a>
          <div class="product-same-tag product-tag">-10%</div>
        </div>
        <div class="product-same-content product-content">
          <span class="product-same-brand product-brand">Hoka</span>
          <h3 class="product-same-title product-title">
            <a href="#">Giày Chạy Bộ Nam Hoka Mach Supersonic</a>
          </h3>
          <div class="product-cost">
            <span class="product-same-price product-price">3.599.000₫</span>
          </div>
        </div>
      </div>
      <div class="product-same-item product-item">
        <div class="product-same-image product-image">
          <a href="#" class="product-same-img">
            <img src="././public/images/product-5.webp" alt="" />
          </a>
          <div class="product-same-tag product-tag">-10%</div>
        </div>
        <div class="product-same-content product-content">
          <span class="product-same-brand product-brand">Hoka</span>
          <h3 class="product-same-title product-title">
            <a href="#">Giày Chạy Bộ Nam Hoka Mach Supersonic</a>
          </h3>
          <div class="product-cost">
            <span class="product-same-price product-price">3.599.000₫</span>
          </div>
        </div>
      </div> -->
    </div>
  </div>
</section>