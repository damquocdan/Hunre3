<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>ShoeLike</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300;400;600;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
  <link rel="stylesheet" href="././public/css/style.css" />
</head>

<body>
  <div class="wrapper">
    <button onclick="topFunction()" id="myBtn" class="topBtn" title="Go to top">
      <i class="fa fa-angle-up"></i>
    </button>
    <header class="header "style="background-color: #00B9F2;">
      <div class="container" >
        <div class="header-top">
          <div class="header-language dropdow">
            <div class="header-language-select">
              <img src="././public/images/vn-logo.webp" alt="" class="header-nation" />
              <span>Tiếng Việt <i class="fa-solid fa-chevron-down"></i></span>
            </div>
            <ul class="header-language-list dropdow-list">
              <li class="header-language-item dropdow-item">
                <img src="././public/images/vn-logo.webp" alt="" class="header-nation" />
                <a href="#" class="dropdow-link">Tiếng Việt</a>
              </li>
              <li class="header-language-item dropdow-item">
                <img src="././public/images/usa-logo.webp" alt="" class="header-nation" />
                <a href="#" class="dropdow-link">English</a>
              </li>
            </ul>
          </div>

          <div class="header-auth">
            <a href="index.php?act=signup" class="header-auth-text sign-up-offer">
              ĐĂNG KÝ VÀ NHẬN 100.000 VNĐ
            </a>
            <div class="dropdow">
              <?php
              if (isset($_SESSION['user'])) {
                extract($_SESSION['user']);
                $user_image = $img_path_view . $image;
              ?>
                <?php
                if (is_file($user_image)) {
                  echo "<div class='header-auth-info'>
                          <img src='$user_image' class='header-auth-image'>
                          <a href='index.php?act=user_info' class='header-auth-text account'>Tài khoản
                            <i class='header-auth-text fa-solid fa-chevron-down'></i>
                          </a>
                        </div>";
                } else {
                  echo "<a href='index.php?act=user_info' class='header-auth-text account'>Tài khoản
                          <i class='header-auth-text fa-solid fa-chevron-down'></i>
                        </a>";
                }
                ?>
                <ul class="dropdow-list">
                  <?php
                  if ($role == 0) {
                  ?>
                    <li class="dropdow-item">
                      <a href="index.php?act=user_info" class="dropdow-link signup">Hello <?= $id_user ?></a>
                    </li>
                    <li class="dropdow-item">
                      <a href="index.php?act=user_info" class="dropdow-link signup">Tài khoản</a>
                    </li>
                    <li class="dropdow-item">
                      <a href="index.php?act=user_bill" class="dropdow-link signup">Đơn hàng của tôi</a>
                    </li>
                    <li class="dropdow-item">
                      <a href="index.php?act=signout" class="dropdow-link signin">Đăng xuất</a>
                    </li>
                  <?php
                  } else {
                  ?>
                    <li class="dropdow-item">
                      <a href="index.php?act=user_info" class="dropdow-link signup">Hello <?= $id_user ?></a>
                    </li>
                    <li class="dropdow-item">
                      <a href="./admin/index.php" class="dropdow-link signup">Quản lý website</a>
                    </li>
                    <li class="dropdow-item">
                      <a href="index.php?act=signout" class="dropdow-link signin">Đăng xuất</a>
                    </li>
                  <?php
                  }
                  ?>
                </ul>
              <?php
              } else {
              ?>
                <a href='#' class='header-auth-text account'>Tài khoản
                  <i class='header-auth-text fa-solid fa-chevron-down'></i>
                </a>
                <ul class="dropdow-list">
                  <li class="dropdow-item">
                    <a href="index.php?act=signup" class="dropdow-link signup">Đăng ký</a>
                  </li>
                  <li class="dropdow-item">
                    <a href="index.php?act=signin" class="dropdow-link signin">Đăng nhập</a>
                  </li>
                </ul>
              <?php
              }
              ?>
            </div>

            <a href="#" class="header-auth-text store-system">Hệ Thống 19 Cửa Hàng Toàn Quốc
              <i class="fa-solid fa-location-dot"></i></a>
          </div>
        </div>

        <div class="header-content">
          <a href="index.php" class="header-logo-link">
            <img srcset="././public/images/logo.png" alt="" class="header-logo" width="100px"/>
          </a>
          <div class="header-feature">
            <div class="header-search">
              <form action="index.php?act=product_keyword&keyword=" class="header-search-form" method="post">
                <input type="text" class="header-search-input" name="keyword" placeholder="Bạn đang tìm gì ..." value="" />
                <button type="submit" name="btn_search" class="header-search-submit button button-green">
                  <i class="fa-sharp fa-solid fa-magnifying-glass header-search-icon"></i>
                  Tìm kiếm
                </button>
              </form>
            </div>

            <div class="header-cart">
              <?php
              if (isset($_SESSION['cart']) && ($_SESSION['cart'] > 0)) {
                echo " <a href='index.php?act=cart' class='header-cart-submit button        button-white'>
                       <i class='fa-solid fa-cart-shopping header-cart-icon'></i>
                      Giỏ phòng (" . count($_SESSION['cart']) . ")
                     </a>";
              } else {
                echo "<a href='index.php?act=cart' class='header-cart-submit button button-white'>
                <i class='fa-solid fa-cart-shopping header-cart-icon'></i>
                Giỏ phòng (0)
              </a>";
              }
              ?>
              <!-- <a href="index.php?act=cart" class="header-cart-submit button button-white">
                <i class="fa-solid fa-cart-shopping header-cart-icon"></i>
                Giỏ hàng (0)
              </a> -->
            </div>
          </div>
        </div>

        <div class="header-menu">
          <ul class="menu">
            <li class="menu-item">
              <a href="index.php" class="menu-link">Trang chủ</a>
            </li>
            <li class="menu-item">
              <div class="dropdow-menu">
                <a href="index.php?act=products" class="menu-link">Phòng <i class="fa-solid fa-chevron-down"></i></a>
                <div class="dropdow-menu-list">
                  <div class="dropdow-menu-category">
                    <div class="dropdow-menu-info">
                      <h2 class="dropdow-menu-title">Phòng thuê</h2>
                      <a href="index.php?act=products" class="dropdow-menu-link">Xem tất cả</a>
                    </div>
                    <div class="dropdow-menu-item">
                      <a href="index.php?act=products_field&field=special&condition=1">Phòng mới</a>
                    </div>
                    <div class="dropdow-menu-item">
                      <a href="index.php?act=products_field&field=id_cate&condition=2">Phòng sinh viên</a>
                    </div>
                    <div class="dropdow-menu-item">
                      <a href="index.php?act=products_field&field=id_cate&condition=3">Phòng công nhân</a>
                    </div>
                    <div class="dropdow-menu-item">
                      <a href="index.php?act=products_field&field=id_cate&condition=4">Phòng gia đình</a>
                    </div>
                    <div class="dropdow-menu-item">
                      <a href="index.php?act=products_field&field=id_cate&condition=5">Mặt kinh doanh</a>
                    </div>
                    <div class="dropdow-menu-item">
                      <a href="index.php?act=products_field&field=id_cate&condition=6">Căn hộ</a>
                    </div>
                  </div>
                  <div class="dropdow-menu-images">
                    <a href="#" class="dropdow-menu-image">
                      <img src="././public/images/banner.png" alt="" class="dropdow-menu-img"  width="540px"/>
                    </a>
                    <a href="#" class="dropdow-menu-image">
                      <img src="././public/images/banner1.png" alt="" class="dropdow-menu-img"  width="540px"/>
                    </a>
                  </div>
                </div>
              </div>
            </li>
            <li class="menu-item">
              <div class="dropdow-menu">
                <a href="index.php?act=products_field&field=gender&condition=Nam" class="menu-link">Phòng nam <i class="fa-solid fa-chevron-down"></i></a>
                <div class="dropdow-menu-list">
                  <div class="dropdow-menu-category">
                    <div class="dropdow-menu-info">
                      <h2 class="dropdow-menu-title">Phòng dành cho các bạn nam</h2>
                      <a href="index.php?act=products_field&field=gender&condition=Nam" class="dropdow-menu-link">Xem tất cả</a>
                    </div>
                    <div class="dropdow-menu-item">
                      <a href="index.php?act=products_field&field=gender&condition=Nam&field2=special&condition2=1">Phòng mới</a>
                    </div>
                    <div class="dropdow-menu-item">
                      <a href="index.php?act=products_field&field=gender&condition=Nam&field2=id_cate&condition2=2">Phòng sinh viên</a>
                    </div>
                    <div class="dropdow-menu-item">
                      <a href="index.php?act=products_field&field=gender&condition=Nam&field2=id_cate&condition2=3">Phòng công nhân</a>
                    </div>
                    <div class="dropdow-menu-item">
                      <a href="index.php?act=products_field&field=gender&condition=Nam&field2=id_cate&condition2=6">Căn hộ</a>
                    </div>

                  </div>
                  <div class="dropdow-menu-images">
                    <a href="#" class="dropdow-menu-image">
                      <img src="././public/images/banner3.png" alt="" class="dropdow-menu-img"  width="540px"/>
                    </a>
                    <a href="#" class="dropdow-menu-image">
                      <img src="././public/images/banner1.png" alt="" class="dropdow-menu-img"  width="540px"/>
                    </a>
                  </div>
                </div>
              </div>
            </li>
            <li class="menu-item">
              <div class="dropdow-menu">
                <a href="index.php?act=products_field&field=gender&condition=Nữ" class="menu-link">Phòng nữ <i class="fa-solid fa-chevron-down"></i></a>
                <div class="dropdow-menu-list">
                  <div class="dropdow-menu-category">
                    <div class="dropdow-menu-info">
                      <h2 class="dropdow-menu-title">Phòng thuê dành cho nữ</h2>
                      <a href="index.php?act=products_field&field=gender&condition=Nữ" class="dropdow-menu-link">Xem tất cả</a>
                    </div>
                    <div class="dropdow-menu-item">
                      <a href="index.php?act=products_field&field=gender&condition=Nữ&field2=id_cate&condition2=1">Phòng mới</a>
                    </div>
                    <div class="dropdow-menu-item">
                      <a href="index.php?act=products_field&field=gender&condition=Nữ&field2=id_cate&condition2=2">Phòng sinh viên</a>
                    </div>
                    <div class="dropdow-menu-item">
                      <a href="index.php?act=products_field&field=gender&condition=Nữ&field2=id_cate&condition2=3">Phòng nhân viên</a>
                    </div>
                    <div class="dropdow-menu-item">
                      <a href="index.php?act=products_field&field=gender&condition=Nữ&field2=id_cate&condition2=6">Căn hộ</a>
                    </div>
                  </div>
                  <div class="dropdow-menu-images">
                    <a href="#" class="dropdow-menu-image">
                      <img src="././public/images/banner1.png" alt="" class="dropdow-menu-img" width="540px" />
                    </a>
                    <a href="#" class="dropdow-menu-image">
                      <img src="././public/images/banner.png" alt="" class="dropdow-menu-img"  width="540px"/>
                    </a>
                  </div>
                </div>
              </div>
            </li>
            <li class="menu-item">
              <a href="index.php?act=products_field&field=gender&condition=Trẻ Em" class="menu-link">Căn hộ</a>
            </li>
            <li class="menu-item">
              <div class="dropdow-menu">
                <a href="index.php?act=products" class="menu-link">Khu vực <i class="fa-solid fa-chevron-down"></i></a>
                <div class="dropdow-menu-list">
                  <div class="dropdow-menu-category">
                    <div class="dropdow-menu-info">
                      <h2 class="dropdow-menu-title">A - Z</h2>
                      <a href="index.php?act=products" class="dropdow-menu-link">Xem tất cả</a>
                    </div>
                    <?php
                    foreach ($list_brand as $lb) {
                      extract($lb);
                    ?>
                      <div class="dropdow-menu-item">
                        <a href="index.php?act=products_field&field=brand_name&condition=<?= $brand_name ?>"><?= $brand_name ?></a>
                      </div>
                    <?php
                    }
                    ?>
                    <!-- <div class="dropdow-menu-item">
                      <a href="#">COLUMBIA</a>
                    </div>
                    <div class="dropdow-menu-item">
                      <a href="#">CONVERSE</a>
                    </div>
                    <div class="dropdow-menu-item">
                      <a href="#">FILA</a>
                    </div>
                    <div class="dropdow-menu-item">
                      <a href="#">JORDAN</a>
                    </div>
                    <div class="dropdow-menu-item">
                      <a href="#">HOKA</a>
                    </div>
                    <div class="dropdow-menu-item">
                      <a href="#">NIKE</a>
                    </div>
                    <div class="dropdow-menu-item">
                      <a href="#">NEW BALANCE</a>
                    </div>
                    <div class="dropdow-menu-item">
                      <a href="#">PUMA</a>
                    </div>
                    <div class="dropdow-menu-item">
                      <a href="#">UNDER ARMOR</a>
                    </div> -->
                  </div>
                  <div class="dropdow-menu-images">
                    <a href="#" class="dropdow-menu-image">
                      <img src="././public/images/banner3.png" alt="" class="dropdow-menu-img" width="540px" />
                    </a>
                    <a href="#" class="dropdow-menu-image">
                      <img src="././public/images/banner1.png" alt="" class="dropdow-menu-img" width="540px"/>
                    </a>
                  </div>
                </div>
              </div>
            </li>
            <li class="menu-item">
              <a href="index.php?act=about" class="menu-link">Giới thiệu</a>
            </li>
            <li class="menu-item">
              <a href="index.php?act=news" class="menu-link">Tin tức</a>
            </li>
            <li class="menu-item">
              <a href="index.php?act=contact" class="menu-link">Liên hệ</a>
            </li>
          </ul>

          <a href="#" class="promo button button-red">Ưu đãi</a>
        </div>
      </div>
      <div class="header-bottom">
        <div class="container">
          <div class="policy">
            <div class="policy-item">
              <a href="#" class="policy-image">
                <img src="././public/images/truck-icon.webp" alt="" class="policy-img" />
              </a>
              <a href="#" class="policy-link">XEM PHÒNG TRỰC TIẾP</a>
            </div>
            <div class="policy-item">
              <a href="#" class="policy-image">
                <img src="././public/images/trade-icon.webp" alt="" class="policy-img" />
              </a>
              <a href="#" class="policy-link">15 NGÀY ĐỔI TRẢ PHÒNG DỄ DÀNG</a>
            </div>
            <div class="policy-item">
              <a href="#" class="policy-image">
                <img src="././public/images/installment-icon.webp" alt="" class="policy-img" />
              </a>
              <a href="#" class="policy-link">HỖ TRỢ TRẢ GÓP SINH VIÊN 0%</a>
            </div>
          </div>
        </div>
      </div>
    </header>