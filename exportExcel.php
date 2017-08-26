<!DOCTYPE html>
<html>
<head>
    <title>Export Excel</title>
    
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/export.js"></script>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/buttons.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="css/dataTables.bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/jquery.dataTables.min.css">

    <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.4.0/js/dataTables.buttons.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="//cdn.datatables.net/buttons/1.4.0/js/buttons.html5.min.js"></script>

    <style>
        table.dataTable thead .sorting, table.dataTable thead .sorting_asc{
            background-image: none;
        }
       .dataTables_wrapper .dataTables_paginate .paginate_button.current, 
        .dataTables_wrapper .dataTables_paginate .paginate_button.current:hover{
            background: #337ab7 !important;
            border: 1px solid #337ab7;
            color: #fff !important;
        }
         /*.dataTables_wrapper .dataTables_paginate .paginate_button:hover{
             background: green !important;
             border: none;
        }*/
    </style>
</head>
<body>
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "application_db";
    $conn = new mysqli($servername, $username, $password, $dbname);
    $sql = "SELECT * FROM tbl_images";
    $result = $conn->query($sql);
?>
    <div class="container" style="margin-top: 20px;">
        <table id="example" class="display nowrap" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Product ID</th>
                    <th>Image Name</th>
                    <th>Image Url</th>
                </tr>
            </thead>
            <tbody>
            <?php if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {?>
                <tr>
                    <td><?php echo $row['id'];?></td>
                    <td><?php echo $row['pro_id'];?></td>
                    <td><?php echo $row['image'];?></td>
                    <td><?php echo $row['image_url'];?></td>
                </tr>
            <?php } } ?>
            </tbody>
        </table>
    </div>
</body>
</html>
    