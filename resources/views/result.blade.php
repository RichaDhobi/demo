@extends('layouts.app')
@section('content')
    @if ($subject == 'maths')
        <h1>Maths marks is {{ $result ?? '' }}</h1>
    @endif
    @if ($subject == 'sceince')
        <h1>Sceince marks is {{ $result ?? '' }}</h1>
    @endif
    @if ($subject == 'english')
        <h1>English marks is {{ $result ?? '' }}</h1>
        <h1>English Wrong answer is {{ $wrongResult ?? '' }}</h1>

    @endif
@endsection
