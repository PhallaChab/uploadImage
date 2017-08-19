<!DOCTYPE html>
<html>
<head>
    <title>Upload IMG</title>
    <link rel="stylesheet" type="text/css" href="mystyle.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="upload.js" type="text/javascript" charset="utf-8"></script>

    <script>
        $(document).ready(function(){
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
                        alert("Data Uploaded: "+data);
                        $('#name').val('');
                        $('#price').val('');
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
                    <label>Chose Img</label>
                    <input id="files" name="files[]" type="file" multiple/>
                    <div id="result"></div>
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