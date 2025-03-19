<div class="row">
    <div class="col-md-12">
        <div class="card mb-4">
            <h5 class="card-header">{{ __('Change Password') }}</h5>
            <div class="card-body">
                <form wire:submit="updatePassword">
                    <div class="row">
                        <div class="mb-3 col-md-6 form-password-toggle">
                            <label class="form-label" for="current_password">{{ __('Current Password') }}</label>
                            <div class="input-group input-group-merge">
                                <input wire:model="current_password" type="password" class="form-control" id="current_password" name="current_password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" />
                                <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                            </div>
                            @error('current_password')
                                <div class="text-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-md-6 form-password-toggle">
                            <label class="form-label" for="password">{{ __('New Password') }}</label>
                            <div class="input-group input-group-merge">
                                <input wire:model="password" type="password" class="form-control" id="password" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" />
                                <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                            </div>
                            @error('password')
                                <div class="text-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3 col-md-6 form-password-toggle">
                            <label class="form-label" for="password_confirmation">{{ __('Confirm New Password') }}</label>
                            <div class="input-group input-group-merge">
                                <input wire:model="password_confirmation" type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" />
                                <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                            </div>
                        </div>
                        <div class="col-12 mb-4">
                            <p class="fw-semibold mt-2">{{ __('Password Requirements:') }}</p>
                            <ul class="ps-3 mb-0">
                                <li class="mb-1">{{ __('Minimum 8 characters long - the more, the better') }}</li>
                                <li class="mb-1">{{ __('At least one lowercase character') }}</li>
                                <li>{{ __('At least one number, symbol, or whitespace character') }}</li>
                            </ul>
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary me-2">{{ __('Save changes') }}</button>
                            <button type="reset" class="btn btn-outline-secondary">{{ __('Cancel') }}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>