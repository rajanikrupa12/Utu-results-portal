@section('title', 'ProductItems Page')
@extends('layouts.header')

@section('content')

<section class="content">
    <div class="col-12">
        <div class="card p-2">
            <a type="button" class="btn btn-primary mr-2 mt-2 mb-2"
                style="width: 150px; margin-inline: auto; color: white;" data-toggle="modal" data-target="#addModal">Add
                Student</a>
            <div>
                <table class="table table-bordered" id="data_table"
                    style="font-family: Arial, Helvetica, sans-serif; font-size:16px;">
                    <thead>
                        <tr>
                            <th scop="col">#</th>
                            <th scop="col" class="text-center">Enrollment No</th>
                            <th scop="col" class="text-center">Name</th>
                            <th scop="col" class="text-center">Semester</th>
                            <th scop="col" class="text-center">Subject</th>
                            <th scop="col" class="text-center">Per. No</th>
                            <th scop="col" class="text-center">Mob. No</th>
                            <th scop="col" class="text-center">Email ID</th>
                            <th scop="col" class="text-center">Operations</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($diplomaee as $key=>$data)
                            <tr>
                                <td>{{$key + 1}}</td>
                                <td>{{$data->enrollment_no}}</td>
                                <td>{{$data->student}}</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>{{$data->student_moblie}}</td>
                                <td>{{$data->email}}</td>
                                <td>
                                    <a href="{{route('delete-student', ['id' => $data['id']]) }}" class="button delete-confirm"><i style='color: red' onclick="return confirm('Are you sure student delete ?')" class="fas fa-trash-alt delete mt-2" data-toggle="tooltip" data-placement="bottom" title="Delete"></i></a>
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
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addModalLabel">Add Excel</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    @csrf
                    <div class="form-group">
                        <label class="col-form-label">Image</label>
                        <input type="file" name="file" class="form-control" required>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('script')
<script type="text/javascript">
    //data-add
    $('#submit-add').click(function (event) {
        event.preventDefault()
        var myform = document.getElementById("add_exercise");
        var formData = new FormData(myform);

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        window.swal({
            title: "Uploding...",
            text: "Please wait",
            imageUrl: "{{ asset('public/loader/ajaxloader.gif') }}",
            showConfirmButton: false,
            allowOutsideClick: false
        });
        $.ajax({
            type: "POST",
            url: "{{route('import')}}",
            data: formData,
            success: function (data) {
                if (data.status == 1) {
                    swal("Done!", data.message, "success");
                    window.location.href = "{{route('student_list')}}";
                } else {
                    swal("ERROR!", '<div class="message"> <ul> <li>' + data.message +
                        '</li> </ul></div>', "error");
                }
            },
            error: function (data) {
                swal("ERROR!", data, "error");
                console.log(data);
            },
            cache: false,
            contentType: false,
            processData: false
        });
    });

</script>
@endsection
