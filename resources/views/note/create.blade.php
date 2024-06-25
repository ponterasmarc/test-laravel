<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add note') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <form action=" {{ route("note.store") }} " method="POST">
                    @csrf
                    <label for="content" class="block my-2">Content:</label>
                    <textarea id="content" class="block w-2/4 rounded-md h-64 border-slate-200 mb-4" name="note" placeholder="Enter note content"></textarea>
                    <div class="flex ">
                        <button type="submit" class="block p-2 bg-sky-400 text-white rounded-md">Add Note</button>
                        <a href=" {{ route('note.index') }} " class="block p-2 border border-slate-200 rounded-md ml-2">Cancel</a>
                    </div>
                </form>
            </div>
        </div>


    </div>


</x-app-layout>
