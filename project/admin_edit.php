
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>adminedit</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>        
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-3 col-lg-3">
                    <p></p>
                </div>  
                <div class="col-sm-12 col-md-9 col-lg-9">
                <h4>adminedit</h4>    
                <?php
                    include 'condb.php';
                    if(isset($_POST['submit'])){
                        $name  = $_POST['name'];
                        $lastname = $_POST['lastname'];
                        $phone = $_POST['telephone'];
                        $username = $_POST['username'];
                        $password = $_POST['password'];
                        $id = $_POST['id'];
                        $sql = "update users set name='$name',lastname=' $lastname',telephone=' $phone',username=' $username' where password=' $password'";
                        mysqli_query($conn,$sql);
                        mysqli_close($conn);
                        echo "เพิ่มเครื่องมือ  $name  เรียบร้อยแล้ว<br>";
                        echo '<a href="admin_list.php">แสดงเครื่องมือทั้งหมด</a>';
                    }else{
                        $fid = $_REQUEST['id'];
                        $sql ="SELECT * FROM member where id='$id'";
                        $result = mysqli_query($conn,$sql);
                        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                        $fname = $row['name'];
                        $flastname = $row['lastname'];
                        $fphone = $row['telephone'];
                        $fusername = $row['username'];
                        $fpassword = $row['password'];
                        mysqli_free_result($result);
                        mysqli_close($conn);                        
                ?>
                    <form class="form-horizontal" role="form" name="admin_edit" action="<?php echo $_SERVER['PHP_SELF']?>">
                        <input type="hidden" name="pr_id" id="pr_id" value="<?php echo "$fpr_id";?>">
                        <div class="form-group">
                            <label for="name" class="col-md-2 col-lg-2 control-label">เเก้ไขชื่อ</label>
                            <div class="col-md-10 col-lg-10">
                                <input type="text" name="name" id="name" class="form-control" value="<?php echo "$fname";?>">
                            </div>    
                        </div>
                        <div class="form-group">
                            <label for="lastname" class="col-md-2 col-lg-2 control-label">เเก้ไขนามสกุล</label>
                            <div class="col-md-10 col-lg-10">
                                <input type="text" name="lastname" id="lastname" class="form-control" value="<?php echo "$flastname";?>">
                            </div>    
                        </div>
                        <div class="form-group">
                            <label for="telephone" class="col-md-2 col-lg-2 control-label">เเก้ไขusername</label>
                            <div class="col-md-10 col-lg-10">
                                <input type="text" name="telephone" id="telephone" class="form-control" value="<?php echo "$fphone";?>">
                            </div>    
                        </div>
                        <div class="form-group">
                            <label for="username" class="col-md-2 col-lg-2 control-label">เเก้ไขpassword</label>
                            <div class="col-md-10 col-lg-10">
                                <input type="text" name="username" id="username" class="form-control" value="<?php echo "$fusername";?>">
                            </div>    
                        <div class="form-group">
                            <label for="password" class="col-md-2 col-lg-2 control-label">เเก้ไขเบปร์โทรศัพท์</label>
                            <div class="col-md-10 col-lg-10">
                                <input type="text" name="password" id="password" class="form-control" value="<?php echo "$fpassword";?>">
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
                <a href ="admin_list.php">ไปหน้าเเสดงข้อมูล</a>
            </div>
        </div>    
    </body>
</html>