<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>SB Admin - Start Bootstrap Template</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
  <!-- Google font-->
  <link href="https://fonts.googleapis.com/css?family=Maitree" rel="stylesheet">
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
        <li class="breadcrumb-item">
          <a href="#">ชิ้นงาน</a>
        </li>
        <li class="breadcrumb-item active">เพิ่มชิ้นงาน</li>
      </ol>
      <!-- <div class="line-separator"></div>
      <br> -->
      <form role="form">
        <div class="row">   
          <div class="col-lg-6">
            <div class="card mb-3">
              <div class="card-body">
                <div class="form-group">
                  <label> 
                    <span class="nav-link-text">หมวดหมู่</span>
                    <i class="fa fa-fw fa-asterisk icon-topic"></i>    
                  </label>
                  <select class="form-control">
                    <option>เลือกหมวดหมู่</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                </div>
                <div class="form-group">
                  <label> 
                    <span class="nav-link-text">ชื่อชิ้นงาน</span>
                    <i class="fa fa-fw fa-asterisk icon-topic"></i>    
                  </label>
                  <input class="form-control" >
                </div>
                <div class="form-group">
                  <label>ขนาดชิ้นงาน</label>
                  <input class="form-control" >
                </div>
                <div class="form-group">
                  <label>รายละเอียดชิ้นงาน</label>
                  <textarea class="form-control" rows="3"></textarea>
                </div>
                <div class="form-group">
                  <label>แนวคิดการพัฒนา</label>
                  <textarea class="form-control" rows="3"></textarea>
                </div>
                <div class="form-group">
                  <label>สถานที่เก็บปัจจุบัน</label>
                  <textarea class="form-control" rows="3"></textarea>
                </div>
              </div>
            </div>
            <!-- /.card --> 
          </div>
          <!-- /.col-lg-6 -->                       

          <div class="col-lg-6">
            <div class="card mb-3">
              <div class="card-body">
                <div class="form-group">
                  <label> 
                    <span class="nav-link-text">กลุ่มชิ้นงาน</span>
                    <i class="fa fa-fw fa-asterisk icon-topic"></i>    
                  </label>
                  <select class="form-control">
                    <option>เลือกกลุ่มชิ้นงาน</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                </div>
                <div class="form-group">
                  <label> 
                    <span class="nav-link-text">ชื่อชิ้นงาน (ภาษาอังกฤษ)</span>
                    <i class="fa fa-fw fa-asterisk icon-topic"></i>    
                  </label>
                  <input class="form-control" >
                </div>
                <div class="form-group">
                  <label>ขนาดชิ้นงาน (ภาษาอังกฤษ)</label>
                  <input class="form-control" >
                </div>
                <div class="form-group">
                  <label>รายละเอียดชิ้นงาน (ภาษาอังกฤษ)</label>
                  <textarea class="form-control" rows="3"></textarea>
                </div>
                <div class="form-group">
                  <label>แนวคิดการพัฒนา (ภาษาอังกฤษ)</label>
                  <textarea class="form-control" rows="3"></textarea>
                </div>
                <div class="form-group">
                  <label>สถานที่เก็บปัจจุบัน (ภาษาอังกฤษ)</label>
                  <textarea class="form-control" rows="3"></textarea>
                </div>
              </div>
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col-lg-6 -->

          <div class="col-lg-6">
            <div class="card mb-3">
              <div class="card-body">
                <div class="form-group">
                  <label>เป็นชิ้นงานที่สร้างขึ้นใหม่หรือไม่ ?</label><br>
                  &nbsp;
                  <label class="radio-inline">
                    <input type="radio" name="object-type" id="object-type1" value="option1" checked> สร้างขึ้นใหม่ 
                  </label>
                  &nbsp;&nbsp;
                  <label class="radio-inline">
                    <input type="radio" name="object-type" id="object-type2" value="option2"> บูรณะของเก่า
                  </label>
                </div>
                <div class="line-separator"></div>
                <br>
                <div class="form-group" id="artists">
                  <label>ศิลปินที่สร้าง</label>
                  <div class="input-group">
                    <select class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                      <option>เลือก</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
                    <button type="button" class="btn btn-info" onclick="addArtist(this)">
                      <i class="fa fa-plus-circle" aria-hidden="true"></i>
                    </button>
                    <button style="display:none" onclick="remove(this)" type="button" class="btn btn-info ">
                      <i class="fa fa-minus-circle" aria-hidden="true"></i>
                    </button>
                  </div>
                </div>
                <div class="form-group">
                  <label>รูปแบบศิลปกรรม</label>
                  <select class="form-control">
                    <option>เลือกรูปแบบศิลปกรรม</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>วันที่สร้างชิ้นงาน</label>
                  <input type='date' class="form-control" />
                </div> 
              </div> 
            </div>
            <!-- /.card --> 
          </div>
          <!-- /.col-lg-6 --> 
          <div class="col-lg-6">
            <div class="card mb-3">
              <div class="card-body">
                <div class="form-group">
                  <label>ประเภทของรูปภาพนำเสนอแบบ 360 องศา</label><br>
                  &nbsp;
                  <label class="radio-inline">
                    <input type="radio" name="radio-type-img" id="radio-type-img1" value="option1" checked> รูปภาพ
                  </label>
                  &nbsp;&nbsp;
                  <label class="radio-inline">
                    <input type="radio" name="radio-type-img" id="radio-type-img2" value="option2"> โมเดลสามมิติ
                  </label>
                </div>
                <div class="line-separator"></div>
                <br>
                <div class="form-group">
                  <label>รูปภาพหลักของชิ้นงาน</label>
                  <div class="input-group">
                      <input type="text" class="form-control btn-space" placeholder="เลือกรูปภาพหลัก" readonly>
                      <label class="input-group-btn">
                          <span class="btn btn-info ">
                              เลือกรูปหลัก <input type="file" style="display: none;" multiple>
                          </span>
                      </label>
                  </div>
                </div>
                <div class="form-group" id="otherImg">
                  <label>รูปภาพอื่นๆ</label>
                  <div class="input-group">
                    <input class="form-control btn-space otherImgInput" type="text" placeholder="เลือกรูปภาพอื่นๆ" readonly>
                    <label class="input-group-btn">
                      <span class="btn btn-info">
                        เลือกรูปอื่นๆ <input type="file" style="display:none;" multiple>
                      </span>
                    </label>
                    <button onclick="addImg(this)" type="button" class="btn btn-info">
                        <i class="fa fa-plus-circle" aria-hidden="true"></i>
                    </button>
                    <button style="display:none" onclick="remove(this)" type="button" class="btn btn-info ">
                        <i class="fa fa-minus-circle" aria-hidden="true"></i>
                    </button>
                  </div>
                </div>
                <div class="form-group" id="videos">
                  <label>วิดีโอ</label>
                  <div class="input-group">
                    <input class="form-control btn-space videoInput" type="text" placeholder="เลือกวิดีโอ" readonly>
                    <label class="input-group-btn">
                      <span class="btn btn-info">
                          เลือกวิดีโอ <input type="file" style="display: none;" multiple>
                      </span>
                    </label>
                    <button type="button" class="btn btn-info" onclick="addVideo(this)">
                      <i class="fa fa-plus-circle" aria-hidden="true"></i>
                    </button>
                    <button style="display:none" onclick="remove(this)" type="button" class="btn btn-info">
                        <i class="fa fa-minus-circle" aria-hidden="true"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.card -->  
          </div>
          <!-- /.col-lg-6 -->  
        </div> 
        <!-- /.row --> 

        <div class="line-separator"></div>
        <div class="col-lg-12 btn-form-submit">
          <button type="submit" class="btn btn-primary">บันทึกข้อมูล</button>
        </div>
        <!-- /.col-lg-12 -->
      </form>
    <div>
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
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!--  jquery-confirm-->
    <link rel="stylesheet" type="text/css" href="vendor/jquery/jquery-confirm.css"/>
    <script type="text/javascript" src="vendor/jquery/jquery-confirm.js"></script>
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

    // Add artis
    function addArtist (btn) {
      var x = $(btn).parent().clone();
      $('#artists').append(x);
      $(btn).hide();
      $(btn).next().show();  
    }

    // Add images
    function addImg (btn){
      var x = $(btn).parent().clone();
      $('.otherImgInput', x).val('');
      $('#otherImg').append(x);
      $(btn).hide();
      $(btn).next().show();   
    }

    // Add images
    function addVideo (btn) {
      var x = $(btn).parent().clone();
      $('.videoInput', x).val('');
      $('#videos').append(x);
      $(btn).hide();
      $(btn).next().show();   
    }

    // Remove image, video
    function remove( btn) {
      $(btn).parent().remove();
    }

    // File 
    $(function() {
        // We can attach the `fileselect` event to all file inputs on the page
        $(document).on('change', ':file', function() {
            var input = $(this),
                numFiles = input.get(0).files ? input.get(0).files.length : 1,
                label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
            input.trigger('fileselect', [numFiles, label]);
        });

        // We can watch for our custom `fileselect` event like this
        $(document).ready( function() {
          $(':file').on('fileselect', function(event, numFiles, label) {
              var input = $(this).parents('.input-group').find(':text'),
                  log = numFiles > 1 ? numFiles + ' files selected' : label;
              if( input.length ) {
                  input.val(log);
              } else {
                  if( log ) alert(log);
              }
          });
        });
        
    });
    </script>
  </div>
</body>

</html>
