<!DOCTYPE html>
<html>
<head>
    <title></title>

</head>
<body>
    <div class="container">
    	<div class="row">
    		  <!-- Judul -->
        	<div class="col-lg-12">
            <h1 class="page-header"><font color="#009ae4">Buat Lowongan</font> <small>tuliskan lowongan anda dengan jelas dan benar</small></h1>
        	</div>
        	<!-- End Judul -->
        	<div class="col-md-8">
        		<div class="form-group">
      				<label for="usr">Judul Lowongan:</label>
      				<div class="input-group">
      					<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      					<input type="text" class="form-control" id="usr">
      				</div>
    			</div>
    			<div class="form-group">
      				<label for="usr">Dibutuhkan Lowongan Sebagai:</label>
      				<div class="input-group">
      					<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      					<input type="text" class="form-control" id="usr">
      				</div>
    			</div>
    			<div class="form-group">
                    <label for="usr">Deskripsi Lowongan:</label>
                    <textarea class="form-control" rows="8" id="comment"></textarea>
               	</div>
               	<div class="form-group">
               		<label for="usr">Upload Foto Perusahaan Anda:</label>
                    <input id="file-0" class="file" type="file" multiple=true>
               	</div>
               	<br><br>
               	<div class="form-group">
                    <button type="button" id="myButton" data-loading-text="Loading..." class="btn btn-primary" autocomplete="off"><span class="glyphicon glyphicon-upload"></span> Pasang</button>
                    <script>
                        $('#myButton').on('click', function () {
                         	var $btn = $(this).button('loading')
                            // business logic...
                            $btn.button('reset')
                        });
                    </script>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-repeat"></span> Reset Form</button>
                </div>
                <hr>

        	</div>
    	</div>

    	<br><br><br>
    	<!--Well-->
      	<div class="well">
        	<div class="row">
          		<div class="col-md-8">
            		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, expedita, saepe, vero rerum deleniti beatae veniam harum neque nemo praesentium cum alias asperiores commodi.</p>
          		</div>
          		<div class="col-md-4">
            		<button type="button" class="btn btn-lg btn-primary btn-block" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo"><span class="glyphicon glyphicon-envelope"></span> Hubungi JOBhouse</button>
          		</div>
        	</div>
      	</div>
      	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  			<div class="modal-dialog">
    			<div class="modal-content">
      				<div class="modal-header">
        				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        				<h4 class="modal-title" id="exampleModalLabel">New message</h4>
      				</div>
      				<div class="modal-body">
        				<form>
          					<div class="form-group">
            					<label for="recipient-name" class="control-label">Recipient:</label>
            					<input type="text" class="form-control" id="recipient-name">
          					</div>
          					<div class="form-group">
            					<label for="message-text" class="control-label">Message:</label>
            					<textarea class="form-control" id="message-text"></textarea>
          					</div>
        				</form>
      				</div>
      				<div class="modal-footer">
        				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        				<button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-send"></span> Send message</button>
      				</div>
    			</div>
  			</div>
		</div>
      	<!--End Well-->
  </div>
</body>
<script>
    $("#file-0").fileinput({
        'allowedFileExtensions' : ['jpg', 'png','gif'],
    });
    $("#file-1").fileinput({
        initialPreview: ["<img src='Desert.jpg' class='file-preview-image'>", "<img src='Jellyfish.jpg' class='file-preview-image'>"],
        initialPreviewConfig: [
            {caption: 'Desert.jpg', width: '120px', url: '#'},
            {caption: 'Jellyfish.jpg', width: '120px', url: '#'},
        ],
        uploadUrl: '#',
        allowedFileExtensions : ['jpg', 'png','gif'],
        overwriteInitial: false,
        maxFileSize: 1000,
        maxFilesNum: 10,
        //allowedFileTypes: ['image', 'video', 'flash'],
        slugCallback: function(filename) {
            return filename.replace('(', '_').replace(']', '_');
        }
	});
    /*
    $(".file").on('fileselect', function(event, n, l) {
        alert('File Selected. Name: ' + l + ', Num: ' + n);
    });
    */
	$("#file-3").fileinput({
		showUpload: false,
		showCaption: false,
		browseClass: "btn btn-primary btn-lg",
		fileType: "any"
	});
	$("#file-4").fileinput({
		uploadExtraData: [
            {kvId: '10'}
        ],
	});
    $(".btn-warning").on('click', function() {
        if ($('#file-4').attr('disabled')) {
            $('#file-4').fileinput('enable');
        } else {
            $('#file-4').fileinput('disable');
        }
    });    
    $(".btn-info").on('click', function() {
        $('#file-4').fileinput('refresh', {previewClass:'bg-info'});
    });
    /*
    $('#file-4').on('fileselectnone', function() {
        alert('Huh! You selected no files.');
    });
    $('#file-4').on('filebrowse', function() {
        alert('File browse clicked for #file-4');
    });
    */
    $(document).ready(function() {
        $("#test-upload").fileinput({
            'showPreview' : false,
            'allowedFileExtensions' : ['jpg', 'png','gif'],
            'elErrorContainer': '#errorBlock'
        });
        /*
        $("#test-upload").on('fileloaded', function(event, file, previewId, index) {
            alert('i = ' + index + ', id = ' + previewId + ', file = ' + file.name);
        });
        */
    });
	</script>
</html>
