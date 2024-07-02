@extends('layouts.admin')

@section('content')
@php
    use App\Models\admin\Admin;
@endphp


<div class="col-xl-12 col-md-12">
      <div class="ms-panel-header ms-panel-custome">
         <h6>VIEW SERVICE   </h6>
          
          <a href="manage_service" class="ms-text-primary">Back</a>
      </div>
      <div class="ms-panel-body">
         <div class="table-responsive">
            <table id="example" class="table table-striped thead-primary w-100">

</table>
</div>
</div>
</div>





<div class="modal fade" id="mymodaledit" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog ms-modal-dialog-width">
          <div class="modal-content ms-modal-content-width">
            <div class="modal-header  ms-modal-header-radius-0">
              <h4 class="modal-title text-white">View Services</h4>
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
                        <label for="categoryName">Current Name</label>
                        <input type="text" readonly class="form-control" id="old_name" name="old_name">
                      </div>

                     <div class="form-group">
                        <label for="categoryName">Change Name</label>
                        <input type="text" class="form-control" name="new_name">
                      </div>
                      <input type="hidden" id="id" name="id">

                     
                      <div class="col-md-12 mb-3">
                 
                      <button class="btn btn-light mt-4 d-inline w-20 float-right " type="button" data-dismiss="modal">Close</button>
                      <button class="btn btn-primary mt-4 d-inline w-20 float-right mr-3" name="editDept" type="submit">Update</button>&nbsp;
                       
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
        var url = "admin_control/ajaxController.php?getdeedit=" + tr;

        xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {

                var result = this.responseText.split("*");
                document.getElementById('old_name').value = result[0];
                document.getElementById('id').value = result[1];
                
            }
        };

        

        xmlhttp.open("GET", url, true);
        xmlhttp.send();

    }
  </script>

