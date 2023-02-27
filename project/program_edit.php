
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>programedit</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>        
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-3 col-lg-3">
                    <p></p>
                </div>  
                <div class="col-sm-12 col-md-9 col-lg-9">
                <h4>แก้ไขprogram</h4>    
                <?php
                    include 'condb.php';
                    if(isset($_GET['submit'])){
                        $prgfile = $_GET['prg_file'];
                        $prgname = $_GET['prg_name'];
                        $prgdetail = $_GET['prg_detail'];
                        $sql        = "update program set prg_file=' $prgfile',prg_name='$prgname',prg_detail='$prgdetail'";
                        mysqli_query($conn,$sql);
                        mysqli_close($conn);
                        echo "เพิ่มเครื่องมือ  $prgname เรียบร้อยแล้ว<br>";
                        echo '<a href="program_list.php">แสดงเครื่องมือทั้งหมด</a>';
                    }else{
                        $prg_id = $_REQUEST['prg_id'];
                        $sql =  "SELECT * FROM program where prg_id='$prg_id'";
                        $result = mysqli_query($conn,$sql);
                        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                        $fprgfile = $row['prg_file'];
                        $fprgname = $row['prg_name'];
                        $fprgdetail = $row['prg_detail'];
                        mysqli_free_result($result);
                        mysqli_close($conn);                        
                ?>
                    <form class="form-horizontal" role="form" name="program_edit" action="<?php echo $_SERVER['PHP_SELF']?>">
                        <input type="hidden" name="dpr_id" id="dpr_id" value="<?php echo "$prg_id";?>">
                        <div class="form-group">
                            <label for="prg_file" class="col-md-2 col-lg-2 control-label">fileedit</label>
                            <div class="col-md-10 col-lg-10">
                                <input type="text" name="prg_file" id="prg_file" class="form-control" value="<?php echo " $fprgfile";?>">
                            </div>    
                        </div>
                        <div class="form-group">
                            <label for="prg_name" class="col-md-2 col-lg-2 control-label">nameedit</label>
                            <div class="col-md-10 col-lg-10">
                                <input type="text" name="prg_name" id="prg_name" class="form-control" value="<?php echo "  $fprgname";?>">
                            </div>    
                        </div>
                        <div class="form-group">
                            <label for="prg_detail" class="col-md-2 col-lg-2 control-label">detailedit</label>
                            <div class="col-md-10 col-lg-10">
                                <input type="text" name="prg_detail" id="prg_detail" class="form-control" value="<?php echo "  $fprgdetail";?>">
                            </div>    
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
                <a href ="program_list.php">ไปหน้าเเสดงข้อมูล</a>
            </div>
        </div>    
    </body>
</html>