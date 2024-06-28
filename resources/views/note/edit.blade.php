<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit Note
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-4 sm:p-8 bg-white rounded-lg">
                <form
                    action=" {{ route('note.update', $note) }} "
                    method="POST"
                >
                    @csrf @method('PUT')
                    <label for="title" class="block mb-2">Title:</label>
                    <x-text-input
                        type="text"
                        id="title"
                        name="title"
                        class="mb-4 w-1/2"
                        placeholder="Enter note title"
                    />
                    <label for="content" class="block mb-2">Content:</label>
                    <textarea
                        id="content"
                        class="block border-zinc-300 w-1/2 mb-4 rounded-md"
                        name="note"
                        placeholder="Enter note content"
                        >{{$note->note}}</textarea
                    >
                    <x-primary-button type="submit" class="mr-2"
                        >Add Note</x-primary-button
                    >
                    <x-nav-link href="{{ route('note.index') }} ">
                        back</x-nav-link
                    >
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
