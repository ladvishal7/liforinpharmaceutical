<?php
 
    include "connect.php";
 
     $parent_id = $_POST["parent_id"]; 
 
    $result = mysqli_query($conn,"select * from menu_master where is_active = 0 AND is_deleted = 0 AND parent_id=".$parent_id);
?>
 
<option value="">Select sub menu</option>
<?php
while($row = mysqli_fetch_array($result)) {
?>
    <option value="<?php echo $row["id"];?>"><?php echo $row["name"];?></option>
<?php
}
?>