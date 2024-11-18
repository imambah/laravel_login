@section('konten')

    <!-- START USERS ACTIVITY BLOCK -->
        <div class="row">
            <div class="col-md-12">
            <!-- START USERS ACTIVITY BLOCK -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="panel-title-box">
                            <h3><a href="/quizmaster/tambah/{{ $jenis }}" class="btn btn-success">Tambah</a> &nbsp; Quiz Master untuk {{ $keterangan }}</h3>
                        </div>
                    </div>
    
                    <div class="panel-body">
                        <table class="table datatable table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Jenis</th>
                                    <th>Urutan</th>
                                    <th>Kompetensi</th>
                                    <th>Pernyataan</th>
                                    <th>Variable</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>



                            @foreach ($quizmaster as $no=>$data)
                                <tr> 
                                    <td>{{ $no + 1 }}</td>
                                    <td>{{ $data->jenis }}</td>
                                    <td>{{ $data->sequence }}</td>
                                    <td>{{ $data->kompetensi }}</td>
                                    <td>{{ $data->pernyataan }}</td>
                                    <td>{{ $data->variable }}</td>
                                    <td>{{ $data->status }}</td>
                                    <td>
                                        <a href="{{ route('quizmaster.edit',$data->id) }}" class="btn btn-sm btn-warning"><i class='fa fa-pencil-square-o'></i></a>
                                        

                                  </td>    
                                </tr>
                            @endforeach
                   
                            </tbody>
                        </table>

                        <div class="col-md-2">
                            <a href="/quizheader" class="btn  btn-sm btn-danger">Kembali</a>
                            
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
