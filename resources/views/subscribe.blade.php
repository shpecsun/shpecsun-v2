@extends('layouts.app')

@section('title')
 Subscribe | SHPE CSUN
@stop

@section('bodyTag','signup')

@section('content')
  <style type="text/css">
    html{
      margin: 0;
      height: 100%;
      overflow: hidden;
    }
    iframe{
      position: absolute;
      left:0;
      right:0;
      bottom:0;
      top:0;
      border:0;
    }
  </style>
  <iframe id="typeform-full" width="100%" height="100%" frameborder="0" src="https://admin94.typeform.com/to/kf5WSJ"></iframe>
  <script type="text/javascript" src="https://s3-eu-west-1.amazonaws.com/share.typeform.com/embed.js"></script>
@stop