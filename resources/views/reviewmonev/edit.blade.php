@section('konten')

    <!-- START USERS ACTIVITY BLOCK -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="panel-title-box">
                        <h3>UBAH STATUS DATA QUIZ eMONEV:</h3>
                        <br>
                        <h3>{{ $description }}</h3>
                    </div>                                   
                </div>

                <div class="panel-body">
                  <form class="form-horizontal" role="form" method="post">
                    <table class="table">
                        <thead>
                            <tr>
                              <th>Tanggal</th>
                              <th>Tahun</br>Ajaran</th>
                              <th>Semester</th>
                              <th><?php echo $row_quiz_header['field01'] ?></th>
                              <th><?php echo $row_quiz_header['field02'] ?></th>
                              <th><?php echo $row_quiz_header['field03'] ?></th>
                              <th><?php echo $row_quiz_header['field04'] ?></th>
                     
                            if  ($row_quiz_header['field05'] != '') {
                   
                              <th><?php echo $row_quiz_header['field05'] ?></th>
                            <?php
                        
                              <th>Status</th>
                              <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                          
                                    <tr>
                                      <td><?php echo $row_data_quiz['tanggal'] ?></td>
                                      <td><?php echo $row_data_quiz['tahun_ajaran'] ?></td>
                                      <td><?php echo $row_data_quiz['semester'] ?></td>
                                      <td><?php echo $row_data_quiz['field1'] ?></td>
                                      <td><?php echo $row_data_quiz['field2'] ?></td>
                                      <td><?php echo $row_data_quiz['field3'] ?></td>
                                      <td><?php echo $row_data_quiz['field4'] ?></td>

                            <?php          
                                if  ($row_data_quiz['field5'] != '') {
                             ?>       
                                      <td><?php echo $row_data_quiz['field5'] ?>"</td>
                            <?php } ?>          
                                      <td>
                                        <div class="form-group">
                                            <select name="status" class="form-control">
                                                <option value="<?php echo $row_data_quiz['status']; ?>">
                                                <?php echo $row_data_quiz['status']; ?></option>
                                            </div>
                                                <option value="Aktif">Aktif</option>
                                                <option value="Inaktif">Inaktif</option>
                                            </select>    
                                            </div>
                                        </div>
                                      </td>
                                      <td><input type="submit" name="simpan" value="Save" class="btn btn-success" />
                                          <a href="index.php?m=review_monev&id=<?php echo $id01 ?>" class="btn btn-danger">Kembali</a>
                                      </td>   
                                    </tr>
                        </tbody>
                    </table>
                 </form>  
               </div>                                    
            </div>
    <!-- END USERS ACTIVITY BLOCK -->

@endsection

<!DOCTYPE html>
<html lang="en">
    <x-header></x-header>
    <body>
        <x-layout></x-layout>
    </body>
</html>
            
            