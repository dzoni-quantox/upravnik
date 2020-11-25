@extends('layouts.app')

@section('content')

  <section id="building-profile" class="building-profile">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xs-12 toppad" >
          <div class="panel panel-info">
            <div class="panel-heading text-center mt-3">
              <h3 class="panel-title">{{$location->address}}</h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class=" col-md-12 col-lg-12 "> 
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>Grad:</td>
                        <td>{{$location->city}} </td>
                        <td>Broj stanova:</td>
                        <td>{{$location->number_of_apartments}}</td>
                      </tr>
                      <tr>
                        <td>PIB:</td>
                        <td>{{$location->tax_number}}</td>
                        <td>Matični broj:</td>
                        <td>{{$location->id_number}}</td>
                      </tr>
                    </tbody>
                  </table>
                  <div class="container">
                    <div class="row">
                      <div class="col-lg-12">
                        <h5>Polja po želji</h5>
                      </div>
                      @foreach($location->locationMeta as $field)
                        <div class="col-lg-3 custom-field-holder">{{$field->field_name}}</div>    
                      @endforeach
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div>
              <div class="container">
                <div><h4>Obavestenja</h4></div>
                <div class="row">
                  @foreach($location->notifications as $notification)  
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                      <div class="icon-box">
                        <h4><a href="">{{$notification->subject}}</a></h4>
                        <p>
                          {{$notification->text}}
                        </p>
                      </div>
                    </div>
                  @endforeach
                </div>
              </div>
            </div>
            <div class="panel-footer">
              <span class="user-button-holder">
                  <a type="button" class="btn btn-sm btn-primary">Stanar <i class="bx bx-plus-circle"></i></a>
                  <a type="button" class="btn btn-sm btn-primary">Obaveštenje <i class="bx bx-plus-circle"></i></a>
                  <a type="button" class="btn btn-sm btn-primary">Izmeni podatke <i class="bx bx-edit"></i></a>
                </span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="building-notification" class="building-notification">
    
  </section>
  
@endsection