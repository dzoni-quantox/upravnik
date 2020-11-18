<section id="buildings" class="buildings">
  <div class="container">

    <div class="section-title">
      <h2>Zgrade</h2>
      <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
    </div>

    <div class="row">

      @foreach($locations as $location)
        <div class="col-lg-12">
            <div class="member d-flex align-items-start p-3">
                <!-- <div class="pic"><img src="assets/img/image.jpg" class="img-fluid" alt=""></div> -->
                <div class="member-info" style="width: 100%;">
                    <div class="row">
                        <div class="col-lg-3">
                            <p class="m-0">{!! $location->city !!}</p>
                        </div>
                        <div class="col-lg-5">
                            <p class="m-0">{!! $location->address !!}</p>
                        </div>
                        <div class="col-lg-2">
                            <p class="m-0">PIB: {!! $location->tax_number !!}</p>
                        </div>
                        <div class="col-lg-2">
                            <p class="m-0">MB: {!! $location->id_number !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      @endforeach

    </div>

  </div>
</section>
