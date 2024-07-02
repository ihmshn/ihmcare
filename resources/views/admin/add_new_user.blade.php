<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0-beta.1/css/select2.min.css" rel="stylesheet" />
<!-- Include Select2 JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0-beta.1/js/select2.min.js"></script>
<style>
/* Change the height of the select2 container */
.select2-container .select2-selection--single {
    height: 40px; /* Adjust this value as needed */
}

/* Align the text vertically in the middle */
.select2-container--default .select2-selection--single .select2-selection__rendered {
    line-height: 40px; /* Should match the height */
}

/* Customize the dropdown items */
.select2-results__option {
    padding: 10px; /* Adjust this value as needed */
    height: 40px; /* Adjust this value as needed */
    display: flex;
    align-items: center;
}
</style>

<style>
    label{
        color: darkgray;
    }
</style>

@extends('layouts.admin')
@section('content')

<div class="row">

<div class="col-xl-12 col-md-12">
    <div class="ms-panel">
        <div class="ms-panel-header ms-panel-custome">
            <h6>Add New User</h6>
            <a href="manage_users" class="ms-text-primary">Back</a>
        </div>
        <form method="post" enctype="multipart/form-data">
        <div class="ms-panel-body">

            <div class="col-md-12 mb-5 mx-auto pb-5">
         
            <div class="form-row">

               <div class="col-md-12 mb-3">
                    <label for="validationCustom002">Select Staff Name</label>
                    <div class="input-group">
                        <select class="form-control" name="staff" id="employe_id">
                        <option value="">-- Select --</option>
                        <?php //$data = $Fcall->selectEmploy('employees');?>
                        </select>
                    </div>
               </div> 


               <div class="col-md-6 mb-3">
                    <label for="validationCustom002">Enter Qualification</label>
                    <div class="input-group">
                         <input type="text" class="form-control" name="qualification" placeholder="Enter Qualification">
                    </div>
               </div> 



               <div class="col-md-6 mb-3">

                 <label for="validationCustom002">Select Branch</label>
                    <div class="input-group">
                        <select class="form-control" name="branch" onchange="">
                            <!-- <option value="">-- Select --</option> -->
                            <?php //$data = $Fcall->selectBranch('branch');?>
                        </select>   
                 </div>
               
               </div> 


             <!--   <div class="col-md-4 mb-3">

                 <label for="validationCustom002">Select Group Type</label>
                    <div class="input-group">
                        <select class="form-control" name="department_type" id="department_type" onchange="departmentType();">
                            <option value="">-- Select --</option>
                            <?php //$data = $Fcall->selectDepartmentTYPEAJAX('departmentgrouptype');?>
                        </select> 
                   </div>

               </div> 


               <div class="col-md-4 mb-3">

                 <label for="validationCustom002">Select Department</label>
                    <div class="input-group">
                        <select  class="form-control" name="department_group" id="department" onchange="department();">
                            <option value="">-- Select --</option>
                            
                        </select> 
                   </div>
                   
               </div> 



               <div class="col-md-4 mb-3">

                 <label for="validationCustom002">Select Unit</label>
                    <div class="input-group">
                        <select class="form-control" name="unit" id="unit">
                            <option value="">-- Select --</option>
                          
                        </select> 
                   </div>
                   
               </div>  -->


             <div class="col-md-4 mb-3">
                <label for="validationCustom002">Select Group Type</label>
                <div class="input-group">
                    <select class="form-control" name="department_type" id="department_type">
                        <option value="">-- Select --</option>
                        <?php //$data = $Fcall->selectDepartmentTYPEAJAX('departmentgrouptype');?>
                    </select>
                </div>
            </div>

            <div class="col-md-4 mb-3">
                <label for="validationCustom002">Select Department</label>
                <div class="input-group">
                    <select class="form-control" name="department_group" id="department">
                        <option value="">-- Select --</option>
                    </select>
                </div>
            </div>

            <div class="col-md-4 mb-3">
                <label for="validationCustom002">Select Unit</label>
                <div class="input-group">
                    <select class="form-control" name="unit" id="unit">
                        <option value="">-- Select --</option>
                    </select>
                </div>
            </div>




                <div class="col-md-6 mb-3">

                 <label for="validationCustom002">Username</label>
                    <div class="input-group">
                         <input type="text" class="form-control" name="username" placeholder="Enter Username">
                 </div>
               
               </div> 


                <div class="col-md-6 mb-3">


                    <div class="form-group">
                        <label for="password">Password</label>
                        <div class="input-group">
                            <input type="password" style="height: 40px;" class="form-control" name="password" id="password"  placeholder="Enter Password">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" style="height: 40px;" type="button" onclick="togglePassword('password', this)">
                                    Show
                                </button>
                            </div>
                        </div>
                    </div>
<!-- 
                 <label for="validationCustom002">Password</label>
                    <div class="input-group">
                         <input type="password" class="form-control" name="password" placeholder="Enter Password">
                 </div> -->
               
               </div> 


               <div class="col-md-4 mb-3">

                 <label for="validationCustom002">Select User Role</label>
                    <div class="input-group">
                        <select class="form-control" name="role" onchange="">
                            <option value="">-- Select Role --</option>
                            <?php //$data = $Fcall->selectRoles('roles');?>
                        </select> 
                   </div>

               </div> 


               <div class="col-md-4 mb-3">

                 <label for="validationCustom002">Staff Picture</label>
                    <div class="input-group">
                         <input type="file" class="form-control" name="photo" >
                   </div>
                   
               </div> 


               <div class="col-md-4 mb-3">

                 <label for="validationCustom002">Status</label>
                    <div class="input-group">
                        <select class="form-control" name="status" >
                        <option>Active</option>
                        <option>Inactive</option>
                        </select> 
                   </div>
                   
               </div> 

            </div>

            <div class="col-md-12 mb-3">
                    <button class="btn btn-primary mt-4 float-right " name="addUser" type="submit">Create</button>
            </div>

        </div>       
        </div>        
      
  </form>

</div>
</div>
</div>
 
</div>

@endsection


<script>
        $(document).ready(function() {
            $('#employe_id').select2({
                placeholder: '-- Select --',
                allowClear: true
            });
        });
    </script>
 

 <script>
 document.addEventListener("DOMContentLoaded", function() {
            // Event delegation for department type change
            document.getElementById('department_type').addEventListener('change', function() {
                departmentType();
            });

            // Event delegation for department change
            document.getElementById('department').addEventListener('change', function() {
                department();
            });
        });

        function departmentType() {
            const departmentSelect = document.getElementById('department');
            const departmentTypeSelect = document.getElementById('department_type');

            if (!departmentSelect || !departmentTypeSelect) {
                console.error('Required elements not found');
                return;
            }

            departmentSelect.innerHTML = "<option value=''>-- Select --</option>";

            const AcountID = departmentTypeSelect.value;
            const url = "admin_control/ajaxController.php?getdepartment=" + encodeURIComponent(AcountID);

            fetch(url)
                .then(response => response.text())
                .then(data => {
                    departmentSelect.innerHTML = data;
                    // Trigger the change event manually to rebind the event listener
                    departmentSelect.dispatchEvent(new Event('change'));
                })
                .catch(error => {
                    console.error('Fetch error:', error);
                });
        }

        function department() {
            const unitSelect = document.getElementById('unit');
            const departmentSelect = document.getElementById('department');

            if (!unitSelect || !departmentSelect) {
                console.error('Required elements not found');
                return;
            }

            unitSelect.innerHTML = "<option value=''>-- Select --</option>";

            const AcountID = departmentSelect.value;
            const tr = AcountID.split("*");
            const url = "admin_control/ajaxController.php?getunit=" + encodeURIComponent(tr[1]);

            fetch(url)
                .then(response => response.text())
                .then(data => {
                    unitSelect.innerHTML = data;
                })
                .catch(error => {
                    console.error('Fetch error:', error);
                });
        }



        function togglePassword(fieldId, button) {
            var field = document.getElementById(fieldId);
            if (field.type === "password") {
                field.type = "text";
                button.textContent = "Hide";
            } else {
                field.type = "password";
                button.textContent = "Show";
            }
        }


//         function departmentType() { 

//             document.getElementById('department').innerHTML = "";

//    if (window.XMLHttpRequest) {

//             xmlhttp = new XMLHttpRequest();

//         } else {

//             xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");

//         }

//          var AcountID =document.getElementById('department_type').value;

//         var tr = AcountID;
//         var url = "admin_control/ajaxController.php?getdepartment=" + tr;

//         xmlhttp.onreadystatechange = function () {

//             if (this.readyState == 4 && this.status == 200) {


//                 document.getElementById('department').innerHTML = this.responseText;

//                 // var result = this.responseText.split("*");
//                 // document.getElementById('CategoryName').value = result[0];
//                 // document.getElementById('id').value = result[1];

//             }
//         };

//         xmlhttp.open("GET", url, true);
//         xmlhttp.send();

// }




// function department() {
//     const unitElement = document.getElementById('unit');
//     const departmentElement = document.getElementById('department');
    
//     if (!unitElement || !departmentElement) {
//         console.error('Required elements not found');
//         return;
//     }

//     unitElement.innerHTML = "";

//     const AcountID = departmentElement.value;
//     const tr = AcountID.split("*");
//     const url = "admin_control/ajaxController.php?getunit=" + tr[1];

//     const xmlhttp = new XMLHttpRequest();

//     xmlhttp.onreadystatechange = function () {
//         if (this.readyState == 4 && this.status == 200) {
//             unitElement.innerHTML = this.responseText;
//         }
//     };

//     xmlhttp.open("GET", url, true);
//     xmlhttp.send();
// }



//     function department() { 

//             document.getElementById('unit').innerHTML = "";

//    if (window.XMLHttpRequest) {

//             xmlhttp = new XMLHttpRequest();

//         } else {

//             xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");

//         }

//          var AcountID =document.getElementById('department').value;

//         var tr = AcountID.split("*");
//         var url = "admin_control/ajaxController.php?getunit=" + tr[1];

//         xmlhttp.onreadystatechange = function () {

//             if (this.readyState == 4 && this.status == 200) {


//                 document.getElementById('unit').innerHTML = this.responseText;

//             }
//         };

//         xmlhttp.open("GET", url, true);
//         xmlhttp.send();

// }

    </script>
    