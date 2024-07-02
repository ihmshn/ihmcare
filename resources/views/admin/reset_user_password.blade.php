@extends('layouts.admin')
@section('content')
@php
    use App\Models\admin\Admin;
@endphp
<div class="col-xl-12 col-md-12">
      <div class="ms-panel-header ms-panel-custome">
         <h6>Reset User Password</h6>
          
          <a href="?action=manage_users" class="ms-text-primary">Back</a>
      </div>
      <div class="ms-panel-body">
         <div class="table-responsive">
            <table id="example" class="table table-striped thead-primary w-100">

	<thead>
		<tr>
			<th>SN</th>
         <th>PHOTO</th>
			<th>FULLNAME</th>
			<th>USERNAME</th>
         <th>ROLE</th>
         <th>UNIT</th>
         <th>STATUS</th>
			<th>ACTION</th>
		</tr>
	</thead>

	<tbody>
		<?php
        //  $no_id = 1;
        //  $url = $_SERVER['REQUEST_URI'];
        //  $date_year = explode('&&', $url);
        //  // echo $date_year[1];
        //  $resultset = $Fcall->fetch_table_only('security_access');
        //     if (!empty($resultset)) {

        //        foreach ($resultset as $k => $v) { 

        //           $GetData=$Fcall->Targeted_info('employees','employ_id',$resultset[$k]['staff_id']);

                  ?>
                       <tr>
                       <td scope="row"><?php //echo $no_id++ ?></td>
                        <td>
                           <?php 
                        //    if(!empty($GetData['photo'])) {

                        //       $photoUrl = '../human_resource/staffDocument/'.$GetData['photo'];
                        //          echo '<a href="' . $photoUrl . '" target="_blank"><img src="' . $photoUrl . '" alt="Photo" style="max-width: 50px; max-height: 50px;"></a>';

                        //    } else {

                        //          echo 'No Photo';

                        //    }
                           ?>
                        </td>
                       <td><?php //echo $resultset[$k]['name']; ?></td>
                       <td><?php //echo $resultset[$k]['username']; ?></td>
                       <td><?php //echo $resultset[$k]['role']; ?></td>
                       
                       <td><?php //echo $resultset[$k]['unit']; ?></td>
                       <td><b>

                        <?php

                        //    if($resultset[$k]['status'] == "Active"){

                        //        echo '<span class="badge badge-success p-2">'.$resultset[$k]['status'].'</span>';

                        //    }else{

                        //       echo '<span class="badge badge-warning p-2">'.$resultset[$k]['status'].'</span>';

                        //    }

                        ?>
                        </b></td>
                       <td>
                        <button style="width: 50px !important; margin-top: -5px;" type="button" class="btn btn-secondary text-white w-100" data-toggle="modal" data-target="#mymodaledit" onclick="mesansgetCate(<?php //echo $resultset[$k]['id'];?>);"><i class="fas fa-edit ms-text-white"></i></button>
                      </td>
                       </tr>
               <?php
                //     }
                // }
            ?>
	</tbody>
</table>
</div>
</div>
</div>

<div class="modal fade" id="mymodaledit" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog ms-modal-dialog-width">
          <div class="modal-content ms-modal-content-width">
            <div class="modal-header  ms-modal-header-radius-0">
              <h4 class="modal-title text-white">Reset User Password</h4>
              <button type="button" class="close text-white" data-dismiss="modal" aria-hidden="true">x</button>
            </div>
  
            <div class="modal-body p-0 text-left">
              <div class="col-xl-12 col-md-12">
                <div class="ms-panel ms-panel-bshadow-none">
                  <div class="ms-panel-header">
                    <h6>Reset</h6>
                  </div>
                  <div class="ms-panel-body">
                   <form method="post">

                      <div class="form-group">
                        <label for="old_username">Username</label>
                        <input type="text" readonly class="form-control" id="old_username" name="old_username">
                      </div>

                       <div class="form-group">
                        <label for="name">name</label>
                        <input type="text" readonly class="form-control" id="name" name="name">
                      </div>

                     <div class="form-group">
                        <label for="password">New Password</label>
                        <div class="input-group">
                            <input type="password" style="height: 40px;" class="form-control" name="password" id="password">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" style="height: 40px;" type="button" onclick="togglePassword('password', this)">
                                    Show
                                </button>
                            </div>
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="cpassword">Retype Password</label>
                        <div class="input-group">
                            <input type="password" style="height: 40px;" class="form-control" name="cpassword" id="cpassword">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" style="height: 40px;" type="button" onclick="togglePassword('cpassword', this)">
                                    Show
                                </button>
                            </div>
                        </div>
                    </div>

                      <input type="hidden" id="staff_id" name="staff_id">

                      <div class="col-md-12 mb-3">
                 
                      <button class="btn btn-light mt-4 d-inline w-20 float-right " type="button" data-dismiss="modal">Close</button>
                      <button class="btn btn-primary mt-4 d-inline w-20 float-right mr-3" name="change_password" type="submit">Reset Password</button>&nbsp;
                       
                     </div>
                    
                    </form>
                  </div>

                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
@endsection
<script type="text/javascript">
   function confirmationDelete(anchor)
{
   var conf = confirm('Are you sure want to delete this record?');
   if(conf)
      // window.location=anchor.attr("href");
      //   // window.location='?action=Catery';
      this.form.submit();
}

  </script>