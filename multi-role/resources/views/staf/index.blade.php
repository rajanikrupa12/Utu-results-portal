@section('title', 'Staff Page')
@extends('layouts.header')

@section('content')

<section class="content">
    <div class="col-12">
        <div class="card p-2">
            <a class="btn btn-primary mr-2 mt-2 mb-2" style="width: 170px; margin-left:auto;"
                href="{{ route('staf.create') }}">Add New Staf</a>
            <div>
                <table class="table table-bordered" id="data_table"
                    style="font-family: Arial, Helvetica, sans-serif; font-size:16px;">
                    <thead>
                        <tr>
                            <th scop="col">Sr. No.</th>
                            <th scop="col" class="text-center">Name</th>
                            <th scop="col" class="text-center">Email</th>
                            <th scop="col" class="text-center">Phone</th>
                            <th scop="col" colspan=2 class="text-center">Operations</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach($staf as $no => $i)
                        <tr>
                            <th scope="row">{{ $no+1 }}</th>
                            <td>{{$i->name}}</td>
                            <td>{{$i->email}}</td>
                            <td>{{$i->phone}}</td>
                            <td>
                                <form method="post" action="{{ route('staf.destroy',$i->id) }}">
                                    @csrf
                                    @method('delete')
                                    <div class="field is-grouped py-1">
                                        <div class="control">
                                            <a href="{{ route('staf.edit',$i->id) }}"
                                                class="btn btn-warning mr-2 mt-2 mb-2">Update
                                            </a>&nbsp;
                                            <button type="submit" class="btn btn-danger mr-2 mt-2 mb-2"
                                                onclick="return confirm('Sure Want Delete?')">Delete</button>
                                            <div class="modal" id="mdelete" role="dialog" aria-labelledby="moddelete">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="moddelete">Confirm Delete</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">

                                                            <p>Are you sure you want to delete</p>
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
                                        </div>
                                    </div>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
</div>
@endsection
