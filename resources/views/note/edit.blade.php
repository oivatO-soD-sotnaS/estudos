<x-layout>
    <div class="h-[60svh] flex justify-center items-center w-[80vw] ml-[10vw]">
        <form action="{{ route('note.update', $note) }}" method="POST" class="w-full">
            @csrf
            @method('PUT')
            <div class="mb-5">
                <label for="title" class="block mb-2 text-2xl font-bold text-gray-900 dark:text-white">Título</label>
                <input name="title" value="{{ $note->title }}" type="text" id="title" class="w-[40%] bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
            </div>
            <div class="mb-5">
                <label for="note" class="block mb-2 text-2xl font-bold text-gray-900 dark:text-white">Sua nota</label>
                <textarea name="note" id="note" rows="4" class="w-full h-[30svh] block p-2.5  text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Leave a comment...">
                    {{ $note->note }}
                </textarea>
            </div>
            <div class="mb-5">
                <a href="{{ route('note.index') }}" class="card-delete">Cancel</a>
                <button class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
            </div>
        </form>
    </div>
</x-layout>
