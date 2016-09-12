@extends('url.layouts.layout')
@section('content')
    <h3> <p class="text-center"> Your shorten link:</p> </h3>
    <br><br>
    <h3> <p class="text-center"> {{ config('siteconf.domain').$url->hash }} </p></h3>

@stop