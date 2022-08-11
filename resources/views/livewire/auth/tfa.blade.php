<div>
    <livewire:public.component.public-navbar />
    <div class="container mt-5 pt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">OTP Verification</div>

                    <div class="card-body">
                        <form wire:submit.prevent='store'>
                            @if (session('otp') == 'email')
                                <p class="text-center">We sent code to email :
                                    {{ substr(auth()->user()->email, 0, 5) . '******' . substr(auth()->user()->email, -2) }}
                                </p>
                            @endif
                            @if (session('otp') == 'wa')
                                <p class="text-center">We sent code to wa :
                                    +{{ substr(auth()->user()->nohp, 0, 5) . '******' . substr(auth()->user()->nohp, -2) }}
                                </p>
                            @endif
                            @if ($message = Session::get('success'))
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="alert alert-success alert-block">

                                            <strong>{{ $message }}</strong>
                                        </div>
                                    </div>
                                </div>
                            @endif

                            @if ($message = Session::get('error'))
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="alert alert-danger alert-block">

                                            <strong>{{ $message }}</strong>
                                        </div>
                                    </div>
                                </div>
                            @endif

                            <div class="form-group row">
                                <label for="code" class="col-md-4 col-form-label text-md-right">Code</label>
                                <div class="col-md-6">
                                    <input id="code" type="number"
                                        class="form-control @error('code') is-invalid @enderror" wire:model='code'
                                        required autocomplete="code" autofocus>
                                    @error('code')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>



                            <div class="form-group row mb-0 mt-2">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary me-1">
                                        Submit
                                    </button>
                                    <button type="button" class="btn btn-link" wire:click='resend'>Resend
                                        Code?</button>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
