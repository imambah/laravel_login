 @section('konten')

        <!-- START USERS ACTIVITY BLOCK -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="panel-title-box">
                    <h3><a href="/parameterheader/tambah" class="btn btn-success">Tambah</a> &nbsp; Parameter Header</h3>
                </div>                                   
            </div>                                
            <div class="panel-body">
                <table class="table datatable table-bordered table-striped">
                    <thead>
                        <tr>
                          <th>No.</th>
                          <th>Table Name</th>
                          <th>Description</th>
                          <th>Status</th>
                          <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                      @foreach ($parameterheader as $no=>$data)
                       <tr> 
                        <td>{{ $no + 1 }}</td>
                        <td>{{ $data->table_name }}</td>
                        <td>{{ $data->description }}</td>
                        <td>{{ $data->status }}</td>
                        <td>
                            <a href="{{ route('parameterheader.edit',$data->id) }}" class="btn btn-sm btn-warning"><i class='fa fa-pencil-square-o'></i></a>
                            <a href="{{ route('parameterdetail.tampil',$data->id) }}" class='btn btn-sm btn-info' ><i class='fa fa-folder-open-o'></i></a>
                        </td>    
                       </tr> 
                      @endforeach
                    </tbody>
                </table>
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
