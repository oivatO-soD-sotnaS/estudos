<x-layout>
    <div class="text-white min-h-[60svh] w-[80vw] ml-[10vw]
                flex flex-col gap-6 ">
        <div class="">
            <h1 class="font-bold text-3xl py-4">Título: {{ $note->title }}</h1>
            <p class="">Created: {{ $note->created_at->diffForHumans() }}</p>
            <div class="flex gap-2">
                <a href="{{ route('note.edit', $note->id) }}" class="card-edit">Edit</a>
                <form action="{{ route('note.destroy', $note->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="card-delete">Delete</button>
                </form>
            </div>
        </div>
        <div class="w-full">
            <div class="bg-white text-black p-6 shadow-lg shadow-blue-500/50">
                {{ $note->note}}
            </div>
        </div>
    </div>
</x-layout>
