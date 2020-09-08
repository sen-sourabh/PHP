<!DOCTYPE html>
<html lang="en-US">
<head>
     <title>Delete multiple records from MySQL in PHP with checkbox - ExpertPHP</title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
</head>
<body>
<?php
    session_start();
    include_once('db_config.php');
    $query = mysqli_query($conn,"SELECT * FROM products");
?>
    
<form name="actionForm" action="action.php" method="post" onsubmit="return deleteConfirm();"/>
    <table class="table-striped">
        <thead>
        <tr>
            <th><input type="checkbox" name="check_all" id="check_all" value=""/></th>        
            <th>Name</th>
            <th>Details</th>
        </tr>
        </thead>
        <?php
            if(mysqli_num_rows($query) > 0){
                while($row = mysqli_fetch_assoc($query)){
                    extract($row);
        ?>
        <tr>
            <td align="center"><input type="checkbox" name="selected_id[]" class="checkbox" value="<?php echo $id; ?>"/></td>        
            <td><?php echo $name; ?></td>
            <td><?php echo $details; ?></td>
           
        </tr> 
        <?php } }else{ ?>
            <tr><td colspan="3">No records found.</td></tr> 
        <?php } ?>
    </table>
    <input type="submit" class="btn btn-primary" name="btn_delete" value="Delete"/>
</form>
<script type="text/javascript">
function deleteConfirm(){
    var result = confirm("Do you really want to delete records?");
    if(result){
        return true;
    }else{
        return false;
    }
}
$(document).ready(function(){
    $('#check_all').on('click',function(){
        if(this.checked){
            $('.checkbox').each(function(){
                this.checked = true;
            });
        }else{
             $('.checkbox').each(function(){
                this.checked = false;
            });
        }
    });
    
    $('.checkbox').on('click',function(){
        if($('.checkbox:checked').length == $('.checkbox').length){
            $('#check_all').prop('checked',true);
        }else{
            $('#check_all').prop('checked',false);
        }
    });
});
</script>
</body>
</html>