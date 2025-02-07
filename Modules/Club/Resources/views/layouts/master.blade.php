<!DOCTYPE html>
<html>

@include('club::layouts.head')
<body class="hold-transition sidebar-mini layout-fixed">

@include('club::layouts.header')
@include('club::layouts.sidebar')

<div class="wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="card">

                <!-- Main content -->
            @yield('content')
            <!-- /.content -->
            </div>
        </div>
    </section>
    {{--@yield('content')--}}
</div>

@include('club::layouts.scripts')

</body>
</html>
