<div class="products-col">
  <div class="products-col-header">
    <i class="fa-sharp fa-solid fa-caret-down"></i>
    <h3 class="products-col-heading">Loại phòng</h3>
  </div>
  <div class="products-col-list">
    <form action="" class="product-col-form">
      <?php
      foreach ($list_cate as $lc) {
        extract($lc);
      ?>
        <div class="products-col-item">
          <a href="index.php?act=products_field&field=id_cate&condition=<?= $id_cate ?>"><?= $cate_name ?></a>
        </div>
      <?php
      }
      ?>
      <!-- <div class="products-col-item">
        <input type="checkbox" class="products-col-input" id="giayluyentap" />
        <label for="giayluyentap" class="products-col-label">Giày luyện tập</label>
      </div>
      <div class="products-col-item">
        <input type="checkbox" class="products-col-input" id="giayquanvot" />
        <label for="giayquanvot" class="products-col-label">Giày quần vợt</label>
      </div>
      <div class="products-col-item">
        <input type="checkbox" class="products-col-input" id="giaythoitrang" />
        <label for="giaythoitrang" class="products-col-label">Giày thời trang</label>
      </div>
      <div class="products-col-item">
        <input type="checkbox" class="products-col-input" id="giaybongro" />
        <label for="giaybongro" class="products-col-label">Giày bóng rổ</label>
      </div>
      <div class="products-col-item">
        <input type="checkbox" class="products-col-input" id="giaybongda" />
        <label for="giaybongda" class="products-col-label">Giày bóng đá</label>
      </div> -->
    </form>
  </div>
</div>