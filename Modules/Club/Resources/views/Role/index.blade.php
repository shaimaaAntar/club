@extends('club::layouts.master')
{{--@section('css')--}}
{{----}}
{{--@stop--}}
@section('content')

    <div class="content-wrapper">

        <div class="card">

            <div class="card-header">
                <h3><i class="fa fa-user m-r-5"></i> Roles</h3>

                <a href="{{route('roles.create')}}" class="btn btn-outline-primary">{{trans('buttons.create')}}</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
            <th>#</th>
            <th>Name</th>
            <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @php $i = 1; @endphp
            @foreach($roles as $role)
            <tr>
            <td>{{$i++}}</td>
            <td>{{$role->name}}</td>

            <td>

                <a href="{{route('roles.edit',$role->id)}}" class="btn btn-sm btn-outline-warning">{{trans('buttons.edit')}}</a>
                <button type="button" class="btn btn-danger btn-sm"
                        data-toggle="modal" data-target="#deleteUser{{ $role->id }}"> Delete <i class="fa fa-trash-o"></i></button>

                <div class="modal fade" id="deleteUser{{$role->id }}" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header modal-header-primary">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                </button>
                                <h4><i class="fa fa-user m-r-5"></i> Delete role</h4>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <form class="form-horizontal" method="post" action="{{route('roles.destroy',$role->id)}}">
                                            @csrf
                                            @method('DELETE')
                                            <fieldset>
                                                <div class="col-md-12 form-group user-form-group">
                                                    <label class="control-label">Delete role</label>
                                                    <div class="pull-right">
                                                        <button type="submit" class="btn btn-danger btn-add btn-sm">YES </button>

                                                    </div>
                                                </div>
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">
                                    Close
                                </button>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->

            </td>
            </tr>
            @endforeach
            </tbody>
            </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->


    </div>
@endsection
