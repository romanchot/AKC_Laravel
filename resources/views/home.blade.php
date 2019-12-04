@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <a href="{{ route('services.show')}}" class="btn btn-primary">Services</a>
            <br><br>
            <div class="card">

                <div class="card-header">Dashboard - Home</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    You are logged in! </br>
                    Thank for using this app!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
