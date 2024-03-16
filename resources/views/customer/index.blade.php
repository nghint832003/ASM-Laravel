@extends('templates.layout2')
@section('content')
    <main>

        @foreach ($room as $r )

        <form action="{{ route('add-bill') }}" method="POST">
            @csrf
        <div class="card">
            <div class="card__title">
              <div class="icon">
                <a href="#"><i class="fa fa-arrow-left"></i></a>
              </div>
              <h3>HOTEL</h3>
            </div>
            <div class="card__body">
              <div class="half">
                <div class="featured_text">
                  <h2>{{ $r->name }}</h2>
                  {{-- <p class="sub">HOTEL </p> --}}
                  <p class="sub">{{ $r->price }}$</p>
                </div>
                <div class="image">
                  <img src="{{ $r->img2?''.asset('uploads/'.$r->img2):'' }}" alt="">
                </div>
              </div>
              <div class="half">
                <div class="description">
                  <p>{{ $r->description }}</p>
                </div>
                <span class="stock"><i class="fa fa-pen"></i> In stock</span>
                <div class="reviews">
                  <ul class="stars">
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star-o"></i></li>
                  </ul>
                  <span>(64 reviews)</span>
                </div>
              </div>
            </div>
            <input type="text" hidden name="room_id" value="{{ $r->roomType_id }}">
            <input type="text" hidden name="customer_id" value="1">
            <div class="card__footer">
                @error('booking_date')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              <div class="recommend">
                <p>Check in</p>
                {{-- <h3>Andrew Palmer</h3> --}}
                <input type="date" name="booking_date">
              </div>

              @error('checkOut_date')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror
              <div class="recommend">
                <p>Check out</p>
                {{-- <h3>Andrew Palmer</h3> --}}
                <input type="date" name="checkOut_date">
              </div>
              <div class="action">
                <button type="submit">Add to cart</button>
              </div>
            </div>
          </div>
        </form>
          <br>
        @endforeach
    </main>
@endsection
