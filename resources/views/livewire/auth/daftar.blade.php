<div>
    {{-- The best athlete wants his opponent at his best. --}}
    <livewire:public.component.public-navbar />

    <div class="mt-4 pt-5 mb-5">
        <div class="container d-flex justify-content-center">
            <div class="col-lg-5 col-md-10 col-11 col-xl-5">
                <div class="card shadow-lg border-0" style="border-radius: 16px">
                    <div class="card-body">
                        <div class="text-center mt-2">
                            <h5><b>REGISTER | DAFTAR</b></h5>
                        </div>
                        <hr>
                        <div class="mt-2">
                            <form>
                                <div class="">
                                    <input required class="form-control rounded-pill" type="email"
                                        placeholder="masukan email">
                                </div>
                                <div class="mt-2">
                                    <input required class="form-control rounded-pill" type="password"
                                        placeholder="masukan password">
                                </div>
                                <hr>
                                <div class="">
                                    <label for="nama">Nama lengkap</label>
                                    <input required class="form-control rounded-pill" type="text" maxlength="30" placeholder="isi nama lengkap">
                                </div>
                                <div class="mt-2">
                                    <label for="jeniskelamin">Jenis kelamin</label>
                                    <select required class="form-control rounded-pill" id="jeniskelamin">
                                        <option value="m">Laki laki</option>
                                        <option value="f">Perempuan</option>
                                    </select>
                                </div>
                                <div class="mt-2">
                                    <label for="tanggallahir">Tanggal lahir</label>
                                    <input required class="form-control rounded-pill" type="date"
                                        placeholder="masukan tanggal lahir">
                                </div>
                                <div class="mt-2 d-flex justify-content-start">
                                    <div class="">
                                        <input checked type="checkbox" class="form-check-input" id="lupapassword">
                                        <label for="lupapassword">
                                            Ingat saya
                                        </label>
                                    </div>

                                </div>
                                <div class="mt-2">
                                    <button type="submit" class="form-control btn text-white rounded-pill"
                                        style="{{ env('bgColor200') }}">DAFTAR</button>
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
                            Sudah memiliki akun? <a href="{{ url('login') }}">Masuk</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
