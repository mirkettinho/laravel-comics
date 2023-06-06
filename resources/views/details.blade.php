@extends("layout.main")

@section("content")

<div class="personal-container">

  <div class="d-flex">
    <div class="details">
      <div class="title">
        <h1>ciao</h1>
      </div>
      <div class="price">
        1
      </div>
      <div class="description">
        2
      </div>
    </div>
    <div class="adv">
      ciao
      <img src="{{Vite::asset("public/img/adv.jpg")}}" alt="">
      <img src="{{Vite::asset("public/img/footer-bg.jpg")}}" alt="">
    </div>
  </div>
</div>
@endsection
