@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Admin Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in as an Admin!') }}
                </div>
            </div>
        </div>

        <div class="col-md-8 my-2">
            <div class="card">
                <div class="card-header">{{ __('User List') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table table-stripped">
                        <tr>
                            <th>SNo.</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>User Type</th>
                        </tr>
                        <?php $inc = 1; ?>
                        @foreach($users As $user)
                        
                            <tr>
                                <td>{{$inc}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->getRole->display_name}}</td>
                            </tr>
                        <?php $inc++; ?>    
                        @endforeach 
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
