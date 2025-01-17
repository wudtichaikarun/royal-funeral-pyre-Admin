<a class="navbar-brand" href="index.html">ระบบจัดการฐานข้อมูลพระเมรุมาศ</a>
<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarResponsive">
  <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="หน้าหลัก">
      <a class="nav-link" href="index.php">
        <i class="fa fa-fw fa-bar-chart-o"></i>
        <span class="nav-link-text">หน้าหลัก</span>
      </a>
    </li>

    <!-- <li class="nav-item" data-toggle="tooltip" data-placement="right" title="ชิ้นงาน">
      <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
      <i class="fa fa-table" aria-hidden="true"></i>
        <span class="nav-link-text">ชิ้นงาน</span>
      </a>
      <ul class="sidenav-second-level collapse" id="collapseComponents">
      <li>
          <a href="objectView.php">จัดการชิ้นงาน</a>
        </li>  
      <li>
          <a href="objectAdd.php">เพิ่มชิ้นงาน</a>
        </li>
      </ul>
    </li> -->
    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="กลุ่มชิ้นงาน">
      <a class="nav-link" href="objectView.php">
        <i class="fa fa-fw fa-table"></i>
        <span class="nav-link-text">จัดการชิ้นงาน</span>
      </a>
    </li>

    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="กลุ่มชิ้นงาน">
      <a class="nav-link" href="groupView.php">
        <i class="fa fa-fw fa-object-group"></i>
        <span class="nav-link-text">กลุ่มชิ้นงาน</span>
      </a>
    </li>

    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="หมวดหมู่">
      <a class="nav-link" href="categoryView.php">
        <i class="fa fa-fw fa-sitemap"></i>
        <span class="nav-link-text">หมวดหมู่</span>
      </a>
    </li>

    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="ศิลปิน">
      <a class="nav-link" href="artistView.php">
        <i class="fa fa-fw fa-group"></i>
        <span class="nav-link-text">ศิลปิน</span>
      </a>
    </li>

    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="ความเชี่ยวชาญ">
      <a class="nav-link" href="skillView.php">
        <i class="fa fa-fw fa-paint-brush"></i>
        <span class="nav-link-text">ความเชี่ยวชาญ</span>
      </a>
    </li>

    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="รูปแบบศิลปกรรม">
      <a class="nav-link" href="artstyleView.php">
        <i class="fa fa-fw fa-cubes"></i>
        <span class="nav-link-text">รูปแบบศิลปกรรม</span>
      </a>
    </li>

    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="วัสดุ">
      <a class="nav-link" href="materialView.php">
        <i class="fa fa-fw fa-barcode"></i>
        <span class="nav-link-text">วัสดุ</span>
      </a>
    </li>

    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="ผู้ใช้">
      <a class="nav-link" href="usersView.php">
        <i class="fa fa-fw fa-user-circle"></i>
        <span class="nav-link-text">ผู้ใช้</span>
      </a>
    </li>

  </ul>

  <ul class="navbar-nav sidenav-toggler">
    <li class="nav-item">
      <a class="nav-link text-center" id="sidenavToggler">
        <i class="fa fa-fw fa-angle-left"></i>
      </a>
    </li>
  </ul>
  
  <ul class="navbar-nav ml-auto">
    <li class="nav-item">
      <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
        <i class="fa fa-fw fa-sign-out"></i>ออกจากระบบ</a>
    </li>
  </ul>
</div>