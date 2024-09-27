{{-- <x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}
<x-guest-layout>

    <div class="loader"></div>
    <div id="app">
        <section class="section">
            <div class="container mt-5">
                <div class="row">
                    <div
                        class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
                        <div class="card card-success">
                            <div class="card-header">
                                <h4>Register</h4>
                            </div>
                            <div class="card-body">
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf

                                    <div class="form-group">
                                        <label for="name" for="name" :value="__('Name')">Full
                                            Name</label>
                                        <input id="name" class="block mt-1 w-full rounded-sm" type="text"
                                            name="name" :value="old('name')" required autofocus
                                            autocomplete="name">
                                        <x-input-error :messages="$errors->get('name')" class="mt-2" />

                                    </div>
                                    <div class="row">
                                        <div class="form-group col-6">
                                            <label for="name" for="name" :value="__('Name')">
                                                Address</label>
                                            <input id="address" class="block mt-1 w-full rounded-sm" type="text"
                                                name="address" :value="old('address')" required autofocus
                                                autocomplete="address">
                                            <x-input-error :messages="$errors->get('address')" class="mt-2" />
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="email" :value="__('Email')">Email</label>
                                            <input id="email" class="block mt-1 w-full rounded-sm" type="email"
                                                name="email" :value="old('email')" required autocomplete="username">
                                            <x-input-error :messages="$errors->get('email')" class="mt-2" />


                                        </div>
                                    </div>


                                        <div class="form-group">
                                            <label>Select Your Role</label>
                                            <select class="block mt-1 w-full rounded-sm">
                                                <option>Manufacturer</option>
                                                <option>Distributor</option>
                                                <option>Retailer</option>
                                            </select>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-6">
                                                <label for="password" :value="__('Password')"
                                                    class="d-block">Password</label>
                                                <input id="password" class="block mt-1 w-full rounded-sm"
                                                    type="password" name="password" required
                                                    autocomplete="new-password">
                                                {{-- <div id="pwindicator" class="pwindicator">
                                                <div class="bar"></div>
                                                <div class="label"></div>
                                            </div> --}}
                                                <x-input-error :messages="$errors->get('password')" class="mt-2" />

                                            </div>
                                            <div class="form-group col-6">
                                                <label for="password_confirmation" :value="__('Confirm Password')"
                                                    class="d-block">Password Confirmation</label>
                                                <input id="password_confirmation" class="block mt-1 w-full rounded-sm"
                                                    type="password" name="password_confirmation" required
                                                    autocomplete="new-password">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" name="agree" class="custom-control-input"
                                                    id="agree" required>
                                                <label class="custom-control-label" for="agree">I agree with the
                                                    terms
                                                    and conditions</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-success btn-lg btn-block">
                                                {{ __('Register') }}
                                            </button>
                                        </div>
                                </form>
                            </div>
                            <div class="mb-4 text-muted text-center">
                                Already Registered? <a href="{{ route('login') }}" class="text-green-600">Login</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</x-guest-layout>
