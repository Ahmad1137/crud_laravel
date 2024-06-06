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
            <div class="card-header">{{ __('Employee Table') }}
                <a href="{{ url('add')}}" class="btn btn-primary" style="margin-right: 10px;">
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
                        <!-- Add table rows here -->
                        <tr>
                            <td><img src="path/to/image.jpg" alt="Employee Image" style="width: 50px; height: auto;"></td>
                            <td>John Doe</td>
                            <td>Software Engineer</td>
                            <td>(123) 456-7890</td>
                        </tr>
                        <!-- Repeat above <tr> block for additional employees -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


</div>
@endsection
