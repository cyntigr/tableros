@extends('layouts.plantilla')

@section('cuerpo')

    <div class="card w-75 mt-4 mx-auto">
        <div class="card-header">Login</div>

        <div class="card-body">
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>

                    <div class="col-md-6">
                        <input id="email" type="email" name="email" 
                               class="form-control @error('email') is-invalid @enderror" 
                               value="{{ old('email') }}" required autofocus />

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password" class="col-md-4 col-form-label text-md-right">@lang('messages.lbpassword')</label>

                    <div class="col-md-6">
                        <input id="password" type="password" name="password" 
                               class="form-control @error('password') is-invalid @enderror" 
                               autocomplete="current-password" required />

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-6 offset-md-4">
                        <div class="form-check">
                            <input type="checkbox" name="remember" id="remember" 
                                   class="form-check-input" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                               @lang('messages.lbremember')
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-8 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            @lang('messages.btlogin')
                        </button>

                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                               @lang('messages.lbforgot')
                            </a>
                        @endif
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
