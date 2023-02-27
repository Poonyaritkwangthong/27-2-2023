
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>drawedit</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>        
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-3 col-lg-3">
                    <p>drawedit</p>
                </div>  
                <div class="col-sm-12 col-md-9 col-lg-9">
                <h4>แก้ไขproduct</h4>    
                <?php
                    include 'condb.php';
                    if(isset($_GET['submit'])){
                        $dpr_id     = $_GET['dpr_id'];
                        $dpr_name = $_GET['dpr_name'];
                        $dpr_type = $_GET['dpr_type'];
                        $dpr_img = $_GET['dpr_image'];
                        $dpr_detail = $_GET['dpr_detail'];
                        $sql        = "update product set dpr_name='$dpr_name',dpr_type='$dpr_type',dpr_image='$dpr_img',dpr_detail='$dpr_detail' where dpr_id='$dpr_id'";
                        mysqli_query($conn,$sql);
                        mysqli_close($conn);
                        echo "เพิ่มเครื่องมือ $dpr_name เรียบร้อยแล้ว<br>";
                        echo '<a href="draw_list.php">แสดงเครื่องมือทั้งหมด</a>';
                    }else{
                        $fdpr_id = $_REQUEST['dpr_id'];
                        $sql =  "SELECT * FROM product where dpr_id='$fdpr_id'";
                        $result = mysqli_query($conn,$sql);
                        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                        $fdpr_name = $row['dpr_name'];
                        $fdpr_type = $row['dpr_type'];
                        $fdpr_img = $row['dpr_image'];
                        $fdpr_detail = $row['dpr_detail'];
                        mysqli_free_result($result);
                        mysqli_close($conn);                        
                ?>
                    <form class="form-horizontal" role="form" name="draw_edit" action="<?php echo $_SERVER['PHP_SELF']?>">
                        <input type="hidden" name="dpr_id" id="dpr_id" value="<?php echo "$fdpr_id";?>">
                        <div class="form-group">
                            <label for="dpr_name" class="col-md-2 col-lg-2 control-label">เเก้ไขชื่อรูป</label>
                            <div class="col-md-10 col-lg-10">
                                <input type="text" name="dpr_name" id="dpr_name" class="form-control" value="<?php echo "$fdpr_name";?>">
                            </div>    
                        </div>
                        <div class="form-group">
                            <label for="dpr_type" class="col-md-2 col-lg-2 control-label">เเก้ไรประเภท</label>
                            <div class="col-md-10 col-lg-10">
                                <input type="text" name="dpr_type" id="dpr_type" class="form-control" value="<?php echo " $fdpr_type";?>">
                            </div>    
                        </div>
                        <div class="form-group">
                            <label for="dpr_image" class="col-md-2 col-lg-2 control-label">เเก้ไขรูป</label>
                            <div class="col-md-10 col-lg-10">
                                <input type="text" name="dpr_image" id="dpr_image" class="form-control" value="<?php echo " $fdpr_img";?>">
                            </div>    
                        </div>
                        <div class="form-group">
                            <label for="dpr_detail" class="col-md-2 col-lg-2 control-label">เเก้ไขรายละเอียด</label>
                            <div class="col-md-10 col-lg-10">
                                <input type="text" name="dpr_detail" id="dpr_detail" class="form-control" value="<?php echo " $fdpr_detail";?>">
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
            <div class="row">
                <a href ="draw_list.php">ไปหน้าเเสดงข้อมูล</a>
            </div>
        </div>    
    </body>
</html>