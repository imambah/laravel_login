 @section('konten')

        <!-- START USERS ACTIVITY BLOCK -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="panel-title-box">
                    <h3><a href="/mmenu/tambah" class="btn btn-success">Tambah</a> &nbsp; Main Menu</h3>
                </div>                                   
            </div>                                
            <div class="panel-body">
                <table class="table datatable table-bordered table-striped">
                    <thead>
                        <tr>
                          <th>No.</th>
                          <th>Nama Menu</th>
                          <th>Keterangan</th>
                          <th>Icon</th>
                          <th>Tab</th>
                          <th>Link</th>
                          <th>Sort</th>
                          <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                      @foreach ($mmenu as $no=>$data)
                       <tr> 
                        <td>{{ $no + 1 }}</td>
                        <td>{{ $data->menu_name }}</td>
                        <td>{{ $data->description }}</td>
                        <td>{{ $data->icon }}</td>
                        <td>{{ $data->tab }}</td>
                        <td>{{ $data->link }}</td>
                        <td>{{ $data->sort }}</td>
                        <td>
                            <a href="{{ route('mmenu.edit',$data->id) }}" class="btn btn-sm btn-warning"><i class='fa fa-pencil-square-o'></i></a>
                            <a href="{{ route('mmenudetail.tampil',$data->id) }}" class='btn btn-sm btn-info' ><i class='fa fa-folder-open-o'></i></a>
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
