@extends('layouts.admin')

@section('content')
@php
    use App\Models\admin\Admin;
@endphp
<div class="col-xl-12 col-md-12">
      <div class="ms-panel-header ms-panel-custome">
         <h6>Delete User</h6>
          
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
         <th>DEPARTMENT</th>
         <th>UNIT</th>
			<th>ACTION</th>
		</tr>
	</thead>

	<tbody>
		
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