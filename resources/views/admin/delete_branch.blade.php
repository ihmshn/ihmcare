@extends('layouts.admin')

@section('content')
@php
    use App\Models\admin\Admin;
@endphp
<div class="col-xl-12 col-md-12">
      <div class="ms-panel-header ms-panel-custome">
         <h6>Reamove Branches </h6>
          
          <a href="manage_branch" class="ms-text-primary">Back</a>
      </div>
      <div class="ms-panel-body">
         <div class="table-responsive">
            <table id="example" class="table table-striped thead-primary w-100">
            	<thead>
            		<tr>
            			<th>SN</th>
                     <th>BRANCH NAME</th>
            			<th>BRANCH PREFIX</th>
                     <th>COMPANY</th>
                     <th>ADDRESS</th>
                     <th>STATUS</th>
                     <th>ACTION</th>
            		</tr>
            	</thead>

            	<tbody>
                <?php
                // $no_id = 1;
                // $url = $_SERVER['REQUEST_URI'];
                // $date_year = explode('&&', $url);
                // // echo $date_year[1];
                // $resultset = $Fcall->fetch_table_only('branch');
                // if (!empty($resultset)) {

                //     foreach ($resultset as $k => $v) { 


                        ?>
                            <tr>
                            <td scope="row"><?php //echo $no_id++ ?></td>
                            <td><?php //echo $resultset[$k]['BranchName']; ?></td>
                            <td><?php //echo $resultset[$k]['BranchPrefix']; ?></td>
                            <td><?php //echo $resultset[$k]['Company']; ?></td>
                            <td><?php //echo $resultset[$k]['Address']; ?></td>
                            
                            <td><b>

                            <?php

                                // if($resultset[$k]['Status'] == "Active"){

                                //     echo '<span class="badge badge-success p-2">'.$resultset[$k]['Status'].'</span>';

                                // }else{

                                //     echo '<span class="badge badge-warning p-2">'.$resultset[$k]['Status'].'</span>';

                                // }

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

