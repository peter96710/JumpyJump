@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <div class="card">
                    @foreach($poszts as $poszt)
                        <div class="card-header">{{$poszt->name}}</div>

                            <div class="card-body">
                                <div class="lists">
                                    {{$poszt->description}}
                                </div>
                            </div>
                    @endforeach
                </div>






                </div>
            </div>
        </div>
    </div>
@endsection
