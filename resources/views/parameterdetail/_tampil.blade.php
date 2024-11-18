 @section('konten')

        <!-- START USERS ACTIVITY BLOCK -->
        <div class="row">
            <div class="col-md-12">
            <!-- START USERS ACTIVITY BLOCK -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="panel-title-box">
                        <h3><h3><a href="/parameterdetail/tambah" class="btn btn-success">Tambah</a> &nbsp; Parameter Detail</h3>
                        </div>
                    </div>
    
                    <div class="panel-body">
                        <table class="table datatable table-bordered table-striped">
                            <thead>
                                <tr>
                                  <th>No.</th>
                                  <th>Table Name</th>
                                  <th>Table Code</th>
                                  <th>Short Description</th>
                                  <th>Full Description</th>
                                  <th>Remarks</th>
                                  <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            
                            <?php 
                                $nomor = 0;
                                $para_id = 2 
                            ?>
                            @foreach ($parameterdetail as $no=>$data)
                                <?php $nomor = $nomor+1; ?>
                                <tr> 
                                  <td>{{ $nomor }}</td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td>
                                    <a href="{{ route('parameterdetail.edit',$para_id) }}" class="btn btn-sm btn-warning"><i class='fa fa-pencil-square-o'></i></a>
                                  </td>    
                                </tr> 
                            @endforeach
                   
                            </tbody>
                        </table>

                        <div class="col-md-2">
                            <a href="/parameterheader" class="btn btn-danger">Kembali</a>
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
