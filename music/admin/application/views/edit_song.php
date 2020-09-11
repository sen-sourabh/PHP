<?php 
	include('includes/header.php');
?>
<style>
    /*Style for display image before insert database*/
    #PreviewPicture
    {
        width: 200px;
        height: 200px;
        background-position: center center;
        background-size: cover;
        background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSYzcIyNmd36YGpJaGwPhj8DjQ0hZbPN-OD-kmU7kdpwpggd1Sp');
        /*-webkit-box-shadow: 0 0 1px 1px rgba(0, 0, 0, .3);*/
        display: inline-block;
    }
</style>
<!-- MAIN CONTENT-->
<?php 
    if(!empty($single_song)){
?>
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                        	<div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Update</strong> Song 
                                        <?php 
                                            if($msg = $this->session->flashdata('response')){
                                                echo "<div style='color:green'>".$msg."</div>";
                                            }else if($msg = $this->session->flashdata('error')){
                                                echo "<div style='color:red'>".$msg."</div>";
                                            }
                                        ?>
                                    </div>
                                    <?php 
                                        foreach($single_song as $song){
                                    ?>
                                    <form method="post" enctype="multipart/form-data" class="form-horizontal">
                                        <div class="card-body card-block">
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="song_name" class=" form-control-label">Name</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" name="song_name" class="form-control" required="required" value="<?php echo $song->song_name;?>">
                                                    <small class="form-text text-muted">Please enter name of the song in correct manner without use of special characters.</small>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="song_singer" class="form-control-label">Singers</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" name="song_singer" value="<?php echo $song->song_singer;?>" class="form-control">
                                                    <small class="help-block form-text">( ( Optional ) Singers seperate by comma ', ') Please enter name of the singer of this song in correct manner without use of special characters.</small>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="song_desc" class=" form-control-label">Description</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <textarea name="song_desc" rows="9"  class="form-control"><?php echo $song->song_desc;?></textarea>
                                                    <small class="help-block form-text">( Optional ) You can enter description of this song.</small>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="song_cat" class=" form-control-label">Category</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select name="song_cat" class="form-control" required="required">
                                                        <option value="<?php echo $song->song_category;?>"><?php echo ucfirst($song->song_category);?></option>
                                                        <option value="">Please select</option>
                                                        <option value="movie">Movie</option>
                                                        <option value="album">Album</option>
                                                        <option value="other">Other</option>
                                                    </select>
                                                    <small class="help-block form-text">Please select category of this song.</small>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="song_lang" class="form-control-label">Language</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select name="song_lang" class="form-control" required="required">
                                                        <option value="<?php echo $song->song_language;?>"><?php echo ucfirst($song->song_language);?></option>
                                                        <option value="">Please select</option>
                                                        <option value="hindi">Hindi</option>
                                                        <option value="english">English</option>
                                                        <option value="other">Other</option>
                                                    </select>
                                                    <small class="help-block form-text">( Optional ) Language of this song.</small>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="song_country" class=" form-control-label">Country</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" name="song_country" value="<?php echo $song->song_country;?>" class="form-control">
                                                    <small class="help-block form-text">( Optional ) You can enter country name of this song.</small>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="old_image" class="form-control-label">Current Image</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <img src="<?php echo base_url();?>assets/img/<?php echo $song->song_image;?>" onerror="this.src='https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSYzcIyNmd36YGpJaGwPhj8DjQ0hZbPN-OD-kmU7kdpwpggd1Sp'" style="width:200px;height:200px;">
                                                    <input type="hidden" name="old_image" value="<?php echo $song->song_image;?>"/>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="song_image" class=" form-control-label">Image</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <div id="PreviewPicture"></div>
                                                    <input id="file-input" type="file" accept="image/*" name="song_image" class="form-control-file" onchange="ImagePreview()">
                                                    <small class="help-block form-text">Please choose image (.png, .jpg, .jpeg recomended) of this song.</small>
                                                    <p id="error1" style="display:none; color:#FF0000;">
                                                        Invalid image format! Image format must be JPG, JPEG or PNG.
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="song_file" class=" form-control-label">File</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" name="old_file" value="<?php echo $song->song_file;?>"/>
                                                    <input type="file" accept="audio/*" name="song_file" class="form-control-file">
                                                    <small class="help-block form-text">Please choose file (.mp3 recomended) of this song.</small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <input type="submit" name="edit" class="btn btn-primary btn-sm" value="Update Song"/>
                                            <input type="reset" class="btn btn-danger btn-sm" value="Reset"/>
                                        </div>
                                    </form>
                                    <?php 
                                        }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<?php 
    }
?>

<?php 
	include('includes/footer.php');
?>
<!-- Display image before insert in database -->
<script type="text/javascript">
    function ImagePreview() 
    { 
        var ext = $('#file-input').val().split('.').pop().toLowerCase();
        if ($.inArray(ext, ['gif','png','jpg','jpeg']) == -1){
            $('#error1').slideDown("slow");
        }else{
            $('#error1').slideUp("slow");
            
            var PreviewIMG = document.getElementById('PreviewPicture'); 
            var UploadFile    =  document.getElementById('file-input').files[0]; 
            var ReaderObj  =  new FileReader(); 
            ReaderObj.onloadend = function () 
            { 
               PreviewIMG.style.backgroundImage  = "url("+ ReaderObj.result+")";
            } 
            if (UploadFile) 
            { 
               ReaderObj.readAsDataURL(UploadFile);
            } 
            else 
            { 
                PreviewIMG.style.backgroundImage  = "";
            }
        } 
    }
</script>