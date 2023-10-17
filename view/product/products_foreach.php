              <?php
              $link_product = "index.php?act=product_detail&id_pro=" . $id_pro;
              $product_img = $img_path_view . $image;
              $percent_discount = number_format(($price_sale - $price) / $price * 100);
              ?>
              <div class="products-item product-item">
                <div class="products-image product-image">
                  <a href="<?= $link_product ?>" class="products-link">
                    <img src="<?= $product_img ?>" alt="" />
                  </a>
                  <?php
                  if ($price_sale != 0) {
                    echo "<div class='product-bestsell-tag product-tag'>" . $percent_discount . "%</div>";
                  } else if ($id_cate == 1) {
                    echo "<div class='product-new-tag product-tag'>Mới</div>";
                  }
                  ?>
                </div>
                <div class="products-content product-content">
                  <h3 class="products-title">
                    <a href="<?= $link_product ?>"> <?= $pro_name ?> </a>
                  </h3>
                  <div class="products-cost product-cost">
                    <?php
                    if ($price_sale != 0) {
                      echo "<span class='products-price products-price-sale'>" . number_format($price_sale, 0, ",", ".") . "đ</span>";
                      echo "<span class='products-price-old'> " . number_format($price, 0, ",", ".") . "đ</span>";
                    } else {
                      echo "<span class='products-price'>" . number_format($price, 0, ",", ".") . "đ</span>";
                    }
                    ?>
                  </div>
                  <div class="products-info">
                    <a href="<?= $link_product ?>" class="products-info-link">
                      <i class="fa-regular fa-circle-info"></i>
                    </a>
                  </div>
                </div>
              </div>