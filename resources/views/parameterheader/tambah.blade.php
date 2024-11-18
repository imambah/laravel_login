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
                    <h3>Tambah Parameter Header</h3>
                </div>
            </div>
            <div class="panel-body">
              <div class="block">
                  <form class="form-horizontal" action={{ route('parameterheader.submit') }} role="form" method="post">
                      @csrf
                      <div class="form-group">
                        <label class="col-md-2 control-label">Table Name</label>
                        <div class="col-md-5">
                          <input type="text" required name="table_name" class="form-control" placeholder="Table Name">
                        </div>
                   </div>

                   <div class="form-group">
                        <label class="col-md-2 control-label">Description</label>
                        <div class="col-md-5">
                            <input type="text" required name="description" class="form-control" placeholder="Description">
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

</x-layout>
    </body>
</html>