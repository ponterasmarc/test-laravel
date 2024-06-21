<x-app-layout>
    <div class="container mx-auto bg-white my-8 rounded-lg p-10">
        <h2 class="text-2xl text-sky-950 pb-2">Add a New Note</h2>
        <form action=" {{ route("note.store") }} " method="POST">
          @csrf
          <label for="content" class="block">Content:</label>
          <textarea id="content" class="block w-2/4 rounded-md h-64 border-slate-200 mb-4" name="note" placeholder="Enter note content"></textarea>
          <div class="flex ">
            <button type="submit" class="block p-2 bg-sky-400 text-white rounded-md">Add Note</button>
            <a href=" {{ route('note.index') }} " class="block p-2 border border-slate-200 rounded-md ml-2">Cancel</a>
          </div>
        </form>
      </div>
</x-app-layout>
