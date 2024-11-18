
@section('konten')

<!-- START USERS ACTIVITY BLOCK -->
        <div class="panel panel-default">

            <div class="panel-body">
              <div class="block">
                  <form class="form-horizontal" action={{ route('parameterdetail.update',$parameterdetail->id) }} role="form" method="post">
                      @csrf

                      <div class="form-group">
                        <label class="col-md-2 control-label">Para ID</label>
                       <div class="col-md-5">
                        <input type="text" required name="para_id" class="form-control" value="{{ $parameterdetail->para_id }}" >
                       </div>
                     </div>

                      <div class="form-group">
                         <label class="col-md-2 control-label">Kode Tabel</label>
                        <div class="col-md-5">
                         <input type="text" required name="table_code" class="form-control" value="{{ $parameterdetail->table_code }}" >
                        </div>
                      </div>

                     <div class="form-group">
                          <label class="col-md-2 control-label">Short Description</label>
                          <div class="col-md-5">
                            <input type="text" required name="short_desc" class="form-control" value="{{ $parameterdetail->short_desc }}" >
                          </div>
                     </div>

                     <div class="form-group">
                          <label class="col-md-2 control-label">Long Description</label>
                          <div class="col-md-5">
                            <input type="text" required name="long_desc" class="form-control" value="{{ $parameterdetail->long_desc }}" >
                          </div>
                     </div>

                      <div class="form-group">
                        <label class="col-md-2 control-label">Keterangan</label>
                       <div class="col-md-5">
                        <input type="text" name="field01" required class="form-control" value="{{ $parameterdetail->field01 }}" >
                       </div>
                     </div>

                      <div class="col-md-2">
                         <input type="submit" name="simpan" value="Save" class="btn btn-success" />
                         <a href="{{ route('parameterdetail.tampil',$parameterdetail->para_id) }}" class="btn btn-danger">Kembali</a>
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
