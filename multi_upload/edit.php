<?php
$con = mysqli_connect("localhost","root","","multi_upload");
$id = $_GET['id'];
$result = mysqli_query($con, "SELECT * FROM multi_upload WHERE id='$id'");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Multi Upload</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="custom.js"></script>
</head>
<body>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<div class="container">
	<?php
		$length = 0;
		$i = 0;
		while($row = mysqli_fetch_array($result))
		{
			$image_arr = explode(' ',$row['images']);
			echo "<pre>";
			print_r($image_arr);
			$length = sizeof($image_arr);
			
	?>
    <form method="post" action="" enctype="multipart/form-data" class="form-group">
        <a href="javascript:void(0)" onclick="$('#pro-image').click()">Upload Image</a>
        <input type="file" id="pro-image" name="pro-image[]" style="display: none;" class="form-control" multiple>
	    <div class="preview-images-zone">
	    	<?php
	    	if(!empty($row['images']))
	    	{ 
	    		while($length > $i){
	    	?>
	        <div class="preview-image preview-show-<?php echo $i;?>">
	            <div class="image-cancel" data-no="<?php echo $i;?>">x<input type="hidden" name="del_image[]" value="<?php echo $image_arr[$i];?>"/></div>
	            <div class="image-zone"><img id="pro-img-<?php echo $i;?>" src="image/<?php echo $image_arr[$i];?>"></div>
	        </div>
	        <?php
	        	$i++;
	        	}
	        }else if(empty($image_arr[0]) && !empty($image_arr[1]))
	        {
	        ?>
	        <div class="preview-image preview-show-<?php echo $i;?>">
	            <div class="image-cancel" data-no="<?php echo $i;?>">x<input type="hidden" name="del_image[]" value="<?php echo $image_arr[$i];?>"/></div>
	            <div class="image-zone"><img id="pro-img-<?php echo $i;?>" src="image/<?php echo $image_arr[$i];?>"></div>
	        </div>
	        <?php
	        }
	        ?>
	        <!-- <div class="preview-image preview-show-2">
	            <div class="image-cancel" data-no="2">x</div>
	            <div class="image-zone"><img id="pro-img-2" src="https://www.codeproject.com/KB/GDI-plus/ImageProcessing2/flip.jpg"></div>
	            <div class="tools-edit-image"><a href="javascript:void(0)" data-no="2" class="btn btn-light btn-edit-image">edit</a></div>
	        </div>
	        <div class="preview-image preview-show-3">
	            <div class="image-cancel" data-no="3">x</div>
	            <div class="image-zone"><img id="pro-img-3" src="http://i.stack.imgur.com/WCveg.jpg"></div>
	            <div class="tools-edit-image"><a href="javascript:void(0)" data-no="3" class="btn btn-light btn-edit-image">edit</a></div>
	        </div> -->
	    </div>
	    <input class="btn btn-primary" type="submit" value="Save" name="edit">
    </form>
    <?php
    	}
    ?>
</div>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
	$(document).ready(function() {
    document.getElementById('pro-image').addEventListener('change', readImage, false);
    $( ".preview-images-zone" ).sortable();
    $(document).on('click', '.image-cancel', function() {
        let no = $(this).data('no');
        $(".preview-image.preview-show-"+no).remove();
    });
});

var num = 0;
function readImage() {
    if (window.File && window.FileList && window.FileReader) {
        var files = event.target.files; //FileList object
        var output = $(".preview-images-zone");

        for (let i = 0; i < files.length; i++) {
            var file = files[i];
            if (!file.type.match('image')) continue;
            
            var picReader = new FileReader();
            
            picReader.addEventListener('load', function (event) {
                var picFile = event.target;
                var html =  '<div class="preview-image preview-show-' + num + '">' +
                            '<div class="image-cancel" data-no="' + num + '">x</div>' +
                            '<div class="image-zone"><img id="pro-img-' + num + '" src="' + picFile.result + '"></div>' +
                            '</div>';

                output.append(html);
                num = num + 1;
            });

            picReader.readAsDataURL(file);
        }
        // $("#pro-image").val('');
    } else {
        console.log('Browser not support');
    }
}


</script>
</body>
</html>
<?php 
$con = mysqli_connect("localhost","root","","multi_upload");
if(isset($_POST['edit'])){
	$count_forward = 0;
			$files = $_FILES;
		    $count = count(array_filter($_FILES['pro-image']['name']));
			if($count > 0)
			{
				for($i=0; $i<$count; $i++)
		        {
		            $_FILES['photo_gallery']['name'] = $files['pro-image']['name'][$i];
		            $_FILES['photo_gallery']['tmp_name'] = $files['pro-image']['tmp_name'][$i];
		            $galler = preg_replace('/\s+/', '',$_FILES['photo_gallery']['name']);
		            $temp_name = preg_replace('/\s+/', '',$_FILES['photo_gallery']['tmp_name']);
		            move_uploaded_file($temp_name,"image/$galler");
		            $dataInfo[$i] = $galler;       
		        }
		        $count_forward = $i;
		        $gallery_image = array($dataInfo);
		        $gall = implode(' ',$gallery_image[0]);
			}
			else
			{
				$gall = "";
			}
			if($_POST['del_image'])
		   	{
		   		$count_old = count($_POST['del_image']);
		   		$old_image = $_POST['del_image'];
		   		for($i=0;$i<$count_old;$i++)
		   		{
		   			$image = $old_image[$i];
		    		$dataInfo[$i] = $image;
		   		}
		   		$gallery_image = array($dataInfo);
		        $gal = implode(' ',$gallery_image[0]);
		   	}
		   	else
		   	{
		   		$gal = "";
		   	}
			$gallery = $gall." ".$gal;
	if(mysqli_query($con,"UPDATE multi_upload SET images='$gallery' WHERE id='$id'")){
		echo "<script>window.alert('success.')</script>";
	}else{
		echo "Error : ".mysqli_error($con);
	}
	
}
?>