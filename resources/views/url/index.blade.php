@extends('url.layouts.layout')
@section('content')
<p>
    Сервис поможет Вам сократить ссылки на любые адреса.
</p>
<p>
    Для этого просто скопируйте ссылку, вставьте в форму и нажмите кнопку «сократить».
    В результате Вы получите ссылку в укороченном виде.
</p>
<br>
   {!! Form::open(['route' => 'store', 'method' => 'post']) !!}
    @include('url.form')
   {!! Form::close() !!}
   <br>

    {{--@if(count($errors)>0)--}}
    {{--<div class="alert alert-danger">--}}
        {{--<ul>--}}
        {{--@foreach($errors->all() as $error)--}}
            {{--<li>{{$error}}</li>--}}
            {{--@endforeach--}}
        {{--</ul>--}}
    {{--</div>--}}
    {{--@endif--}}
<div class="text-center">
    <br>
    <h2>
        <div class="result">

        </div>
    </h2>
</div>
@stop