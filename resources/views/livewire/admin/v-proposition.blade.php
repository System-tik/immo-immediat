<div>
    <input type="text" name="nom" wire:model="nom">
    @error('nom') <span class="error">{{ $message }}</span><br> @enderror
    <input type="text" name="prenom" wire:model="prenom">
    @error('prenom') <span class="error">{{ $message }}</span><br> @enderror
    <input type="text" name="email" wire:model="email">
    @error('email') <span class="error">{{ $message }}</span><br> @enderror
    <input type="text" name="phone" wire:model="phone">
    @error('phone') <span class="error">{{ $message }}</span><br> @enderror
    <input type="text" name="message" wire:model="message">
    @error('message') <span class="error">{{ $message }}</span><br> @enderror
    <input type="text" name="bien_id" wire:model="bien_id">
    @error('bien_id') <span class="error">{{ $message }}</span><br> @enderror

    <button wire:click="add">add</button>
    <button wire:click="update">update</button>
    @error('idUnique1') <span class="error">{{ $message }}</span><br> @enderror
    <button wire:click="delete">delete</button>
    @error('idUnique2') <span class="error">{{ $message }}</span><br> @enderror
    <button wire:click="clear">clear</button>

    @foreach ($propositions as $proposition)
        <p wire:click="recupere({{ $proposition }})">{{ $proposition->nom }}</p>
    @endforeach

</div>
