<x-app-layout>
    <!-- You must be the change you wish to see in the world. - Mahatma Gandhi -->
    {{-- https://www.youtube.com/watch?v=eUNWzJUvkCA --}}
    <div class="container mx-auto px-4">
        <div class="p-4">
           <div class="flex justify-between w-1/2">
                <h1 class="text-lg mb-4">{{ $note->created_at}}</h1>
                <div class="flex items-center">
                    <a href="{{route("note.edit", $note)}}" class="block ml-2 bg-lime-700 text-white px-4 py-2 rounded-md">Edit</a>
                    <form action="{{route('note.destroy', $note)}}" method="POST" class="ml-2 block">
                        @csrf
                        @method('DELETE')
                        <button class="block btn-delete bg-rose-700 text-white px-4 py-2 rounded-md">Delete</button>
                    </form>
                </div>
           </div>
            <p>{{ $note->note }}</p>
        </div>
    </div>
</x-app-layout>


