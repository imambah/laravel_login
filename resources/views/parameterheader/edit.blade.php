
@section('konten')

<!-- START USERS ACTIVITY BLOCK -->
        <div class="panel panel-default">

            <div class="panel-body">
              <div class="block">
                  <form class="form-horizontal" action={{ route('parameterheader.update',$parameterheader->id) }} role="form" method="post">
                      @csrf

                      <div class="form-group">
                         <label class="col-md-2 control-label">Nama Tabel</label>
                        <div class="col-md-5">
                         <input type="text" required name="table_name" class="form-control" value="{{ $parameterheader->table_name }}" >
                        </div>
                      </div>

                     <div class="form-group">
                          <label class="col-md-2 control-label">Keterangan</label>
                          <div class="col-md-5">
                            <input type="text" required name="description" class="form-control" value="{{ $parameterheader->description }}" >
                          </div>
                     </div>

                     <div class="form-group">
                         <label class="col-md-2 control-label">Status</label>
                           <div class="col-md-5">

                              <select name="status" required class="form-control">
                                <option value="{{ $parameterheader->status }}">{{ $parameterheader->status }}</option>
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
                         <a href="/parameterheader" class="btn btn-danger">Kembali</a>
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
