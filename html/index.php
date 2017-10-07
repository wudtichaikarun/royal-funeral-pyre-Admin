<!DOCTYPE html>
<html lang="en">

<head>
  <?php include_once('./inc/linkTop.inc.php')?>
  <title>SB Admin - Start Bootstrap Template</title>
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <?php include_once('./inc/nav.inc.php'); ?>
  </nav>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item active">หน้าหลัก</li>
      </ol>
      <div class="row">
          <div class="col-lg-12">
          <div id="container"></div>
          </div>
      </div>
    </div>

    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>ลิขสิทธิ์ © Romantic</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">ออกจากระบบ</a>
          </div>
        </div>
      </div>
    </div>
    <?php include_once('./inc/linkButtom.inc.php') ?>
    <script>

    $('.example-p-1').on('click', function () {
      $.confirm({
        buttons: {
          ยกเลิก: {
              btnClass: 'btn-info',
              action: function(){}
          },
          ยืนยัน: {
              btnClass: 'btn-red any-other-class'
          }
        },
        content: 'ต้องการลบข้อมูลนี้',
        title: 'ยืนยันการทำรายการ',
        icon: 'fa fa-exclamation-triangle'
      });
    });
    </script>

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/data.js"></script>
<script src="https://code.highcharts.com/modules/drilldown.js"></script>
<script>
  // Create the chart
Highcharts.chart('container', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'กราฟแสดงชิ้นงานแยกตามหวดหมู่'
    },
    subtitle: {
        text: 'แสดงจำนวนชิ้นงานทั้งหมดเทียบเป็นเปอร์เซ็นต์'
    },
    xAxis: {
        type: 'category'
    },
    yAxis: {
        title: {
            text: 'จำนวนชิ้นงาน (ชิ้น)'
        }
    },
    legend: {
        enabled: false
    },
    plotOptions: {
        series: {
            borderWidth: 0,
            dataLabels: {
                enabled: true,
                format: '{point.y:.0f} ชิ้น'
            }
        }
    },

    tooltip: {
        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
        pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> of total<br/>'
    },

    series: [{
        name: 'ชื่อหมวดหมู่',
        colorByPoint: true,
        data: [{
            name: 'หมวดหมู่ที่ 1',
            y: 101,
            drilldown: 'หมวดหมู่ที่ 1'
        }, {
            name: 'หมวดหมู่ที่ 2',
            y: 24.03,
            drilldown: 'หมวดหมู่ที่ 2'
        }, {
            name: 'หมวดหมู่ที่ 3',
            y: 10.38,
            drilldown: 'หมวดหมู่ที่ 3'
        }, {
            name: 'หมวดหมู่ที่ 4',
            y: 4.77,
            drilldown: 'หมวดหมู่ที่ 4'
        }, {
            name: 'หมวดหมู่ที่ 5',
            y: 0.91,
            drilldown: 'หมวดหมู่ที่ 5'
        }, {
            name: 'หมวดหมู่ที่ 6',
            y: 3,
            drilldown: 'หมวดหมู่ที่ 6'
        }, {
            name: 'หมวดหมู่ที่ 5',
            y: 4.77,
            drilldown: 'หมวดหมู่ที่ 5'
        }, {
            name: 'หมวดหมู่ที่ 6',
            y: 0.91,
            drilldown: 'หมวดหมู่ที่ 6'
        }, {
            name: 'หมวดหมู่ที่ 7',
            y: 3,
            drilldown: 'หมวดหมู่ที่ 7'
        },{
            name: 'หมวดหมู่ที่ 8',
            y: 30,
            drilldown: 'หมวดหมู่ที่ 8'
        }]
    }],
    drilldown: {
        series: [{
            name: 'หมวดหมู่ที่ 1',
            id: 'หมวดหมู่ที่ 1',
            data: [
                [
                    'v11.0',
                    24.13
                ],
                [
                    'v8.0',
                    17.2
                ],
                [
                    'v9.0',
                    8.11
                ],
                [
                    'v10.0',
                    5.33
                ],
                [
                    'v6.0',
                    1.06
                ],
                [
                    'v7.0',
                    0.5
                ]
            ]
        }, {
            name: 'หมวดหมู่ที่ 2',
            id: 'หมวดหมู่ที่ 2',
            data: [
                [
                    'v40.0',
                    5
                ],
                [
                    'v41.0',
                    4.32
                ],
                [
                    'v42.0',
                    3.68
                ],
                [
                    'v39.0',
                    2.96
                ],
                [
                    'v36.0',
                    2.53
                ],
                [
                    'v43.0',
                    1.45
                ],
                [
                    'v31.0',
                    1.24
                ],
                [
                    'v35.0',
                    0.85
                ],
                [
                    'v38.0',
                    0.6
                ],
                [
                    'v32.0',
                    0.55
                ],
                [
                    'v37.0',
                    0.38
                ],
                [
                    'v33.0',
                    0.19
                ],
                [
                    'v34.0',
                    0.14
                ],
                [
                    'v30.0',
                    0.14
                ]
            ]
        }, {
            name: 'Firefox',
            id: 'Firefox',
            data: [
                [
                    'v35',
                    2.76
                ],
                [
                    'v36',
                    2.32
                ],
                [
                    'v37',
                    2.31
                ],
                [
                    'v34',
                    1.27
                ],
                [
                    'v38',
                    1.02
                ],
                [
                    'v31',
                    0.33
                ],
                [
                    'v33',
                    0.22
                ],
                [
                    'v32',
                    0.15
                ]
            ]
        }, {
            name: 'Safari',
            id: 'Safari',
            data: [
                [
                    'v8.0',
                    2.56
                ],
                [
                    'v7.1',
                    0.77
                ],
                [
                    'v5.1',
                    0.42
                ],
                [
                    'v5.0',
                    0.3
                ],
                [
                    'v6.1',
                    0.29
                ],
                [
                    'v7.0',
                    0.26
                ],
                [
                    'v6.2',
                    0.17
                ]
            ]
        }, {
            name: 'Opera',
            id: 'Opera',
            data: [
                [
                    'v12.x',
                    0.34
                ],
                [
                    'v28',
                    0.24
                ],
                [
                    'v27',
                    0.17
                ],
                [
                    'v29',
                    0.16
                ]
            ]
        }]
    }
});
</script>
  </div>
</body>

</html>
