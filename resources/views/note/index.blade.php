<x-app-layout>
    <div class="container mx-auto px-4">
        <div class="container">
            <a href="{{ route('note.create') }}" >New Note</a>
        </div>
        <ul class="flex flex-wrap content-around">
            @foreach ($notes as $note)
            <li class="p-7 m-2 w-60 bg-sky-50 border- border-zinc-300">
                <div class="note-content">
                    <div class="head">
                        <h3>Time: {{$note->created_at}}</h3>
                        <div class="flex justify-between">
                            <a href="{{ route('note.show', $note) }}" class="p-2 bg-blue-400 rounded-lg my-2">View</a>
                            <a href="{{ route('note.edit', $note) }}" class="p-2  bg-green-400 rounded-lg my-2">Edit</a>
                
                            <form action="{{route('note.destroy', $note)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="p-2 bg-red-400 rounded-lg my-2">Delete</button>
                            </form>
                        </div>
                    </div>
                    <p>{{Str::words($note->note, 30)}}</p>
                </div>
            </li>
            @endforeach
        </ul>
    
        {{$notes -> links()}}
        </div> 
   
</x-app-layout>


{{-- 45:09 --}}