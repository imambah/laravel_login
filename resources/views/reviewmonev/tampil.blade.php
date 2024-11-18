@section('konten')

    <!-- START USERS ACTIVITY BLOCK -->
        <div class="panel panel-default">
            <div class="panel-heading">
                    <div class="panel-title-box">
                        <h3>Data Monitoring & Evaluasi :</h3>
                    </div>                                   
            </div>

            <div class="row">
 
                <div class="panel-heading">
                    <form class="form-horizontal" action="" role="form" method="post">
                     @csrf
                        <div class="col-md-1"></div>
                        <label class="col-md-1 control-label" style="padding: 5px;"><b>Tahun Ajaran:</b></label>
                        <div class="col-md-2">

                            <!--   $r_ta = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM v_data_quiz_skala_dashboard WHERE tahun_ajaran <> 'NULL' and semester <> 'NULL'")); -->

                            <select name="tahun_ajaran" class="form-control">
                                <!--  echo $r_ta['tahun_ajaran'];  -->
                                <option value="">Pilih Tahun Ajaran</option>
                                @foreach ($tahunajaran as $data)
                                    <option value="{{ $data->tahun_ajaran }}">{{ $data->tahun_ajaran }}</option>
                                @endforeach  
                            </select>
                        </div>  
                        <div class="col-md-1"></div> 
                        <label class="col-md-1 control-label" style="padding: 5px;"><b>Semester:</b></label>
                        <div class="col-md-1">
                            <select name="semester" class="form-control">
                                <option value="">Pilih Semester</option>
                                <option value="GENAP">Genap</option>
                                <option value="GASAL">Gasal</option>  
                            </select>
                        </div>  
                </div>
            </div>

                <div class="panel-heading">
                    
                        <label class="col-md-2 control-label">Instrumen:</label>
                        <div class="col-md-5">
                              <select name="jenis" class="form-control">
                                @foreach ($quizheader as $data)
                                    <option value="{{ $data->jenis }}">{{ $data->description }}</option>
                                @endforeach  
                              </select>
                        </div>
                        <div class="col-md-4">
                               <input type="submit" name="pilih" value="Refresh" class="btn btn-success"/>
                               <button class="btn btn-danger toggle" data-toggle="exportTable"><i class="fa fa-bars"></i> Export Data</button>
                               <a href="" class="btn btn-danger">Kembali</a>
                        </div>
                </div>
        </div>

                <div class="widget-content" id="exportTable" style="display: none;">
                    <div class="row">
                          <div class="col-md-2">
                              <div class="list-group border-bottom">
                                  <a href="#" class="list-group-item" onClick ="$('#customers').tableExport({type:'csv',escape:'false'});"><img src='img/icons/csv.png' width="24"/> CSV</a>
                                  
                              </div>
                          </div>

                          <div class="col-md-2">
                              <div class="list-group border-bottom">
                                  <a href="#" class="list-group-item" onClick ="$('#customers').tableExport({type:'excel',escape:'false'});"><img src='img/icons/xls.png' width="24"/> XLS</a>
                              </div>
                          </div>

                          <div class="col-md-2">
                              <div class="list-group border-bottom">
                                  <a href="#" class="list-group-item" onClick ="$('#customers').tableExport({type:'doc',escape:'false'});"><img src='img/icons/word.png' width="24"/> Word</a>
                              </div>
                          </div>
                    </div>
                </div>
            </form>

          <div class="panel-body">
              <table id="customers" class="table datatable table-bordered table-striped">
                  <thead>
                      <tr>
                        <th>No.</th>
    <!-- Responden s/d Keterangan 4 sesuaikan dengan isi field1 s/d field5 di quis_header -->
   
                        
                        <th>{{ $field01 }}</th>
                        <th>{{ $field02 }}</th>
                        <th>{{ $field03 }}</th>
                        <th>{{ $field04 }}</th>
                    @if (!empty($field05))
                        <th>{{ $field05 }}</th>
                    @endif
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                  </thead>
                  <tbody>
             
                    @foreach ($query as $no=>$data)
                      <tr>
                        <td>{{ $no + 1 }}</td>
                        
                        <td>{{ $data->field1 }}</td>
                        <td>{{ $data->field2 }}</td>
                        <td>{{ $data->field3 }}</td>
                        <td>{{ $data->field4 }}</td>
                    @if (!empty($field05))    
                        <td>{{ $data->field5 }}</td>
                    @endif    
                        <td>{{ $data->status }}</td>
                        <td>
                            <a href="{{ route('quizheader.edit',$data->id) }}" class='btn btn-info' ><i class='fa fa-pencil-square-o'></i></a> 
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

