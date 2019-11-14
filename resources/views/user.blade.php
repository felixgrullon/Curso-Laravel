
@extends('layouts.master')

@section('title')
Perfil de {{$usr->name}} - {!! $usr->name !!}
@endsection


@section('header')

@extends('layouts.header')
@section('headerin')
Nombre .....
@endsection

@endsection



@section('content')
<p>Email : {{ $usr->email }}</p>
<p><strong>Contrasena:</strong> {{ $usr->password }}</p>

<select>

	@foreach ($usr_all as $usr1)


	<option value="{{ $usr1->id }}">{{ $usr1->id }} - {{ $usr1->name }} - {{ $usr1->email }}</option>

	@endforeach

</select>
<br>






@endsection
