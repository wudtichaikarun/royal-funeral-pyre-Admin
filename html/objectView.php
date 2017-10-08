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
      <div class="row objectSearch">
        <div class="col-lg-6">
          <div>
            <b>ชิ้นงาน</b>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="ใส่ชื่อชิ้นงาน....">
            <span class="input-group-btn">
              <button class="btn btn-info" type="button">ค้นหา</button>
            </span>
            <button  type="button" class="btn btn-info" onclick="addObject()" >
                <i class="fa fa-plus-circle" aria-hidden="true"> เพิ่มชิ้นงาน</i>
            </button>
          </div>
        </div>
      </div>
      <div class="row objectSearch">
        <div class="col-lg-6">
          <div class="form-group">
              <select class="form-control">
                <option>เลือกหมวดหมู่</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
            </span>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="form-group">
            <select class="form-control">
              <option>เลือกกลุ่มชิ้นงาน</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select>
          </div>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-lg-12">
          <table class="table table-bordered" >
            <thead>
              <tr>
                <th class="th-id th-id-config">รหัสชิ้นงาน</th>
                <th class="th-img-name">ชื่อชิ้นงาน</th>
                <th class="th-img">รูปภาพหลัก</th>
                <th class="th-icon">แก้ไข/ปรับปรุง</th>
                <th class="th-icon">ลบชิ้นงาน</th>
              </tr>
            </thead>
            <tbody>
              <tr class="flex-container">
                <th class="flex-item" scope="row">1</th>
                <td class="flex-item" >พระนารายณ์ ผู้อวตารมาบนโลกเพื่อปราบยุคเข็ญ</td>
                <td class="flex-item" ><img src="../imgs/Art_01_0001.jpg" class="img-thumbnail" alt="..."></td>
                <td class="flex-item">
                  <button type="button" class="btn btn-info tableEdite-icon" onclick="editObject()">
                  <i class="fa fa-pencil" aria-hidden="true"></i>
                  </button>
                </td>
                <td class="flex-item">
                  <button type="button" class="btn btn-info tableEdite-icon" onclick="">
                  <i class="fa fa-trash" aria-hidden="true"></i>
                  </button>
                </td>
              </tr>
              <tr class="flex-container">
                <th class="flex-item" scope="row">2</th>
                <td class="flex-item" >พระนารายณ์ ผู้อวตารมาบนโลกเพื่อปราบยุคเข็ญ</td>
                <td class="flex-item" ><img src="../imgs/Art_01_002.jpg" class="img-thumbnail" alt="..."></td>
                <td class="flex-item">
                  <button type="button" class="btn btn-info tableEdite-icon" onclick="">
                  <i class="fa fa-pencil" aria-hidden="true"></i>
                  </button>
                </td>
                <td class="flex-item">
                  <button type="button" class="btn btn-info tableEdite-icon" onclick="">
                  <i class="fa fa-trash" aria-hidden="true"></i>
                  </button>
                </td>
              </tr>
              <tr class="flex-container">
                <th class="flex-item" scope="row">3</th>
                <td class="flex-item" >พระนารายณ์ ผู้อวตารมาบนโลกเพื่อปราบยุคเข็ญ</td>
                <td class="flex-item" ><img src="../imgs/Art_01_003.jpg" class="img-thumbnail" alt="..."></td>
                <td class="flex-item">
                  <button type="button" class="btn btn-info tableEdite-icon" onclick="">
                  <i class="fa fa-pencil" aria-hidden="true"></i>
                  </button>
                </td>
                <td class="flex-item">
                  <button type="button" class="btn btn-info tableEdite-icon" onclick=")">
                  <i class="fa fa-trash" aria-hidden="true"></i>
                  </button>
                </td>
              </tr>
              <tr class="flex-container">
                <th class="flex-item" scope="row">1</th>
                <td class="flex-item" >พระนารายณ์ ผู้อวตารมาบนโลกเพื่อปราบยุคเข็ญ</td>
                <td class="flex-item" ><img src="../imgs/Art_01_004.jpg" class="img-thumbnail" alt="..."></td>
                <td class="flex-item">
                  <button type="button" class="btn btn-info tableEdite-icon" onclick="">
                  <i class="fa fa-pencil" aria-hidden="true"></i>
                  </button>
                </td>
                <td class="flex-item">
                  <button type="button" class="btn btn-info tableEdite-icon" onclick=")">
                  <i class="fa fa-trash" aria-hidden="true"></i>
                  </button>
                </td>
              </tr>
              <tr class="flex-container">
                <th class="flex-item" scope="row">2</th>
                <td class="flex-item" >พระนารายณ์ ผู้อวตารมาบนโลกเพื่อปราบยุคเข็ญ</td>
                <td class="flex-item" ><img src="../imgs/Art_02_001.jpg" class="img-thumbnail" alt="..."></td>
                <td class="flex-item">
                  <button type="button" class="btn btn-info tableEdite-icon" onclick="">
                  <i class="fa fa-pencil" aria-hidden="true"></i>
                  </button>
                </td>
                <td class="flex-item">
                  <button type="button" class="btn btn-info tableEdite-icon" onclick="">
                  <i class="fa fa-trash" aria-hidden="true"></i>
                  </button>
                </td>
              </tr>
              <tr class="flex-container">
                <th class="flex-item" scope="row">3</th>
                <td class="flex-item" >พระนารายณ์ ผู้อวตารมาบนโลกเพื่อปราบยุคเข็ญ</td>
                <td class="flex-item" ><img src="../imgs/Art_02_002.jpg" class="img-thumbnail" alt="..."></td>
                <td class="flex-item">
                  <button type="button" class="btn btn-info tableEdite-icon" onclick="">
                  <i class="fa fa-pencil" aria-hidden="true"></i>
                  </button>
                </td>
                <td class="flex-item">
                  <button type="button" class="btn btn-info tableEdite-icon" onclick="">
                  <i class="fa fa-trash" aria-hidden="true"></i>
                  </button>
                </td>
              </tr>
            </tbody>
          </table>
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

    function addObject() {
      window.location.assign("objectAdd.php");
    }

    function editObject() {
      window.location.assign("objectEdit.php");
    }

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
  </div>
</body>

</html>
