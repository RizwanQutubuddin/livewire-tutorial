<!-- The Modal -->
<div wire:ignore.self class="modal" id="updateStudentModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Update Student</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form>
            <input type="hidden" name="id" wire:model="ids">
            <div class="mb-3 mt-3">
                <label class="form-label">First Name:</label>
                <input type="text" class="form-control" id="first_name" placeholder="Enter First Name" name="first_name" wire:model="first_name">
                @error('first_name')<span class="text-dnager">{{$message}}</span>@enderror
            </div>
            <div class="mb-3 mt-3">
                <label class="form-label">Last Name:</label>
                <input type="text" class="form-control" id="last_name" placeholder="Enter Last Name" name="last_name" wire:model="last_name">
                @error('last_name')<span class="text-dnager">{{$message}}</span>@enderror

            </div>
            <div class="mb-3 mt-3">
                <label class="form-label">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" wire:model="email">
                @error('email')<span class="text-dnager">{{$message}}</span>@enderror

            </div>
            <div class="mb-3">
                <label class="form-label">Phone:</label>
                <input type="text" class="form-control" id="phone" placeholder="Enter Phone" name="phone" wire:model="phone">
                @error('phone')<span class="text-dnager">{{$message}}</span>@enderror

            </div>
            <div class="form-check mb-3">
                <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="remember"> Remember me
                </label>
            </div>
        </form>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" wire:click.prevent="update()">Update Student</button>
      </div>

    </div>
  </div>
</div>