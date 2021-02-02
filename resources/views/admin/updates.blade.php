@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">

                @if(count($errors)>0)

                    <div class="alert alert-danger">
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </div>

                @endif

                <div class="card text-center">
                    <div class="card-header">Update</div>
                    <div class="card-body">

                        @if(count($errors)>0)

                            <div class="alert alert-danger">
                                @foreach($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </div>

                        @endif
                        <form method="GET" action="posting">
                            @csrf

                            <div class="form-group">
                                <label for="name" class="col-form-label">{{ __('Name') }}</label>
                                <div class="">
                                    <input id="name" type="text" class="form-control text-center @error('name') is-invalid @enderror" name="name" required autocomplete="name" autofocus>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="description" class="col-form-label">{{ __('Description') }}</label>
                                <div class="">
                                    <textarea id="description" type="text" rows="9" class="form-control  @error('description') is-invalid @enderror" name="description" required autocomplete="description" autofocus></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <div>
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Update') }}
                                    </button>
                                </div>
                            </div>
                        </form>

                    </div>


                </div>
            </div>
        </div>
    </div>
@endsection
