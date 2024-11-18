@section('konten')

    <div class="row">
        <div class="col-md-12">

            <!-- START USERS ACTIVITY BLOCK -->
         <div class="panel panel-default">
            <div class="panel-heading">
                 <h3>&nbsp</h3><center><img src="{{asset('assets/images/unsika.png')}}" alt="UNSIKA Logo" /></center>
                 <h2>&nbsp</h2>
               @foreach ($tablename as $intro)
                   
                 
                 <div class="panel-title-box">
                      <h2><center>{{ $intro->description }}</center></h2>
                 </div>
            </div>
         </div>

        <div class="col-md-12">
        <div class="panel panel-default">
              <div class="panel-title-box">
                  <div class="panel-body">
                        <div class="form-group">
                             <h5>{{ $intro->narasi }}</h5>
                        </div>
                   </div>
            </div>
        </div>
        </div>

        <div class="col-md-12">
        <div class="panel panel-default">
              <div class="panel-title-box"> 
                  <div class="panel-body">
                        <div class="form-group">
                            <h5>{{ $intro->petunjuk }}</h5>
                        </div>
                  </div>
             </div>
        </div>
        </div>
    </div>
    </div>

        <div class="col-md-12">
        <div class="panel panel-default">
              <div class="panel-title-box">
            <div class="panel-body">

                <form class="form-horizontal" action={{ route('survey.submit') }} role="form" method="post">
                    @csrf
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">{{ $intro->field01 }}</label>
                                        <div class="col-md-9 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" name="field01" class="form-control" placeholder="{{ $intro->field01 }}"  required/>
                                            </div>
                                            <span class="help-block"></span>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">{{ $intro->field02 }}</label>
                                        <div class="col-md-9 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" name="field02" class="form-control" placeholder="{{ $intro->field02 }}"  required/>
                                            </div>
                                            <span class="help-block"></span>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">{{ $intro->field03 }}</label>
                                        <div class="col-md-9 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" name="field03" class="form-control" placeholder="{{ $intro->field03 }}"  required/>
                                            </div>
                                            <span class="help-block"></span>
                                          </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">{{ $intro->field04 }}</label>
                                        <div class="col-md-9 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" name="field04" class="form-control" placeholder="{{ $intro->field04 }}"  required/>
                                            </div>
                                            <span class="help-block"></span>
                                        </div>
                                    </div>

                                    <div class="form-group">

                                    @if (!empty($intro->field05))
                                      <label class="col-md-3 col-xs-12 control-label">{{ $intro->field05 }}</label>
                                        <div class="col-md-9 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" name="field05" class="form-control" placeholder="{{ $intro->field05 }}"  required/>
                                            </div>
                                            <span class="help-block"></span>
                                        </div>
                                      </div>
                                    @endif

                    <!-- batas hiden: grup quiz dan title ini dibuat hiden saja -->
                                     <div class="form-group" style="display:none;">
                                        <div class="col-md-12 col-xs-12" style="display:none;">
                                            <div class="input-group" style="display:none;">
                                                <span class="input-group-addon"><span class="fa fa-pencil" style="display:none;"></span></span>
                                                <input type="text" name="grup_quiz" class="form-control" placeholder="{{ $intro->jenis }}" value="{{ $intro->jenis }}"  style="display:none;"/>
                                            </div>
                                         <span class="help-block"></span>   
                                        </div>
                                    </div>
                                    <div class="form-group" style="display:none;">
                                        <div class="col-md-12 col-xs-12" style="display:none;">
                                            <div class="input-group" style="display:none;">
                                                <span class="input-group-addon"><span class="fa fa-pencil" style="display:none;"></span></span>
                                                <input type="text" name="keterangan_quiz" class="form-control" placeholder="{{ $intro->description }}" value="{{ $intro->description }}" style="display:none;"/>
                                            </div>
                                            <span class="help-block"></span>
                                        </div>
                                    </div>
                    <!-- batas hiden: grup quiz dan title ini dibuat hiden saja -->
            @endforeach
            </div>
    </div>
    </div>
    </div>
    </div>
 

                                <div class="panel-body">
                                   <table class="table datatable table-bordered table-striped" align="center" cellpadding="0" cellspacing="0">
                                      <thead>
                                          <th><h3><center>Pernyataan</center></h3></th>
                                          <th><h3><center>Jawaban</center></h3></th>
                                      </thead>
                                      <tbody>
                                        @php
                                           $jumlah = $quiz_suggest = 0;
                                           $sequence = $answer = array();
                                        @endphp

                                        @foreach($query1 as $data)
                                            @if($data->variable != "Text") 
                                            
                                                <div class="form-group">
                                                    <tr>
                                                        <td width=60%><h5>{{ $data->pernyataan }}</h5></td>
                                                        <td><h5>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                                                            <input type="radio" name="answer[{{ $data->sequence }}]" value="1" required>&nbsp Tidak Baik &nbsp &nbsp &nbsp
                                                            <input type="radio" name="answer[{{ $data->sequence }}]" value="2"> &nbsp Kurang Baik &nbsp &nbsp &nbsp
                                                            <input type="radio" name="answer[{{ $data->sequence }}]" value="3"> &nbsp Baik &nbsp &nbsp &nbsp
                                                            <input type="radio" name="answer[{{ $data->sequence }}]" value="4">&nbsp Sangat Baik</h5></td>
                                                    </tr>
                                                </div>

                                                @php($jumlah++);
                                                @endphp

                                            @else($data->variable == "Text") 
                                                @php 
                                                $quiz_suggest = $data->pernyataan; 
                                                @endphp
                                            @endif
                                        @endforeach
                                  </td>
                               </tr>
                          </tbody>
                       </table>

                       @if($quiz_suggest != "NULL") 

                                  <table class="table datatable table-bordered table-striped" align="center" cellpadding="0" cellspacing="0">
                                      <thead></thead>
                                      <tbody>
                                          <tr>&nbsp<br></tr>
                                          <tr>&nbsp<br></tr>  
                                          <tr width=100%><h4><b>{{ $data->pernyataan }}</b></h4></tr>
                                          <tr><textarea name='suggest' cols="190" rows="5"></textarea></tr>
                                      </tbody>
                                  </table>
                      @else($pernyataan == "NULL")
                                  <table class="table datatable table-bordered table-striped" style="display:none;">
                                  </table>
                       @endif

                                   <div class="form-group">
                                     <label class="col-md-12 control-label"></label>
                                        <div class="col-md-5">
                                            <button type="submit" class="btn btn-success" name="simpan">Save</button>
                                            <a href="/survey" class="btn btn-danger">Kembali</a>
                                        </div>
                                   </div>
                </form>
              </div>
            </div>
          </div>
        </div>
            <!-- END USERS ACTIVITY BLOCK -->

    </div>
  </div>
</div>

@endsection

<!DOCTYPE html>
<html lang="en">
   <link rel="stylesheet" type="text/css" href="{{asset('assets/bootstrap/css/isisurvey.css')}}">
   <x-header></x-header>
    
   <body>
    <x-layout></x-layout>
   </body>
</html>
