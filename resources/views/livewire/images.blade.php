<div>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    @if(session()->has('message'))
                        <div class="alert alert-success" >{{session('message')}}</div>
                    @endif
                    <div class="card">
                        <div class="card-header">
                            <h3>Upload Images</h3>
                        </div>
                        <div class="card-body">
                            <form wire:submit.prevent='uploadImages()' id="upload-images" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="filename">Choose Images</label>
                                    <input type='file' name="images" class="form-control" wire:model="images" multiple/>
                                </div>
                                <button type="submit" class="btn btn-success" >Uplaod</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
