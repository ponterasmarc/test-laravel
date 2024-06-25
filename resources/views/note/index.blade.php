<x-app-layout>

        <a href="{{ route('note.create') }}" class="w-full bg-sky-400 block rounded-lg p-2 my-4 text-neutral-50 text-center">New Note</a>

        <ul class="flex flex-wrap">
            @foreach ($notes as $note)
            <li class="p-6 mr-2 w-fit bg-sky-50 border border-zinc-300 rounded-lg">
                <div class="note-content">
                    <div class="head">
                        <h3 class="text-lg">Time: {{$note->created_at}}</h3>
                        <p class="mt-2 mb-2">{{Str::words($note->note, 30)}}</p>
                        <div class="flex justify-between align-center ">
                            <a href="{{ route('note.show', $note) }}" class="px-4 py-1 bg-sky-600 text-white rounded-lg">View</a>
                            <a href="{{ route('note.edit', $note) }}" class="px-4 py-1 bg-lime-600 text-white rounded-lg">Edit</a>
                            <form action="{{route('note.destroy', $note)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="px-4 py-1 bg-rose-600 text-white rounded-lg">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            </li>
            @endforeach
        </ul>

        {{$notes -> links()}}


</x-app-layout>


{{-- 45:09 --}}
