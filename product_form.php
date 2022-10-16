<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>
    <?php
       include "navbar.php";
    ?>
    <div class="container col-md-6">
        <h1 class="text-center">เพิ่มสินค้า</h1>
        <form action="product_insert.php" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-2">
                    ชื่อสินค้า
                </div>
                <div class="col-md-10">
                    <input type="text" name="title" class="form-control" />
                </div>
            </div>
            <div class="row pt-2">
                <div class="col-md-2">
                    ราคา
                </div>
                <div class="col-md-10">
                    <input type="text" name="price" class="form-control" />
                </div>
            </div>
            <div class="row pt-2">
                <div class="col-md-2">
                    จำนวนในคลัง
                </div>
                <div class="col-md-10">
                    <input type="text" name="stock" class="form-control" />
                </div>
            </div>
            <div class="row pt-2">
                <div class="col-md-2">
                    ประเภทสินค้า
                </div>
                <div class="col-md-10">
                    <input type="text" name="cat_name" class="form-control" />
                </div>
            </div>
            <div class="row pt-2">
                <div class="col-md-2">
                    รายละเอียด
                </div>
                <div class="col-md-10">
                    <textarea rows=" 5" cols="50" name="description" class="form-control"> </textarea>
                </div>
            </div>
            <div class="row pt-2">
                <div class="col-md-2">
                    แทรกรูป
                </div>
                <div class="col-md-10">
                    <input type="file" name="img" class="form-control" />
                </div>
            </div>
            <div class="d-grid pt-3">
                <input type="submit" value="บันทึก" class="btn btn-success" />
            </div>
        </form>
    </div>
</body>

</html>