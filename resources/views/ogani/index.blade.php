@extends('layouts.ogani')

@section('main')
    <!-- Categories Section Begin -->
    @include('inc.categories-section')
    <!-- Categories Section End -->

    <!-- Featured Section Begin -->
    @include('inc.featured-section')
    <!-- Featured Section End -->

    <!-- Banner Begin -->
    @include('inc.banner')
    <!-- Banner End -->

    <!-- Latest Product Section Begin -->
    @include('inc.latest-product-section')
    <!-- Latest Product Section End -->

    <!-- Blog Section Begin -->
    @include('inc.blog-section')
    <!-- Blog Section End -->
@endsection
