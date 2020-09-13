<!DOCTYPE html>
<!-- CSS only -->
<head>
<title>Codeigniter</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- JavaScript and dependencies -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css2?family=Mitr:wght@200&display=swap" rel="stylesheet">
    <script src="https://lipis.github.io/bootstrap-sweetalert/dist/sweetalert.js"></script>
    <link rel="stylesheet" href="https://lipis.github.io/bootstrap-sweetalert/dist/sweetalert.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap.min.css"/>
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.5/css/responsive.bootstrap.min.css"/>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap.min.js"></script>
    
    <script>
    $(document).ready( function () {
    $('#myTable').DataTable();
} );
    </script>
    <style>
       .container {
  padding: 60px 15px 0;
}
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
 </head>
 <body style="font-family: 'Mitr', sans-serif;" class="bg-dark">
 <header>
  <!-- Fixed navbar -->
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="<?php echo base_url(); ?>">ระบบจัดการข้อมูลลูกค้า</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto mb-2 mb-md-0">
          <li class="nav-item active">
            <a class="nav-link" aria-current="page" href="#">ข้อมูลลูกค้า</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#">ข้อมูลพนักงาน</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">รายงาน</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
          </li>
        </ul>
        <form class="d-flex"action="<?php echo base_url('welcome/insert'); ?>" method="post">
          <input class="form-control mr-2" type="search" name="customer_id" placeholder="รหัสลูกค้า" aria-label="Search">
          <input class="form-control mr-2" type="search" name="customer_name" placeholder="ขื่อนามสกุล" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">
          Save</button>
        </form>
      </div>
    </div>
  </nav>
</header>
<div class="container bg-dark">
<br/>
<br/>
<br/>
<table class="table table-hover table-dark table-striped border-success"cellsp>
    <thead>
        <tr>
            <th scope="row">ลำดับที่</th>
            <th>หมายเลขรหัสลูกค้า</th>
            <th>ชื่อ-นามสกุล</th>
            <th>ประเภทลูกค้า</th>
            <th>Driveman Credit</th>
            <th>วันที่เติม</th>
            <th>วันที่หมดอายุ</th>
            <th>จัดการข้อมูล</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        $i = 1;           
            foreach ($data as $row){    
                $id = $row->customer_id;                            
        ?>
        <tr id="<?php echo $row->customer_id; ?>">
            <td scope="row"><span class="badge bg-success"><?php echo $i++; ?></span></td>
            <td><?php echo $row->customer_id; ?></td>
            <td><?php echo $row->customer_name; ?></td>
            <td>Premuim</td>
            <td>฿1000</td>
            <td>25-08-2563</td>
            <td>24-09-2563</td>
            <td>
            <button type="submit" class="btn btn-danger remove"> Delete</button>
            <a href="<?php echo base_url('welcome/edit/'.$id); ?>" class="btn btn-warning" onclick="return confirm('คุณต้องการแก้ไขใช่่หรือไม่')">แก้ไข</a>
            </td>
        </tr>
        <?php 
            }
        ?>
    </tbody>
</table>

<script type="text/javascript">
    $(".remove").click(function(){
        var id = $(this).parents("tr").attr("id");    
       swal({
        title: "คำเตือนจากระบบ",
        text: "คุณมั่นใจหรือไม่ที่จะลบข้อมูล!",
        type: "warning",
        showCancelButton: true,
        confirmButtonClass: "btn-danger",
        confirmButtonText: "ใช่, ลบข้อมูลออก",
        cancelButtonText: "ไม่, ยกเลิกรายการ",
        closeOnConfirm: false,
        closeOnCancel: false
      },
      function(isConfirm) {
        if (isConfirm) {
          $.ajax({
             url: '<?php echo base_url('welcome/delete/'); ?>'+id,
             type: 'DELETE',
             error: function() {
                alert('เกิดปัญหากับระบบ');
             },
             success: function(data) {
                  $("#"+id).remove();
                  swal("Deleted!", "ระบบได้ทำการลบข้อมูลเรียบร้อยแล้ว", "success");
             }
          });
        } else {
          swal("Cancelled", "ระบบยกเลิกการทำรายการแล้ว", "error");
        }
      });
     
    });
    
</script>
</div>
</body>
</!Doctype>