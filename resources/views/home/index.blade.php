@extends('layouts.main')

@section('content')

<h1>Home page</h1>

<!-- @if (!empty($users))

@foreach  ($users as $user)

{{ $user['name']}} 
<br>
@endforeach
@endif -->

<!-- @php
    $users2 = [];
@endphp

@forelse ($users as $user)

{{ $user['name']  }}
<br>
@empty
<p> No users</p>

@endforelse -->
<!-- 
@for ($i=1; $i <= 10; $i++)
@if ($i == 5)
    @continue
@endif

{{ $i }} <br>
@if ($i == 8)
    @break
@endif
@endfor -->
@foreach  ($users as $user)

<span @class(['text-danger' => $loop->odd])>{{$loop ->iteration}}.{{$user['name']}}></span>
<br>
@endforeach



@endsection

@section('title', 'Test title from view')
 


