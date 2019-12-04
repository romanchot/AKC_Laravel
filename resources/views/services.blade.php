@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <a href="{{ route('home')}}" class="btn btn-primary">Home</a>
            <a href="{{ route('services.form')}}" class="btn btn-primary">Add Service</a>
            <br><br>
            <div class="card">
                <div class="card-header">Services</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if(count($services))
                      <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">title</th>
                            <th scope="col">Description</th>
                            <th scope="col">Address</th>
                            <th scope="col">City</th>
                            <th scope="col">State</th>
                            <th scope="col">ZipCode</th>
                            <th scope="col">Latitude</th>
                            <th scope="col">Longitude</th>
                            <th scope="col" colspan="2">{{__('')}}</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($services as $serv)
                            <tr>
                              <th scope="row">{{ $serv->id }}</th>
                              <td>{{ $serv->title }}</td>
                              <td>{{ $serv->description }}</td>
                              <td>{{ $serv->address }}</td>
                              <td>{{ $serv->city }}</td>
                              <td>{{ $serv->state }}</td>
                              <td>{{ $serv->zipCode }}</td>
                              <td>{{ $serv->geoLocLatitude }}</td>
                              <td>{{ $serv->geoLocLongitude }}</td>
                              <td>
                                <a href="/services/{{ $serv->id }}/editServices" class="btn btn-success btn-sm">Edit</a>
                              </td>

                              <td>
                                <form action="/services/{{ $serv->id }}" method="POST">
                                  {{ method_field('DELETE') }}
                                  @csrf
                                  <button type="submit" name="button" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                              </td>
                            </tr>
                          @endforeach
                        </tbody>
                      </table>
                    @else
                      {{ __('No services registered!!!') }}
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
