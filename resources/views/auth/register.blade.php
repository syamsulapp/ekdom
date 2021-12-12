<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="Username" :value="__('Username')" />

                <x-input id="Username" class="block mt-1 w-full" type="username" name="username" :value="old('username')" required />
            </div>
            <!-- Noreg -->
            <div>
                <x-label for="name" :value="__('Noreg')" />

                <x-input id="noreg" class="block mt-1 w-full" type="text" name="noreg" :value="old('noreg')" required autofocus />
            </div>

            <!-- jurusan -->
            <div>
                <x-label for="jurusan" :value="__('Jurusan')" />

                <select name="jurusan" id="jurusan">
                    @foreach($data['jurusan'] as $j)
                        <option value="{{ $j->idjurusan }}"> {{ $j->jurusan }}</option>
                    @endforeach
                </select>
            </div>
                <!-- jadwal  -->
            <div>
                <x-label for="jadwal" :value="__('Jadwal')" />

                <select name="jadwal" id="jadwal">
                    @foreach($data['jadwal_evaluasi'] as $j)
                        <option value="{{ $j->idjadwal_evaluasi }}"> {{ $j->tanggal }}</option>
                    @endforeach
                </select>
            </div>
                <!-- role  -->
            <div>
                <x-label for="role" :value="__('Role')" />

                <select name="role" id="role">
                    @foreach($data['role'] as $r)
                        <option value="{{ $r->idRole }}"> {{ $r->role }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
