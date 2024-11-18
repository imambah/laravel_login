 @section('konten')
 
        <!-- START USERS ACTIVITY BLOCK -->
        <div class="row">
            <div class="col-md-12">
            <!-- START USERS ACTIVITY BLOCK -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="panel-title-box">
                        <h3><h3><a href="/mmenudetail/tambah/{{ $id_menu }}" class="btn btn-success">{{ $keterangan }} </a> &nbsp; Menu Detail: {{ $menuname }}</h3>
                        </div>
                    </div>
    
                    <div class="panel-body">
                        <table class="table datatable table-bordered table-striped">
                            <thead>
                                <tr>
                                  <th>No.</th>
                                  <th>ID Menu</th>
                                  <th>Sub Menu</th>
                                  <th>Description</th>
                                  <th>Icon</th>
                                  <th>Link</th>
                                  <th>Sort</th>
                                  <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                            @foreach ($mmenudetail as $no=>$data)
                                <tr> 
                                    <td>{{ $no + 1 }}</td>
                                    <td>{{ $data->id_menu }}</td>
                                    <td>{{ $data->sub_menu }}</td>
                                    <td>{{ $data->description }}</td>
                                    <td>{{ $data->icon }}</td>
                                    <td>{{ $data->link }}</td>
                                    <td>{{ $data->sort }}</td>
                                    <td>
                                        <a href="{{ route('mmenudetail.edit',$data->id) }}" class="btn btn-sm btn-warning"><i class='fa fa-pencil-square-o'></i></a>
                                    </td>    
                                </tr> 
                            @endforeach
                   
                            </tbody>
                        </table>

                        

                        <div class="col-md-2">
                            <a href="{{ route('mmenu.tampil') }}" class="btn btn-danger">Kembali</a>
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
