@extends('admin.layouts.app')

@section('content')
    <main id="js-page-content" role="main" class="page-content">
        <div class="subheader">
            <h1 class="subheader-title">
                <i class="subheader-icon fal fa-"></i> Dashboard
                <sup class="badge badge-primary fw-500">*</sup>
            </h1>
            <div class="subheader-block">Register to create your account</div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div id="panel-1" class="panel">
                    <div class="panel-hdr">
                        <h2>Welcome, {{ Auth::user()->first_name ?? '' }} {{ Auth::user()->last_name ?? '' }}</h2>
                        <div class="panel-toolbar">
                            <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip"
                                data-offset="0,10" data-original-title="Collapse"></button>
                            <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip"
                                data-offset="0,10" data-original-title="Fullscreen"></button>
                            <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip" data-offset="0,10"
                                data-original-title="Close"></button>
                        </div>
                    </div>

                    <div class="container-fluid">
                        <!-- Main content starts here -->
                        <table class="table table-responsive">
                            <tr>
                                <td>Name </td>
                                <td>{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</td>
                            </tr>
                            <tr>
                                <td>Email </td>
                                <td>{{ Auth::user()->email }}</td>
                            </tr>
                            <tr>
                                <td>Phone </td>
                                <td>{{ Auth::user()->phone }}</td>
                            </tr>
                        </table>
                        <!-- Main content ends here -->
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
