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
            <b>กลุ่มชิ้นงาน</b>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="ใส่ชื่อกลุ่มชิ้นงาน....">
            <span class="input-group-btn">
              <button class="btn btn-info" type="button">ค้นหา</button>
            </span>
            <button  type="button" class="btn btn-info" data-toggle="modal" data-target="#addGroup">
                <i class="fa fa-plus-circle" aria-hidden="true"> เพิ่มกกลุ่มชิ้นงาน</i>
            </button>
          </div>
        </div>
      </div>
      <br>
      
      <div class="row">
        <div class="col-lg-12">
          <table class="table table-bordered" >
            <thead>
              <tr>
                <th class="th-icon">รหัสกลุ่มชิ้งาน</th>
                <th class="th-img-name">ชื่อกลุ่มชิ้นงาน</th>
                <th class="th-img">รูปภาพหลัก</th>
                <th class="th-icon">แก้ไข/ปรับปรุง</th>
                <th class="th-icon">ลบ</th>
              </tr>
            </thead>
            <tbody>
              <tr class="flex-container">
                <th class="flex-item" scope="row">1</th>
                <td class="flex-item" >พระนารายณ์ ผู้อวตารมาบนโลกเพื่อปราบยุคเข็ญ</td>
                <td class="flex-item" ><img src="../imgs/Art_01_0001.jpg" class="img-thumbnail" alt="..."></td>
                <td class="flex-item">
                  <button type="button" class="btn btn-info tableEdite-icon" data-toggle="modal" data-target="#editGroup">
                  <i class="fa fa-pencil" aria-hidden="true"></i>
                  </button>
                </td>
                <td class="flex-item">
                  <button type="button" class="btn btn-info tableEdite-icon" >
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
      <!-- Add Group Modal -->
      <div class="modal fade bd-example-modal-lg" id="addGroup" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">
                เพิ่มกลุ่มชิ้นงาน
              </h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">         
              <div id="imgsTable">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item active">กลุ่มชิ้นงาน</li>
                </ol>
              </div>
              <form>
                <div class="row">
                  <div class="col-lg-6">
                    <div class="card mb-3">
                      <div class="card-body">
                        <div class="form-group">
                          <label> 
                            <span class="nav-link-text">ชื่อกลุ่มชิ้นงาน</span>
                            <i class="fa fa-fw fa-asterisk icon-topic"></i>    
                          </label>
                          <input class="form-control" >
                        </div>
                        <div class="form-group">
                          <label>รายละเอียดกลุ่มชิ้นงาน</label>
                          <textarea class="form-control" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                          <label>เลือกรูปภาพหลัก</label>
                          <div class="input-group">
                              <input type="text" class="form-control btn-space" placeholder="เลือกรูปภาพหลัก" readonly>
                              <label class="input-group-btn">
                                  <span class="btn btn-info ">
                                      เลือกรูปหลัก <input type="file" style="display: none;" multiple>
                                  </span>
                              </label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="card mb-3">
                      <div class="card-body">
                        <div class="form-group">
                          <label> 
                            <span class="nav-link-text">ชื่อกลุ่มชิ้นงาน(ภาษาอังกฤษ)</span>
                            <i class="fa fa-fw fa-asterisk icon-topic"></i>    
                          </label>
                          <input class="form-control" >
                        </div>
                        <div class="form-group">
                          <label>รายละเอียดกลุ่มชิ้นงาน(ภาษาอังกฤษ)</label>
                          <textarea class="form-control" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                          <label>สถานนะ</label>
                          <select class="form-control">
                            <option>เลือกสถานะ</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
              <button type="button" class="btn btn-primary">บันทึกข้อมูล</button>
            </div>
          </div>
        </div>
      </div>
      <!-- Edite Group Modal -->
      <div class="modal fade bd-example-modal-lg" id="editGroup" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">
                แก้ไข/ปรับปรุง ข้อมูลกลุ่มชิ้นงาน
              </h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">         
              <div id="imgsTable">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item active">กลุ่มชิ้นงาน</li>
                </ol>
              </div>
              <form>
                <div class="row">
                  <div class="col-lg-6">
                    <div class="card mb-3">
                      <div class="card-body">
                        <div class="form-group">
                          <label> 
                            <span class="nav-link-text">ชื่อกลุ่มชิ้นงาน</span>
                            <i class="fa fa-fw fa-asterisk icon-topic"></i>    
                          </label>
                          <input class="form-control" >
                        </div>
                        <div class="form-group">
                          <label>รายละเอียดกลุ่มชิ้นงาน</label>
                          <textarea class="form-control" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                          <label>เปลี่ยนรูปภาพหลัก</label>
                          <div class="input-group">
                              <input type="text" class="form-control btn-space" placeholder="เลือกรูปภาพหลัก" readonly>
                              <label class="input-group-btn">
                                  <span class="btn btn-info ">
                                      เลือกรูปหลัก <input type="file" style="display: none;" multiple>
                                  </span>
                              </label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="card mb-3">
                      <div class="card-body">
                        <div class="form-group">
                          <label> 
                            <span class="nav-link-text">ชื่อกลุ่มชิ้นงาน(ภาษาอังกฤษ)</span>
                            <i class="fa fa-fw fa-asterisk icon-topic"></i>    
                          </label>
                          <input class="form-control" >
                        </div>
                        <div class="form-group">
                          <label>รายละเอียดกลุ่มชิ้นงาน(ภาษาอังกฤษ)</label>
                          <textarea class="form-control" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                          <label>สถานนะ</label>
                          <select class="form-control">
                            <option>เลือกสถานะ</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
              <button type="button" class="btn btn-primary">บันทึกข้อมูล</button>
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
  </div>
</body>

</html>
