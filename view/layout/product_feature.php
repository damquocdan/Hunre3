<section class="product-bestsell">
  <div class="container">
    <div class="product-bestsell-header product-header">
      <h2 class="heading">Phòng nổi bật</h2>
    </div>
    <div class="product-bestsell-list">
      <?php
      foreach ($list_pro_feature as $lpf) {
        extract($lpf);
        $link_product = "index.php?act=product_detail&id_pro=" . $id_pro;
        $product_feature_img = $img_path_view . $image;
        $percent_discount = number_format(($price_sale - $price) / $price * 100);
      ?>
        <div class="product-bestsell-item product-item">
          <div class="product-bestsell-image product-image">
            <a href="<?= $link_product ?>" class="product-bestsell-img">
              <img src="<?= $product_feature_img ?>" alt="" />
            </a>
            <?php
            if ($price_sale != 0) {
              echo "<div class='product-bestsell-tag product-tag'>" . $percent_discount . "%</div>";
            } else if ($id_cate == 1) {
              echo "<div class='product-new-tag product-tag'>Mới</div>";
            }
            ?>
          </div>
          <div class="product-bestsell-content product-content">
            <span class="product-bestsell-brand product-brand"><?= $brand_name ?></span>
            <h3 class="product-bestsell-title product-title">
              <a href="<?= $link_product ?>"><?= $pro_name ?></a>
            </h3>
            <div class="product-cost">
              <?php
              if ($price_sale != 0) {
                echo "<span class='product-bestsell-price product-price product-price-sale'>" . number_format($price_sale, 0, ",", ".") . "đ</span>";
                echo "<span class='product-price-old'> " . number_format($price, 0, ",", ".") . "đ</span>";
              } else {
                echo "<span class='product-bestsell-price product-price'>" . number_format($price, 0, ",", ".") . "đ</span>";
              }
              ?>
            </div>
          </div>
        </div>
      <?php
      }
      ?>
      <!-- <div class="product-bestsell-item product-item">
        <div class="product-bestsell-image product-image">
          <a href="#" class="product-bestsell-img">
            <img src="././public/images/product-6.webp" alt="" />
          </a>
          <div class="product-bestsell-tag product-tag">-10%</div>
        </div>
        <div class="product-bestsell-content product-content">
          <span class="product-bestsell-brand product-brand">Converse</span>
          <h3 class="product-bestsell-title product-title">
            <a href="#">Giày Thời Trang Unisex Converse Chuck 70 Canvas</a>
          </h3>
          <div class="product-cost">
            <span class="product-bestsell-price product-price product-price-sale">1.710.000₫</span>
            <span class="product-price-old"> 1.900.000₫ </span>
          </div>
        </div>
      </div>
      <div class="product-bestsell-item product-item">
        <div class="product-bestsell-image product-image">
          <a href="#" class="product-bestsell-img">
            <img src="././public/images/product-7.webp" alt="" />
          </a>
          <div class="product-bestsell-tag product-tag">-20%</div>
        </div>
        <div class="product-bestsell-content product-content">
          <span class="product-bestsell-brand product-brand">Fila</span>
          <h3 class="product-bestsell-title product-title">
            <a href="#">Giày Thời Trang Unisex Fila Disruptor 2</a>
          </h3>
          <div class="product-cost">
            <span class="product-bestsell-price product-price">1.995.000₫</span>
          </div>
        </div>
      </div>
      <div class="product-bestsell-item product-item">
        <div class="product-bestsell-image product-image">
          <a href="#" class="product-bestsell-img">
            <img src="././public/images/product-8.webp" alt="" />
          </a>
          <div class="product-bestsell-tag product-tag">-30%</div>
        </div>
        <div class="product-bestsell-content product-content">
          <span class="product-bestsell-brand product-brand">New Balance</span>
          <h3 class="product-bestsell-title product-title">
            <a href="#">Giày Thể Thao Nam New Balance 574 Classic</a>
          </h3>
          <div class="product-cost">
            <span class="product-bestsell-price product-price">2.795.000₫</span>
          </div>
        </div>
      </div>
      <div class="product-bestsell-item product-item">
        <div class="product-bestsell-image product-image">
          <a href="#" class="product-bestsell-img">
            <img src="././public/images/product-9.webp" alt="" />
          </a>
          <div class="product-bestsell-tag product-tag">-20%</div>
        </div>
        <div class="product-bestsell-content product-content">
          <span class="product-bestsell-brand product-brand">Hoka</span>
          <h3 class="product-bestsell-title product-title">
            <a href="#">Giày Chạy Bộ Nam Hoka Clifton 8</a>
          </h3>
          <div class="product-cost">
            <span class="product-bestsell-price product-price product-price-sale">2.559.000₫</span>
            <span class="product-price-old"> 3.199.000₫ </span>
          </div>
        </div>
      </div>
      <div class="product-bestsell-item product-item">
        <div class="product-bestsell-image product-image">
          <a href="#" class="product-bestsell-img">
            <img src="././public/images/product-1.webp" alt="" />
          </a>
          <div class="product-bestsell-tag product-tag">Mới</div>
        </div>
        <div class="product-bestsell-content product-content">
          <span class="product-bestsell-brand product-brand">Fila</span>
          <h3 class="product-bestsell-title product-title">
            <a href="#">Giày Thời Trang Unisex Fila Rockblunt</a>
          </h3>
          <div class="product-cost">
            <span class="product-bestsell-price product-price">2.395.000₫</span>
          </div>
        </div>
      </div>
      <div class="product-bestsell-item product-item">
        <div class="product-bestsell-image product-image">
          <a href="#" class="product-bestsell-img">
            <img src="././public/images/product-1.webp" alt="" />
          </a>
          <div class="product-bestsell-tag product-tag">Mới</div>
        </div>
        <div class="product-bestsell-content product-content">
          <span class="product-bestsell-brand product-brand">Fila</span>
          <h3 class="product-bestsell-title product-title">
            <a href="#">Giày Thời Trang Unisex Fila Rockblunt</a>
          </h3>
          <div class="product-cost">
            <span class="product-bestsell-price product-price">2.395.000₫</span>
          </div>
        </div>
      </div>
      <div class="product-bestsell-item product-item">
        <div class="product-bestsell-image product-image">
          <a href="#" class="product-bestsell-img">
            <img src="././public/images/product-1.webp" alt="" />
          </a>
          <div class="product-bestsell-tag product-tag">Mới</div>
        </div>
        <div class="product-bestsell-content product-content">
          <span class="product-bestsell-brand product-brand">Fila</span>
          <h3 class="product-bestsell-title product-title">
            <a href="#">Giày Thời Trang Unisex Fila Rockblunt</a>
          </h3>
          <div class="product-cost">
            <span class="product-bestsell-price product-price">2.395.000₫</span>
          </div>
        </div>
      </div> -->
    </div>
  </div>
</section>