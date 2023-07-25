@section('title', 'StafCreate Page')
@extends('layouts.header')

@section('content')

<section class="content pt-3">
    <div class="col-12">
        @if($response = session('response'))
            <div class="alert @if($response['status']) alert-success @else alert-danger @endif">
                {{ $response['message'] }}
            </div>
        @endif
        @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <div class="card">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">Add Staf</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                <li class="breadcrumb-item active">Staf</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <form action="{{ route('staf.store') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="staf Name">Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Name">
                </div>
                <div class="form-group">
                    <label for="Email">Email</label>
                    <input type="text" name="email" class="form-control" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="Password">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="password">
                </div>
                <div class="form-group">
                    <label for="Phone">Phone</label>
                    <input type="text" name="phone" class="form-control" placeholder="phone" max="10">
                </div>
                <div class="form-group">
                <input type="submit" class="btn btn-block btn-md btn-primary" value="Create" />
                </div>
            </form>
            </div>
        </div>
    </div>
</section>

@endsection
