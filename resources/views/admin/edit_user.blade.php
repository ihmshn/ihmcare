@extends('layouts.admin')

@section('content')
@php
    use App\Models\admin\Admin;
@endphp
<div class="col-xl-12 col-md-12">
      <div class="ms-panel-header ms-panel-custome">
         <h6>Edit User</h6>
          
          <a href="manage_users" class="ms-text-primary">Back</a>
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
		
	</tbody>
</table>
</div>
</div>
</div>

<div class="modal fade" id="mymodaledit" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog ms-modal-dialog-width">
          <div class="modal-content ms-modal-content-width">
            <div class="modal-header  ms-modal-header-radius-0">
              <h4 class="modal-title text-white">Edit User</h4>
              <button type="button" class="close text-white" data-dismiss="modal" aria-hidden="true">x</button>
            </div>
  
            <div class="modal-body p-0 text-left">
              <div class="col-xl-12 col-md-12">
                <div class="ms-panel ms-panel-bshadow-none">
                  <div class="ms-panel-header">
                    <h6>Edit</h6>
                  </div>
                  <div class="ms-panel-body">
                   <form method="post">

                      <div class="form-group">
                        <label for="categoryName">Current Username</label>
                        <input type="text" readonly class="form-control" id="old_username" name="old_username">
                      </div>

                     <div class="form-group">
                        <label for="categoryName">Change Username</label>
                        <input type="text" class="form-control" name="new_username">
                      </div>


                     <div class="form-group">
                        <label for="categoryName">Status</label>
                        <select class="form-control" name="status" id="status-select">
                             <!-- <option value="">Select Status</option> -->
                             <option value="Inactive">Inactive</option>
                             <option value="Active">Active</option>
                        </select> 
                     </div>
                      <input type="hidden" id="staff_id" name="staff_id">

                      <div class="col-md-12 mb-3">
                 
                      <button class="btn btn-light mt-4 d-inline w-20 float-right " type="button" data-dismiss="modal">Close</button>
                      <button class="btn btn-primary mt-4 d-inline w-20 float-right mr-3" name="edit_user" type="submit">Update</button>&nbsp;
                       
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


function mesansgetCate(categoryId) {
        if (window.XMLHttpRequest) {
            xmlhttp = new XMLHttpRequest();
        } else {
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }

        var tr = categoryId;
        var url = "admin_control/ajaxController.php?getusername=" + tr;

        // xmlhttp.onreadystatechange = function () {
        //     if (this.readyState == 4 && this.status == 200) {

        //         var result = this.responseText.split("*");
        //         document.getElementById('old_username').value = result[0];
        //         document.getElementById('staff_id').value = result[1];
        //         document.getElementById('status').value = result[2];
        //         // document.getElementById('categoryId').value = result[2];
        //     }
        // };

         xmlhttp.onreadystatechange = function () {
             if (this.readyState == 4 && this.status == 200) {
                 var result = this.responseText.split("*");
                 document.getElementById('old_username').value = result[0];
                 document.getElementById('staff_id').value = result[1];
                 
                 // Set the select element's value
                 var statusValue = result[2];
                 var selectElement = document.getElementById('status-select');
                 
                 for (var i = 0; i < selectElement.options.length; i++) {
                     if (selectElement.options[i].value === statusValue) {
                         selectElement.selectedIndex = i;
                         break;
                     }
                 }
             }
         };

        xmlhttp.open("GET", url, true);
        xmlhttp.send();

    }
  </script>