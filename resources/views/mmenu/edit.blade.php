
@section('konten')

<!-- START USERS ACTIVITY BLOCK -->
        <div class="panel panel-default">

            <div class="panel-body">
              <div class="block">
                  <form class="form-horizontal" action={{ route('mmenu.update',$mmenu->id) }} role="form" method="post">
                      @csrf

                      <div class="form-group">
                         <label class="col-md-2 control-label">Nama Menu</label>
                        <div class="col-md-5">
                         <input type="text" required name="menu_name" class="form-control" value="{{ $mmenu->menu_name }}" >
                        </div>
                      </div>

                     <div class="form-group">
                          <label class="col-md-2 control-label">Keterangan</label>
                          <div class="col-md-5">
                            <input type="text" required name="description" class="form-control" value="{{ $mmenu->description }}" >
                          </div>
                     </div>
                     
                     <div class="form-group">
                          <label class="col-md-2 control-label">Icon</label>
                          <div class="col-md-5">
                            <input type="text" required name="icon" class="form-control" value="{{ $mmenu->icon }}" >
                          </div>
                     </div>

                     <div class="form-group">
                          <label class="col-md-2 control-label">Tab</label>
                          <div class="col-md-5">
                            <input type="text" required name="tab" class="form-control" value="{{ $mmenu->tab }}" >
                          </div>
                     </div>

                     <div class="form-group">
                          <label class="col-md-2 control-label">Link</label>
                          <div class="col-md-5">
                            <input type="text" required name="link" class="form-control" value="{{ $mmenu->link }}" >
                          </div>
                     </div>

                     <div class="form-group">
                          <label class="col-md-2 control-label">Sort</label>
                          <div class="col-md-5">
                            <input type="text" required name="sort" class="form-control" value="{{ $mmenu->sort }}" >
                          </div>
                     </div>

                     <div class="col-md-2">
                         <input type="submit" name="simpan" value="Save" class="btn btn-success" />
                         <a href="/mmenu" class="btn btn-danger">Kembali</a>
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
