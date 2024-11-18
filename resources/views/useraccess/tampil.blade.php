@section('konten')

<div class="row">
    <div class="col-md-12">
        
        <!-- START USERS ACTIVITY BLOCK -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="panel-title-box">
                    <h3>&nbsp; Hak Akses User</h3>
                </div>
            </div>
            <div class="panel-body">
                <table class="table datatable table-bordered table-striped">
                    <thead>
                        <tr>
                          <th>No.</th>
                          <th>User Name</th>
                          <th>Menu</th>
                          <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        <tr>
                            @foreach($quser as $no=>$user)
                            <td>{{  $no + 1 }}</td>
                            <td>{{ $user->username }}</td>
                            <td>
                                @foreach ($menu as $data)
                                    {{ $data->sub_menu }} | 
                                @endforeach
                            </td>
                            
                            <td><a href='#' class='btn btn-info' ><i class='fa fa-pencil-square-o'></i></a></td>
                        </tr>    
                            @endforeach     
                        
                    </tbody>
                </table>
            </div>                                    
        </div>
        <!-- END USERS ACTIVITY BLOCK -->
        
    </div>
</div>                              
</div>
        
@endsection

<!DOCTYPE html>
<html lang="en">

    <x-header></x-header>
    
   <body>
    <x-layout></x-layout>
   </body>
</html>
