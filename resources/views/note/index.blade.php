<x-app-layout>
    <x-slot name="header">
        <h2>
            {{ __("List of notes") }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <x-link-as-primary-btn
                    href="{{ route('note.create') }}"
                    class="bg-sky-800 hover:bg-sky-50 mb-4 text-neutral-50 hover:bg-sky-800"
                    >New Note</x-link-as-primary-btn
                >

                <ul class="flex flex-wrap">
                    @foreach ($notes as $note)
                    <li
                        class="p-4 mr-4 mb-4 w-1/3 border border-zinc-300 rounded-lg"
                    >
                        <div class="note-content">
                            <div class="head">
                                <h3 class="text-lg">
                                    Time: {{$note->created_at}}
                                </h3>
                                <p class="mt-2 mb-2">
                                    {{Str::words($note->note, 30)}}
                                </p>
                                <div class="flex align-center">
                                    <x-link-as-primary-btn
                                        href="{{ route('note.show', $note) }}"
                                        class="mr-2"
                                        >View</x-link-as-primary-btn
                                    >
                                    <x-link-as-primary-btn
                                        href="{{ route('note.edit', $note) }}"
                                        class="mr-2"
                                        >Edit</x-link-as-primary-btn
                                    >
                                    <form
                                        action="{{
                                            route('note.destroy', $note)
                                        }}"
                                        method="POST"
                                    >
                                        @csrf @method('DELETE')
                                        <x-secondary-button>
                                            Delete
                                        </x-secondary-button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </li>
                    @endforeach
                </ul>
                {{$notes -> links()}}
            </div>
        </div>
    </div>
</x-app-layout>
