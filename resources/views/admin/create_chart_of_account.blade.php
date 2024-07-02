@extends('layouts.admin')

@section('content')
@php
    use App\Models\admin\Admin;
@endphp

<div class="col-xl-12 col-md-12">
    <div class="ms-panel">
        <div class="ms-panel-header ms-panel-custome">
            <h6>Create Static Account</h6>
            <a href="settings" class="ms-text-primary">Back</a>
        </div>
        <form class="needs-validation" method="post">
        <div class="ms-panel-body">
            <div class="form-row">

                <div class="col-md-6 mb-3">
                    <label for="validationCustom002">Account Name</label>
                    <div class="input-group">
                    <input type="text" class="form-control" name="account_name" placeholder="Enter Account Name">
                    </div>
                </div>


                <div class="col-md-6 mb-3">
                <label for="validationCustom002">Third Class</label>
                <select name="account_class" class="form-control">
            <option value="">Select</option>
                        <?php //$data = $Fcall->selectChartofAccount('tbl_chart_of_account');?>
                </select>
                </div>


                <div class="col-md-6 mb-3">
                <label for="validationCustom002">Branch</label>
                <select name="branch" class="form-control">
                <option value="">- Select Branch -</option>
                        <?php //$data = $Fcall->selectBranch('tbl_branch');?>
                </select>
                </div>

                <div class="col-md-6 mb-3">
                <label for="validationCustom002">Company</label>
                <select name="company" class="form-control">
                <option value="">Select</option>
                <option>Company A</option>
                <option>Company B</option>
                        <?php //$data = $Fcall->selectChartofAccount('tbl_chart_of_account');?>
                </select>
                </div>

                <div class="col-md-12 mb-3">
                <button class="btn btn-primary mt-4 float-right" name="add_staticAcc" type="submit">Create</button>
                </div>

            </div>
            
            

        </div>               

    
            
  </form>

</div>
</div>

@endsection