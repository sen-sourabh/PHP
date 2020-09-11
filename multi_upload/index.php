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
    <form method="post" action="" enctype="multipart/form-data" class="form-group">
        <a href="javascript:void(0)" onclick="$('#pro-image').click()">Upload Image</a>
        <input type="file" id="pro-image" name="pro-image[]" style="display: none;" class="form-control" multiple>
    
	    <div class="preview-images-zone">
	        <!-- <div class="preview-image preview-show-1">
	            <div class="image-cancel" data-no="1">x</div>
	            <div class="image-zone"><img id="pro-img-1" src="https://img.purch.com/w/660/aHR0cDovL3d3dy5saXZlc2NpZW5jZS5jb20vaW1hZ2VzL2kvMDAwLzA5Ny85NTkvb3JpZ2luYWwvc2h1dHRlcnN0b2NrXzYzOTcxNjY1LmpwZw=="></div>
	            <div class="tools-edit-image"><a href="javascript:void(0)" data-no="1" class="btn btn-light btn-edit-image">edit</a></div>
	        </div>
	        <div class="preview-image preview-show-2">
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
	    <input class="btn btn-primary" type="submit" value="Save" name="save">
    </form>
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
if(isset($_POST['save'])){
	if(!empty($_FILES['pro-image']['name'])){
		echo "<script>window.alert('inside 1.')</script>";
		$files = $_FILES;
	    $count = count($_FILES['pro-image']['name']);
	    if($count > 0)
	    {   echo "<script>window.alert('in count')</script>";
	        for($i=0; $i<$count; $i++)
	        {
	            $_FILES['photo_gallery']['name'] = $files['pro-image']['name'][$i];
	            $_FILES['photo_gallery']['tmp_name'] = $files['pro-image']['tmp_name'][$i];
	            $gallery = preg_replace('/\s+/', '',$_FILES['photo_gallery']['name']);
	            $temp_name = preg_replace('/\s+/', '',$_FILES['photo_gallery']['tmp_name']);
	            move_uploaded_file($temp_name,"image/$gallery");
	            $dataInfo[$i] = $gallery;
	            echo "<script>window.alert(".$dataInfo[$i].")</script>";     
	        }
	        $gallery_image = array($dataInfo);
	        $gallery = implode(' ',$gallery_image[0]);
	    }
	}
	else
    {
    	$gallery = "";
    }
    mysqli_query($con,"INSERT INTO multi_upload VALUES ('','$gallery')");
    $id = mysqli_insert_id($con);
	if($id){
		echo "<script>window.alert('success.')</script>";
		echo "<script>window.location.href= 'edit.php?id=$id'</script>";
	}else{
		echo "Error : ".mysqli_error($con);
	}
	
}
?>