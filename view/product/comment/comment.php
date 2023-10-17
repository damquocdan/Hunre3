<div class="product-info-content" id="review">
  <div class="product-info-review">
    <div class="product-info-review-column">
      <?php
      foreach ($list_comment as $lc) {
        extract($lc);
        $comment_img = $img_path_view . $image;
      ?>
        <div class="product-info-review-user">
          <img src="<?= $comment_img ?>" alt="" class="product-info-review-image" />
          <div class="product-info-review-content">
            <div class="product-info-review-name">
              <h4><?= $id_user ?></h4>
              <span>- <?= $date ?></span>
            </div>
            <div class="product-info-review-stars">
              <?php
              for ($i = 1; $i <= $rate; $i++) {
                echo "<span class='fa fa-star'></span>";
              }
              ?>
              <!-- <span class="fa fa-star"></span>
              <span class="fa fa-star"></span>
              <span class="fa fa-star"></span>
              <span class="fa fa-star"></span> -->
            </div>
            <p class="product-info-review-text">
              <?= $content ?>
            </p>
          </div>
        </div>
      <?php
      }
      ?>
      <!-- <div class="product-info-review-user">
        <img src="./images/user.jpg" alt="" class="product-info-review-image" />
        <div class="product-info-review-content">
          <div class="product-info-review-name">
            <h4>Jonh Doe</h4>
            <span>- 01 Jan 2045</span>
          </div>
          <div class="product-info-review-stars">
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
          </div>
          <p class="product-info-review-text">
            Diam amet duo labore stet elitr ea clita ipsum, tempor
            labore accusam ipsum et no at. Kasd diam tempor rebum
            magna dolores sed sed eirmod ipsum.
          </p>
        </div>
      </div> -->
    </div>
    <div class="product-info-review-form">
      <form action="" method="post" enctype="multipart/form-data">
        <h3 class="product-info-review-title">Để lại đánh giá</h3>
        <div class="product-info-review-rate">
          <h3>Đánh giá của bạn *:</h3>
          <div class="product-info-review-star">
            <input type="radio" id="star5" name="rate" value="5" />
            <label class="full" for="star5" title="Awesome - 5 stars"></label>

            <input type="radio" id="star4" name="rate" value="4" />
            <label class="full" for="star4" title="Pretty good - 4 stars"></label>

            <input type="radio" id="star3" name="rate" value="3" />
            <label class="full" for="star3" title="Meh - 3 stars"></label>

            <input type="radio" id="star2" name="rate" value="2" />
            <label class="full" for="star2" title="Kinda bad - 2 stars"></label>

            <input type="radio" id="star1" name="rate" value="1" />
            <label class="full" for="star1" title="Sucks big time - 1 star"></label>
          </div>
        </div>
        <div class="product-info-review-comment">
          <label for="">Bình luận của bạn *</label>
          <textarea name="content" id="" cols="30" rows="10"></textarea>
        </div>
        <?php
        if (isset($_SESSION['user'])) {
          echo "<button class='product-info-review-submit'>
                    Để lại đánh giá của bạn
                </button>";
        } else {
          echo "<button class='product-info-review-submit'>
                 <a href='index.php?act=signin'>Đăng nhập để đánh giá</a>
                </button>";
        }
        ?>
        <!-- <button class="product-info-review-submit">
          Để lại đánh giá của bạn
        </button> -->
      </form>
    </div>
  </div>
</div>