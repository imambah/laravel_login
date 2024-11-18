<!DOCTYPE html>
<html lang="en">
    <x-header></x-header>
    <body>
        <x-layout>

@section('konten')

<!-- START USERS ACTIVITY BLOCK -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="panel-title-box">
                    <h3>Tambah Quiz Header</h3>
                </div>
            </div>
            <div class="panel-body">
              <div class="block">
                  <form class="form-horizontal" action={{ route('quizheader.submit') }} role="form" method="post">
                      @csrf
                      <div class="form-group">
                        <label class="col-md-2 control-label">Keterangan</label>
                        <div class="col-md-5">
                          <input type="text" required name="description" class="form-control" placeholder="Keterangan">
                        </div>
                   </div>

                   <div class="form-group">
                        <label class="col-md-2 control-label">Jenis</label>
                        <div class="col-md-5">
                            <input type="text" required name="jenis" class="form-control" placeholder="Jenis">
                        </div>
                   </div>

                   <div class="form-group">
                        <label class="col-md-2 control-label">Narasi</label>
                        <div class="col-md-5">
                            <input type="text" required name="narasi" class="form-control" placeholder="Narasi">
                        </div>
                   </div>

                   <div class="form-group">
                        <label class="col-md-2 control-label">Petunjuk</label>
                        <div class="col-md-5">
                            <input type="text" required name="petunjuk" class="form-control" placeholder="Petunjuk">
                        </div>
                   </div>

                   <div class="form-group">
                        <label class="col-md-2 control-label">Field01</label>
                        <div class="col-md-5">
                            <input type="text" required name="field01" class="form-control" placeholder="Field01">
                        </div>
                   </div>

                   <div class="form-group">
                        <label class="col-md-2 control-label">Field02</label>
                        <div class="col-md-5">
                            <input type="text" required name="field02" class="form-control" placeholder="Field02">
                        </div>
                   </div>

                   <div class="form-group">
                        <label class="col-md-2 control-label">Field03</label>
                        <div class="col-md-5">
                            <input type="text" required name="field03" class="form-control" placeholder="Field03">
                        </div>
                   </div>

                   <div class="form-group">
                        <label class="col-md-2 control-label">Field04</label>
                        <div class="col-md-5">
                            <input type="text" required name="field04" class="form-control" placeholder="Field04">
                        </div>
                   </div>

                   <div class="form-group">
                        <label class="col-md-2 control-label">Field05</label>
                        <div class="col-md-5">
                            <input type="text" required name="field05" class="form-control" placeholder="Field05">
                        </div>
                   </div>

                    <div class="form-group">
                       <label class="col-md-2 control-label">Status</label>
                         <div class="col-md-5">

                            <select name="status" class="form-control">
                              <option value="Aktif">Aktif</option>
                              <option value="Inaktif">Inaktif</option>
                            </select>
                         </div>
                    </div>

                    <div class="form-group">
                      <label class="col-md-2 control-label">Responden</label>
                        <div class="col-md-5">
                           <select name="responden" required class="form-control" placeholder="Responden"">
                             <option value="Mahasiswa">Mahasiswa</option>
                             <option value="Dosen">Dosen</option>
                             <option value="Pegawai">Pegawai</option>
                             <option value="Perusahaan">Perusahaan</option>
                             <option value="Wisudawan">Wisudawan</option>
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
                            <a href="/quizheader" class="btn btn-danger">Kembali</a>
                    </div>

                 </form>
              </div>
            </div> 
        </div>
        <!-- END USERS ACTIVITY BLOCK -->

@endsection

</x-layout>
    </body>
</html>
