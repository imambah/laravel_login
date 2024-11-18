@section('konten')

<!-- START USERS ACTIVITY BLOCK -->
        <div class="panel panel-default">
          <div class="panel-heading">
            <div class="panel-title-box">
                <h3>Tambah Program Studi</h3>
            </div>
        </div>
            <div class="panel-body">
              <div class="block">
                <form class="form-horizontal" action={{ route('user.submit') }} role="form" method="post">
                      @csrf
                      <div class="form-group">
                          <label class="col-md-2 control-label">Username</label>
                          <div class="col-md-5">
                            <input type="text" required name="username" class="form-control" placeholder="Username">
                          </div>
                      </div>

                      <div class="form-group">
                         <label class="col-md-2 control-label">Password</label>
                        <div class="col-md-5">
                         <input type="text" required name="password" class="form-control" placeholder="password" >
                        </div>
                      </div>

                     <div class="form-group">
                          <label class="col-md-2 control-label">Level</label>
                          <div class="col-md-5">
                            <input type="text" required name="level" class="form-control" placeholder="Level" >
                          </div>
                     </div>

                     <div class="form-group">
                      <label class="col-md-2 control-label">Status Login</label>
                        <div class="col-md-5">
                          <select name="status_login" required class="form-control" >
                            <option value="Logout">Logout</option>
                            <option value="Login">Login</option>
                      </select>     
                     </div>
                     </div>

                     <div class="form-group">
                      <label class="col-md-2 control-label">Status</label>
                        <div class="col-md-5">
                         <select name="status" required class="form-control" >
                               <option value="Aktif">Aktif</option>
                               <option value="Inaktif">Inaktif</option>
                         </select>     
                        </div>
                     </div>
 
                        <div class="col-md-2">
                          <input type="submit" name="simpan" value="Save" class="btn btn-success" />
                          <a href="/user" class="btn btn-danger">Kembali</a>
                       </div>
                      </div>
                 </form>
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
