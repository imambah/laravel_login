 @section('konten')

        <!-- START USERS ACTIVITY BLOCK -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="panel-title-box">
                    <h3><a href="/quizheader/tambah" class="btn btn-success">Tambah</a> &nbsp; Quiz Header</h3>
                </div>                                   
            </div>                                
            <div class="panel-body">
                <table class="table datatable table-bordered table-striped">
                    <thead>
                        <tr>
                          <th>No.</th>
                          <th>Keterangan</th>
                          <th>Jenis</th>
                          <th>Narasi</th>
                          <th>Petunjuk</th>
                          <th>Field01</th>
                          <th>Field02</th>
                          <th>Field03</th>
                          <th>Field04</th>
                          <th>Field05</th>
                          <th>Status</th>
                          <th>Responden</th>
                          <th>Created By</th>
                          <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                      @foreach ($quizheader as $no=>$data)
                       <tr> 
                        <td>{{ $no + 1 }}</td>
                        <td>{{ $data->description }}</td>
                        <td>{{ $data->jenis }}</td>
                        <td>{{ $data->narasi }}</td>
                        <td>{{ $data->petunjuk }}</td>
                        <td>{{ $data->field01 }}</td>
                        <td>{{ $data->field02 }}</td>
                        <td>{{ $data->field03 }}</td>
                        <td>{{ $data->field04 }}</td>
                        <td>{{ $data->field05 }}</td>
                        <td>{{ $data->status }}</td>
                        <td>{{ $data->responden }}</td>
                        <td>{{ $data->created_by }}</td>
                        <td>
                            <a href="{{ route('quizheader.edit',$data->id) }}" class="btn btn-sm btn-warning"><i class='fa fa-pencil-square-o'></i></a>
                            <a href="{{ route('quizmaster.tampil',$data->jenis) }}" class='btn btn-sm btn-info' ><i class='fa fa-folder-open-o'></i></a>
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
