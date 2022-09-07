@extends('layouts.auth')
@section('title')
Daftar
@endsection
@section('content')
<form method="POST" action="{{ route('register') }}">
    @csrf
    <div class="form-group">
        <label class="small mb-1" for="input_register_name">Nama Lengkap</label>
        <input name="name" class="form-control py-4 @error('name') is-invalid @enderror" id="input_register_name" type="name" value="{{ old('name') }}" placeholder="Nama lengkap" autocomplete=’off’/>
        @error('name')
             <span class="invalid-feedback" role="alert">
                 <strong>{{ $message }}</strong>
             </span>
         @enderror
     </div>
     <div class="form-group">
        <label class="small mb-1" for="input_register_asal_sekolah">Asal Sekolah/Kampus</label>
        <input name="asal_sekolah" class="form-control py-4 @error('asal_sekolah') is-invalid @enderror" id="input_register_asal_sekolah" type="asal_sekolah" value="{{ old('asal_sekolah') }}" placeholder="Asal Sekolah/Kampus" autocomplete="off"/>
        @error('asal_sekolah')
             <span class="invalid-feedback" role="alert">
                 <strong>{{ $message }}</strong>
             </span>
         @enderror
     </div>
     <div class="form-group">
        <label class="small mb-1" for="input_register_email">Alamat Email</label>
        <input name="email" class="form-control py-4 @error('email') is-invalid @enderror" id="input_register_email" type="email" value="{{ old('email') }}" placeholder="Alamat Email" autocomplete="off"/>
        @error('email')
             <span class="invalid-feedback" role="alert">
                 <strong>{{ $message }}</strong>
             </span>
         @enderror
     </div>
     <div class="form-group">
        <label class="small mb-1" for="input_register_password">Kata Sandi</label>
        <input name="password" class="form-control py-4 @error('password') is-invalid @enderror" id="input_register_password" type="password" value="{{ old('password') }}" placeholder="Masukan Kata Sandi" autocomplete="off"/>
        @error('password')
             <span class="invalid-feedback" role="alert">
                 <strong>{{ $message }}</strong>
             </span>
         @enderror
     </div>

     <div class="form-group">
        <label class="small mb-1" for="password-confirm">Ulang Kata Sandi</label>
        <input id="password-confirm" type="password" class="form-control py-4" name="password_confirmation" required autocomplete="new-password" placeholder="Ulang kata Sandi">
     </div>



    <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
        <a class="small" href="{{ route('login') }}">Login</a>
        <button class="btn btn-primary px-4" type="submit">Daftar</button>
     </div>
</form>
@include('sweetalert::alert')

@endsection
