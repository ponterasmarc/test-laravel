<x-app-layout>
    <!-- You must be the change you wish to see in the world. - Mahatma Gandhi -->
    <div class="container mx-auto px-4">
        <div class="p-4">
           <div class="flex justify-between">
                <h1 class="text-lg mb-4">{{ $note->created_at}}</h1>
                <div class="flex">
                    <a href="{{route("note.edit", $note)}}" class="ml-2 bg-green-400">Edit</a>
                    <form action="{{route('note.destroy', $note)}}" method="POST" class="ml-2">
                        @csrf
                        @method('DELETE')
                        <button class="btn-delete">Delete</button>
                    </form>
                </div>
           </div>
            <p>{{ $note->note }}</p>
        </div>
    </div>
</x-app-layout>
