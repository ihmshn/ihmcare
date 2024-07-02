@extends('layouts.mortuary')

@section('content')
@php
    use App\Models\mortuary\Mortuary;
@endphp
<div class="col-xl-12 col-md-12">
    <div class="ms-panel-header ms-panel-custome">
        <h6>Mortuary Price List</h6>
        <a href="?action=add_mortuary_price_list" class="ms-text-primary">Add New Price List</a>
    </div>
    <div class="ms-panel-body">
        <div class="table-responsive">
            <table id="example" class="table table-striped thead-primary w-100">
                <thead>
                    <tr>
                        <th scope="col">SN</th>
                        <th scope="col">Price Name</th>
                        <th scope="col">Amount</th>
                        <th scope="col">Description</th>
                        <th scope="col">Free Days</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $no_id = 1;
                        $resultset = DB::table('price_list')->orderBy('id')->get();
                    @endphp
                    @forelse ($resultset as $price)
                        <tr>
                            <td scope="row">{{ $no_id++ }}</td>
                            <td>{{ $price->price_name }}</td>
                            <td>{{ $price->amount }}</td>
                            <td>{{ $price->description }}</td>
                            <td>
                                @if($price->freeday == "No")
                                    {{ "" }}
                                @else
                                    {{ $price->freeday }}
                                @endif
                            </td>
                            <td>
                                <!-- <a href="?action=edit_price_list&&details={{ $price->id }}"><i class='fas fa-pencil-alt ms-text-warning'></i></a> -->
                                <a href="{{ route('mortuary.edit_price_list', ['id' => $price->id]) }}">
                                    <i class='fas fa-pencil-alt ms-text-warning'></i>
                                </a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6">No data found</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection