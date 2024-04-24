@extends('frontend.layouts.main')
@section('main-container')
  </div>
  <!-- about section -->

  <section class="about_section layout_padding">
    <div class="container  ">

      <div class="row">
        <div class="col-md-6 ">
          <div class="img-box">
            <img src="{{url('frontend/images/about-img.png')}}" alt="">
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                We Are FoodHub
              </h2>
            </div>
            <p>
            Welcome to FoodHub, your destination for delicious dining and exceptional service. Founded with a passion for food and a commitment to quality, FoodHub offers a diverse menu crafted with care, featuring everything from comfort food classics to gourmet specialties. We prioritize your dining experience, striving to create memorable moments with attentive service and inviting ambiance. Our dedicated team is committed to delivering culinary excellence, continuously innovating and refining our offerings based on your valuable feedback. Join us on this culinary journey and indulge in the flavors of FoodHub, where every meal is a celebration of taste, quality, and passion.
            </p>
            <a href="">
              Read More
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->

  @endsection