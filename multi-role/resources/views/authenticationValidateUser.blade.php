@extends('layouts.header')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    Hello! User.
                <br/>
                <form method="" action="{{ route('staf.show',$user->id) }}">
                    @csrf
                    <button type="submit" class="btn btn-primary mr-2 mt-2 mb-2"
                    onclick="return confirm('Sure Want change password?')">Change Password</button>
                <div class="modal" id="mdelete" role="dialog" aria-labelledby="moddelete">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="moddelete">Confirm Change</h5>
                                <button type="button" class="close" data-dismiss="modal"
                                    aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>Are you sure you want to change password</p>
                            </div>
                            <div class="modal-footer">
                                <input type="hidden" name="txtid" id="txtid" />
                                <input type="text" name="uid" id="uid" />

                                <button type="button" class="btn btn-danger "
                                    data-dismiss="modal">No</button>

                                <span class="text-right">
                                    <button type="button"
                                        class="btn btn-primary btndelete">Yes</button>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection