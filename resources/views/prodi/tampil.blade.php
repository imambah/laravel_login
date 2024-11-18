 @section('konten')

        <!-- START USERS ACTIVITY BLOCK -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="panel-title-box">
                    <h3><a href="/prodi/tambah" class="btn btn-success">Tambah</a> &nbsp; Program Studi</h3>
                </div>                                   
            </div>                                
            <div class="panel-body">
                <table class="table datatable table-bordered table-striped">
                    <thead>
                        <tr>
                          <th>No.</th>
                          <th>Prodi ID</th>
                          <th>Nama</th>
                          <th>Fakultas</th>
                          <th>Jenjang</th>
                          <th>Angkatan</th>
                          <th>Jumlah Mahasiswa</th>
                          <th>Jumlah Dosen</th>
                          <th>Status</th>
                          <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                      @foreach ($prodi as $no=>$data)
                       <tr> 
                        <td>{{ $no + 1 }}</td>
                        <td>{{ $data->id }}</td>
                        <td>{{ $data->nama_prodi }}</td>
                        <td>{{ $data->fakultas }}</td>
                        <td>{{ $data->jenjang }}</td>
                        <td>{{ $data->angkatan }}</td>
                        <td>{{ $data->jumlah_mhs }}</td>
                        <td>{{ $data->jumlah_dosen }}</td>
                        <td>{{ $data->status }}</td>
                        <td>
                            <a href="{{ route('prodi.edit',$data->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                <form action="{{ route('prodi.delete',$data->id) }}" method="post">
                                    @csrf
                                    <button class="btn btn-sm btn-danger">Hapus</button>
                                </form>
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
