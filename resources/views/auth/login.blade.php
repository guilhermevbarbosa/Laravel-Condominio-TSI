<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <div>
            <a href="{{route('social.login', ['provider'=>'github'])}}">Login Github</a>
        </div>

        <div>
            <a href="{{route('social.login', ['provider'=>'facebook'])}}">Login Facebook</a>
        </div>

        <div>
            <a href="{{route('social.login', ['provider'=>'twitter'])}}">Login Twitter</a>
        </div>

    </x-jet-authentication-card>
</x-guest-layout>