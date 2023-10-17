<script src="../public/js/jquery-3.6.0.min.js"></script>
<script src="../public/js/bootstrap.bundle.min.js"></script>
<script src="../public/js/main.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
<script>
  $(document).ready(function() {
    thongke();
    var char = new Morris.Area({
      element: 'chart',

      xkey: 'date',

      ykeys: ['date', 'order', 'sales', 'quantity'],

      labels: ['Ngày', 'Đơn thuê', 'Doanh thu', 'Số lượng phòng được đặt']
    });

    $('#select-date').change(function() {
      var thoigian = $(this).val();
      if (thoigian == '7ngay') {
        var text = '7 ngày qua';
      } else if (thoigian == '28ngay') {
        var text = '28 ngày qua';
      } else if (thoigian == '90ngay') {
        var text = '90 ngày qua';
      } else {
        var text = '365 ngày qua';
      }

      $.ajax({
        url: "../model/statAdmin.php",
        method: "GET",
        dataType: "JSON",
        data: {
          thoigian: thoigian
        },
        success: function(data) {
          char.setData(data);
          $('#text-date').text(text);
        }
      });
    })

    function thongke() {
      var text = '365 ngày qua';
      $('#text-date').text(text);
      $.ajax({
        url: "../model/statAdmin.php",
        method: "GET",
        dataType: "JSON",
        success: function(data) {
          char.setData(data);
          $('#text-date').text(text);
        }
      });
    }

  });
</script>
</body>

</html>