@extends('master')

@section('title')

CSI | {{$article->title}}

@endsection

@section('content')

<div class="newsitem-nav-background"></div>
		<div class="newsitem-container-background"></div>
		<div class="newsitem-container">
			@if($article)
			<div class="newsitem-topnav">
				<i class="fas fa-arrow-left"></i>
				<a href="/news">Back to news</a>
			</div>
			<div class="newsitem-img">
                @if($article->img)
                <img src="/{{$article->img}}" alt="">
                @else
                <img src="/images/banner.jpg" alt="">
                @endif
			</div>
			<div class="newsitem-heading">
				<h1>
					{{$article->title}}
				</h1>
			</div>
			<div class="newsitem-content">
				<p>
					{!!$article->content!!}
				</p>
			</div>
			@endif
		</div>
@endsection