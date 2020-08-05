Using named routes vs url

<pre>
{{ url('/app/profile') }}
{{ route('app.profile', [ 'username' => 'some-username' ]) }}
</pre>

<pre>
    {{ url('/app/about') }}
    {{ route('app.about') }}
</pre>
