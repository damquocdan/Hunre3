<main class="main">
  <section class="page">
    <div class="container">
      <div class="page-list">
        <a href="#" class="page-name active">Trang chủ</a>
        <i class="fa fa-angle-right page-icon"></i>
        <a href="#" class="page-name current">Phòng</a>
      </div>
    </div>
  </section>

  <section class="products-banner">
    <div class="products-container">
      <img src="././public/images/banner2.png" alt="" class="products-banner-image" />
    </div>
  </section>

  <section class="products-filter">
    <div class="products-container">
      <div class="filter">
        <!-- <h3 class="filter-title">SẮP XẾP THEO</h3> -->
        <?php
        if (!isset($_GET['field2']) && !isset($_GET['condition2'])) {
          echo "<h3 class='filter-title'>SẮP XẾP THEO</h3>";
          include "products_filter.php";
        }
        ?>
      </div>
    </div>
  </section>

  <section class="products products-container">
    <aside class="aside">
      <?php
      include "products_gender.php";
      ?>
      <?php
      include "products_category.php";
      ?>
      <?php
      include "products_size.php";
      ?>
      <?php
      include "products_brand.php";
      ?>
      <?php
      include "products_price.php";
      ?>
    </aside>
    <article class="article">
      <h1 class="products-title">
      </h1>
      <div class="products-list filter_data">
        <?php
        $param = "";
        if (isset($_GET['field_sort']) && ($_GET['field_sort'] != "") && isset($_GET['sort']) && ($_GET['sort'] != "")) {
          // $field = isset($_GET['field']) ? $_GET['field'] : "";
          // $sort = isset($_GET['sort']) ? $_GET['sort'] : "";
          $param = "products_field&field_sort=" . $field_sort . "&sort=" . $sort . "&";
          if ($field_sort == "price" && $sort == "desc") {
            foreach ($list_pro_field as $lpf) {
              extract($lpf);
        ?>
              <?php
              include "products_foreach.php";
              ?>
            <?php
            }
          } else if ($field_sort == "price" && $sort == "asc") {
            foreach ($list_pro_field as $lpf) {
              extract($lpf);
            ?>
              <?php
              include "products_foreach.php";
              ?>
            <?php
            }
          } else if ($field_sort == "pro_name" && $sort == "asc") {
            foreach ($list_pro_field as $lpf) {
              extract($lpf);
            ?>
              <?php
              include "products_foreach.php";
              ?>
            <?php
            }
          } else if ($field_sort == "pro_name" && $sort == "desc") {
            foreach ($list_pro_field as $lpf) {
              extract($lpf);
            ?>
              <?php
              include "products_foreach.php";
              ?>
            <?php
            }
          } else if ($field_sort == "views" && $sort == "desc") {
            foreach ($list_pro_field as $lpf) {
              extract($lpf);
            ?>
              <?php
              include "products_foreach.php";
              ?>
            <?php
            }
          } else if ($field_sort == "id_pro" && $sort == "asc") {
            foreach ($list_pro_field as $lpf) {
              extract($lpf);
            ?>
              <?php
              include "products_foreach.php";
              ?>
            <?php
            }
          }
        } else if (isset($_GET['field']) && ($_GET['field'] != "") && isset($_GET['condition']) && ($_GET['condition'] != "")) {
          // $param = "products_field&field=" . $field . "&condition=" . $condition . "&";
          if (isset($_GET['sort_field']) && ($_GET['sort_field'] != "") && isset($_GET['sort']) && ($_GET['sort'] != "")) {
            $param = "products_field&field=" . $field . "&condition=" . $condition . "&field2=" . $field2 . "&condition2=" . $condition2 . "&sort_field=" . $sort_field . "&sort=" . $sort . "&";
          } else {
            $param = "products_field&field=" . $field . "&condition=" . $condition . "&";
          }
          if ($field == $_GET['field'] && $condition == $_GET['condition']) {
            foreach ($list_pro_field as $lpf) {
              extract($lpf);
            ?>
              <?php
              include "products_foreach.php";
              ?>
            <?php
            }
          } else if ($sort == $_GET['sort'] && $sort_field == $_GET['sort_field']) {
            foreach ($list_pro_field as $lpf) {
              extract($lpf);
            ?>
              <?php
              include "products_foreach.php";
              ?>
        <?php
            }
          }
        }
        ?>
      </div>
      <div class="products-pages">
        <?php
        // if (!isset($_GET['field2']) && !isset($_GET['condition2'])) {
        include "products_pages.php";
        // }
        ?>
      </div>
    </article>
  </section>
</main>