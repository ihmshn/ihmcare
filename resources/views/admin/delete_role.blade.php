@extends('layouts.admin')

@section('content')
@php
    use App\Models\admin\Admin;
@endphp
<div class="col-xl-12 col-md-12">
      <div class="ms-panel-header ms-panel-custome">
         <h6>Remove Roles </h6>
          
          <a href="manage_role" class="ms-text-primary">Back</a>
      </div>
      <div class="ms-panel-body">
         <div class="table-responsive">
            <table id="example" class="table table-striped thead-primary w-100">

	<thead>
		<tr>
			<th>SN</th>
         <th>ROLE</th>
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
        //  $resultset = $Fcall->fetch_table_only('roles');
        //     if (!empty($resultset)) {

        //        foreach ($resultset as $k => $v) { 


                  ?>
                       <tr>
                       <td scope="row"><?php //echo $no_id++ ?></td>
                       <td><?php //cho $resultset[$k]['name']; ?></td>
                       
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
                       <form method="post">
                       <button style="width: 50px !important; margin-top: -5px;" type="submit" name="del" class="btn btn-danger btn-sm text-white" onclick="javascript:confirmationDelete($(this));return false;" id="<?php //echo $resultset[$k]["id"]; ?>" value="<?php //echo $resultset[$k]["id"]; ?>"><i class="fas fa-trash"></i> 
                       </button>
                       </form>
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