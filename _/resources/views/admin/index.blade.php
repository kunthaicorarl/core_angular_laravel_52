@extends('layouts.dashboard')

@section('sidebar')
  @parent
@endsection
@section('content')
<ui-view></ui-view>
 {{--  <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>
            </div>
        </div>  --}}
@endsection
