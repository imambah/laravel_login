
@section('konten')

<!-- START USERS ACTIVITY BLOCK -->
        <div class="panel panel-default">

            <div class="panel-body">
              <div class="block">
                  <form class="form-horizontal" action={{ route('mmenudetail.update',$mmenudetail->id) }} role="form" method="post">
                      @csrf

                      <div class="form-group">
                        <label class="col-md-2 control-label">ID Menu</label>
                       <div class="col-md-5">
                        <input type="text" required name="id_menu" class="form-control" value="{{ $mmenudetail->id_menu }}" >
                       </div>
                     </div>

                      <div class="form-group">
                         <label class="col-md-2 control-label">Sub Menu</label>
                        <div class="col-md-5">
                         <input type="text" required name="sub_menu" class="form-control" value="{{ $mmenudetail->sub_menu }}" >
                        </div>
                      </div>

                     <div class="form-group">
                          <label class="col-md-2 control-label">Description</label>
                          <div class="col-md-5">
                            <input type="text" required name="description" class="form-control" value="{{ $mmenudetail->description }}" >
                          </div>
                     </div>

                     <div class="form-group">
                          <label class="col-md-2 control-label">Icon</label>
                          <div class="col-md-5">
                            <input type="text" required name="icon" class="form-control" value="{{ $mmenudetail->icon }}" >
                          </div>
                     </div>

                      <div class="form-group">
                        <label class="col-md-2 control-label">Link</label>
                       <div class="col-md-5">
                        <input type="text" name="link" required class="form-control" value="{{ $mmenudetail->link }}" >
                       </div>
                     </div>
                      <div class="form-group">
                        <label class="col-md-2 control-label">Sort</label>
                       <div class="col-md-5">
                        <input type="text" name="sort" required class="form-control" value="{{ $mmenudetail->sort }}" >
                       </div>
                     </div>

                      <div class="col-md-2">
                         <input type="submit" name="simpan" value="Save" class="btn btn-success" />
                         <a href="/mmenudetail/tampil/{{ $mmenudetail->id_menu }}" class="btn btn-danger">Kembali</a>
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
