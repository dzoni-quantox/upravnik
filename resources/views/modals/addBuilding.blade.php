<div class="modal fade" id="add-building" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ route('locations.store') }}">
        @method("POST")
        <div class="modal-body">
          <input type="text" name="city" placeholder="Grad">
          <input type="text" name="address" placeholder="Adresa">
          <input type="number" name="number_of_apartments" placeholder="Broj stanova">
          <input type="text" name="tax_number" placeholder="PIB">
          <input type="text" name="id_number" placeholder="Matični broj">
          <div class="form-group multiple-form-group">
            <div class="form-group input-group">
              <input type="text" name="meta[]" class="form-control" placeholder="Polje po želji">
                <span class="input-group-btn"><button type="button" class="btn btn-default btn-add">+
                </button></span>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
      </form>
    </div>
  </div>
</div>