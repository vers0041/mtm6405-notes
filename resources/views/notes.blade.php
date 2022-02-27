<x-layout>
  <x-slot name="title">{{ $title }}</x-slot>
  <h1 class="display-4 my-5">{{ $title }}</h1>
  
  <div class="row">
  @foreach ($notes as $note)
    <div class="col-12 col-md-6 col-lg-4">
      <a href="/notes/{{ $note['id'] }}" class="text-decoration-none text-body">
        <div class="card">
          <h5 class="card-header">{{ $note['title'] }}</h5>
          <div class="card-body">
            <p class="card-text">{{ $note['text'] }}</p>
          </div>
        </div>
      </a>
    </div>
  @endforeach
  </div>
</x-layout>