@extends('app')

@section('content')

	 <h1>{{ $article->title }}</h1>

	<article>
		<p>{{ $article->body }}</p>
	</article>

@stop