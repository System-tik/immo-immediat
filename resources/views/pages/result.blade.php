@extends('app')
@section('content')
<div>
    <div class="h-32 bg-red-500">
        <livewire:client.v-nav>
    </div>
    {{-- search bar --}}
    <livewire:client.v-result :request="$request">

    <livewire:client.v-footer>
</div>
@endsection
