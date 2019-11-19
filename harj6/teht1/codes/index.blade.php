@extends('app')

@section('content')
	<h1>Articles</h1>
@foreach ($articles as $article)
	<article>
        <h2><a href="/articles/{{ $article->id }}">{{ $article->title }}</a></h2>
		<p>{{ $article->body }}</p>
        <p>Julkaistu: {{ $article->published_at }}</p>
	</article>
@endforeach

@stop