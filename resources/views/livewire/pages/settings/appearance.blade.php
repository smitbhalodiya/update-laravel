<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card mb-4">
                <h5 class="card-header">{{ __('Appearance Settings') }}</h5>
                <div class="card-body">
                    <form wire:submit="save">
                        <div class="row">
                            <div class="col-md-12 mb-4">
                                <label class="form-label d-block">{{ __('Theme') }}</label>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-check custom-option custom-option-icon">
                                            <label class="form-check-label custom-option-content" for="theme-light">
                                                <span class="custom-option-body">
                                                    <i class="bx bx-sun"></i>
                                                    <span class="custom-option-title">{{ __('Light') }}</span>
                                                    <small>{{ __('Default light theme') }}</small>
                                                </span>
                                                <input wire:model="theme" class="form-check-input" type="radio" value="light" id="theme-light" checked />
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-check custom-option custom-option-icon">
                                            <label class="form-check-label custom-option-content" for="theme-dark">
                                                <span class="custom-option-body">
                                                    <i class="bx bx-moon"></i>
                                                    <span class="custom-option-title">{{ __('Dark') }}</span>
                                                    <small>{{ __('Dark theme mode') }}</small>
                                                </span>
                                                <input wire:model="theme" class="form-check-input" type="radio" value="dark" id="theme-dark" />
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-check custom-option custom-option-icon">
                                            <label class="form-check-label custom-option-content" for="theme-system">
                                                <span class="custom-option-body">
                                                    <i class="bx bx-desktop"></i>
                                                    <span class="custom-option-title">{{ __('System') }}</span>
                                                    <small>{{ __('Follow system theme') }}</small>
                                                </span>
                                                <input wire:model="theme" class="form-check-input" type="radio" value="system" id="theme-system" />
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 mb-4">
                                <label class="form-label d-block">{{ __('Layout') }}</label>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-check custom-option custom-option-icon">
                                            <label class="form-check-label custom-option-content" for="layout-fixed">
                                                <span class="custom-option-body">
                                                    <i class="bx bx-layout"></i>
                                                    <span class="custom-option-title">{{ __('Fixed') }}</span>
                                                    <small>{{ __('Fixed width layout') }}</small>
                                                </span>
                                                <input wire:model="layout" class="form-check-input" type="radio" value="fixed" id="layout-fixed" checked />
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-check custom-option custom-option-icon">
                                            <label class="form-check-label custom-option-content" for="layout-fluid">
                                                <span class="custom-option-body">
                                                    <i class="bx bx-expand"></i>
                                                    <span class="custom-option-title">{{ __('Fluid') }}</span>
                                                    <small>{{ __('Full width layout') }}</small>
                                                </span>
                                                <input wire:model="layout" class="form-check-input" type="radio" value="fluid" id="layout-fluid" />
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4">
                                <button type="submit" class="btn btn-primary me-2">{{ __('Save changes') }}</button>
                                <button type="reset" class="btn btn-outline-secondary">{{ __('Reset') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>