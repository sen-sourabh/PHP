var elem = document.getElementById("myBar");  
var width = 0;

var count = 0;

var datafile = new plupload.Uploader({
	runtimes : 'html5,flash,silverlight,html4',
	browse_button : 'uploadFile', // you can pass in id...
	container: document.getElementById('container'), // ... or DOM Element itself
	chunk_size: '1mb', 
	url : BASE_URL + 'upload/uploadtoserver',
	max_file_count: 1,

	//ADD FILE FILTERS HERE
	filters : {
		/* mime_types: [
				{title : "XML files", extensions : "xml"},
			]
		*/
	}, 

	// Flash settings
	flash_swf_url : BASE_URL + 'test/public/js/plupload/Moxie.swf',

	// Silverlight settings
	silverlight_xap_url : BASE_URL + 'test/public/js/plupload/Moxie.xap',
	 

	init: {
		PostInit: function() {
			document.getElementById('filelist').innerHTML = '';	 
			document.getElementById('upform').submit = function() {

			datafile.start();

			return false;
			};
				var cat = document.getElementById('cat').value;
				alert(cat);
				$.ajax({
					type: 'POST',
					url: BASE_URL + 'upload/upload_file',
					data:{
						cat: cat
					},
					success:function{
						alert('success');
					}
				});
			}

			
		},

		FilesAdded: function(up, files) {
			plupload.each(files, function(file) {
				document.getElementById('filelist').innerHTML += '<div id="' + file.id + '">' + file.name + ' (' + plupload.formatSize(file.size) + ') <b></b></div>';
				// $(document).ready(function(){
				// 	$("#upload").click(function(){

						
						// $image = document.getElementById("container").value;
						// alert($image);
						
				// 	});
				// });
			});
		},

		UploadProgress: function(up, file) {
			// document.getElementById(file.id).getElementsByTagName('b')[0].innerHTML = '<span>' + file.percent + "%</span>";
				var id = setInterval(frame, 10);
			  	function frame() {
			    	if (width >= 100) {
			      	clearInterval(id);
			    	} else {
				      // width++;
				      width = file.percent; 
				      elem.style.width = width + '%'; 
				      elem.innerHTML = width * 1  + '%';
				    }
			  	}

			if((file.percent == 100) && (count == 0))
			{
				$image=file.name;
				
				$.ajax({
					type: 'POST',
					url: BASE_URL + 'upload/upload_file',
					data: {
						video: $image
					},
					success: function(){
					}
				});
				count++;
				$("#upload").removeAttr('disabled');
			}
							
			$("#uploadCancel").click(function(){
					frame.abort();
				});
			
		},

		Error: function(up, err) {
			document.getElementById('console').innerHTML += "\nError #" + err.code + ": " + err.message;
		}


	}

});

datafile.init();

