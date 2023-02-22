
<div class="flex flex-col">
    <div class="grid gap-10 xl:grid-cols-4 md:grid-cols-2 lg:grid-cols-3">
        {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
        
        @foreach ($biens as $b)
        <livewire:components.c-annonce :bien="$b">
        @endforeach
    
        
    </div>
    <div class="py-5">
        {{ $biens->links() }}
    </div>
</div>
