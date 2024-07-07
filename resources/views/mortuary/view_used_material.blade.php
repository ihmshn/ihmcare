@extends('layouts.mortuary')

@section('content')
@php
    use App\Models\mortuary\Mortuary;
@endphp
<div class="col-xl-12 col-md-12">
   <div class="ms-panel-header ms-panel-custome">
      <h6>View Used Materials</h6>
   </div>
   <div class="ms-panel-body">
      <div class="table-responsive">
         <table id="example" class="table table-striped thead-primary w-100">
               <thead>
                  <tr>
                     <th scope="col">SN</th>
                     <th scope="col">Material ID</th>
                     <th scope="col">Material Name</th>
                     <th scope="col">Quantity Used</th>
                     <th scope="col">Date</th>
                     <th scope="col">Performed By</th>
                     <th scope="col">Action</th> 
                  </tr>
               </thead>
               <tbody>
                  @foreach($resultset as $key => $data)
                     <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $data->MaterialID }}</td>
                        <td>{{ $data->material_name }}</td>
                        <td>{{ $data->QuantityUsed }}</td>
                        <td>{{ $data->UsedDate }}</td>
                        <td>{{ $data->added_by }}</td>
                        <td>
                           <a href="{{ route('mortuary.view_used_material_details', ['id' => $data->MaterialID]) }}" target="_blank">
                              <i class='fa fa-eye ms-text-success'></i>View
                           </a>
                        </td>
                     </tr>
                  @endforeach
               </tbody>
         </table>
      </div>
   </div>
</div>
@endsection