

@section('konten')

<!-- START USERS ACTIVITY BLOCK -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="panel-title-box">
                  <h3>Tambah Quiz Master untuk {{ $keterangan }}</h3>
                </div>
            </div>
            <div class="panel-body">
              <div class="block">
                  <form class="form-horizontal" action={{ route('quizmaster.submit') }} role="form" method="post">
                    @csrf

                    <div class="form-group">
                        <label class="col-md-2 control-label">Jenis</label>
                        <div class="col-md-5">
                          <input type="text" required name="jenis" class="form-control" value={{ $jenis }}>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label">Urutan</label>
                        <div class="col-md-5">
                          <input type="text" required name="sequence" class="form-control" placeholder="Urut">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label">Kompetensi</label>
                        <div class="col-md-5">
                          <input type="text" required name="kompetensi" class="form-control" placeholder="Kompetensi">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label">Pernyataan</label>
                        <div class="col-md-5">
                          <input type="text" required name="pernyataan" class="form-control" placeholder="pernyataan">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label">Variable</label>
                        <div class="col-md-5">
                          <input type="text" required name="variable" class="form-control" placeholder="Variable">
                        </div>
                    </div>

                    <div class="form-group">
                      <label class="col-md-2 control-label">Status</label>
                        <div class="col-md-5">
                           <select name="status" required class="form-control" >
                             <option value="Aktif">Aktif</option>
                             <option value="Inaktif">Inaktif</option>
                           </select>
                        </div>
                   </div>

                   <div class="form-group">
                      <label class="col-md-2 control-label">Created By</label>
                        <div class="col-md-5">
                            <input type="text" name="created_by" required class="form-control" value="Admin" />
                        </div>
                   </div>

            </div>

                    <div class="col-md-2">
                        <input type="submit" name="simpan" value="Save" class="btn btn-success" />
                        <a href="/quizmaster/tampil/{{ $jenis }}" class="btn btn-danger">Kembali</a>
                    </div>

                  </form>
              </div>
            </div> 
        </div>
<!-- END USERS ACTIVITY BLOCK -->

@endsection

<!DOCTYPE html>
<html lang="en">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/bootstrap/css/isisurvey.css')}}">
    <x-header></x-header>
    <body>
        <x-layout>
</x-layout>
    </body>
</html>
