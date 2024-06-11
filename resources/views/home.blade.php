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
        @if(session('msg'))
        <p class="alert alert-success">{{ session('msg') }}</p>
        @endif
        <div class="card">
            <div class="card-header">{{ __('Employee Table') }}
                <a href="{{ route('add')}}" class="btn btn-primary" style="margin-right: 10px;">
                    {{ __('Add Data') }}
                </a>
            </div>
            <div class="card-body">
               

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">{{ __('Image') }}</th>
                            <th scope="col">{{ __('Name') }}</th>
                            <th scope="col">{{ __('Designation') }}</th>
                            <th scope="col">{{ __('Phone Number') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(session('msg'))
                                 <p class="alert alert-danger">{{ session('msg') }}</p>
                        @endif
                        
                        <!-- Add table rows here -->
                         @foreach ($empdataz as $empsdata)
                        <tr>
                             
                            <td>{{$empsdata->employeeImag}}</td>
                            <td>{{$empsdata->employeeName}}</td>
                            <td>{{$empsdata->employeeDesignation}}</td>
                            <td>{{$empsdata->employeePhoneNumber}}</td>
                         
                         
                        </tr>
                        @endforeach
                       
                        <!-- Repeat above <tr> block for additional employees -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


</div>
@endsection
