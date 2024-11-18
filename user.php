<?php
include "koneksi.php";
?>
    <div class="row">
        <div class="col-md-12">
            
            <!-- START USERS ACTIVITY BLOCK -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="panel-title-box">
                        <h3><a href="index.php?m=user_tambah" class="btn btn-success">Tambah</a> &nbsp; User</h3>
                    </div>                                   
                </div>                                
                <div class="panel-body">
                    <table class="table datatable table-bordered table-striped">
                        <thead>
                            <tr>
                              <th>No.</th>
                              <th>User ID</th>
                              <th>Username</th>
                              <th>Password</th>
                              <th>Level</th>
                              <th>Status Login</th>
                              <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                          
                            <?php
                            $query = mysqli_query($conn, "SELECT * FROM user");
                            $no = 1;

                            while ($rows = mysqli_fetch_array($query)){

                              echo "<tr>
                              <td>".$no++."</td>
                              <td>".$rows['user_id']."</td>
                              <td>".$rows['username']."</td>
                              <td>".$rows['password']."</td>
                              <td>".$rows['para_id']."</td>  
                              <td>".$rows['status_login']."</td>
                              <td><a href='index.php?m=user_edit&id=$rows[user_id]' class='btn btn-info' ><i class='fa fa-pencil-square-o'></i></a>
                                  
                              </td>  
                              </tr>";
                            }

                            ?>
                        </tbody>
                    </table>
                </div>                                    
            </div>
            <!-- END USERS ACTIVITY BLOCK -->
            
        </div>
    </div>                              
  </div>
<?php
if(!empty($_GET['id'])){
    $id = $_GET['id'];
    $query = mysql_query("DELETE FROM user WHERE user_id='$id'");
    if($query){
      echo "<script>
        alert('Delete User Berhasil ...');
        document.location='index.php?m=user'
      </script>";
    } else {
      echo "<script>
        alert('Delete User Gagal ...');
        document.location='index.php?m=user'
      </script>";
    }
}
?>