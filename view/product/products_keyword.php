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
			<img src="././public/images/product-banner.webp" alt="" class="products-banner-image" />
		</div>
	</section>

	<section class="products-filter">
		<div class="products-container">
			<div class="filter">
				<h3 class="filter-title"></h3>
				<?php
				// include "products_filter.php";
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
			<div class="products-list">
				<?php
				$param = "";
				foreach ($list_pro_keyword as $lpkw) {
					extract($lpkw);
					$link_product = "index.php?act=product_detail&id_pro=" . $id_pro;
					$product_img = $img_path_view . $image;
					$percent_discount = number_format(($price_sale - $price) / $price * 100);
					// $param = "product_keyword&keyword=" . $_SESSION['keyword'] . "&";
				?>
					<div class="products-item product-item">
						<div class="products-images product-image">
							<div class="product-image-box">
								<a href="<?= $link_product ?>" class="products-link">
									<img src="<?= $product_img ?>" alt="" />
								</a>
							</div>

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
				<?php
				}
				?>
			</div>
			<div class="products-pages">
				<?php
				// include "products_pages.php";
				?>
				<!-- <a href="index.php?act=products&page=2" class="products-pages-item">2</a>
        <a href="index.php?act=products&page=3" class="products-pages-item">3</a>
        <a href="index.php?act=products&page=4" class="products-pages-item">4</a> -->
			</div>
		</article>
	</section>
</main>