<div class="col mb-4">
  <div class="card h-100">
    <img src="{{ asset('posters/'.$data->photo) }}" class="card-img-top">
    <div class="card-body">
      <div class="card-text">
        {{ $data->title }}
      </div>
    </div>
    <a href="{{ url('/movie/'.$data->id) }}" class="btn btn-primary">
      Details
    </a>
  </div>
</div>
