<div class="row">
    <div class="col-md-12">
        <div class="card mb-4">
            <h5 class="card-header">{{ __('Profile Details') }}</h5>
            <div class="card-body">
                <form wire:submit="save">
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label for="name" class="form-label">{{ __('Name') }}</label>
                            <input wire:model="name" type="text" class="form-control" id="name" name="name" placeholder="{{ __('Name') }}" />
                            @error('name')
                                <div class="text-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="email" class="form-label">{{ __('Email') }}</label>
                            <input wire:model="email" type="email" class="form-control" id="email" name="email" placeholder="{{ __('Email') }}" />
                            @error('email')
                                <div class="text-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mt-2">
                            <button type="submit" class="btn btn-primary me-2">{{ __('Save changes') }}</button>
                            <button type="reset" class="btn btn-outline-secondary">{{ __('Cancel') }}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>