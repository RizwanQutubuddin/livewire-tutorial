<!-- The Modal -->
<div wire:ignore.self class="modal" id="addStudentModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Add New Student</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form>

            <div class="mb-3 mt-3">
                <label class="form-label">First Name:</label>
                <input type="text" class="form-control" id="first_name" placeholder="Enter First Name" name="first_name" wire:model="first_name">
                @error('first_name')<span class="text-danger">{{$message}}</span>@enderror

            </div>
            <div class="mb-3 mt-3">
                <label class="form-label">Last Name:</label>
                <input type="text" class="form-control" id="last_name" placeholder="Enter Last Name" name="last_name" wire:model="last_name">
                @error('last_name')<span class="text-danger">{{$message}}</span>@enderror

            </div>
            <div class="mb-3 mt-3">
                <label class="form-label">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" wire:model="email">
                @error('email')<span class="text-danger">{{$message}}</span>@enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Phone:</label>
                <input type="text" class="form-control" id="phone" placeholder="Enter Phone" name="phone" wire:model="phone">
                @error('phone')<span class="text-danger">{{$message}}</span>@enderror
            </div>
        </form>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" wire:click.prevent="store()">Save Student</button>
      </div>

    </div>
  </div>
</div>