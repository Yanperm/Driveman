
<main class="container">
<hr/><br/><br/>
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
</main>

