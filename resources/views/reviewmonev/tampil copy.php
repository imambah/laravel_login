<!-- 
$query = mysqli_query($conn, "SELECT * FROM parameter_detail WHERE para_id=9 and table_code='Sekarang'");
$parameter_detail = mysqli_fetch_array($query);
$tahun_ajaran = $parameter_detail['short_desc'];
$semester = $parameter_detail['long_desc'];
?> -->

    <div class="row">
        <div class="col-md-12">
            
            <!-- START USERS ACTIVITY BLOCK -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="panel-title-box">
                        <h3>Data Monitoring & Evaluation Tahun Ajaran: <?php echo $tahun_ajaran ?> - <?php echo $semester ?></h3>
                    </div>                                   
                </div>

                <div class="panel-heading">
                  <form class="form-horizontal" action="" role="form" method="post">
                          <label class="col-md-2 control-label">Instrumen</label>
                          <div class="col-md-5">
                              <select name="jenis" class="form-control">
                                <option value=<?php echo $id ?>><?php echo $description ?></option>
                                    <?php
                                        $q_jenis = mysqli_query($conn, "SELECT * FROM quiz_header ORDER BY description ASC");
                                        while ($r_jenis = mysqli_fetch_array($q_jenis)) {
                                               echo "<option value='".$r_jenis['jenis']."'>".$r_jenis['description']."</option>";
                                            }
                                    ?>
                              </select>
                          </div>
                          <div class="col-md-4">
                               <input type="submit" name="pilih" value="Refresh" class="btn btn-success"/>
                               <button class="btn btn-danger toggle" data-toggle="exportTable"><i class="fa fa-bars"></i> Export Data</button>
                          </div>
                </div>
                </div>

                <div class="widget-content" id="exportTable" style="display: none;">
                          <div class="row">
                                <div class="col-md-2">
                                    <div class="list-group border-bottom">
                                        <a href="#" class="list-group-item" onClick ="$('#customers').tableExport({type:'csv',escape:'false'});"><img src='img/icons/csv.png' width="24"/> CSV</a>
                                        
                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <div class="list-group border-bottom">
                                        <a href="#" class="list-group-item" onClick ="$('#customers').tableExport({type:'excel',escape:'false'});"><img src='img/icons/xls.png' width="24"/> XLS</a>
                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <div class="list-group border-bottom">
                                        <a href="#" class="list-group-item" onClick ="$('#customers').tableExport({type:'doc',escape:'false'});"><img src='img/icons/word.png' width="24"/> Word</a>
                                    </div>
                                </div>
                          </div>
                </div>

                <div class="panel-body">
                    <table id="customers" class="table datatable table-bordered table-striped">
                        <thead>
                            <tr>
                              <th>No.</th>
            <!-- Responden s/d Keterangan 4 sesuaikan dengan isi field1 s/d field5 di quis_header -->
                               <?php
                               //$id = isset($_POST['jenis']);
                               $query = mysqli_query($conn, "SELECT * FROM quiz_header where jenis = '$id'");
                               $data = mysqli_fetch_array($query);
                               $grup_quiz = $data['jenis'];
                               ?>
                              <th>Tanggal<?php echo $id ?></th>
                              <th><?php echo $data['field01'] ?></th>
                              <th><?php echo $data['field02'] ?></th>
                              <th><?php echo $data['field03'] ?></th>
                              <th><?php echo $data['field04'] ?></th>
                            <?php
                            if  ($data['field05'] != '') {
                            ?>
                              <th><?php echo $data['field05'] ?></th>
                            <?php
                            }
                            ?>
                              <th>Status</th>
                              <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                          
                            <?php
                            $query = mysqli_query($conn, "SELECT * FROM data_quiz
                                                         where grup_quiz = '$grup_quiz' and tahun_ajaran='$tahun_ajaran' and
                                                         semester='$semester' and grup_quiz = '$id'");
                            $no = 1;

                            while ($rows = mysqli_fetch_array($query)){
                            //$no++
                            ?>
                            <tr>
                              <td><?php echo $no++ ?></td>
                              <td><?php echo $rows['tanggal'] ?></td>
                              <td><?php echo $rows['field1'] ?></td>
                              <td><?php echo $rows['field2'] ?></td>
                              <td><?php echo $rows['field3'] ?></td>
                              <td><?php echo $rows['field4'] ?></td>
                            <?php
                            if ($data['field05'] != '') {
                            ?>
                              <td><?php echo $rows['field5'] ?></td>
                            <?php  }
                            ?>
                              <td><?php echo $rows['status'] ?></td>
                              <td>
                                  <a href="index.php?m=review_monev_edit&id01=<?php echo $id ?>&id=<?php echo $rows['data_quiz_id'] ?>"
                                  class='btn btn-info' ><i class='fa fa-pencil-square-o'></i></a> </td></a>
                            </tr>
                            <?php
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
  if(isset($_POST['pilih'])){
    $jenis = $_POST['jenis'];

        echo "<script>
          document.location='index.php?m=review_monev&id=$jenis'
        </script>";
  }
?>