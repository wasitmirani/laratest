<div>
    <div class="tab-pane fade active show" id="user-add" role="tabpanel">
        <div class="card">
        <div class="card-body">
        <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="form-group">
        <input type="text" wire:model="name" class="form-control" placeholder="Name *">
        </div>
        </div>


        <div class="col-md-4 col-sm-12">
        <div class="form-group">
        <input type="text" wire:model="email" class="form-control" placeholder="Email ID *">
        </div>
        </div>

        <div class="col-md-4 col-sm-12">
        <div class="form-group">
        <input type="text" wire:model="password" class="form-control" placeholder="Password">
        </div>
        </div>
        <div class="col-md-4 col-sm-12">
        <div class="form-group">
        <input type="text" class="form-control" wire:model="password" placeholder="Confirm Password">
        </div>
        </div>
        <div class="col-12">
        <hr class="mt-4">


        <button type="button" wire:click="store()"  class="btn btn-primary">Add</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">CLOSE</button>
        </div>
        </div>
        </div>
        </div>
        </div>



</div>
