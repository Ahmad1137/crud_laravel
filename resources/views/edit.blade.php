@extends('layouts.app')

@section('content')
<style>
    .card-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    .btn-primary {
        margin-right: 10px; /* Adjust this for spacing as needed */
    }
</style>

<div class="container">
 <div class="row justify-content-center">
   <div class="col-md-8">
    <div class="card">
        <div class="card-header">
            {{ __('Update Employee') }}
        </div>
        <div class="card-body">
            <form method="POST" action="{{url('/update/' . $empdata->id)}}" enctype="multipart/form-data">
                @csrf <!-- Include CSRF token for security -->
                
                <div class="mb-3">
                    <label for="employeeImage" class="form-label">{{ __('Image') }}</label>
                    <input type="text" class="form-control" id="employeeImage" name="employeeImage" value="{{$empdata->employeeImag}}" required>
                </div>
                
                <div class="mb-3">
                    <label for="employeeImage" class="form-label">{{ __('Name') }}</label>
                    <input type="text" class="form-control" id="employeeName" name="employeeName" placeholder="Enter employee name" value="{{$empdata->employeeName}}" required>
                </div>
                
                <div class="mb-3">
                    <label for="employeeDesignation" class="form-label">{{ __('Designation') }}</label>
                    <input type="text" class="form-control" id="employeeDesignation" name="employeeDesignation" placeholder="Enter designation" value="{{$empdata->employeeDesignation}}" required>
                </div>
                
                <div class="mb-3">
                    <label for="employeePhoneNumber" class="form-label">{{ __('Phone Number') }}</label>
                    <input type="text" class="form-control" id="employeePhoneNumber" name="employeePhoneNumber" placeholder="Enter phone number" value="{{$empdata->employeePhoneNumber}}"  required>
                </div>
                
                
                <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
            </form>
        </div>
    </div>
</div>

</div>


</div>
@endsection
