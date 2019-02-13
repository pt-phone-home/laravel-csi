@extends('master')

@section('title')
    CSI News | Latest Updates
@endsection

@section('content')
    <div class="news-page-banner">
			<i class="fas fa-newspaper"></i>
			<h1>News:</h1>
			<p>Latest news
				<span>from</span> SCI</p>
		</div>

		<div class="news-banner">
			<h1>Latest News &amp; Updates</h1>
		</div>

		<div class="news-and-updates-background">
		</div>

		<div class="news-and-updates">
			<div class="news">
				@if ($articles)
				@foreach ($articles as $article)
				<div class="news-item">
					@if($article->img)
				<img src="/{{$article->img}}" alt="">
					@else
					<img src="images/banner.jpg" alt="">
					@endif
					<div class="info">
						<h1>
							{{$article->title}}
						</h1>
						<h5>
							{{$article->timestamps}}
						</h5>
					</div>
					<div class="news-item-content">
						<p>
							{!!$article->content!!}
						</p>
					</div>
					<div class="news-item-footer">
					<a href="show/{{$article->id}}">Read More</a>
					</div>

				</div>
				@endforeach
				@endif



			</div>
		</div>

		<div class="twitter">
			<a class="twitter-timeline" href="https://twitter.com/tweet_to_pete?ref_src=twsrc%5Etfw" data-chrome="noheader nofooter noborders noscrollbar"
			 data-width="40rem" data-tweet-limit="10">Tweets by tweet_to_pete</a>
			<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

		</div>
@endsection