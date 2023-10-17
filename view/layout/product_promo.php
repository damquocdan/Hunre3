<section class="product-promo">
  <div class="container">
    <div class="product-promo-header product-header">
      <h2 class="heading">Khuyến mãi có hạn</h2>
    </div>
    <div class="product-promo-list">
      <?php
      foreach ($list_pro_promo as $lpp) {
        extract($lpp);
        $link_product = "index.php?act=product_detail&id_pro=" . $id_pro;
        $product_promo_img = $img_path_view . $image;
        $percent_discount = number_format(($price_sale - $price) / $price * 100);
      ?>
        <div class="product-promo-item product-item">
          <div class="product-promo-image product-image">
            <a href="<?= $link_product ?>" class="product-promo-img">
              <img src="<?= $product_promo_img ?>" alt="" />
            </a>
            <div class="product-promo-tag product-tag"><?= $percent_discount ?>%</div>
          </div>
          <div class="product-promo-content product-content">
            <span class="product-promo-brand product-brand"><?= $brand_name ?></span>
            <h3 class="product-promo-title product-title">
              <a href="<?= $link_product ?>"><?= $pro_name ?></a>
            </h3>
            <div class="product-cost">
              <span class="product-bestsell-price product-price product-price-sale"><?= number_format($price_sale, 0, ",", ".") ?>đ</span>
              <span class="product-price-old"> <?= number_format($price, 0, ",", ".")  ?>đ</span>
            </div>
          </div>
        </div>
      <?php
      }
      ?>
      <!-- <div class="product-promo-item product-item">
        <div class="product-promo-image product-image">
          <a href="#" class="product-promo-img">
            <img src="././public/images/product-11.webp" alt="" />
          </a>
          <div class="product-promo-tag product-tag">-50%</div>
        </div>
        <div class="product-promo-content product-content">
          <span class="product-promo-brand product-brand">New Balanace</span>
          <h3 class="product-promo-title product-title">
            <a href="#">Giày Chạy Bộ Nam New Balance Fuelcell Rebel V2</a>
          </h3>
          <div class="product-cost">
            <span class="product-bestsell-price product-price product-price-sale">1.598.000₫</span>
            <span class="product-price-old"> 3.195.000₫ </span>
          </div>
        </div>
      </div>
      <div class="product-promo-item product-item">
        <div class="product-promo-image product-image">
          <a href="#" class="product-promo-img">
            <img src="././public/images/product-12.webp" alt="" />
          </a>
          <div class="product-promo-tag product-tag">-35%</div>
        </div>
        <div class="product-promo-content product-content">
          <span class="product-promo-brand product-brand">
            NEW BALANCE
          </span>
          <h3 class="product-promo-title product-title">
            <a href="#">Giày Chạy Bộ Nam New Balance Fuelcell Propel Rmx V2</a>
          </h3>
          <div class="product-cost">
            <span class="product-bestsell-price product-price product-price-sale">1.752.000₫</span>
            <span class="product-price-old"> 2.695.000₫ </span>
          </div>
        </div>
      </div>
      <div class="product-promo-item product-item">
        <div class="product-promo-image product-image">
          <a href="#" class="product-promo-img">
            <img src="././public/images/product-13.webp" alt="" />
          </a>
          <div class="product-promo-tag product-tag">-40%</div>
        </div>
        <div class="product-promo-content product-content">
          <span class="product-promo-brand product-brand">Adidas</span>
          <h3 class="product-promo-title product-title">
            <a href="#">Giày Thể Thao Unisex Adidas Stan Smith</a>
          </h3>
          <div class="product-cost">
            <span class="product-bestsell-price product-price product-price-sale">1.500.000₫</span>
            <span class="product-price-old"> 2.500.000₫ </span>
          </div>
        </div>
      </div>
      <div class="product-promo-item product-item">
        <div class="product-promo-image product-image">
          <a href="#" class="product-promo-img">
            <img src="././public/images/product-1.webp" alt="" />
          </a>
          <div class="product-promo-tag product-tag">-10%</div>
        </div>
        <div class="product-promo-content product-content">
          <span class="product-promo-brand product-brand">Fila</span>
          <h3 class="product-promo-title product-title">
            <a href="#">Giày Thời Trang Unisex Fila Rockblunt</a>
          </h3>
          <div class="product-cost">
            <span class="product-bestsell-price product-price product-price-sale">1.710.000₫</span>
            <span class="product-price-old"> 1.900.000₫ </span>
          </div>
        </div>
      </div>
      <div class="product-promo-item product-item">
        <div class="product-promo-image product-image">
          <a href="#" class="product-promo-img">
            <img src="././public/images/product-1.webp" alt="" />
          </a>
          <div class="product-promo-tag product-tag">-10%</div>
        </div>
        <div class="product-promo-content product-content">
          <span class="product-promo-brand product-brand">Fila</span>
          <h3 class="product-promo-title product-title">
            <a href="#">Giày Thời Trang Unisex Fila Rockblunt</a>
          </h3>
          <div class="product-cost">
            <span class="product-bestsell-price product-price product-price-sale">1.710.000₫</span>
            <span class="product-price-old"> 1.900.000₫ </span>
          </div>
        </div>
      </div>
      <div class="product-promo-item product-item">
        <div class="product-promo-image product-image">
          <a href="#" class="product-promo-img">
            <img src="././public/images/product-1.webp" alt="" />
          </a>
          <div class="product-promo-tag product-tag">-10%</div>
        </div>
        <div class="product-promo-content product-content">
          <span class="product-promo-brand product-brand">Fila</span>
          <h3 class="product-promo-title product-title">
            <a href="#">Giày Thời Trang Unisex Fila Rockblunt</a>
          </h3>
          <div class="product-cost">
            <span class="product-bestsell-price product-price product-price-sale">1.710.000₫</span>
            <span class="product-price-old"> 1.900.000₫ </span>
          </div>
        </div>
      </div>
      <div class="product-promo-item product-item">
        <div class="product-promo-image product-image">
          <a href="#" class="product-promo-img">
            <img src="././public/images/product-1.webp" alt="" />
          </a>
          <div class="product-promo-tag product-tag">-10%</div>
        </div>
        <div class="product-promo-content product-content">
          <span class="product-promo-brand product-brand">Fila</span>
          <h3 class="product-promo-title product-title">
            <a href="#">Giày Thời Trang Unisex Fila Rockblunt</a>
          </h3>
          <div class="product-cost">
            <span class="product-bestsell-price product-price product-price-sale">1.710.000₫</span>
            <span class="product-price-old"> 1.900.000₫ </span>
          </div>
        </div>
      </div> -->
    </div>

    <div class="product-promo-link">
      <a href="index.php?act=products_field&field=price_sale&condition=0" class="button button-black">Xem tất cả</a>
    </div>
  </div>
</section>