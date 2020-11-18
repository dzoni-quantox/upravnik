<div class="modal fade" id="add-building" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="location-register-form" action="{{ route('locations.store') }}" method="POST">
        @csrf
        <div class="modal-body">
          <input type="hidden" value="{{route('locations.validate-form')}}" id="url" name="url">
          <input type="text" name="city" placeholder="Grad" required>
          <input class="uniqe-field" type="text" id="address" name="address" placeholder="Adresa" required>
          <label for="address" class="error-message address-err-msg"></label>
          <input type="number" name="number_of_apartments" placeholder="Broj stanova" required>
          <input class="uniqe-field" id="tax_number" type="text" name="tax_number" placeholder="PIB" required>
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
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary submit-form">Save changes</button>
        </div>
      </form>
    </div>
  </div>
</div>