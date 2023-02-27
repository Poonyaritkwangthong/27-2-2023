<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>adminlist</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.tailwindcss.com"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.js"></script>
        
    </head>
    <body>        
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-3 col-lg-3">
                    <p></p>
                </div>  
                <div class="col-sm-12 col-md-9 col-lg-9">
                    <h2>adminlist</h2>
                </div>
                <button id="multiLevelDropdownButton" data-dropdown-toggle="dropdown" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">Dropdown button <svg class="w-4 h-4 ml-2" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
<!-- Dropdown menu -->
<div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="multiLevelDropdownButton">
      <li>
        <button id="doubleDropdownButton" data-dropdown-toggle="doubleDropdown" data-dropdown-placement="right-start" type="button" class="flex items-center justify-between w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dropdown<svg aria-hidden="true" class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg></button>
          <div id="doubleDropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="doubleDropdownButton">
              <li>
                <a href="admin_list.php" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">adminlistpage</a>
              </li>
              <li>
                <a href="program_list.php" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">programlistpage</a>
              </li>
              <li>
                <a href="draw_list.php" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">productlistpage</a>
              </li>
            </ul>
        </div>
      </li>
    </ul>
</div>
                    <a href="admin_add.php" class="btn btn-link">เพิ่มบัญชี</a>
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>firstname</th>
                                <th>lastname</th>
                                <th>phone</th>
                                <th>username</th>
                                <th>password</th>
                            </tr>                
                        </thead>
                        <tbody>
                            <?php
                                include 'condb.php';
                                $sql =  'SELECT * FROM member order by id';
                                $result = mysqli_query($conn,$sql);
                                while (($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) != NULL) {
                                    echo '<tr>';
                                    echo '<td>' . $row['name'] . '</td>';
                                    echo '<td>' . $row['lastname'] . '</td>';
                                    echo '<td>' . $row['telephone'] . '</td>';
                                    echo '<td>' . $row['username'] . '</td>';
                                    echo '<td>' . $row['password'] . '</td>';
                                    echo '<td>';
                            ?>
                                <a href="admin_edit.php?id=<?php echo $row['id'];?>" class="btn btn-warning">แก้ไข</a>
                                <a href="JavaScript:if(confirm('ยืนยันการลบ')==true){window.location='admin_delete.php?id=<?php echo $row["id"];?>'}" class="btn btn-danger">ลบ</a>
                            <?php
                                    echo '</td>';
                                    echo '</tr>';
                                }
                                mysqli_free_result($result);
                                mysqli_close($conn);
                            ?>
                        </tbody>    
                    </table>
                </div>    
            </div>
        </div>
            
    </body>
</html>