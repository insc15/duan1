<section class=" justify-items-start py-9">
    <h1 class="font-normal text-2xl md:text-4xl justify-center">Tổng Quan Website</h1>
</section>
<section>
  <div class="flex flex-wrap">
    <div class="w-5/12 flex pr-3">
      <div class="flex flex-wrap -mx-2">
            <div class="p-2 w-1/2">
              <div class="px-4 py-6 items-center shadow-default rounded-lg flex">
                <span class="text-5xl material-symbols-rounded text-[#FE6A05]">handshake</span>
                <div class="ml-2">
                  <h3 class="text-center py-2 text-xl leading-none">Số lượng sản phẩm</h3>
                  <p class="text-[#FE6A05] text-2xl font-medium leading-none"><?php echo count_product() ?></p>
                </div>
              </div>
            </div>
            <div class="p-2 w-1/2">
              <div class="px-4 py-6 items-center shadow-default rounded-lg flex">
                <span class="text-5xl material-symbols-rounded text-[#28A745]">done_all</span>
                <div class="ml-2">
                  <h3 class="text-center py-2 text-xl leading-none">Đơn hoàn thành</h3>
                  <p class="text-[#28A745] text-2xl font-medium leading-none"><?php echo(count_order(date('Y-m-01', time()),date('Y-m-t', time()))) ?></p>
                </div>
              </div>
            </div>
            <div class="p-2 w-1/2">
              <div class="px-4 py-6 items-center shadow-default rounded-lg flex">
                <span class="text-5xl material-symbols-rounded text-[#ECA400]">attach_money</span>
                <div class="ml-2">
                  <h3 class="text-center py-2 text-xl leading-none">Doanh thu</h3>
                  <p class="text-[#ECA400] text-2xl font-medium leading-none"><?php echo count_product() ?></p>
                </div>
              </div>
            </div>
            <div class="p-2 w-1/2">
              <div class="px-4 py-6 items-center shadow-default rounded-lg flex">
                <span class="text-5xl material-symbols-rounded text-[#28A745]">done_all</span>
                <div class="ml-2">
                  <h3 class="text-center py-2 text-xl leading-none">Tổng số đơn hàng</h3>
                  <p class="text-[#28A745] text-2xl font-medium leading-none"><?php echo count_product() ?></p>
                </div>
              </div>
            </div>
        </div>
      </div>
  </div>


    <div class="w-full pl-3 flex  ">
        
        <div class=" text-center">Thống Kê Website Cara </div>
        <html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['thời trang ', 'Hours per Day'],
          ['Áo dài tay', 15],
          ['Áo ngắn tay', 9],
        ]);

        var options = {
          title: 'My website'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart" style="width: 900px; height: 500px;"></div>
  </body>
</html>

       
    </div>
    <script>
        
    </script>

</section>