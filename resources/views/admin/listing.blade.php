@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @foreach($contacts as $contact)
                    <div class="card text-center">
                        <div class="card-header">{{$contact->email}}</div>

                        <div class="card-body">
                            {{$contact->name}}
                        </div>

                        <div class="card-footer">
                            <a href="/admin/destroy/{{$contact->id}}" class="btn btn-danger"><span class="left ion-close">Delete</span></a>
                        </div>

                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
