
@section('konten')

@php($jenis={!! Request::segment(1) !!})
dd($jenis);
@endphp

<!-- START USERS ACTIVITY BLOCK -->
        <div class="panel panel-default">

            <div class="panel-body">
              <div class="block">
                  <form class="form-horizontal" action={{ route('quizmaster.update',$quizmaster->id) }} role="form" method="post">
                      @csrf

                      <div class="form-group">
                        <label class="col-md-2 control-label">Jenis</label>
                       <div class="col-md-5">
                        <input type="text" required name="jenis" class="form-control" value="{{ $quizmaster->jenis }}" >
                       </div>
                     </div>

                      <div class="form-group">
                         <label class="col-md-2 control-label">Urutan</label>
                        <div class="col-md-5">
                         <input type="text" required name="sequence" class="form-control" value="{{ $quizmaster->sequence }}" >
                        </div>
                      </div>

                     <div class="form-group">
                          <label class="col-md-2 control-label">Kompetensi</label>
                          <div class="col-md-5">
                            <input type="text" required name="kompetensi" class="form-control" value="{{ $quizmaster->kompetensi }}" >
                          </div>
                     </div>

                     <div class="form-group">
                          <label class="col-md-2 control-label">Pernyataan</label>
                          <div class="col-md-5">
                            <input type="text" required name="pernyataan" class="form-control" value="{{ $quizmaster->pernyataan }}" >
                          </div>
                     </div>

                      <div class="form-group">
                        <label class="col-md-2 control-label">Variable</label>
                        <div class="col-md-5">
                          <input type="text" name="variable" required class="form-control" value="{{ $quizmaster->variable }}" >
                        </div>
                     </div>

                     <div class="form-group">
                         <label class="col-md-2 control-label">Status</label>
                            <div class="col-md-5">
                              <select name="status" required class="form-control" >{{ $quizmaster->status }}
                                    <option value="{{ $quizmaster->status }}">{{ $quizmaster->status }}</option>
                                    <option value="Aktif">Aktif</option>
                                    <option value="Inaktif">Inaktif</option>
                              </select>     
                            </div>

                      <div class="col-md-2">
                         <input type="submit" name="simpan" value="Save" class="btn btn-success" />
                         <a href="/quizmaster/tampil/{{ $id }}" class="btn btn-danger">Kembali</a>
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
