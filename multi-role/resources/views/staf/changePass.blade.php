@extends('layouts.header')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Laravel - Reset Password</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('resetpassword') }}">
                        @csrf 
                         @foreach ($errors->all() as $error)
                            <p class="text-danger">{{ $error }}</p>
                         @endforeach 
                    <div class="form-group row">
                            <div class="col-md-6">
                                <input id="id" type="hidden" class="form-control" name="id"  value="{{$user->id}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Email </label>
                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control" name="email"  value="{{$user->email}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">New Password</label>
                            <div class="col-md-6">
                                <input id="new_password" type="password" class="form-control" name="new_password" autocomplete="current-password">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">New Confirm Password</label>
                            <div class="col-md-6">
                                <input id="new_confirm_password" type="password" class="form-control" name="new_confirm_password" autocomplete="current-password">
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Reset Password
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

