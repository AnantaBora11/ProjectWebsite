<html>
    <body>
        <div class="container">
            <div class="header">
                <H1>Hi, {{ $name }}</H1>
            </div>
            <div class="content">
                <p>Thank you for getting in touch with us. Here is the message we received form you:</p>
                <p>{!! $message !!}</p>
            </div>
            <div class="footer"></div>
        </div>
    </body>
</html>