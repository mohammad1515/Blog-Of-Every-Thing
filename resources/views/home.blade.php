@extends('layouts.main')

@section('content')

  <!-- Page Header -->
  <header class="masthead" style="background-image: url('blog_files/img/home-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
          <span class="subheading">{{ setting('site.description') }}</span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Content -->
<div class="container">
  <div class="row">
    <div class="col-lg-8 col-md-10 mx-auto">

      @foreach($Posts as $Post)

        <div class="post-preview">
        <a href="{{ url('/post') }}/{{ $Post->slug }}">
            <h2 class="post-title">
              {{ $Post->title }}
            </h2>
            <h3 class="post-subtitle">
              {{ $Post->body }}
            </h3>
          </a>
          <p class="post-meta">category:
            <a href="#">{{ $Post->category->name }}</a><br>
            {{ $Post->created_at }}</p>
        </div>
        <hr>

      @endforeach
      <!-- Pager -->
      <div class="clearfix">
        {{ $Posts->links() }}
      </div>
    </div>
  </div>
</div>
@endsection
