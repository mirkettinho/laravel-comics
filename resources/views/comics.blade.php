@extends("layout.main")

@section("content")

{{-- @dump($db) --}}

<div class="bg-main">
  <div class="container">
    <div class="d-flex">

      @foreach ($db as $item)

      <div class="card md-card" >
        <div class="card-image"</div>
          <img class="card-img-top" src="{{$item["thumb"]}}" alt="Card image cap">
        </div>
        <div class="card-body">
          <h5 class="card-title">{{$item["series"]}}</h5>
        </div>
      </div>
      @endforeach



    </div>
  </div>
</div>

@endsection


