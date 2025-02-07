@extends('club::layouts.master')
@section('content')
    {{--<!-- Content Wrapper. Contains page content -->--}}

    <div class="content-wrapper">
        <div class="card">

            <div class="card-body">
                @if(session('error_catch'))
                    <div class="bg-danger">{{session('error_catch')}}</div>
                @endif
                <form action="{{route('roles.update'),$role->id}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col">
                            <label for="name">name</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control @error('name') is-invalid @enderror" value="{{$role->name}}" name="name">
                            </div>
                            @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                    </div>

                    <button type="submit" class="btn btn-outline-primary">{{trans('buttons.save')}}</button>
                </form>
            </div>


        </div>
    </div>
    {{--</form>--}}
@endsection
