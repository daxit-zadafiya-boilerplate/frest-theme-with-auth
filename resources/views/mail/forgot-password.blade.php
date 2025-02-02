<div style="border: 2px solid #747474;border-radius: 10px;">
    <div style="border-bottom: 1px solid #747474;padding: 25px;text-align: center;">
        <h2 style="margin: 0;">{{ config('app.name') }}</h2>
        <p style="margin: 0;">Reset Password</p>
    </div>
    <div style="padding: 25px;">
        Hi {{ $user->name }},<br>
        <div style="margin-top: 25px;">
            Forgot Your Password?<br>
            We received a request to reset the password for your account.<br>
        </div>
        <div style="margin-top: 25px;">
            To reset your password, click on the button below.<br>
            <a href="{{ $link }}"
                style="padding: 8px 15px;background-color: #14869e;;color:#fff;border-radius: 5px;margin-top: 15px;display: inline-block;text-decoration: none;">Reset
                Password</a> <br>
        </div>
        <div style="margin-top: 25px;">
            Or copy and paste the URL into your browser:<br>
            <a href="{{ $link }}" style="text-decoration: none;">{{ $link }}</a>
        </div>
    </div>
</div>
