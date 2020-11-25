@extends('layouts.app')

@section('content')

  <section id="building-profile" class="building-profile">
    <div class="container">
      
      <form id="location-register-form" action="{{ route('locations.update', $location->id) }}" method="POST">
        @csrf
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xs-12 toppad" >
          <div class="panel panel-info">
            <div class="panel-heading text-center mt-3">
              <h3 class="panel-title">{{$location->address}}</h3>
            </div>
              <input type="hidden" name="_method" value="put" />
              <div class="row edit-form-holder">
                <div class="col-lg-6 mt-3">
                  <label for="city" class="">Grad</label>
                  <input class="form-control" type="text" name="city" placeholder="Grad" required value="{{$location->city}}">
                </div>
                <div class="col-lg-6 mt-3">
                  <label for="address" class="">Adresa</label>
                  <input class="form-control" type="text" id="address" name="address" placeholder="Adresa" required value="{{$location->address}}">
                </div>
                <div class="col-lg-6 mt-3">
                  <label for="number_of_apartments" class="">Broj stanova</label>
                  <input class="form-control" type="number" name="number_of_apartments" placeholder="Broj stanova" required value="{{$location->number_of_apartments}}">
                </div>
                <div class="col-lg-6 mt-3">
                  <label for="tax_number" class="">PIB</label>
                  <input class="form-control" id="tax_number" type="text" name="tax_number" placeholder="PIB" required value="{{$location->tax_number}}">
                </div>
                <div class="col-lg-6 mt-3">
                  <label for="id_number" class="">Matični broj</label>
                  <input class="form-control" id="id_number" type="text" name="id_number" placeholder="Matični broj" required value="{{$location->id_number}}">
                </div>
              </div>              
            
            {{-- <div class="panel-footer mt-2">
              <span class="user-button-holder">
                  <a type="button" class="btn btn-sm btn-primary">Stanar <i class="bx bx-plus-circle"></i></a>
                  <a type="button" class="btn btn-sm btn-primary">Obaveštenje <i class="bx bx-plus-circle"></i></a>
                  <a type="button" class="btn btn-sm btn-primary">Izmeni podatke <i class="bx bx-edit"></i></a>
                </span>
            </div> --}}
          </div>
        </div>
      </div>
      <div class="row edit-form-holder">
        <div class="col-lg-12">
          <h4 for="city" class="mt-4">Polja po želji</h4>
        </div>
        @foreach($location->locationMeta as $field)  
          <div class="col-lg-6 mt-3 js-field-holder">
            <div class="form-group multiple-form-group">
              <div class="form-group input-group">
              <input type="hidden" value="{{route('locations.delete-meta')}}" id="fieldRemove" name="fieldRemove">
              <input type="text" name="meta[]" class="form-control js-field-input" data-id="{{$field->id}}" placeholder="Polje po želji" value="{{$field->field_name}}">
                  <span class="input-group-btn">
                    <button type="button" class="btn btn-primary btn-default btn-danger js-remove-field-btn">-</button>
                  </span>
              </div>
            </div>
          </div>
        @endforeach
        <div class="col-lg-6 mt-3 js-form-group">
          <div class="form-group multiple-form-group"> {{-- Add data-max="4" for limited number of field, 4 in this case  --}}
            <div class="form-group input-group">
              <input type="text" name="meta[]" class="form-control" placeholder="Polje po želji" >
                <span class="input-group-btn">
                  <button type="button" class="btn btn-primary btn-add">+</button>
                </span>
            </div>
          </div>
        </div>
        <div class="col-lg-12">
          <button type="submit" class="btn btn-primary submit-form">Save changes</button>
        </div>
      </div>
    </form>
    </div>
  </section>
  
@endsection