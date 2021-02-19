        <div class="card-body">
            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- First And Last Name -->
                <div class="container">
                    <div class="row">
                        <div class="form-group">  
                            <!-- // TODO: de voor- en achternaam field naast elkaar lijkt me mooier/compacter, misschien ook met andere velden -->
                            <div class="mx-auto">
                                <x-label for="first_name" :value="__('Voornaam')" />
                                <x-input id="first_name" type="text" name="first_name" :value="old('first_name')" required autofocus />

                                <x-label for="last_name" :value="__('Achternaam')" />
                                <x-input id="last_name" type="text" name="last_name" :value="old('last_name')" required autofocus />
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Email Address -->
                <div class="form-group">
                    <x-label for="email" :value="__('E-mail')" />

                    <x-input id="email" type="email" name="email" :value="old('email')" required />
                </div>

                <!-- Password -->
                <div class="form-group">
                    <x-label for="password" :value="__('Wachtwoord')" />

                    <x-input id="password" type="password"
                                    name="password"
                                    required autocomplete="new-password" />
                </div>

                <!-- Confirm Password -->
                <div class="form-group">
                    <x-label for="password_confirmation" :value="__('Bevestig wachtwoord')" />

                    <x-input id="password_confirmation" type="password"
                                    name="password_confirmation" required />
                </div>

                <!-- Complete Address -->
                <div class="form-group">
                    <x-label for="address" :value="__('Straatnaam en huisnummer')" />
                    <x-input id="address" type="text" name="address" :value="old('address')" required autofocus />

                    <x-label for="postal_code" :value="__('Postcode')" />
                    <x-input id="postal_code" type="text" name="postal_code" :value="old('postal_code')" required autofocus />

                    <x-label for="city" :value="__('Stad')" />
                    <x-input id="city" type="text" name="city" :value="old('city')" required autofocus />
                </div>

                <!-- Phone number -->
                <div class="form-group">
                    <x-label for="phone_number" :value="__('Telefoonnummer')" />
                    <x-input id="phone_number" type="text" name="phone_number" :value="old('phone_number')" required autofocus />
                </div>

                <!-- Company name (optional) -->
                <div class="form-group">
                    <x-label for="company_name" :value="__('Bedrijfsnaam')" />
                    <x-input id="company_name" type="text" name="company_name" :value="old('company_name')" autofocus />
                </div>

                <div class="mb-0">
                    <div class="d-flex justify-content-end align-items-baseline">
                        <a class="text-muted mr-3 text-decoration-none" href="{{ route('login') }}">
                            {{ __('Ik heb al een account.') }}
                        </a>

                        <x-button>
                            {{ __('Registreer') }}
                        </x-button>
                    </div>
                </div>
            </form>
        </div>
