<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>Quản trị web - ShoeLike</title>
  <!-- Bootstrap -->
  <link rel="stylesheet" href="../../public/css/bootstrap.min.css" type="text/css" />
  <!-- Font awesome -->
  <link rel="stylesheet" href="../../public/css/all.min.css" type="text/css" />
  <!-- Slick slider -->
  <!-- <link rel="stylesheet" href="../../public/css/slick.css" type="text/css">
  <link rel="stylesheet" href="../../public/css/slick-theme.css" type="text/css"> -->
  <link rel="stylesheet" href="../../public/css/dashboard.css" type="text/css" />
  <link rel="stylesheet" href="../../public/css/custom.css" type="text/css" />
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
</head>

<body>
  <!-- Page Preloader -->
  <div id="preloader">
    <div class="loader"></div>
  </div>

  <div class="wrapper">
    <nav id="sidebar">
      <div class="sidebar-header">
        <a href="index.php">
          <img src="../public/images/logo.png" style="width: 100px; height: 30px;" alt="logo" class="img-fluid logo">
        </a>
      </div>
      <ul class="list-unstyled components text-secondary">
        <li>
          <a href="../index.php"><i class="fas fa-store"></i>Xem trang web</a>
        </li>
        <li>
          <a href="index.php"><i class="fas fa-home"></i>Trang chủ</a>
        </li>

        <!-- Danh mục -->
        <li>
          <a href="#categories" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle no-caret-down"><i class="fas fa-list-alt"></i>Danh mục
            <i class="fas fa-angle-right float-xl-right"></i>
          </a>
          <ul class="collapse list-unstyled" id="categories">
            <li>
              <a href="index.php?act=add_category">
                <i class="fas fa-plus"></i>Thêm Danh Mục</a>
            </li>
            <li>
              <a href="index.php?act=list_category">
                <i class="fas fa-list-ul"></i>Danh sách danh mục</a>
            </li>
          </ul>
        </li>

        <!-- Sản phẩm -->
        <li>
          <a href="#products" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle no-caret-down"><i class="fas fa-table"></i>Sản phẩm
            <i class="fas fa-angle-right float-xl-right"></i>
          </a>
          <ul class="collapse list-unstyled" id="products">
            <li>
              <a href="index.php?act=add_product"><i class="fas fa-plus"></i>Thêm Phòng</a>
            </li>
            <li>
              <a href="index.php?act=list_product">
                <i class="fas fa-list-ul"></i>Danh sách phòng</a>
            </li>
            <li>
              <a href="index.php?act=list_pro_size">
                <i class="fas fa-list-ul"></i>Danh sách kích thước phòng</a>
            </li>
            <li>
              <a href="index.php?act=list_pro_color">
                <i class="fas fa-list-ul"></i>Danh sách màu phòng</a>
            </li>
          </ul>
          <ul class="collapse list-unstyled" id="products">
            <li>
              <a href="index.php?act=add_pro_detail_img"><i class="fas fa-plus"></i>Thêm ảnh phòng</a>
            </li>
            <li>
              <a href="index.php?act=list_detail_pro_img">
                <i class="fas fa-list-ul"></i>Danh sách ảnh phòng</a>
            </li>
          </ul>
        </li>

        <!-- Khách hàng -->
        <li>
          <a href="#accounts" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle no-caret-down">
            <i class="fas fa-user-friends"></i>Khách hàng
            <i class="fas fa-angle-right float-xl-right"></i>
          </a>
          <ul class="collapse list-unstyled" id="accounts">
            <li>
              <a href="index.php?act=add_user"><i class="fas fa-plus"></i>Thêm khách hàng</a>
            </li>
            <li>
              <a href="index.php?act=list_user">
                <i class="fas fa-list-ul"></i>Danh sách khách hàng</a>
            </li>
          </ul>
        </li>

        <li>
          <a href="index.php?act=comment"> <i class="fas fa-comments"></i>Bình luận</a>
        </li>

        <li>
          <a href="#stat" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle no-caret-down"><i class="fas fa-list-alt"></i>Thống kê
            <i class="fas fa-angle-right float-xl-right"></i>
          </a>
          <ul class="collapse list-unstyled" id="stat">
            <li>
              <a href="index.php?act=stat"><i class="fas fa-shipping-fast"></i></i>Thống kê phòng</a>
            </li>
            <li>
              <a href="./stat/chart_order.php"><i class="fas fa-shipping-fast"></i></i>Thống kê doanh thu</a>
            </li>
          </ul>
        </li>

        <li>
          <a href="#order" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle no-caret-down"><i class="fas fa-list-alt"></i>Đơn hàng
            <i class="fas fa-angle-right float-xl-right"></i>
          </a>
          <ul class="collapse list-unstyled" id="order">
            <li>
              <a href="index.php?act=list_order"><i class="fas fa-shipping-fast"></i></i>Danh sách đơn thuê</a>
            </li>
            <li>
              <a href="index.php?act=list_order_unfullfill"><i class="fas fa-shipping-fast"></i></i>Danh sách đơn thuê chưa thực hiện (<?= $order_unfullfill ?>)</a>
            </li>
            <li>
              <a href="index.php?act=list_order_delivered"><i class="fas fa-shipping-fast"></i></i>Danh sách đơn thuê đã thực hiện thành công (<?= $order_delivered ?>)</a>
            </li>
          </ul>
        </li>

        <li>
          <a href="settings.html"><i class="fas fa-cog"></i>Cài đặt</a>
        </li>
      </ul>
    </nav>

    <div id="body" class="active">
      <!-- navbar navigation component -->
      <nav class="navbar navbar-expand-lg navbar-white bg-white">
        <button type="button" id="sidebarCollapse" class="btn btn-light">
          <i class="fas fa-bars"></i><span></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="nav navbar-nav ml-auto">
            <li class="nav-item dropdown">
              <div class="nav-dropdown">
                <a href="#" id="nav2" class="nav-item nav-link dropdown-toggle text-secondary" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="fas fa-user"></i> <span>Admin</span>
                  <i style="font-size: 0.8em" class="fas fa-caret-down"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-end nav-link-menu">
                  <ul class="nav-list">
                    <li>
                      <a href="" class="dropdown-item"><i class="fas fa-address-card"></i> Hồ sơ</a>
                    </li>
                    <li>
                      <a href="" class="dropdown-item"><i class="fas fa-envelope"></i> Thông báo</a>
                    </li>
                    <li>
                      <a href="" class="dropdown-item"><i class="fas fa-cog"></i> Cài đặt</a>
                    </li>
                    <div class="dropdown-divider"></div>
                    <li>
                      <a href="" class="dropdown-item"><i class="fas fa-sign-out-alt"></i> Đăng xuất</a>
                    </li>
                  </ul>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </nav>