<section class="product-new">
  <div class="container">
    <div class="product-new-header product-header">
      <h2 class="heading">Hàng mới về</h2>
    </div>
    <div class="product-new-list">
      <?php
      foreach ($list_pro_new as $lpn) {
        extract($lpn);
        $link_product = "index.php?act=product_detail&id_pro=" . $id_pro;
        $product_new_img = $img_path_view . $image;
      ?>
        <div class="product-new-item product-item">
          <div class="product-new-image product-image">
            <a href="<?= $link_product ?>" class="product-new-img">
              <img src="<?= $product_new_img ?>" alt="" />
            </a>
            <div class="product-new-tag product-tag">Mới</div>
          </div>
          <div class="product-new-content product-content">
            <span class="product-new-brand product-brand"><?= $brand_name ?></span>
            <h3 class="product-new-title product-title">
              <a href="<?= $link_product ?>"><?= $pro_name ?></a>
            </h3>
            <span class="product-new-price product-price"><?= number_format($price, 0, ',', ".") ?>đ</span>
          </div>
        </div>
      <?php
      }
      ?>
      <!-- <div class="product-new-item product-item">
        <div class="product-new-image product-image">
          <a href="#" class="product-new-img">
            <img src="././public/images/product-2.webp" alt="" />
          </a>
          <div class="product-new-tag product-tag">Mới</div>
        </div>
        <div class="product-new-content product-content">
          <span class="product-new-brand product-brand">Fila</span>
          <h3 class="product-new-title product-title">
            <a href="#">Giày Chạy Bộ Nữ Nike Air Zoom Pegasus 39</a>
          </h3>
          <span class="product-new-price product-price">3.719.000₫</span>
        </div>
      </div>
      <div class="product-new-item product-item">
        <div class="product-new-image product-image">
          <a href="#" class="product-new-img">
            <img src="././public/images/product-3.webp" alt="" />
          </a>
          <div class="product-new-tag product-tag">Mới</div>
        </div>
        <div class="product-new-content product-content">
          <span class="product-new-brand product-brand">Fila</span>
          <h3 class="product-new-title product-title">
            <a href="#">Giày Thời Trang Nữ Nike Air Max Dawn</a>
          </h3>
          <span class="product-new-price product-price">3.519.000₫</span>
        </div>
      </div>
      <div class="product-new-item product-item">
        <div class="product-new-image product-image">
          <a href="#" class="product-new-img">
            <img src="././public/images/product-4.webp" alt="" />
          </a>
          <div class="product-new-tag product-tag">Mới</div>
        </div>
        <div class="product-new-content product-content">
          <span class="product-new-brand product-brand">Fila</span>
          <h3 class="product-new-title product-title">
            <a href="#">Giày Thời Trang Nam Nike Air Max 90 Se</a>
          </h3>
          <span class="product-new-price product-price">3.829.000₫</span>
        </div>
      </div>
      <div class="product-new-item product-item">
        <div class="product-new-image product-image">
          <a href="#" class="product-new-img">
            <img src="././public/images/product-4.webp" alt="" />
          </a>
          <div class="product-new-tag product-tag">Mới</div>
        </div>
        <div class="product-new-content product-content">
          <span class="product-new-brand product-brand">Fila</span>
          <h3 class="product-new-title product-title">
            <a href="#">Giày Thời Trang Unisex Fila Rockblunt</a>
          </h3>
          <span class="product-new-price product-price">2.395.000₫</span>
        </div>
      </div>
      <div class="product-new-item product-item">
        <div class="product-new-image product-image">
          <a href="#" class="product-new-img">
            <img src="././public/images/product-1.webp" alt="" />
          </a>
          <div class="product-new-tag product-tag">Mới</div>
        </div>
        <div class="product-new-content product-content">
          <span class="product-new-brand product-brand">Fila</span>
          <h3 class="product-new-title product-title">
            <a href="#">Giày Thời Trang Unisex Fila Rockblunt</a>
          </h3>
          <span class="product-new-price product-price">2.395.000₫</span>
        </div>
      </div>
      <div class="product-new-item product-item">
        <div class="product-new-image product-image">
          <a href="#" class="product-new-img">
            <img src="././public/images/product-1.webp" alt="" />
          </a>
          <div class="product-new-tag product-tag">Mới</div>
        </div>
        <div class="product-new-content product-content">
          <span class="product-new-brand product-brand">Fila</span>
          <h3 class="product-new-title product-title">
            <a href="#">Giày Thời Trang Unisex Fila Rockblunt</a>
          </h3>
          <span class="product-new-price product-price">2.395.000₫</span>
        </div>
      </div>
      <div class="product-new-item product-item">
        <div class="product-new-image product-image">
          <a href="#" class="product-new-img">
            <img src="././public/images/product-1.webp" alt="" />
          </a>
          <div class="product-new-tag product-tag">Mới</div>
        </div>
        <div class="product-new-content product-content">
          <span class="product-new-brand product-brand">Fila</span>
          <h3 class="product-new-title product-title">
            <a href="#">Giày Thời Trang Unisex Fila Rockblunt</a>
          </h3>
          <span class="product-new-price product-price">2.395.000₫</span>
        </div>
      </div> -->
    </div>
  </div>
</section>