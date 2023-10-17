<div class="products-col">
  <div class="products-col-header">
    <i class="fa-sharp fa-solid fa-caret-down"></i>
    <h3 class="products-col-heading">Khu vực</h3>
  </div>
  <div class="products-col-list">
    <form action="" class="product-col-form">
      <?php
      foreach ($list_brand as $lb) {
        extract($lb);
      ?>
        <div class="products-col-item">
          <a href="index.php?act=products_field&field=brand_name&condition=<?= $brand_name ?>"><?= $brand_name ?></a>
        </div>
      <?php
      }
      ?>
      <!-- <div class="products-col-item">
        <input type="checkbox" class="products-col-input" id="CONVERSE" />
        <label for="CONVERSE" class="products-col-label">CONVERSE</label>
      </div>
      <div class="products-col-item">
        <input type="checkbox" class="products-col-input" id="Fila" />
        <label for="Fila" class="products-col-label">FILA</label>
      </div>
      <div class="products-col-item">
        <input type="checkbox" class="products-col-input" id="HOKA" />
        <label for="HOKA" class="products-col-label">HOKA</label>
      </div>
      <div class="products-col-item">
        <input type="checkbox" class="products-col-input" id="JORDAN" />
        <label for="JORDAN" class="products-col-label">JORDAN</label>
      </div>
      <div class="products-col-item">
        <input type="checkbox" class="products-col-input" id="NEW-BALANCE" />
        <label for="NEW-BALANCE" class="products-col-label">NEW-BALANCE</label>
      </div>
      <div class="products-col-item">
        <input type="checkbox" class="products-col-input" id="NIKE" />
        <label for="NIKE" class="products-col-label">NIKE</label>
      </div>
      <div class="products-col-item">
        <input type="checkbox" class="products-col-input" id="PUMA" />
        <label for="PUMA" class="products-col-label">PUMA</label>
      </div>
      <div class="products-col-item">
        <input type="checkbox" class="products-col-input" id="UNDER-ARMOR" />
        <label for="UNDER-ARMOR" class="products-col-label">UNDER-ARMOUR</label>
      </div> -->
    </form>
  </div>
</div>