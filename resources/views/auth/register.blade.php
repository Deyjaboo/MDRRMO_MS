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
                <x-label for="Student ID" :value="__('Student ID')" />
                <x-input id="stud_id" class="block mt-1 w-full" type="text" name="stud_id" :value="old('stud_id')" required autofocus />
            </div>
            <div>
                <x-label for="First Name" :value="__('First Name')" />
                <x-input id="Fname" class="block mt-1 w-full" type="text" name="Fname" :value="old('Fname')" required autofocus />
            </div>
            <div>
                <x-label for="Middle Name" :value="__('Middle Name')" />

                <x-input id="Mname" class="block mt-1 w-full" type="text" name="Mname" :value="old('Mname')" required autofocus />
            </div>
            <div>
                <x-label for="Last Name" :value="__('Last Name')" />

                <x-input id="Lname" class="block mt-1 w-full" type="text" name="Lname" :value="old('Lname')" required autofocus />
            </div>
            <div>
                <x-label for="Suffix" :value="__('Suffix')" />
                <x-input id="suffix" class="block mt-1 w-full" type="text" name="suffix" :value="old('suffix')" required autofocus />
            </div>
            <div>
                <x-label for="Course" :value="__('Course')" />
                <x-input id="course" class="block mt-1 w-full" type="text" name="course" :value="old('course')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="User Name" :value="__('User Name')" />
                <x-input id="email" class="block mt-1 w-full" type="text" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
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
