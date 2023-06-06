@extends("layout.main")

@section("content")

{{-- @dd($comic) --}}
<div class="personal-container">

  <div class="personal-card">
    <img src="{{$item["thumb"]}}" alt="">
  </div>

  <div class="d-flex">
    <div class="details">
      <div class="title">
        <h1>{{$item["title"]}}</h1>
      </div>
      <div class="price">
        {{$item["price"]}}
      </div>
      <div class="description">
        {{$item["description"]}}
      </div>
    </div>
    <div class="adv">
      <div class="adv-image">
        <img src="{{Vite::asset("public/img/dc-logo.png")}}" alt="">
      </div>
      <a class="md-btn" href="{{route ("comics")}}">torna alla lista dei fumetti</a>
    </div>
  </div>
</div>
@endsection
