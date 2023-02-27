<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>drawadd</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>    
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-9 col-lg-9">
                <h4>drawadd</h4>    
                <?php
                    if(isset($_GET['submit'])){
                        $dpr_name = $_GET['dpr_name'];
                        $dpr_type = $_GET['dpr_type'];
                        $dpr_img = $_GET['dpr_image'];
                        $dpr_detail = $_GET['dpr_detail'];
                        $sql = "insert into product (dpr_name,dpr_type,dpr_image,dpr_detail) values ('$dpr_name','$dpr_type','$dpr_img','$dpr_detail')";
                        include 'connectdb.php';
                        mysqli_query($conn,$sql);
                        mysqli_close($conn);
                        echo "เพิ่มเครื่องมือ $dpr_name เรียบร้อยแล้ว<br>";
                        echo '<a href="draw_list.php">แสดงเครื่องมือทั้งหมด</a>';
                    }else{
                ?>
                    <form class="form-horizontal" role="form" name="dpr_add" action="<?php echo $_SERVER['PHP_SELF']?>">
                        <div class="form-group">
                            <label for="dpr_name" class="col-md-2 col-lg-2 control-label">ชื่อรูป</label>
                            <div class="col-md-10 col-lg-10">
                                <input type="text" name="dpr_name" id="dpr_name" class="form-control">
                            </div>    
                        </div>
                        <div class="form-group">
                            <label for="dpr_name" class="col-md-2 col-lg-2 control-label">ประภท</label>
                            <div class="col-md-10 col-lg-10">
                                <input type="text" name="dpr_type" id="dpr_type" class="form-control">
                            </div>    
                        </div>
                        <div class="form-group">
                            <label for="dpr_name" class="col-md-2 col-lg-2 control-label">เพิ่มรูปภาพ</label>
                            <div class="col-md-10 col-lg-10">
                                <input type="text" name="dpr_image" id="dpr_image" class="form-control">
                            </div>    
                        </div>
                        <div class="form-group">
                            <label for="dpr_name" class="col-md-2 col-lg-2 control-label">เพิ่มรายระเอียด</label>
                            <div class="col-md-10 col-lg-10">
                                <input type="text" name="dpr_detail" id="dpr_detail" class="form-control">
                            </div>    
                        </div>
                        <div class="form-group">
                            <div class="col-md-10 col-lg-10">
                                <input type="submit" name="submit" value="ตกลง" class="btn btn-default">
                            </div>    
                        </div>
                    </form>
                <?php
                    }
                ?>
                </div>    
            </div>
        </div>    
    </body>
</html>