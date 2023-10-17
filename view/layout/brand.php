<section class="brand">
  <div class="container">
    <div class="brand-header">
      <h2 class="heading">KHU VỰC NỔI BẬT</h2>
    </div>
    <div class="brand-list">
      <?php
      foreach ($list_brand as $lb) {
        extract($lb);
        $brand_image = $img_path_view . $logo;
      ?>
        <div class="brand-item">
          <a href="index.php?act=products_field&field=brand_name&condition=<?= $brand_name ?>" class="brand-logo">
            <img src="<?= $brand_image ?>" alt="" />
          </a>
        </div>
      <?php
      }
      ?>
      <!-- <div class="brand-item">
        <a href="#" class="brand-logo">
          <img src="././public/images/columbia-brand.webp" alt="" />
        </a>
      </div>
      <div class="brand-item">
        <a href="#" class="brand-logo">
          <img src="././public/images/converse-brand.avif" alt="" />
        </a>
      </div>
      <div class="brand-item">
        <a href="#" class="brand-logo">
          <img src="././public/images/adidas-brand.png" alt="" />
        </a>
      </div>
      <div class="brand-item">
        <a href="#" class="brand-logo">
          <img src="././public/images/file-brand.avif" alt="" />
        </a>
      </div>
      <div class="brand-item">
        <a href="#" class="brand-logo">
          <img src="././public/images/new-balance-brand.png" alt="" />
        </a>
      </div>
      <div class="brand-item">
        <a href="#" class="brand-logo">
          <img src="././public/images/puma-brand.avif" alt="" />
        </a>
      </div>
      <div class="brand-item">
        <a href="#" class="brand-logo">
          <img src="././public/images/under-armor-brand.avif" alt="" />
        </a>
      </div>
      <div class="brand-item">
        <a href="#" class="brand-logo">
          <img src="././public/images/hoka-brand.png" alt="" />
        </a>
      </div> -->
    </div>
  </div>
</section>