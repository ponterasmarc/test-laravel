<x-app-layout>
    <x-slot name="header">
        <div class="font-semibold text-xl text-gray-800 leading-tight">
            Edit note
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto p-4">
            <div class="w-1/2 p-4 bg-white rounded-lg">
                <div class="flex justify-between mb-7">
                    <h1 class="text-lg mb-4">{{ $note->created_at}}</h1>
                    <div class="flex items-center">
                        <x-link-as-primary-btn
                            href="{{ route('note.edit', $note) }}"
                            >Edit</x-link-as-primary-btn
                        >
                        <form
                            action="{{ route('note.destroy', $note) }}"
                            method="POST"
                            class="ml-2 block"
                        >
                            @csrf @method('DELETE')
                            <x-secondary-button> Delete </x-secondary-button>
                        </form>
                    </div>
                </div>
                <p class="border border-zinc-200 rounded-lg p-4">
                    {{ $note->note }}
                </p>
            </div>
        </div>
    </div>
</x-app-layout>
