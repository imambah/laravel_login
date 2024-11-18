
@section('konten')

<!-- START USERS ACTIVITY BLOCK -->
        <div class="panel panel-default">

            <div class="panel-body">
              <div class="block">
                  <form class="form-horizontal" action={{ route('prodi.update',$prodi->id) }} role="form" method="post">
                      @csrf
                      <div class="form-group">
                          <label class="col-md-2 control-label">Program Studi</label>
                          <div class="col-md-5">
                            <input type="text" required name="id" class="form-control" value="{{ $prodi->id }}">
                          </div>
                      </div>

                      <div class="form-group">
                         <label class="col-md-2 control-label">Nama Program Studi</label>
                        <div class="col-md-5">
                         <input type="text" required name="nama_prodi" class="form-control" value="{{ $prodi->nama_prodi }}" >
                        </div>
                      </div>

                     <div class="form-group">
                          <label class="col-md-2 control-label">Fakultas</label>
                          <div class="col-md-5">
                            <input type="text" required name="fakultas" class="form-control" value="{{ $prodi->fakultas }}" >
<!--                            <select required name="fakultas" class="form-control">
                                 <option>Pilih Fakultas  -->
                              <?php
//                                 $query = mysqli_query($conn, "SELECT * FROM parameter_detail WHERE para_id=1");
//                                 while ($r_parameter_header = mysqli_fetch_array($query)) {
                                  # code...
//                                  echo "<option value='".$r_parameter_header['table_code']."'>".$r_parameter_header['long_desc']."</option>";
//                                }
                               ?>
<!--                            </select>  -->
                          </div>
                     </div>

                     <div class="form-group">
                          <label class="col-md-2 control-label">Jenjang</label>
                          <div class="col-md-5">
                            <input type="text" required name="jenjang" class="form-control" value="{{ $prodi->jenjang }}" >
<!--                            <select required name="jenjang"  class="form-control"> 
                                 <option>Pilih Jenjang   -->
                             <?php
//                                 $query = mysqli_query($conn, "SELECT * FROM parameter_detail WHERE para_id=2");
//                                 while ($r_parameter_header = mysqli_fetch_array($query)) {
//                                  # code...
//                                  echo "<option value='".$r_parameter_header['table_code']."'>".$r_parameter_header['long_desc']."</option>";
 //                               }
                               ?>
 <!--                           </select>  -->
                          </div>
                     </div>

                      <div class="form-group">
                         <label class="col-md-2 control-label">Angkatan</label>
                        <div class="col-md-5">
                         <input type="text" name="angkatan" required class="form-control" value="{{ $prodi->angkatan }}" >
                        </div>
                      </div>

                      <div class="form-group">
                         <label class="col-md-2 control-label">Jumlah Mahasiswa</label>
                        <div class="col-md-5">
                         <input type="text" name="jumlah_mhs" required class="form-control" value="{{ $prodi->jumlah_mhs }}" >
                        </div>
                      </div>

                      <div class="form-group">
                         <label class="col-md-2 control-label">Jumlah Dosen</label>
                        <div class="col-md-5">
                         <input type="text" name="jumlah_dosen" required class="form-control" value="{{ $prodi->jumlah_dosen }}" >
                        </div>
                      </div>

                      <div class="form-group">
                         <label class="col-md-2 control-label">Status</label>
                           <div class="col-md-5">

                              <select name="status" required class="form-control" value="{{ $prodi->status }}">
                                <option value="Aktif">Aktif</option>
                                <option value="Inaktif">Inaktif</option>
                              </select>
                           </div>
                      </div>

                      <div class="form-group">
                        <label class="col-md-2 control-label">Created By</label>
                       <div class="col-md-5">
                        <input type="text" name="created_by" required class="form-control" value="Admin" >
                       </div>
                     </div>

                      <div class="col-md-2">
                         <input type="submit" name="simpan" value="Save" class="btn btn-success" />
                         <a href="/prodi" class="btn btn-danger">Kembali</a>
                      </div>
                 </form>
              </div>
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
