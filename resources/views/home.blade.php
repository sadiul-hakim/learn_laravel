<h1>Hi I am learning PHP.</h1>
<a href="/about/user">About Page</a>

{{ random_int(1, 100) }}

@for ($i = 0; $i < 10; $i++)
    <p>{{ $i }}</p>
@endfor

<br />

@include('common.footer', ['owner' => 'HakimSoftware'])
{{-- @includeIf('common.header', ['owner' => 'HakimSoftware']) --}}

<x-alert msg="User Login successful" /> {{-- component, we can pass `class` as well --}}