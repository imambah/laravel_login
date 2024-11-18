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
                    <h3>{{ $keterangan }} Sub Menu untuk Menu: {{ $menuname }}</h3>
                </div>
            </div>
            <div class="panel-body">
              <div class="block">
                  <form class="form-horizontal" action={{ route('mmenudetail.submit') }} role="form" method="post">
                    @csrf
                    <div class="form-group">
                        <label class="col-md-2 control-label">Menu ID</label>
                        <div class="col-md-5">
                          <input type="text" required name="id_menu" class="form-control" value="{{ $id }}"  />
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label">Sub Menu</label>
                        <div class="col-md-5">
                          <input type="text" required name="sub_menu" class="form-control" placeholder="Sub Menu">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label">Short Description</label>
                        <div class="col-md-5">
                          <input type="text" required name="short_desc" class="form-control" placeholder="Short Description">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label">Description</label>
                        <div class="col-md-5">
                          <input type="text" required name="description" class="form-control" placeholder="Description">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label">Icon</label>
                        <div class="col-md-5">
                          <input type="text" name="icon" class="form-control" placeholder="Icon">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label">Link</label>
                        <div class="col-md-5">
                          <input type="text" name="link" class="form-control" placeholder="link">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label">Sort</label>
                        <div class="col-md-5">
                          <input type="text" name="sort" class="form-control" placeholder="sort">
                        </div>
                    </div>

                    <div class="col-md-2">
                        <input type="submit" name="simpan" value="Save" class="btn btn-success" />
                        <a href="/mmenudetail/tampil/{{ $id }}" class="btn btn-danger">Kembali</a>
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