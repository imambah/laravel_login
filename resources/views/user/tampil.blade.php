 @section('konten')

        <!-- START USERS ACTIVITY BLOCK -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="panel-title-box">
                    <h3><a href="/user/tambah" class="btn btn-success">Tambah</a> &nbsp;User</h3>
                </div>                                   
            </div>                                
            <div class="panel-body">
                <table class="table datatable table-bordered table-striped">
                    <thead>
                        <tr>
                          <th>No.</th>
                          <th>Username</th>
                          <th>Password</th>
                          <th>Level</th>
                          <th>Status Login</th>
                          <th>Status</th>
                          <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                      @foreach ($user as $no=>$data)
                       <tr> 
                        <td>{{ $no + 1 }}</td>
                        <td>{{ $data->username }}</td>
                        <td>{{ $data->password }}</td>
                        <td>{{ $data->level }}</td>
                        <td>{{ $data->status_login }}</td>
                        <td>{{ $data->status }}</td>

                        <td>
                            <a href="{{ route('user.edit',$data->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        </td>    
                       </tr> 
                      @endforeach
                   
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
