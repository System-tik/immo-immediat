@extends('app')

@section('content')
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v15.0" nonce="NufCGRqq"></script>
    {{-- ici les views du home --}}
    <livewire:client.v-nav>
    <livewire:client.v-header>
    {{-- Produits --}}
    <div class="px-5 py-20 2xl:px-72 lg:px-32 xl:px-32">
        <div class="pb-3">
            <h1 class="pb-3 text-2xl lg:text-4xl">Nos recentes annonces</h1>
            <hr>
        </div>
        <livewire:client.v-liste-produit>
    </div>
    <livewire:client.v-motivation>
    <livewire:client.v-actu>
@endsection
