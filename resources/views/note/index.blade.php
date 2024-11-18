<x-layout>
    <div class="note-container">
        <div class="notes">
            <a href="{{ route('note.create') }}"
               class="w-[30%] p-6
               bg-white border border-gray-200 rounded-lg
               shadow hover:bg-gray-100 dark:bg-gray-800
               dark:border-gray-700 dark:hover:bg-gray-700
               flex justify-center items-center
               ">

                <h5 class="mb-2 text-9xl font-bold tracking-tight text-gray-900 dark:text-white">
                    +
                </h5>
            </a>
        @foreach($notes as $note)
                <div class="
                max-w-[30%] p-6 bg-white border border-gray-200 rounded-lg
                shadow dark:bg-gray-800 dark:border-gray-700
                flex flex-col justify-between w-[30%]
                ">
                    <div>
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                {{ $note->title }}
                            </h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                            {{ Str::words($note->note, 30) }}
                        </p>
                    </div>
                    <div class="flex gap-2 items-center">
                        <a href="{{ route('note.show', $note->id) }}" class="card-view">View</a>
                        <a href="{{ route('note.edit', $note->id) }}" class="card-edit">Edit</a>
                        <form action="{{ route('note.destroy', $note->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="card-delete">Delete</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="ml-[10vw] w-[80vw]">
            {{ $notes->links() }}
        </div>
    </div>
</x-layout>
