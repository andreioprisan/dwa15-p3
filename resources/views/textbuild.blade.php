<h1>Generated Text</h1>
@foreach ($text as $t)
    <p>{{ $t }}</p>
@endforeach
<h1>REST endpoint</h1>
<p>/generate/paragraphs/{count}</p>
<h1>JSON version</h1>
<pre>{!! $json !!}</pre>
