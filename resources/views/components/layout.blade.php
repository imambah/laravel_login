
    <!-- START PAGE CONTAINER -->
    <div class="page-container">

    <x-sidebar></x-sidebar>
        
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
 
            <div class="mt-s">
                @yield('konten')
            </div>
        </div>            
        <!-- END PAGE CONTENT -->
        
    </div>
    <!-- END PAGE CONTAINER -->

<x-messagebox></x-messagebox>

<x-scripts></x-scripts>