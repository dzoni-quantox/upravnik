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
                      <tr>
                        <td>Polja po želji</td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>Polje 1</td>
                        <td>Polje 2</td>
                        <td>Polje 3</td>
                        <td>Polje 4</td>
                      </tr>
                      <tr>
                        <td>Polje 1</td>
                        <td>Polje 2</td>
                        <td>Polje 3</td>
                        <td>Polje 4</td>
                      </tr>
                      <tr>
                        <td>Polje 1</td>
                        <td>Polje 2</td>
                        <td>Polje 3</td>
                        <td>Polje 4</td>
                      </tr>
                      <tr>
                        <td>Polje 1</td>
                        <td>Polje 2</td>
                        <td>Polje 3</td>
                        <td>Polje 4</td>
                      </tr>
                      <tr>
                        <td>Polje 1</td>
                        <td>Polje 2</td>
                        <td>Polje 3</td>
                        <td>Polje 4</td>
                      </tr>
                     
                     
                    </tbody>
                  </table>
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
  
@endsection