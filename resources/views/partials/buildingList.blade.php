<section id="buildings" class="buildings">
  <div class="container">

    <div class="section-title">
      <h2>Zgrade</h2>
      <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
    </div>

    <div class="row">

      @foreach($locations as $location)
        <div class="col-lg-12 mb-2">
            <div class="member d-flex align-items-start p-3">
                <!-- <div class="pic"><img src="assets/img/image.jpg" class="img-fluid" alt=""></div> -->
                <div class="member-info" style="width: 100%;">
                    <div class="row">
                        <div class="col-lg-3">
                            <p class="m-0">{!! $location->city !!}</p>
                        </div>
                        <div class="col-lg-4"> <!-- za admina da bude col-lg-4 a za usere col-lg-5 -->
                            <p class="m-0">{!! $location->address !!}</p>
                        </div>
                        <div class="col-lg-2">
                            <p class="m-0">PIB: {!! $location->tax_number !!}</p>
                        </div>
                        <div class="col-lg-2">
                            <p class="m-0">MB: {!! $location->id_number !!}</p>
                        </div>
                        <div class="col-lg-1 text-center"> <!-- za admina da se vidi za usere se ne vidi -->
                          <div class="dropdown show">
                            <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class='bx bxs-cog'></i>
                            </a>
                            <div class="dropdown-menu admin-building-list-dropdown" aria-labelledby="dropdownMenuLink">
                              <a class="dropdown-item" href="{{ route('locations.show', $location->id) }}">Pregled</a>
                              <a class="dropdown-item" href="{{ route('locations.edit', $location->id) }}">Izmeni</a>
                              <a class="dropdown-item" href="#">
                                <form action="{{ route('locations.destroy', $location->id) }}" method="POST">
                                  @method('DELETE')
                                  @csrf
                                  <button onclick="return confirm('Da li ste sigurni da želite da obrišete zgradu?')" type="submit">Obriši</button>
                                </form>
                              </a>
                            </div>
                          </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
      @endforeach

    </div>

  </div>
</section>
