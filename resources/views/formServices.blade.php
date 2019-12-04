@extends('layouts.googleAutoComplete')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <a href="{{ route('home')}}" class="btn btn-primary">Home</a>
            <a href="{{ route('services.show')}}" class="btn btn-primary">Services</a>
            <br><br>
            <div class="card">
                <div class="card-header">Form - New Services</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if(session('message'))
                      <div class="alert alert-success">
                        {{ session('message')}}
                      </div>
                    @endif

                    <form action="{{ route('services.save') }}" method="POST">
                      @include('_form')
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
