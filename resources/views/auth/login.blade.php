<button
    class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">
    <a href="{{route('social.login', ['provider'=>'github'])}}">
        Login Github
    </a>
</button>

<button
    class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">
    <a href="{{route('social.login', ['provider'=>'facebook'])}}">
        Login Facebook
    </a>
</button>

<button
    class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">
    <a href="{{route('social.login', ['provider'=>'twitter'])}}">
        Login Twitter
    </a>
</button>