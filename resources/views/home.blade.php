@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card text-center">
                <div class="card-header DivheadAbout">About</div>

                <div class="card-body DivbodyAbout">

                    <div class="lists">

                        <p> Jumpy Jump is a fun and addictive free to play endless arcade hopper mobile game.</p>

                        <p class="text-left">Release date: 2020</p>

                    </div>


                </div>
            </div>

            <div class="card text-center">
                <div class="card-header DivheadUpdates">Updates</div>

                <div class="card-body DivbodyUpdates">

                        <div class="lists">
                            <p>Do you want to see how this game improves? Watch out our update history.</p>
                                <a class="nes-list is-disc">
                                    @foreach($posts as $post)
                                        <a href="post/{{$post->id}}">{{$post->name}}  </a>
                                        <br>
                                    @endforeach
                                </div>
                        </div>
                </div>

            <div class="card text-center">
                <div class="card-header DivheadFaq">FAQ</div>

                <div class="card-body DivbodyFaq">
                    <p>Have a question? Take a look at our Frequently Asked Questions.</p>

                        <button href="{{ route('faq') }}" type="button"  class="btn btn-primary">Read</button>
                </div>


            </div>

            <div class="card text-center">
                <div class="card-header DivheadContact">Contact</div>
                <div class="card-body DivbodyContact">

                    @if(count($errors)>0)

                        <div class="alert alert-danger">
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </div>

                    @endif
                        <form method="GET" action="contact">
                            @csrf
                                <p>If you have any questions that are not already answered in the FAQ menu, ask it!</p>
                                <hr align="center" width="50%">
                                <div class="form-group">
                                    <label for="email" class="col-form-label">{{ __('Email') }}</label>
                                    <div class="text-center">
                                        <input id="email" type="email" class="form-control text-center @error('email') is-invalid @enderror" name="email" required autocomplete="email" autofocus>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="name" class="col-md-5 col-form-label">{{ __('Message') }}</label>
                                    <div >
                                        <textarea  id="name" type="text" rows="9" class="form-control @error('name') is-invalid @enderror" name="name" required autocomplete="name" autofocus></textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-0 offset-md-0">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Send') }}
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
