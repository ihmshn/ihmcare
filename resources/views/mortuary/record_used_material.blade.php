@extends('layouts.mortuary')

@section('content')
@php
    use App\Models\mortuary\Mortuary;
@endphp
<div class="col-xl-12 col-md-12">
    <div class="ms-panel-header ms-panel-custome">
        <h6>Record Used Material</h6>
    </div>
    <div class="ms-panel-body">
        <div class="row">
            <div class="col-lg-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 text-primary">Record Used Material</h6>
                    </div>
                    <div class="card-body">
                        <form method="post" action="" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3">
                                    <label>Material Name</label>
                                    <select class="form-control" id="mate_id" name="mate_id" onchange="fetchMated();">
                                        <option value="">--Select Product--</option>
                                        @foreach($materials as $material)
                                        <option value="{{ $material->id }}">{{ $material->name }}</option>
                                        @endforeach
                                    </select>
                                    <input type="hidden" class="form-control" id="material_name" name="material_name" required>
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <label>Category</label>
                                    <input type="text" readonly class="form-control" id="category" name="category" required>
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <label>Quantity</label>
                                    <input type="text" class="form-control" name="quantity" required>
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <label>Unit</label>
                                    <input type="text" readonly class="form-control" id="unit" name="unit" required>
                                </div>
                                <div class="col-sm-12 mb-3">
                                    <label for="validationCustom002">Note (Optional)</label>
                                    <textarea class="form-control" name="note" required></textarea>
                                </div>
                                <div class="col-lg-12">
                                    <br />
                                    <input type="submit" name="AddUsedMaterial" style="height:50px !important;" class="btn btn-primary form-control" value="Record Used Material">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    function fetchMated() {
        var mate_id = document.getElementById('mate_id').value;
        var url = "{{ url('mortuary.fetch_material_details', ':id') }}";
        url = url.replace(':id', mate_id);

        axios.get(url)
            .then(function(response) {
                var data = response.data;
                document.getElementById('material_name').value = data.name;
                document.getElementById('category').value = data.category;
                document.getElementById('unit').value = data.unit;
            })
            .catch(function(error) {
                console.log(error);
            });
    }
</script>
@endsection