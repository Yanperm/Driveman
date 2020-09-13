<?php 
            $querys = $this->db->get_where('tbcustomer',array('customer_id' => $id));
            foreach ($querys->result() as $rows){
        ?>
<form action="<?php echo base_url('welcome/update'); ?>" method="post">
    รหัสลูกค้า <input type="text" name="customer_id" value="<?php echo $rows->customer_id; ?>" readonly/><br/>
     ขื่อนามสกุล <input type="text" name="customer_name"value="<?php echo $rows->customer_name; ?>"/><br/>
     <input type="submit" value="เปลี่ยนแปลงข้อมูล">
</form>
<?php 
            }
        ?>

<table border="1" cellsp>
    <thead>
        <tr>
            <th>รหัสลูกค้า</th>
            <th>ชื่อ-นามสกุล</th>
            <th>Manage</th>
        </tr>
    </thead>
    <tbody>
        <?php 
            $query = $this->db->get('tbcustomer');
            foreach ($query->result() as $row){
                $id = $row->customer_id;
        ?>
        <tr>
            <td><?php echo $row->customer_id; ?></td>
            <td><?php echo $row->customer_name; ?></td>
            <td><a href="<?php echo base_url('welcome/delete/'.$id); ?>">ลบ</a> | <a href="<?php echo base_url('welcome/edit/'.$id); ?>">แก้ไข</a></td>
        </tr>
        <?php 
            }
        ?>
    </tbody>
</table>