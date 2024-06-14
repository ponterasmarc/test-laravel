<x-app-layout>
    <div class="add-note-form">
        <h2>Edit Note</h2>
        <form action=" {{ route('note.update', $note)}} " method="POST">
          @csrf
          @method('PUT')
          <label for="title">Title:</label>
          <input type="text" id="title" name="title" placeholder="Enter note title">
          <label for="content">Content:</label>
          <textarea id="content" name="note" placeholder="Enter note content">{{$note->note}}</textarea>
          <button type="submit">Add Note</button>
          <a href="{{ route('note.index')}} "></a>
        </form>
      </div>
</x-app-layout>
