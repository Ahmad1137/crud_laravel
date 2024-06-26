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
          @if(session('alert'))
        <p class="alert alert-danger">{{ session('alert') }}</p>
        @endif
        <div class="card">
            <div class="card-header">{{ __('Employee Table') }}
                <a href="{{ url('/employeeform')}}" class="btn btn-primary" style="margin-right: 10px;">
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
                            <th scope="col">{{ __('Action') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Add table rows here -->
                         @foreach ($empdataz as $empsdata)
                        <tr>
                             
                            <td>{{$empsdata->employeeImag}}</td>
                            <td>{{$empsdata->employeeName}}</td>
                            <td>{{$empsdata->employeeDesignation}}</td>
                            <td>{{$empsdata->employeePhoneNumber}}</td>
                            <td>
                                <a href="{{url('/edit/' . $empsdata->id)}}" class="btn btn-success">Edit</a>
                                <a href="{{ url('/delete/' . $empsdata->id) }}"class="btn btn-danger">Delete</a>

                            </td>
                         
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
