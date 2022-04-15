@extends('frames.layout')
@section('title', 'Registration')
@section('container')
    <div class="container">
        <div class="row" style="margin-top:50px">
            <div class="col-md-10 offset-md-1">
                <h1>Multi Form Registration</h1>
                @livewire('multiform')
            </div>
        </div>
    </div>
@endsection
