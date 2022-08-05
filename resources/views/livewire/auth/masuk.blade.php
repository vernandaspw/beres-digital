<div>
    {{-- The best athlete wants his opponent at his best. --}}
    <livewire:public.component.public-navbar />

    <div class="mt-5 pt-5 mb-5">
        <div class="container d-flex justify-content-center">
            <div class="col-lg-5 col-md-10 col-11 col-xl-5">
                <div class="card shadow-lg border-0" style="border-radius: 16px">
                    <div class="card-body">
                        <div class="text-center mt-2"><h5><b>LOGIN | MASUK</b></h5></div>
                        <hr>
                        @if (session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif
                        <div class="mt-2">
                            <form wire:submit.prevent='masuk'>
                                <div class="">
                                    <input wire:model='email' required class="form-control rounded-pill" type="email" placeholder="masukan email">
                                </div>
                                <div class="mt-2">
                                    <input wire:model='password' required class="form-control rounded-pill" type="password"
                                        placeholder="masukan password">
                                </div>
                                <div class="mt-2 d-flex justify-content-between">
                                    <div class="">
                                        <input checked type="checkbox" class="form-check-input" id="lupapassword">
                                        <label for="lupapassword">
                                            Ingat saya
                                        </label>
                                    </div>
                                    <div class="">
                                        <a href="{{ url('lupa-password') }}" class="text-decoration-none">Lupa password</a>
                                    </div>
                                </div>
                                <div class="mt-2">
                                    <button type="submit" class="form-control btn text-white rounded-pill"
                                        style="{{ env('bgColor200') }}">LOGIN</button>
                                </div>
                            </form>
                            <div class="text-center mt-4">
                                Atau lanjutkan dengan
                            </div>
                            <div class="mt-2 text-center">
                                <div class="p-2 border-1 rounded-circle border d-inline-flex">
                                    <a href="{{ route('auth.google') }}">
                                        <img class="" width="30px" src="{{ asset('images/google.png') }}">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="mt-3 text-center" style="font-size: 14px">
                            Belum memiliki akun? <a href="{{ url('daftar') }}">Daftar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
