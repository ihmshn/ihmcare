@extends('layouts.mortuary')

@section('content')
@php
    use App\Models\mortuary\Mortuary;
@endphp
<div class="col-xl-12 col-md-12">
   <div class="ms-panel-header ms-panel-custome">
      <h6>View Used Material Details</h6>
      <a href="" onclick="window.close();" class="ms-text-primary">
         <i class="fas fa-times" style="font-size: larger;"></i> Close
      </a>
   </div>
   <div class="ms-panel-body">
      <div class="row">
         <div class="col-lg-12">
            <div class="card shadow mb-4">
               <div class="card-header py-3">
                  <h6 class="m-0 text-primary">Used Material Details</h6>
               </div>
               <div class="card-body">
                  <form method="post" enctype="multipart/form-data">
                     @csrf
                     <div class="form-group row">
                        <div class="col-md-6 mb-3">
                           <label for="MaterialName">Material Name</label>
                           <div class="input-group">
                              <input type="text" class="form-control border-0" readonly name="MaterialName" value="{{ $material->material_name }}">
                           </div>
                        </div>
                        <div class="col-md-6 mb-3">
                           <label for="MaterialID">Material ID</label>
                           <div class="input-group">
                              <input type="text" class="form-control border-0" readonly name="MaterialID" value="{{ $material->MaterialID }}">
                           </div>
                        </div>
                     </div>
                     <div class="form-group row">
                        <div class="col-md-4 mb-3">
                           <label for="QuantityUsed">Quantity Used</label>
                           <div class="input-group">
                              <input type="text" class="form-control border-0" readonly name="QuantityUsed" value="{{ $material->QuantityUsed }}">
                           </div>
                        </div>
                        <div class="col-md-4 mb-3">
                           <label for="UsedDate">Used Date</label>
                           <div class="input-group">
                              <input type="text" class="form-control border-0" readonly name="UsedDate" value="{{ $material->UsedDate }}">
                           </div>
                        </div>
                        <div class="col-md-4 mb-3">
                           <label for="added_by">Performed By</label>
                           <div class="input-group">
                              <input type="text" class="form-control border-0" readonly name="added_by" value="{{ $material->added_by }}">
                           </div>
                        </div>
                     </div>
                     <div class="form-row">
                        <div class="col-md-12 mb-3">
                           <label for="Notes">Note</label>
                           <div class="input-group">
                              <textarea class="form-control border-0" readonly>{{ $material->Notes }}</textarea>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-12"><br />
                        <a href="" onclick="window.close();" class="btn btn-primary form-control">Close</a>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection

