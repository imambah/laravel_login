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
                    <h3>{{ $keterangan }} Parameter Detail untuk Tabel: {{ $tablename }}</h3>
                </div>
            </div>
            <div class="panel-body">
              <div class="block">
                  <form class="form-horizontal" action={{ route('parameterdetail.submit') }} role="form" method="post">
                    @csrf
                    <div class="form-group">
                        <label class="col-md-2 control-label">Table ID</label>
                        <div class="col-md-5">
                          <input type="text" required name="para_id" class="form-control" value="{{ $id }}" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label">Table Code</label>
                        <div class="col-md-5">
                          <input type="text" required name="table_code" class="form-control" placeholder="Table Code">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label">Short Description</label>
                        <div class="col-md-5">
                          <input type="text" required name="short_desc" class="form-control" placeholder="Short Description">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label">Long Description</label>
                        <div class="col-md-5">
                          <input type="text" required name="long_desc" class="form-control" placeholder="Long Description">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label">Remarks</label>
                        <div class="col-md-5">
                          <input type="text" name="field01" class="form-control" placeholder="Remarks">
                        </div>
                    </div>

                    <div class="col-md-2">
                        <input type="submit" name="simpan" value="Save" class="btn btn-success" />
                        <a href="/parameterdetail/tampil/{{ $id }}" class="btn btn-danger">Kembali</a>
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