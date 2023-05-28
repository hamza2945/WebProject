@extends('layout')
@section('content')

<div class="container">
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
        <input type="text" class="input-field">
        <div class="content-box">
            <div class="content">
                <ul class="result">
                    <li class="time">
                        <p>Time</p>
                        <span>60s</span>
                    </li>
                    <li class="errors">
                        <p>Errors</p>
                        <span name="errors">0</span>
                    </li>
                    <li class="wpm">
                        <p>WPM</p>
                        <span name="wpm">0</span>
                    </li>
                    <li class="cpm">
                        <p>CPM</p>
                        <span name="cpm">0</span>
                    </li>
                </ul>
            </div>
            <div class="text-of-typing">
                <p></p>
            </div>
        </div>
        <button><img src="{{asset('images/reload.png')}}"> </button>
    </div>
    <br>
    <br>
    <br>
    <form action="{{url('race')}}" method="post">
    @csrf
        <input type="submit" value='Save' id="saveButton">
    </form>
    <script src="{{ url('js/paragraphs.js') }}"></script>
    <script src="{{ url('js/app.js') }}"></script>
    @stop