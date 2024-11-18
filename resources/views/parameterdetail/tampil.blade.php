 @section('konten')
 
        <!-- START USERS ACTIVITY BLOCK -->
        <div class="row">
            <div class="col-md-12">
            <!-- START USERS ACTIVITY BLOCK -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="panel-title-box">
                        <h3><h3><a href="/parameterdetail/tambah/{{ $para_id }}" class="btn btn-success">{{ $keterangan }} </a> &nbsp; Parameter Detail</h3>
                        </div>
                    </div>
    
                    <div class="panel-body">
                        <table class="table datatable table-bordered table-striped">
                            <thead>
                                <tr>
                                  <th>No.</th>
                                  <th>Table ID</th>
                                  <th>Table Code</th>
                                  <th>Short Description</th>
                                  <th>Full Description</th>
                                  <th>Remarks</th>
                                  <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                           
                            @foreach ($parameterdetail as $no=>$data)
                            @php($id=$data->para_id)
                                <tr> 
                                    <td>{{ $no + 1 }}</td>
                                    <td>{{ $data->para_id }}</td>
                                    <td>{{ $data->table_code }}</td>
                                    <td>{{ $data->short_desc }}</td>
                                    <td>{{ $data->long_desc }}</td>
                                    <td>{{ $data->field01 }}</td>
                                    <td>
                                        <a href="{{ route('parameterdetail.edit',$data->id) }}" class="btn btn-sm btn-warning"><i class='fa fa-pencil-square-o'></i></a>

                                  </td>    
                                </tr> 
                            @endforeach
                   
                            </tbody>
                        </table>

                        <div class="col-md-2">
                            <a href="{{ route('parameterheader.tampil') }}" class="btn btn-danger">Kembali</a>
                        </div>
                    </div>                                    
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
