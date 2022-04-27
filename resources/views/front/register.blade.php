<x-userlogin>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="row px-3"> <label class="mb-1">
                <h6 class="mb-0 text-sm">Name</h6>
            </label> <input class="mb-4" type="text" name="name" :value="old('name')" placeholder="Enter a valid name ">
        </div>
        @error('name')
        {{$message}}
        @enderror
        <div class="row px-3"> <label class="mb-1">
                <h6 class="mb-0 text-sm">Email Address</h6>
            </label> <input class="mb-4" type="email" name="email" :value="old('email')" placeholder="Enter a valid email address">
        </div>
        @error('email')
        {{$message}}
        @enderror
        <div class="row px-3"> <label class="mb-1">
                <h6 class="mb-0 text-sm">Password</h6>
            </label> <input type="password" name="password" required autocomplete="new-password" placeholder="Enter password">
        </div>
        @error('password')
        {{$message}}
        @enderror
        <div class="row px-3"> <label class="mb-1">
                <h6 class="mb-0 text-sm">Password</h6>
            </label> <input type="password" name="password_confirmation" required placeholder="Enter password confirmation">
        </div>
        @error('password_confirmation')
        {{$message}}
        @enderror
        <div class="row mb-3 px-3"> <button type="submit" class="btn btn-blue text-center">Register</button> </div>
        <div class="row mb-4 px-3">
            <small class="font-weight-bold"> Already registered?
                <a class="text-danger" href="{{route('login')}}">login</a></small>
        </div>
    </form>
</x-userlogin>
