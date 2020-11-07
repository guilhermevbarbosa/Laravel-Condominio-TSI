<div class="btns">
    <h1>Condomínio TSI</h1>

    <div>
        <a class="github" href="{{route('social.login', ['provider'=>'github'])}}">
            Login Github
        </a>

        <a class="facebook" href="{{route('social.login', ['provider'=>'facebook'])}}">
            Login Facebook
        </a>

        <a class="twitter" href="{{route('social.login', ['provider'=>'twitter'])}}">
            Login Twitter
        </a>
    </div>
</div>

<style>
    body {
        background: #d2d2d2
    }

    a {
        padding: 20px;
        border-radius: 10px;
        margin-right: 6px;
        margin-left: 6px;
        text-decoration: none;
        font-family: arial;
        font-size: 13px;
        font-weight: bold;
        color: white;
    }

    a:focus {
        outline: none !important
    }

    a.github {
        background: #6f42c1;
    }

    a.github:hover {
        background: #5930a5;
    }

    a.facebook {
        background: #4267B2;
    }

    a.facebook:hover {
        background: #32508e;
    }

    a.twitter {
        background: #1DA1F2;
    }

    a.twitter:hover {
        background: #2891d2;
    }

    .btns {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        height: 100%;
    }

    h1 {
        margin: 0;
        margin-bottom: 70px;
        font-family: arial;
        font-size: 30px
    }
</style>