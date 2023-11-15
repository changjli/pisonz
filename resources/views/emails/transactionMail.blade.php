<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <img src="{{ asset('assets/bglogo.png') }}" alt="">
    <div>
        user id : {{ $transaction->user_id }}
    </div>
    <div>
        user nickname : {{ $transaction->user_nickname }}
    </div>
    <div>
        product : {{ $transaction->Product->name }}
    </div>
    <div>
        price : {{ $transaction->total }}
    </div>
    <div>
        Thank you for purchasing at Pisonz Store. Your transaction will be processed in 5-10 minutes. Please head to our
        website to track your transaction status.
    </div>
</body>

</html>
