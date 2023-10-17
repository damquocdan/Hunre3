<section class="product-info">
  <div class="container">
    <div class="product-info-tab">
      <button class="product-info-btn" onclick="openTabProInfo(event, 'description')" id="defaultBtnOpen">
        Thông tin phòng
      </button>
      <button class="product-info-btn" onclick="openTabProInfo(event, 'returnPolicy')">
        Chính sách đổi trả
      </button>
      <button class="product-info-btn" onclick="openTabProInfo(event, 'terms')">
        ĐIỀU KHOẢN & ĐIỀU KIỆN
      </button>
      <button class="product-info-btn" onclick="openTabProInfo(event, 'review')">
        Review (<?= $countComment ?>)
      </button>
    </div>
    <div class="product-info-content" id="description">
      <div class="product-info-description product-info-content-text">
        <!-- <h3 class="heading-medium product-info-title">
            GIÀY THỜI TRANG UNISEX FILA ROCKBLUNT
          </h3>
          <img src="././public/images/fila-desc.webp" alt="" />
          <p>
            Sản phẩm thuộc Bộ Sưu Tập Fila Explorer. Phần thân giày được
            thiết kế với chất liệu tối ưu hóa độ nhạy với đường mòn khi di
            chuyển với logo EXPL, đồng thời cung cấp sự bền bỉ khi hoạt
            động.
          </p>
          <h3 class="heading-medium product-info-title-left">Thông số</h3>
          <ul>
            <li>Thân trên: 56.2% tổng hợp / 43.8% dệt may</li>
            <li>Đế giày: EVA / cao su</li>
          </ul> -->

        <!-- <h3 class="heading-medium product-info-title-left">
GIÀY ĐI BỘ ĐƯỜNG DÀI NỮ COLUMBIA PEAKFREAK™ II OUTDRY™
          </h3>
           <p>
Khi trời mưa hoặc khi địa hình có tuyết tan mềm, đôi giày đi bộ của phụ nữ này cung cấp khả năng bảo vệ chống chịu thời tiết đặc biệt và có kết cấu thoáng khí. Công nghệ khóa lưới và hệ thống dây giữa bàn chân liền mạch giúp đôi giày này trở nên hoàn hảo cho những chuyến phiêu lưu cả ngày. Dù ướt hay khô, cỏ hay sỏi, đế ngoài được thiết kế giúp bạn vững vàng trên mọi địa hình.
        </p>
          <h3 class="heading-medium product-info-title-left">THÔNG SỐ</h3>
          <ul>
             <li>Phần trên (upper): NAVIC FIT SYSTEM ™ mang đến khả năng cố định chân giữa tự nhiên. Công nghệ OutDry™ không thấm nước, kết cấu thoáng khí. Lưới liền mạch mang lại sự vừa vặn và hỗ trợ đặc biệt.</li>
             <li>Đế giữa: đế giữa bằng bọt mật độ đơn Techlite+™ mang lại trải nghiệm đệm dưới bàn chân nhạy bén đồng thời mang lại sự thoải mái và ổn định vượt trội trên đường mòn.</li>
             <li>Đế ngoài: đế ngoài Adapt Trax™ cung cấp lực kéo vượt trội dù trong điều kiện khô hay ướt.</li>
             <li>Lưu ý: dây buộc và khóa kéo được tích hợp trong giày dép của Columbia Sportswear Company không chống thấm nước.</li>
          </ul> -->
        <p>
          <?= htmlspecialchars_decode($description) ?>
        </p>
      </div>
    </div>

    <div class="product-info-content" id="returnPolicy">
      <div class="product-info-policy product-info-content-text">
        <p>QUY ĐỊNH ĐỔI TRẢ PHÒNG TẠI <span class="product-info-policy-bold">THEHOUSE Việt Nam</span></p>
        <p class="product-info-policy-red product-info-policy-red"><span class="product-info-policy-italic">Lưu ý:</span> Trong thời gian diễn ra chương trình khuyến mãi, thời gian đặt phòng có thể kéo dài hơn so với dự kiến. Rất mong Quý khách thông cảm cho sự bất tiện này.</p>
        <p><span class="product-info-policy-bold">Phòng áp dụng:</span> Tất cả phòng được giao dịch tại Website ShoeLike.</p>
        <h3 class="heading-medium product-info-title-left">Phòng không áp dụng:</h3>
        <ul>
          <li>Không áp dụng cho các phòng đặt trực tiếp tại hệ thống văn phòng của TheHouse</li>
        </ul>
        <p><span class="product-info-policy-bold">Thời gian đổi trả phòng:</span> Trong vòng <span class="product-info-policy-bold">15 ngày (đối với phòng nguyên giá)</span> và <span class="product-info-policy-bold">05 ngày (đối với phòng khuyến mãi)</span> kể từ ngày khách hàng nhận được phòng cho đến khi TheHouse nhận lại được phòng 
          Tham khảo thêm thông tin tại <a href="#" class="product-info-policy-italic">Chính sách đổi trả phòng</a></p>
      </div>
    </div>

    <div class="product-info-content" id="terms">
      <div class="product-info-term product-info-term-text">
        <p>Quý khách vui lòng đọc kỹ <span class="product-info-policy-bold">Điều khoản và điều kiện đặt phòng sau:</span></p>
        <ul>
          <li>TheHouse
            có nhiều loại phòng được hiển thị trên trang Web theo từng thời điểm.</li>
          <li>Các khác biệt nhỏ về màu sắc và biến thể khác trên phòng có thể xảy ra do kết quả của quy trình thu nhận ảnh, công nghệ hiển thị và các lý do kỹ thuật khác. TheHouse
            không chịu trách nhiệm cho các biến thể và sai khác này.</li>
        </ul>
        <p>Trường hợp gặp trục trặc trong quá trình đặt phòng, khách hàng vui lòng liên hệ bộ phận chăm sóc khách hàng qua các hình thức sau để được hướng dẫn xử lý.</p>
        <ul>
          <li>Tổng đài: 0368 966 992 (từ 09h00 đến 18h00 hàng ngày)</li>
          <li>Email Bộ phận Chăm Sóc Khách Hàng (Offline + Online): <span class="product-info-policy-bold">ce@THeHouse
              .com.vn</span></li>
        </ul>
      </div>
    </div>

    <?php
    include "comment/comment.php";
    ?>
  </div>
</section>