<x-userlogin>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="row px-3"> <label class="mb-1">
                <h6 class="mb-0 text-sm">Email Address</h6>
            </label> <input class="mb-4" type="email" name="email" :value="old('email')" placeholder="Enter a valid email address">
        </div>
        @error('email')
        {{$message}}
        @enderror
        <div class="row px-3"> <label class="mb-1">
                <h6 class="mb-0 text-sm">Password</h6>
            </label> <input type="password" name="password" placeholder="Enter password">
        </div>
        @error('password')
        {{$message}}
        @enderror
        <div class="row px-3 mb-4">
            <div class="custom-control custom-checkbox custom-control-inline">
                <input id="chk1" type="checkbox" name="remember" class="custom-control-input">
                <label for="chk1" class="custom-control-label text-sm">Remember me</label>
            </div>
            @if (Route::has('password.request'))
                <a class="ml-auto mb-0 text-sm" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif
        </div>
        <div class="row mb-3 px-3"> <button type="submit" class="btn btn-blue text-center">Login</button> </div>
        <div class="row mb-4 px-3">
            <small class="font-weight-bold"> Don't have an account?
                <a class="text-danger" href="{{route('register')}}">Register</a></small>
        </div>
    </form>
</x-userlogin>
