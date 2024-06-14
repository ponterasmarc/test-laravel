<x-app-layout>
    <div class="add-note-form">
        <h2>Add a New Note</h2>
        <form action=" {{ route("note.store") }} " method="POST">
          @csrf
          {{-- <label for="title">Title:</label>
          <input type="text" id="title" name="title" placeholder="Enter note title"> --}}
          <label for="content">Content:</label>
          <textarea id="content" name="note" placeholder="Enter note content"></textarea>
          <button type="submit">Add Note</button>
          <a href=" {{ route('note.index') }} ">Cancel</a>
        </form>
      </div>
</x-app-layout>
