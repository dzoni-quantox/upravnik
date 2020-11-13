<section id="buildings2" class="buildings">
  <div class="container">

    <div class="section-title">
      <h2>Zgrade V2</h2>
      <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
    </div>

    <div class="row">

        @foreach($locations as $location)
            <div class="col-lg-6 mt-4 mt-lg-0">
                <div class="member d-flex align-items-start">
                    <div class="pic"><img src="{{asset('storage/img/image.jpg')}}" class="img-fluid" alt=""></div>
                    <div class="member-info">
                        <h4>{!! $location->city !!}</h4>
                        <span>{!! $location->address !!}</span>
                        <p>PIB: {!! $location->tax_number !!}</p>
                        <p>MB: {!! $location->id_number !!}</p>
                        <!-- <div class="social">
                          <a href=""><i class="ri-twitter-fill"></i></a>
                          <a href=""><i class="ri-facebook-fill"></i></a>
                          <a href=""><i class="ri-instagram-fill"></i></a>
                          <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                        </div> -->
                    </div>
                </div>
            </div>
        @endforeach

    </div>

  </div>
</section>
