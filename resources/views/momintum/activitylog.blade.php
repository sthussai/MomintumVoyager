@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Activity log</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
                @foreach($logs as $log)
                <div class="card-body">
                    <p class="w3-medium">{{$log->subject_type}} {{$log->description}} on {{$log->updated_at}} </p>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
