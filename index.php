<!DOCTYPE html>
<html>
<head>
    <title>Upload IMG</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- <script src="upload.js" type="text/javascript" charset="utf-8"></script> -->

    <script>

        $(document).ready(function(){
            $('.add_more').click(function(e){
                e.preventDefault();
                $(this).before("<input style='margin-top:10px' id='file' name='files[]' type='file' multiple/>");
            });
            $(document).on('submit','#upload', function(e){
                e.preventDefault();
                var formData = new FormData(this);
                $.ajax({
                    url: 'upload.php',
                    type: 'POST',
                    data: formData,
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: function (data) {
                        // alert(data);
                        window.setTimeout(function(){ document.location.reload(true); }, 100);
                    },
                    error:function(){
                        alert('submit error');
                    }
                });
                return false;
            });
        });

    </script>
</head>
<body>
    <div class="container">
        <form enctype="multipart/form-data" action="" method="post" id="upload"> 
            <div class="form-group">
                <div class="col-xs-12">
                    <label>Product Name</label>
                    <input class="form-control" name="name" id="name" required>
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-12">
                    <label>Price</label>
                    <input class="form-control" name="price" id="price" required>
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-12">
                    <label>Chose File</label>
                    <input id="files" name="files[]" type="file" multiple/>
                    
                    <button type="button" class="add_more" style="margin-top:10px">Add More</button>
                </div>
            </div>
            
            <div class="form-group">
                <div class="col-xs-12" style="margin-top:20px;">
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>