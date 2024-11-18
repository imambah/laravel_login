@section('konten')

    <div class="col-md-12">
        <!-- START USERS ACTIVITY BLOCK -->
        <div class="panel panel-default">
               <div class="panel-body">
                   <div class="col-md-12">
                        <a href="#" class="btn btn-danger pull-right">Kembali</a>
                   </div>
            
                       
<!-- <option>Pilih Instrumen Monitoring & Evaluasi</option> -->

        <!-- END USERS ACTIVITY BLOCK -->
    </div>
</div>
</div>
</div>

<!-- Start Doctors Area
    ============================================= -->
    <div class="doctors-area three-colum bg-gray default-padding bottom-less" id="instrumen-monev">
        <div class="container ">
            <div class="row">
                <div class="col-lg-12">
                    <div class="site-heading text-center">
                        <h2><center>Monitoring dan Evaluasi</center></h2>
                    </div>
                </div>
            </div>

            <div class="doctor-items text-center">
                <div class="row" id="listKuesioner">

    @foreach ($quizheader as $data)

                    <!-- Single Item -->
                    <div class="col-lg-4 col-md-6 single-item">
                        <div class="item">
                            <div class="info">
                                <div class="thumb" >
                                    <div class="button mb-3">
                                        <a href="/survey/tambah/{{ $data->jenis }}">Isi Survey</a>
                                    </div>
                                </div>
                                <h5 id="btn">Instrumen Untuk <br><b>{{ $data->description }}</b></h5>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->

    @endforeach                    

                                    </div>
            </div>
        </div>
    </div>
    <!-- End Doctors Area -->

@endsection


<!DOCTYPE html>
<html lang="en">
   <link rel="stylesheet" type="text/css" href="{{asset('assets/bootstrap/css/style.css')}}">
   <x-header></x-header>
    
   <body>
    <x-layout></x-layout>
   </body>
</html>
