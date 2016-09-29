@extends('layouts.app')

@section('title')
 Membership Sign Up | SHPE CSUN
@stop

@section('footer','hidden-xl hidden-lg hidden-md hidden-sm hidden-xs')

@section('content')

  <!--Add the title of your typeform below-->
  <title>Membership Sign Up</title>

  <!--CSS styles that ensure your typeform takes up all the available screen space (DO NOT EDIT!)-->
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
  <iframe id="typeform-full" width="100%" height="100%" frameborder="0" src="https://admin94.typeform.com/to/iASH9A"></iframe>
  <script type="text/javascript" src="https://s3-eu-west-1.amazonaws.com/share.typeform.com/embed.js"></script>


@stop