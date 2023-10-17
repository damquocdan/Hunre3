<?php
session_start();

include "../global.php";

include "../model/category.php";
include "../model/comment.php";
include "../model/order.php";
include "../model/product.php";
include "../model/stat.php";
include "../model/user.php";

$order_unfullfill = count(showAllOrderUnFullFill());
$order_delivered = count(showAllOrderDelivered());
$order_processing = count(showAllOrderProcessing());
$order_delivering = count(showAllOrderDelivering());
include "layout/header.php";

if (isset($_GET['act'])) {
  $act = $_GET['act'];
  switch ($act) {
    case "add_category":
      if (isset($_POST['btn_insert']) && ($_POST['btn_insert'])) {
        $cate_name = $_POST['cate_name'];
        addCategory($cate_name);
        $message = "Thêm thành công";
      }
      include "category/add.php";
      break;

    case "list_category":
      $list_category = listCategory();
      include "category/list.php";
      break;

    case "update_category":
      if (isset($_GET['id_cate']) && ($_GET['id_cate']) > 0) {
        $id_cate = $_GET['id_cate'];
        $category = getCategoryById($id_cate);
      }
      include "category/update.php";
      break;

    case "update_cate":
      if (isset($_POST['btn_update']) && ($_POST['btn_update'])) {
        $id_cate = $_POST['id_cate'];
        $cate_name = $_POST['cate_name'];
        updateCategory($id_cate, $cate_name);
        $message = "Cập nhật thành công";
      }
      $list_category = listCategory();
      include "category/list.php";
      break;

    case "delete_category":
      if (isset($_GET['id_cate']) && ($_GET['id_cate'] > 0)) {
        deleteCategory($_GET['id_cate']);
      }
      $list_category = listCategory();
      include "category/list.php";
      break;

    case "add_product":
      if (isset($_POST['btn_insert']) && ($_POST['btn_insert'])) {
        $pro_name = $_POST['pro_name'];
        $id_pro = $_POST['id_pro'];
        $image = $_FILES['image']['name'];

        $target_dir = $img_path_admin;
        $target_file = $target_dir . basename($_FILES['image']['name']);

        if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
          $thong_bao = "Đăng tải ảnh thành công";
        } else {
          $thong_bao = "Đăng tải ảnh lên thất bại !";
        }

        $price = $_POST['price'];
        $price_sale = $_POST['price_sale'];
        $special = $_POST['special'];
        // $color = $_POST['color'];
        $gender = $_POST['gender'];
        $description = htmlentities($_POST['description']);
        $id_cate = $_POST['id_cate'];
        $id_brand = $_POST['id_brand'];

        addProductAdmin($pro_name, $image, $price, $price_sale, $special, $gender, $description, $id_cate, $id_brand);
        $message = "Thêm phòng mới thành công";
      }

      if (isset($_POST['btn_insert_color']) && ($_POST['btn_insert_color'])) {
        $color = $_POST['color'];
        $id_pro = $_POST['id_pro'];

        addProductColor($color, $id_pro);
        $message_color = "Thêm màu phòng thành công";
      }

      if (isset($_POST['btn_insert_size']) && ($_POST['btn_insert_size'])) {
        $size = $_POST['size'];
        $id_pro = $_POST['id_pro'];
        addProductSize($size, $id_pro);
        $message_size = "Thêm kích thước phòng thành công";
      }
      $list_pro = listProductAdmin();
      $list_brand = listBrand();
      $list_cate = listCategory();
      include "product/add.php";
      break;

    case "list_product":
      $list_pro = listProductAdmin2('id_pro', 10);
      include "product/list.php";
      break;

    case "update_product":
      if (isset($_GET['id_pro']) && ($_GET['id_pro'] > 0)) {
        $product = getProductById($_GET['id_pro']);
      }
      $list_brand = listBrand();
      $list_cate = listCategory();
      include "product/update.php";
      break;

    case "update_pro":
      if (isset($_POST['btn_update']) && ($_POST['btn_update'])) {
        $pro_name = $_POST['pro_name'];
        $id_pro = $_POST['id_pro'];
        $image = $_FILES['image']['name'];

        $target_dir = $img_path_admin;
        $target_file = $target_dir . basename($_FILES['image']['name']);

        if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
          $thong_bao = "Đăng tải ảnh thành công";
        } else {
          $thong_bao = "Đăng tải ảnh lên thất bại !";
        }

        $price = $_POST['price'];
        $price_sale = $_POST['price_sale'];
        $special = $_POST['special'];
        // $color = $_POST['color'];
        $gender = $_POST['gender'];
        $description = htmlentities($_POST['description']);
        $id_cate = $_POST['id_cate'];
        $id_brand = $_POST['id_brand'];

        updateProductAdmin($id_pro, $pro_name, $image, $price, $price_sale, $special, $gender, $description, $id_cate, $id_brand);
        $message = "Cập nhật phòng thành công";
      }
      $list_pro = listProductAdmin2('id_pro', 10);
      include "product/list.php";
      break;

    case "delete_product":
      if (isset($_GET['id_pro']) && ($_GET['id_pro'] > 0)) {
        $product = deleteProductAdmin($_GET['id_pro']);
      }
      $list_pro = listProductAdmin2('id_pro', 10);
      include "product/list.php";
      break;

    case "list_pro_size":
      $list_pro_size = listProductsSize("id_pro", 10);
      include "product/product_size/list_size.php";
      break;

    case "pro_detail_size":
      if (isset($_GET['id_pro']) && ($_GET['id_pro'] > 0)) {
        $list_detail_pro_size = detailProductSize($_GET['id_pro']);
      }
      include "product/product_size/detail_pro_size.php";
      break;

    case "update_pro_size":
      if (isset($_GET['id_pro']) && ($_GET['id_pro'] > 0)) {
        $list_detail_pro_size = detailProductSize($_GET['id_pro']);
      }
      if (isset($_GET['id_pro_size']) && ($_GET['id_pro_size'] > 0)) {
        $product_size = getProductSize($_GET['id_pro_size']);
      }
      include "product/product_size/update_pro_size.php";
      break;

    case "update_size":
      if (isset($_POST['btn_update_size']) && ($_POST['btn_update_size'])) {
        $id_pro_size = $_POST['id_pro_size'];
        $size = $_POST['size'];
        $id_pro = $_POST['id_pro'];
        updateProductSize($id_pro_size, $size, $id_pro);
      }
      if (isset($_GET['id_pro']) && ($_GET['id_pro'] > 0)) {
        $list_detail_pro_size = detailProductSize($_GET['id_pro']);
      }
      include "product/product_size/detail_pro_size.php";
      break;

    case "delete_pro_size":
      if (isset($_GET['id_pro_size']) && ($_GET['id_pro_size'] > 0)) {
        $product = deleteProductSize($_GET['id_pro_size']);
      }
      if (isset($_GET['id_pro']) && ($_GET['id_pro'] > 0)) {
        $list_detail_pro_size = detailProductSize($_GET['id_pro']);
      }
      include "product/product_size/detail_pro_size.php";
      break;

    case "list_pro_color":
      $list_pro_color = listProductsColor("id_pro", 10);
      include "product/product_color/list_color.php";
      break;

    case "pro_detail_color":
      if (isset($_GET['id_pro']) && ($_GET['id_pro'] > 0)) {
        $list_detail_pro_color = detailProductColor($_GET['id_pro']);
      }
      include "product/product_color/detail_pro_color.php";
      break;

    case "update_pro_color":
      if (isset($_GET['id_pro']) && ($_GET['id_pro'] > 0)) {
        $list_detail_pro_color = detailProductColor($_GET['id_pro']);
      }
      if (isset($_GET['id_pro_color']) && ($_GET['id_pro_color'] > 0)) {
        $product_color = getProductColor($_GET['id_pro_color']);
      }
      include "product/product_color/update_pro_color.php";
      break;

    case "update_color":
      if (isset($_POST['btn_update_color']) && ($_POST['btn_update_color'])) {
        $id_pro_color = $_POST['id_pro_color'];
        $color = $_POST['color'];
        $id_pro = $_POST['id_pro'];
        updateProductColor($id_pro_color, $color, $id_pro);
      }
      if (isset($_GET['id_pro']) && ($_GET['id_pro'] > 0)) {
        $list_detail_pro_color = detailProductColor($_GET['id_pro']);
      }
      include "product/product_color/detail_pro_color.php";
      break;

    case "delete_pro_color":
      if (isset($_GET['id_pro_color']) && ($_GET['id_pro_color'] > 0)) {
        $product = deleteProductColor($_GET['id_pro_color']);
      }
      if (isset($_GET['id_pro']) && ($_GET['id_pro'] > 0)) {
        $list_detail_pro_color = detailProductColor($_GET['id_pro']);
      }
      include "product/product_color/detail_pro_color.php";
      break;

    case "add_pro_detail_img":
      if (isset($_POST['btn_insert_img']) && ($_POST['btn_insert_img'])) {
        $pro_detail_image = $_FILES['pro_detail_image']['name'];
        $id_pro = $_POST['id_pro'];

        $target_dir = $img_path_admin;
        $target_file = $target_dir . basename($_FILES['pro_detail_image']['name']);

        if (move_uploaded_file($_FILES['pro_detail_image']['tmp_name'], $target_file)) {
          $thong_bao = "Đăng tải ảnh thành công";
        } else {
          $thong_bao = "Đăng tải ảnh lên thất bại !";
        }

        addProductDetailImg($pro_detail_image, $id_pro);
        $message_detail_img = "Thêm ảnh thành công";
      }
      $list_pro = listProductAdmin();
      include "product/product_detail_img/add.php";
      break;

    case "list_detail_pro_img":
      $list_pro_detail_img = listProductsDetailImg("id_pro", 10);
      include "product/product_detail_img/list_detail_pro_img.php";
      break;

    case "pro_detail_images":
      if (isset($_GET['id_pro']) && ($_GET['id_pro'] > 0)) {
        $list_detail_pro_images = detailProductDetailImg($_GET['id_pro']);
      }
      include "product/product_detail_img/detail_pro_image.php";
      break;

    case "update_pro_detail_img":
      if (isset($_GET['id_pro']) && ($_GET['id_pro'] > 0)) {
        $list_detail_pro_images = detailProductDetailImg($_GET['id_pro']);
      }
      if (isset($_GET['id_pro_detail_img']) && ($_GET['id_pro_detail_img'] > 0)) {
        $product_detail_image = getProductDetailImg($_GET['id_pro_detail_img']);
      }
      include "product/product_detail_img/update_detail_pro_img.php";
      break;

    case "update_pro_detail_image":
      if (isset($_POST['btn_update_detail_img']) && ($_POST['btn_update_detail_img'])) {
        $id_pro_detail_img = $_POST['id_pro_detail_img'];
        $pro_detail_image = $_FILES['pro_detail_image']['name'];
        $id_pro = $_POST['id_pro'];

        $target_dir = $img_path_admin;
        $target_file = $target_dir . basename($_FILES['pro_detail_image']['name']);

        if (move_uploaded_file($_FILES['pro_detail_image']['tmp_name'], $target_file)) {
          $thong_bao = "Đăng tải ảnh thành công";
        } else {
          $thong_bao = "Đăng tải ảnh lên thất bại !";
        }

        updateProductDetailColor($id_pro_detail_img, $pro_detail_image, $id_pro);
      }
      if (isset($_GET['id_pro']) && ($_GET['id_pro'] > 0)) {
        $list_detail_pro_images = detailProductDetailImg($_GET['id_pro']);
      }
      include "product/product_detail_img/detail_pro_image.php";
      break;

    case "delete_pro_detail_img":
      if (isset($_GET['id_pro_detail_img']) && ($_GET['id_pro_detail_img'] > 0)) {
        $product = deleteProductDetailImg($_GET['id_pro_detail_img']);
      }
      if (isset($_GET['id_pro']) && ($_GET['id_pro'] > 0)) {
        $list_detail_pro_images = detailProductDetailImg($_GET['id_pro']);
      }
      include "product/product_detail_img/detail_pro_image.php";
      break;

    case "add_user":
      if (isset($_POST['btn_insert']) && ($_POST['btn_insert'])) {
        $id_user = $_POST['id_user'];
        $password = $_POST['password'];
        $image = $_FILES['image']['name'];

        $target_dir = $img_path_admin;
        $target_file = $target_dir . basename($_FILES['image']['name']);

        if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
          $message = "Đăng tải ảnh thành công";
        } else {
          $message = "Đăng tải ảnh lên thất bại !";
        }

        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $role = $_POST['role'];

        if (strlen($password) < 6) {
          $message = "Vui lòng nhập mật khẩu có từ 6 ký tự trở lên";
          $alert = "alert-danger";
        } else if (checkUserExist($id_user)) {
          $message = "Tên đăng nhập đã tồn tại !";
          $alert = "alert-danger";
        } else if (checkEmailExist($email)) {
          $message = "Email bạn nhập đã tồn tại !";
          $alert = "alert-danger";
        } else {
          addUserAdmin($id_user, $password, $image, $name, $phone, $email, $address, $role);
          $message = "Thêm tài khoản thành công";
          $alert = "alert-success";
        }
      }
      include "user/add.php";
      break;

    case "list_user":
      $list_user = listUser();
      include "user/list.php";
      break;

    case "update_user":
      if (isset($_GET['id_user']) && ($_GET['id_user'] > 0)) {
        $user = getUserById($_GET['id_user']);
      }
      include "user/update.php";
      break;

    case "update_user_account":
      if (isset($_POST['btn_update'])) {
        $id_user = $_POST['id_user'];
        $password = $_POST['password'];
        $image = $_FILES['image']['name'];

        $target_dir = $img_path_admin;
        $target_file = $target_dir . basename($_FILES['image']['name']);

        if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
          $message = "Đăng tải ảnh thành công";
        } else {
          $message = "Đăng tải ảnh lên thất bại !";
        }

        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $role = $_POST['role'];


        if (strlen($password) < 6) {
          $message = "Vui lòng nhập mật khẩu có từ 6 ký tự trở lên";
          $alert = "alert-danger";
          if (isset($_GET['id_user']) && ($_GET['id_user'] != "")) {
            $user = getUserById($id_user);
            include "user/update.php";
          }
        } else if (checkEmailExist2($email, $id_user) > 0) {
          $message = "Email bạn nhập đã tồn tại !";
          $alert = "alert-danger";
          if (isset($_GET['id_user']) && ($_GET['id_user'] != "")) {
            $user = getUserById($id_user);
            include "user/update.php";
          }
        } else {
          updateUserByAdmin($id_user, $password, $image, $name, $phone, $email, $address, $role);
          $list_user = listUser();
          include "user/list.php";
        }
      }
      break;

    case "delete_user":
      if (isset($_GET['id_user']) && ($_GET['id_user']) != "") {
        $user = deleteUser($_GET['id_user']);
      }
      $list_user = listUser();
      include "user/list.php";
      break;

    case "list_order":
      $list_order = showAllOrder(0);
      include "order/list.php";
      break;

    case "list_order_unfullfill":
      $list_order_unfullfill = showAllOrderUnFullFill();
      include "order/list_0.php";
      break;

    case "list_order_processing":
      $list_order_processing = showAllOrderProcessing();
      include "order/list_1.php";
      break;

    case "list_order_delivering":
      $list_order_delivering = showAllOrderDelivering();
      include "order/list_2.php";
      break;

    case "list_order_delivered":
      $list_order_delivered = showAllOrderDelivered();
      include "order/list_3.php";
      break;

    case "update_order":
      if (isset($_GET['id_order']) && ($_GET['id_order'] > 0)) {
        $order = getUserOrderById($_GET['id_order']);
        $order_total = getUserOrderTotalById($_GET['id_order']);
      }
      include "order/update.php";
      break;

    case "update_order_unfullfill":
      if (isset($_GET['id_order']) && ($_GET['id_order'] > 0)) {
        $order = getUserOrderById($_GET['id_order']);
        $order_total = getUserOrderTotalById($_GET['id_order']);
      }
      include "order/update_0.php";
      break;

    case "update_order_processing":
      if (isset($_GET['id_order']) && ($_GET['id_order'] > 0)) {
        $order = getUserOrderById($_GET['id_order']);
        $order_total = getUserOrderTotalById($_GET['id_order']);
      }
      include "order/update_1.php";
      break;

    case "update_order_delivering":
      if (isset($_GET['id_order']) && ($_GET['id_order'] > 0)) {
        $order = getUserOrderById($_GET['id_order']);
        $order_total = getUserOrderTotalById($_GET['id_order']);
      }
      include "order/update_2.php";
      break;

    case "update_order_delivered":
      if (isset($_GET['id_order']) && ($_GET['id_order'] > 0)) {
        $order = getUserOrderById($_GET['id_order']);
        $order_total = getUserOrderTotalById($_GET['id_order']);
      }
      include "order/update_3.php";
      break;

    case "update_order_unfullfill_total":
      if (isset($_POST['btn_update_order'])) {
        $id_order = $_POST['id_order'];
        $status = $_POST['status'];
        updateOrderAdmin($id_order, $status);
      }
      $list_order_unfullfill = showAllOrderUnFullFill();
      include "order/list_0.php";
      break;

    case "update_order_processing_total":
      if (isset($_POST['btn_update_order'])) {
        $id_order = $_POST['id_order'];
        $status = $_POST['status'];
        updateOrderAdmin($id_order, $status);
      }
      $list_order_processing = showAllOrderProcessing();
      include "order/list_1.php";
      break;

    case "update_order_delivering_total":
      if (isset($_POST['btn_update_order'])) {
        $id_order = $_POST['id_order'];
        $status = $_POST['status'];
        updateOrderAdmin($id_order, $status);
      }
      $list_order_delivering = showAllOrderDelivering();
      include "order/list_2.php";
      break;

    case "update_order_delivered_total":
      if (isset($_POST['btn_update_order'])) {
        $id_order = $_POST['id_order'];
        $status = $_POST['status'];
        updateOrderAdmin($id_order, $status);
      }
      $list_order_delivered = showAllOrderDelivered();
      include "order/list_3.php";
      break;

    case "update_order_total":
      if (isset($_POST['btn_update_order'])) {
        $id_order = $_POST['id_order'];
        $status = $_POST['status'];
        updateOrderAdmin($id_order, $status);
      }
      $list_order = showAllOrder(0);
      include "order/list.php";
      break;

    case "delete_order":
      if (isset($_GET['id_order']) && ($_GET['id_order'] > 0)) {
        $order = deleteOrderAdmin($_GET['id_order']);
      }
      $list_order = showAllOrder(0);
      include "order/list.php";
      break;

    case "delete_order_unfullfill":
      if (isset($_GET['id_order']) && ($_GET['id_order'] > 0)) {
        $order = deleteOrderAdmin($_GET['id_order']);
      }
      $list_order_unfullfill = showAllOrderUnFullFill();
      include "order/list_0.php";
      break;

    case "delete_order_processing":
      if (isset($_GET['id_order']) && ($_GET['id_order'] > 0)) {
        $order = deleteOrderAdmin($_GET['id_order']);
      }
      $list_order_processing = showAllOrderProcessing();
      include "order/list_1.php";
      break;

    case "delete_order_delivering":
      if (isset($_GET['id_order']) && ($_GET['id_order'] > 0)) {
        $order = deleteOrderAdmin($_GET['id_order']);
      }
      $list_order_delivering = showAllOrderDelivering();
      include "order/list_2.php";
      break;

    case "delete_order_delivered":
      if (isset($_GET['id_order']) && ($_GET['id_order'] > 0)) {
        $order = deleteOrderAdmin($_GET['id_order']);
      }
      $list_order_delivered = showAllOrderDelivered();
      include "order/list_3.php";
      break;

      // case "delete_order_total":
      //   if (isset($_GET['id_order_total']) && ($_GET['id_order_total'] > 0)) {
      //     $order = deleteOrderTotalAdmin($_GET['id_order_total']);
      //   }
      //   if (isset($_GET['id_order']) && ($_GET['id_order'] > 0)) {
      //     $order = getUserOrderById($_GET['id_order']);
      //     $order_total = getUserOrderTotalById($_GET['id_order']);
      //   }
      //   include "order/update.php";
      //   break;

      // case "delete_order_unfullfill_total":
      //   if (isset($_GET['id_order_total']) && ($_GET['id_order_total'] > 0)) {
      //     $order = deleteOrderTotalAdmin($_GET['id_order_total']);
      //   }
      //   if (isset($_GET['id_order']) && ($_GET['id_order'] > 0)) {
      //     $order = getUserOrderById($_GET['id_order']);
      //     $order_total = getUserOrderTotalById($_GET['id_order']);
      //   }
      //   include "order/update_0.php";
      //   break;

      // case "delete_order_processing_total":
      //   if (isset($_GET['id_order_total']) && ($_GET['id_order_total'] > 0)) {
      //     $order = deleteOrderTotalAdmin($_GET['id_order_total']);
      //   }
      //   if (isset($_GET['id_order']) && ($_GET['id_order'] > 0)) {
      //     $order = getUserOrderById($_GET['id_order']);
      //     $order_total = getUserOrderTotalById($_GET['id_order']);
      //   }
      //   include "order/update_1.php";
      //   break;

      // case "delete_order_delivering_total":
      //   if (isset($_GET['id_order_total']) && ($_GET['id_order_total'] > 0)) {
      //     $order = deleteOrderTotalAdmin($_GET['id_order_total']);
      //   }
      //   if (isset($_GET['id_order']) && ($_GET['id_order'] > 0)) {
      //     $order = getUserOrderById($_GET['id_order']);
      //     $order_total = getUserOrderTotalById($_GET['id_order']);
      //   }
      //   include "order/update_2.php";
      //   break;

      // case "delete_order_delivered_total":
      //   if (isset($_GET['id_order_total']) && ($_GET['id_order_total'] > 0)) {
      //     $order = deleteOrderTotalAdmin($_GET['id_order_total']);
      //   }
      //   if (isset($_GET['id_order']) && ($_GET['id_order'] > 0)) {
      //     $order = getUserOrderById($_GET['id_order']);
      //     $order_total = getUserOrderTotalById($_GET['id_order']);
      //   }
      //   include "order/update_3.php";
      //   break;

    case "comment":
      $list_comment = listCommentAdmin();
      include "comment/list.php";
      break;

    case "detail_comment":
      if (isset($_GET['id_pro']) && ($_GET['id_pro'] > 0)) {
        $list_detail_comment = getCommentByIdPro($_GET['id_pro']);
      }
      include "comment/detail_comment.php";
      break;

    case "delete_comment":
      if (isset($_GET['id_comment']) && ($_GET['id_comment']) > 0) {
        $comment = deleteComment($_GET['id_comment']);
      }
      if (isset($_GET['id_pro']) && ($_GET['id_pro'] > 0)) {
        $list_detail_comment = getCommentByIdPro($_GET['id_pro']);
      }
      include "comment/detail_comment.php";
      break;

    case "stat":
      $list_stat = listStatProduct();
      include "stat/list.php";
      break;

    case "chart":
      include "stat/chart_order.php";
      break;

    default:
      $category = count(listCategory());
      $product = count(listProductAdmin());
      $user = count(listUser());
      $comment = count(listComment());
      $order = count(showAllOrder(0));
      include "layout/home.php";
      break;
  }
} else {
  $category = count(listCategory());
  $product = count(listProductAdmin());
  $user = count(listUser());
  $comment = count(listComment());
  $order = count(showAllOrder(0));
  include "layout/home.php";
}

include "layout/footer.php";
