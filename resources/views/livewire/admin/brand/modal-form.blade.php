   <!-- Brand Add Modal -->
   <div wire:ignore.self class="modal fade" id="addBrandModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
       <div class="modal-dialog">
           <div class="modal-content">
               <div class="modal-header">
                   <h1 class="modal-title fs-5" id="exampleModalLabel">Add New Brand?</h1>
                   <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <form wire:submit.prevent="storeBrand">
                   <div class="modal-body">
                       <div class="mb3">
                           <label>Brand Name</label>
                           <input type="text" wire:model.defer="name" class="form-control">
                           @error('name') <small class="text-danger">{{ $message }}</small> @enderror
                       </div>
                       <div class="mb3">
                           <label>Brand Slug</label>
                           <input type="text" wire:model.defer="slug" class="form-control">
                           @error('slug') <small class="text-danger">{{ $message }}</small> @enderror
                       </div>
                       <div class="mb3">
                           <label>Status</label><br />
                           <input type="checkbox" wire:model.defer="status"> Checked=Hidden, Unchecked=Visible
                           @error('status') <small class="text-danger">{{ $message }}</small> @enderror
                       </div>
                   </div>
                   <div class="modal-footer">
                       <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                       <button type="Submit" class="btn btn-primary">Save</button>
                   </div>
               </form>
           </div>
       </div>
   </div>
   <!-- End of Brand Add Modal -->


   <!-- Brand Update Modal -->
   <div wire:ignore.self class="modal fade" id="updateBrandModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
       <div class="modal-dialog">
           <div class="modal-content">
               <div class="modal-header">
                   <h1 class="modal-title fs-5" id="exampleModalLabel">Update Brand?</h1>
                   <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <form wire:submit.prevent="updateBrand">
                   <div class="modal-body">
                       <div class="mb3">
                           <label>Brand Name</label>
                           <input type="text" wire:model.defer="name" class="form-control">
                           @error('name') <small class="text-danger">{{ $message }}</small> @enderror
                       </div>
                       <div class="mb3">
                           <label>Brand Slug</label>
                           <input type="text" wire:model.defer="slug" class="form-control">
                           @error('slug') <small class="text-danger">{{ $message }}</small> @enderror
                       </div>
                       <div class="mb3">
                           <label>Status</label><br />
                           <input type="checkbox" wire:model.defer="status"> Checked=Hidden, Unchecked=Visible
                           @error('status') <small class="text-danger">{{ $message }}</small> @enderror
                       </div>
                   </div>
                   <div class="modal-footer">
                       <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                       <button type="Submit" class="btn btn-primary">Update</button>
                   </div>
               </form>
           </div>
       </div>
   </div>