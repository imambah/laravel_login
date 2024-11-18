<?php
$id = $_GET['id'];
$tahun_ajaran = $_GET['tahun_ajaran'];
$semester = $_GET['semester'];



$query     = mysqli_query($conn, "SELECT * FROM quiz_header limit 1");
$bar_query = mysqli_fetch_array($query);
$jenis     = $bar_query['jenis'];

if ($id =='') {
   $id =  $jenis;
}

$chart = '';
$sql = "CALL p_dasboard_data_horizontal('$tahun_ajaran','$semester')";
$result = $conn -> query($sql);
// Associative array
while ($p_rows1 = $result -> fetch_assoc()){
      if ($chart <> ''){
         $chart = $chart.",";
      }
      $chart = $chart."['".$p_rows1['jenis']."',".$p_rows1['nilai']."]";
};  $conn -> close();

include 'koneksi.php';
// $conn = mysqli_connect("localhost","root","","emonev");
$sql_p = "CALL p_dasboard_data_by_jenis('$id',@desc,@tidak,@kurang,@baik,@sangat,'$tahun_ajaran','$semester');";
$conn->query($sql_p);
$result_p = $conn->query("SELECT @desc as description, @tidak as tidak, @kurang as kurang, @baik as baik, @sangat as sangat;");
$bar_query = $result_p->fetch_assoc();

echo "<h2>Monitoring dan Evaluasi</h2>";
?>

<!DOCTYPE html>
<html lang="en">
    <head>        
        <!-- META SECTION -->
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="css/theme-default.css"/>
        <!-- EOF CSS INCLUDE --> 
        <script src="js/chart/dist/chart.min.js"></script>                    
    </head>
    <body>
   <!-- /subnavbar -->

    <div class="main">
        <div class="main-inner">
            <div class="container">
                <div class="row">


            <!-- START USERS ACTIVITY BLOCK -->
                            <!-- START DATATABLE EXPORT -->
                  
              <div class="block">
                  <form class="form-horizontal" action="" role="form" method="post">

                <div class="row">
                     <div class="form-group col-md-10">
                          <span><label class="col-xs-2 control-label">Tahun Ajaran:</label></span>
                          <div class="col-md-1">

                             <select name="tahun_ajaran" class="form-control">
                               <option value=<?php echo $tahun_ajaran ?>><?php echo $tahun_ajaran ?></option>
                                    <?php
                                         include 'koneksi.php';
//                                       $conn = mysqli_connect("localhost","root","","emonev");
                                         $r_query = mysqli_query($conn, "SELECT DISTINCT tahun_ajaran FROM data_quiz");
                                         while ($r_tahun = mysqli_fetch_array($r_query)) {
                                               echo "<option value='".$r_tahun['tahun_ajaran']."'>".$r_tahun['tahun_ajaran']."</option>";
                                            }
                                         $conn -> close();   
                                    ?>
                             </select>
                           </div>

                          <label class="col-xs-1 control-label">Semester:</label>
                          <div class="col-md-1">
                             <select name="semester" class="form-control">
                               <option value=<?php echo $semester ?>><?php echo $semester ?></option>
                                    <?php
                                         include 'koneksi.php';
//                                       $conn = mysqli_connect("localhost","root","","emonev");
                                         $r_query = mysqli_query($conn, "SELECT DISTINCT semester FROM data_quiz");
                                         while ($r_semester = mysqli_fetch_array($r_query)) {
                                               echo "<option value='".$r_semester['semester']."'>".$r_semester['semester']."</option>";
                                            }
                                         $conn -> close();   
                                    ?>
                             </select>
                           </div>

                               <div class="col-md-4">
                                    <input type="submit" name="pilih" value="Enter" class="btn btn-success"/>
                                    <button class="btn btn-danger toggle" data-toggle="exportTable"><i class="fa fa-bars"></i> Export Data</button>
                                    <a href="index.php" class="btn btn-danger">Kembali</a>
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
          </div>

            <div class="row">
              <div class="col-md-7">
                                <div class="widget-content ex1">
                                    <table id="customers" class="table datatable table-bordered table-striped">
                                        <thead>
                                            <tr>
                                              <th>No.</th>
                                              <th>Instrumen Monitoring dan Evaluasi</th>
                                              <th>Tidak Baik</th>
                                              <th>Kurang Baik</th>
                                              <th>Baik</th>
                                              <th>Sangat Baik</th>
                                              <th>Grafik</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        include 'koneksi.php';
//                                      $conn = mysqli_connect("localhost","root","","emonev");
                                        $query_d = "CALL p_dasboard_data('$tahun_ajaran','$semester');";
                                        $result_d = $conn->query($query_d);
                                        $no = 1;
                                        while ($r_dq = $result_d->fetch_assoc()) {
                                        echo "<tr>
                                                <td>".$no++."</td>
                                                <td><strong colour='red'>".$r_dq['jenis']."</strong> - ".$r_dq['keterangan']."</td>
                                                <td align='right'>".number_format($r_dq['tidak'],0,',','.')."</td>
                                                <td align='right'>".number_format($r_dq['kurang'],0,',','.')."</td>
                                                <td align='right'>".number_format($r_dq['baik'],0,',','.')."</td>
                                                <td align='right'>".number_format($r_dq['sangat'],0,',','.')."</td>
                                                <td><a href='index.php?m=dashboard&id=$r_dq[jenis]&tahun_ajaran=$tahun_ajaran&semester=$semester' class='btn btn-info' >View</a>
                                             </tr>";
                                         }    $conn -> close();
                                         ?>
                                        </tbody>  
                                    </table>                                    
                                </div>
                            </div>



<!-- PIE CHART -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Intrumen', 'Total Responden'],
          <?php
          echo $chart;
          ?>
        ]);

        var options = {
          title: 'Responden Monitoring & Evaluasi berdasarkan Instrumen'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>

<div class="col-md-3">
    <div class="widget-content">
        <div id="piechart" style="width: 250px; height: 175px;"></div>
    </div>
</div>

<!-- END OF PIE CHART -->


<!---- BAR CHART ------>
                    <div class="col-md-3">
                        <div class="widget">
                            <div class="widget-header">
                                <i class="icon-bar-chart"></i>
                                <h6><center><b><?php echo $bar_query['description'] ?></b></center></h6>
                            </div>
                            <!-- /widget-header -->
                            <div class="widget-content">
                        <canvas id="myChart" style="width:180px;height:200px"></canvas>
                            <script>
                                <?php 
                                    $tidak = $kurang = $baik = $sangat = "";
                                    $tidak      = $bar_query['tidak'];
                                    $kurang     = $bar_query['kurang'];
                                    $baik       = $bar_query['baik'];
                                    $sangat     = $bar_query['sangat'];
                                    $bar = array($tidak, $kurang, $baik, $sangat);
                                    $yValues = json_encode($bar);
                                    echo "var yValues = ". $yValues . ";\n";
                                ?>    
                                   
                                    var xValues = ["Tidak Baik", "Kurang Baik", "Baik", "Sangat Baik"];
                                    var barColors = [ "rgba(170,50,255,0.5)",
                                                      "rgba(50,255,150,0.5)",
                                                      "rgba(37,200,255,0.5)",
                                                      "rgba(255,57,57,0.45)"
                                                    ];
                                    new Chart("myChart", {
                                      type: "bar",
                                      data: {
                                        labels: xValues,
                                        datasets: [{
                                          backgroundColor: barColors,
                                          data: yValues
                                        }]
                                      },
                                      options: {
                                        indexAxis: 'y',
                                        legend: {display: false},
                                        title: {
                                          display: false,
                                        }
                                      }
                                    });

                            </script>
                        </canvas>


                    <!-- /bar-chart -->
                </div>
                <!-- /widget-content -->
            </div>
            <!-- /widget -->
        </div>
</div>

<!-- END BAR CHART -->



                         </div>
                        </div>
                       </div>
                      </div>
                     </div>
                    </div>

                  </div>
                    
                </div>
                <!-- END PAGE CONTENT WRAPPER -->                
              </div>            
            <!-- END PAGE CONTENT -->
            </div>
        <!-- END PAGE CONTAINER -->
    </body>
</html>
<?php
  if(isset($_POST['pilih'])){
    $tahun_ajaran = $_POST['tahun_ajaran'];
    $semester   = $_POST['semester'];

        echo "<script>
          document.location='index.php?m=dashboard&id=$id&tahun_ajaran=$tahun_ajaran&semester=$semester'
        </script>";
  }
?>
    <!-- START SCRIPTS -->

    <!-- END SCRIPTS -->                 
