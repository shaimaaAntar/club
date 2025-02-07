@extends('club::layouts.master')
@section('content')
    {{--<!-- Content Wrapper. Contains page content -->--}}

    <div class="content-wrapper">
        <div class="card">

            <div class="card-body">
                @if(session('error_catch'))
                    <div class="bg-danger">{{session('error_catch')}}</div>
                @endif
                <form action="{{route('users.update',$user->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col">
                            <label for="name">Full Name</label>
                            <div class="input-group mb-3">
                                <input  type="text" class="form-control @error('fullName') is-invalid @enderror" value="{{$user->fullName}}" name="fullName">
                            </div>
                            @error('fullName')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col">
                            <label for="name">Email</label>
                            <div class="input-group mb-3">
                                <input value="{{$user->email}}" type="email" class="form-control @error('email') is-invalid @enderror" name="email">
                            </div>
                            @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                    </div>

                    <div class="row">
                        <div class="col">
                            <label for="name">Age</label>
                            <div class="input-group mb-3">
                                <input value="{{$user->age}}" type="age" class="form-control @error('age') is-invalid @enderror" name="age">
                            </div>
                            @error('age')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col">
                            <label for="name">Password </label>
                            <div class="input-group mb-3">
                                <input  type="password" class="form-control @error('password') is-invalid @enderror" name="password">
                            </div>
                            @error('password')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                    </div>

                    <div class="row">

                        <div class="col">
                            <label for="role">Role</label>
                            <div class="input-group mb-3">
                                <select name="role" >
                                    @foreach($roles as $role)
                                        <option value="{{$role->id}}" > {{$role->name}} </option>
                                    @endforeach
                                </select>
                            </div>

                        </div>

                        <div class="col">
                            <label for="name">Status</label>
                            <div class="input-group mb-3">

                                <select name="status">

                                    <option value="active" > active </option>
                                    <option value="injured" > injured </option>
                                    <option value="suspended" > suspended </option>

                                </select>

                            </div>

                        </div>

                    </div>


                    <button type="submit" class="btn btn-outline-primary">{{trans('buttons.save')}}</button>
                </form>
            </div>


        </div>
    </div>
    {{--</form>--}}
@endsection
