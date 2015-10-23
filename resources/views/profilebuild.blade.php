<h1>Generated Profiles</h1>
@foreach ($profiles as $p)
<p>
<b>Name:</b> {{ $p['name'] }}<br/>
@if( ! empty($p['birthdate'])) <b>Birthdate:</b> {{ $p['birthdate'] }}<br/> @endif
@if( ! empty($p['address'])) <b>Address:</b> {{ $p['address'] }}<br/> @endif
@if( ! empty($p['profile'])) <b>Profile:</b> {{ $p['profile'] }}<br/> @endif
</p>
@endforeach
<h1>REST endpoint</h1>
<p>/generate/profile/{count}/{profile}/{birthdate}/{address}</p>
<h1>JSON version</h1>
<pre>{!! $json !!}</pre>
