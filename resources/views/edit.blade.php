<x-layout>
  <x-slot name="title">{{ $title }}</x-slot>
  <h1 class="display-4 my-5">{{ $title }}</h1>
  <div class="row">
    <div class="col">
      <form method="post" action="/notes/{{ $note['id'] }}" class="form mb-3 d-flex flex-column bg-light p-5">
        @csrf
        @method('put')

        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control mb-3" name="title" value="{{ $note['title'] }}">

        <label for="text" class="form-label">Text</label>
        <textarea class="form-control mb-3" name="text">{{ $note['text'] }}</textarea>

        <div class="align-self-end">
          <a href="/notes/{{ $note['id'] }}" class="btn btn-secondary">Cancel</a>
          <button class="btn btn-primary">Update Note</button>
        </div>
      </form>

      <form method="post" action="/notes/{{ $note['id'] }}" class="d-flex justify-content-center">
        @csrf
        @method('delete')
        <button class="btn btn-outline-danger">Delete Note</button>
      </form>
    </div>
  </div>
</x-layout>
