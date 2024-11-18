<body>
    <!-- START PAGE CONTAINER -->
    <div class="page-container">

        <!-- START PAGE SIDEBAR -->
        <div class="page-sidebar page-sidebar-fixed scroll">
            <!-- START X-NAVIGATION -->
            <ul class="x-navigation  x-navigation-custom">
                <li class="xn-logo">
                    <a href="index.php">eMonev</a>
                    <a href="#" class="x-navigation-control"></a>
                </li>
                <div class="clearfix"></div>
                <!-- menu prile quick info -->
                <div class="profile">
                    <div class="profile_info">
                        <span>Welcome,</span>
                        <h2></h2>
                    </div>
                </div>
                <li>
                    <a href="#"><span class="fa fa-desktop"></span> <span class="xn-text">Dashboard</span></a>
                </li>

                <li class="xn-openable">
                    <a href="#"><span class="glyphicon glyphicon-th"></span><span
                            class="xn-text">Administrator</span></a>
                    <ul>
                        <li><a href="#"><span class="fa fa-user"></span>Manajemen User</a></li>
                        <li><a href="#"><span class="fa fa-image"></span>Manajemen Parameter</a></li>
                        <li><a href="/prodi"><span class="fa fa-image"></span>Manajemen Program Studi</a></li>
                        <li><a href="#"><span class="fa fa-image"></span>Manajemen Data MONEV</a></li>
                        <li><a href="#"><span class="fa fa-image"></span>Log Activity</a></li>
                    </ul>

                </li>

                <li class="xn-openable">
                    <a href="#"><span class="glyphicon glyphicon-th"></span> <span class="xn-text">Monitoring &
                            Evaluation</span></a>
                    <ul>
                        <li><a href="#"><span class="fa fa-image"></span>Entry Data MONEV</a></li>
                        <li><a href="#"><span class="fa fa-image"></span>Review Data MONEV</a></li>
                    </ul>
                </li>
                <li class="xn-openable">
                    <a href="#"><span class="fa fa-file-text-o"></span> <span class="xn-text">Laporan</span></a>
                    <ul>
                        <li><a href="#"><span class="fa fa-image"></span>Laporan Survey
                    </ul>
                </li>
            </ul>




            <!-- END X-NAVIGATION -->
            <div class="footer">
                <div class="pull-left">
                    &nbsp &#9400; &nbsp<?php echo date('Y'); ?> &nbsp eMONEV
                </div>
            </div>
        </div>
        <!-- END PAGE SIDEBAR -->

        <!-- PAGE CONTENT -->
        <div class="page-content">

            <!-- START X-NAVIGATION VERTICAL -->
            <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
                <!-- TOGGLE NAVIGATION -->
                <li class="xn-icon-button">
                    <a href="#" class="x-navigation-minimize"><span class="fa fa-dedent"></span></a>
                </li>
                <!-- END TOGGLE NAVIGATION -->
                <!-- SEARCH --><!--
                <li class="xn-search">
                    <form role="form">
                        <input type="text" name="search" placeholder="Search..."/>
                    </form>
                </li>    -->
                <!-- END SEARCH -->
                <!-- SIGN OUT -->
                <li class="xn-icon-button pull-right">
                    <a href="#" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span></a>
                </li>
                <!-- END SIGN OUT -->
            </ul>
            <!-- END X-NAVIGATION VERTICAL -->

            <!-- START BREADCRUMB -->
            <ul class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Dashboard</li>
            </ul>
            <!-- END BREADCRUMB -->

            <!-- PAGE CONTENT WRAPPER -->
            <div class="page-content-wrap">

            </div>
            <!-- END PAGE CONTENT WRAPPER -->

        </div>
        <!-- END PAGE CONTENT -->

    </div>
    <!-- END PAGE CONTAINER -->

    <!-- MESSAGE BOX-->
    <div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
        <div class="mb-container">
            <div class="mb-middle">
                <div class="mb-title"><span class="fa fa-sign-out"></span> Log <strong>Out</strong> ?</div>
                <div class="mb-content">
                    <p>Apakah Anda Ingin log out?</p>
                    <p>Tekan <b>No</b> Jika Melanjutkan Kerja. Tekan <b>Yes</b> Untuk Logout.</p>
                </div>
                <div class="mb-footer">
                    <div class="pull-right">
                        <a href="login.php" class="btn btn-success btn-lg">Yes</a>
                        <button class="btn btn-default btn-lg mb-control-close">No</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END MESSAGE BOX-->

    <!-- START USERS ACTIVITY BLOCK -->

    <div class="mt-s">
        @yield('konten')
    </div>

    <!-- END USER ACTIVITY BLOCK -->

    <!-- START PRELOADS -->
    <audio id="audio-alert" src="audio/alert.mp3" preload="auto"></audio>
    <audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>
    <!-- END PRELOADS -->

    <!-- START SCRIPTS -->

    <!-- START PLUGINS -->
    <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
    <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>
    <!-- END PLUGINS -->

    <!-- START THIS PAGE PLUGINS-->
    <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
    <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>

    <script type="text/javascript" src="js/plugins/datatables/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="js/plugins/tableexport/tableExport.js"></script>
    <script type="text/javascript" src="js/plugins/tableexport/jquery.base64.js"></script>
    <script type="text/javascript" src="js/plugins/tableexport/html2canvas.js"></script>
    <script type="text/javascript" src="js/plugins/tableexport/jspdf/libs/sprintf.js"></script>
    <script type="text/javascript" src="js/plugins/tableexport/jspdf/jspdf.js"></script>
    <script type="text/javascript" src="js/plugins/tableexport/jspdf/libs/base64.js"></script>

    <!-- END THIS PAGE PLUGINS -->

    <!-- START TEMPLATE -->
    <script type="text/javascript" src="js/settings.js"></script>
    <script type="text/javascript" src="js/plugins.js"></script>
    <script type="text/javascript" src="js/actions.js"></script>
    <!-- END TEMPLATE -->

    <!-- END SCRIPTS -->

</body>
