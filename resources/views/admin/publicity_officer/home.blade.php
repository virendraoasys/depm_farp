@extends('admin.layouts.app')

@section('content')
    <div class="col p-4 offset-md-3 offset-sm-4 offset-xl-2 offset-1">
        <div class="w-100">
            <div class="w-100 bg-white position-relative rounded regFormBox my-3">
                <h3 class="bg-green text-white text-center py-2 mb-2">
                    Dashboard
                </h3>

                <div class="row">
                    <div class="col-xl-12">
                        <div id="panel-1" class="panel">
                            <h1>
                                Welcome, {{ $role ?? '' }}
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /END ROW -->
    </div>
@endsection