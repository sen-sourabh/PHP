<?php
include_once('confige.php');
$query = mysqli_query($connection,"SELECT * FROM firstinsert ORDER BY id desc;");

?>
<!DOCTYPE html>
<html>
<head>
	<title>View data</title>
	<style>
		th{
			text-align: center;
			background-color: #ddd;
			padding-left: 25px;
			padding-right: 25px;
		}
		td{
			text-align: center;
		}
		.insert_data{
			text-decoration: none;
			color:red;
		}
		.insert_data:hover{
			cursor: pointer;
			color:green;
		}
	</style>
</head>
<body>

<a href="http://localhost/phpdoc/firstProject/index.php" class="insert_data">INSERT DATA</a>

<div>
	<form action="search.php" method="post">
		<input type="text" name="search" placeholder="Search"/>
		<button type="submit" name="search-btn" vlaue="search">Search</button>	
	</form>
</div>

<form method="post" action="">
	<select name="delete_select">
	<option value="">---select option---</option>
	<option value="delete">Delete</option>
</select>
<input type="submit" name="delete" value="Delete"/>
<br>
<br>
<h3>Your Table...</h3><br>
<div>&nbsp;</div>

<table width="90%">
	<tr class="thead">
		<th><input type="checkbox" name="check_all" id="check_all" value=""/>ID</th>
		<th>USERNAME</th>
		<th>EMAIL</th>
		<th>PASSWORD</th>
		<th>GENDER</th>
		<th>DATE</th>
		<th>PHONE</th>
		<th>SKILLS</th>
		<th>COUNTRY</th>
		<th>IMAGES</th>
		<th>UPDATE</th>
	</tr>
<?php
		//OPENING WHILE LOOP
		while($row = mysqli_fetch_array($query))
		{
?>
	<tr>
		
		<td><input type="checkbox" class="checkboxid" name="row_id[]" value="<?php echo $row['id'];?>"/>&emsp;<?php echo $row['id'];?></td>
		<td><?php echo $row['username'];?></td>
		<td><?php echo $row['email'];?></td>
		<td><?php echo $row['password'];?></td>
		<td><?php echo $row['gender'];?></td>
		<td><?php echo $row['date'];?></td>
		<td><?php echo $row['phone'];?></td>
		<td><?php echo $row['skills'];?></td>
		<td><?php echo $row['country'];?></td>
		<td><img src="img/<?php echo $row['image'];?>"width="100px" height="80px"/></td>
<?php
		// echo "<td><a href="\edit.php?Id=$row[Id]\">EDIT</a> | <a href="\delete.php?Id=$row[Id]\" onclick="\return confirm('Are You Sure You Want to Delete This Information?')\">DELETE</a></td>";

		echo "<td><a href=\"edit_and_update.php?Id=$row[id]\">Edit</a> | <a href=\"delete.php?Id=$row[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
?>
	</tr>
<?php
 //CLOSING WHILE LOOP 
	}
?>
</table>
</form>

<!-- Script for bulk delete option -->
    <script type="text/javascript">
        $(document).ready(function(){
            $('#check_all').on('click',function(){
                if(this.checked){
                    $('.checkboxid').each(function(){
                        this.checked = true;
                    });
                }else{
                     $('.checkboxid').each(function(){
                        this.checked = false;
                    });
                }
            });
            $('.checkboxid').on('click',function(){
                if($('.checkboxid:checked').length == $('.checkboxid').length){
                    $('#check_all').prop('checked',true);
                }else{
                    $('#check_all').prop('checked',false);
                }
            });
        });
    </script>
</body>
</html>
<?php
if(isset($_POST['delete']))
{	
	$data = $_POST['delete_select'];
	if($data == isset($_POST['delete_select']))
	{
		if(isset($_POST['row_id']))
		{
			foreach($_POST['row_id'] as $row_id)
			{
				mysqli_query($connection,"DELETE FROM firstInsert WHERE Id='$row_id'");
				echo "<script>window.location.href = 'http://localhost/phpdoc/firstProject/viewdata.php';</script>";
			}
		}
		else
		{
			echo "<script>window.alert('you no choose any row.')</script>";
		}	
	}
}
?>