@extends('layouts/app')

@section('content')

<!--main Banner-->
@include('sections/banner/mainBanner')

<!--book preview-->
@include('sections/bookPreview/bookPreview')

<!--reviews-->
@include('sections/reviews/reviews')

<!--reviews2-->
@include('sections/reviews/reviews2')

<!-- About Author -->
@include('sections/author/author')

<!-- Others books -->
@include('sections/additionalBooks/additionalBooks')

<!-- Events -->
@include('sections/events/events')

<!--Contact-->
@include('contactform.create')

@endsection
