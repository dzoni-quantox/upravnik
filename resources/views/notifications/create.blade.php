@extends('layouts.app')

@section('content')

<section>
<div class="container">
  <div class="row">
    <form action="{{ route('notifications.store') }}" method="POST">
      @csrf
      <div class="modal-body">
        {{-- <input type="hidden" value="{{route('notifications.validate-form')}}" id="url" name="url"> --}}
        <input type="number" name="location_id" placeholder="Zgrada">
        <input type="text" name="subject" placeholder="Tema">
        <textarea type="text" name="text" placeholder="Tekst"></textarea>
        {{-- <input class="uniqe-field" id="tax_number" type="text" name="tax_number" placeholder="PIB" required>
        <label for="tax_number" class="error-message tax_number-err-msg"></label>
        <input class="uniqe-field" id="id_number" type="text" name="id_number" placeholder="Matični broj" required>
        <label for="id_number" class="error-message id_number-err-msg"></label>
        <div class="form-group multiple-form-group">
          <div class="form-group input-group">
            <input type="text" name="meta[]" class="form-control" placeholder="Polje po želji">
              <span class="input-group-btn">
                <button type="button" class="btn btn-primary btn-add">+</button>
              </span>
          </div>
        </div> --}}
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </form>
  </div>
</div>
</section>

@endsection