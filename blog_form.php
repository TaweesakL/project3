<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>blog</title>

</head>

<body>
    <?php
       include "navbar.php";
    ?>
    <div class="container col-md-6">
        <h1 class="text-center"> blog </h1>

        <form action="blog_insert.php" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-2">
                    หัวเรื่อง
                </div>
                <div class="col-md-10">
                    <input type="text" name="title" class="form-control" />
                </div>
            </div>

            <div class="row pt-2">
                <div class="col-md-2">
                    เนื้อหา
                </div>
                <div class="col-md-10">
                    <textarea rows="5" cols="50" name="detail" class="form-control"></textarea>
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
                <input type="submit" value="บันทึก" class="btn btn-primary" />
            </div>


        </form>
    </div>
</body>

</html>