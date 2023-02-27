<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>programadd</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>    
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-9 col-lg-9">
                <h4>productadd</h4>    
                <?php
                    if(isset($_GET['submit'])){
                        $prgfile= $_GET['prg_file'];
                        $prgname = $_GET['prg_name'];
                        $prgdetail = $_GET['prg_detail'];
                        $sql = "insert into program (prg_file,prg_name,prg_detail) values (' $prgfile','$prgname','$prgdetail')";
                        include 'condb.php';
                        mysqli_query($conn,$sql);
                        mysqli_close($conn);
                        echo "เพิ่มเครื่องมือ $prgname เรียบร้อยแล้ว<br>";
                        echo '<a href="program_list.php">แสดงเครื่องมือทั้งหมด</a>';
                    }else{
                ?>
                    <form class="form-horizontal" role="form" name="prg_add" action="<?php echo $_SERVER['PHP_SELF']?>">
                        <div class="form-group">
                            <label for="prg_file" class="col-md-2 col-lg-2 control-label">addfile</label>
                            <div class="col-md-10 col-lg-10">
                                <input type="text" name="prg_file" id="prg_file" class="form-control">
                            </div>    
                        </div>
                        <div class="form-group">
                            <label for="prg_name" class="col-md-2 col-lg-2 control-label">name</label>
                            <div class="col-md-10 col-lg-10">
                                <input type="text" name="prg_name" id="prg_name" class="form-control">
                            </div>    
                        </div>
                        <div class="form-group">
                            <label for="prg_detail" class="col-md-2 col-lg-2 control-label">detail</label>
                            <div class="col-md-10 col-lg-10">
                                <input type="text" name="prg_detail" id="prg_detail" class="form-control">
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
        </div>    
    </body>
</html>