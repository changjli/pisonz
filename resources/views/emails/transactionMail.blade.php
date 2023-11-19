<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <img src="{{ url('http://drive.google.com/uc?export=view&id=1dmQt04gKN_SqIMhBCcLn427T0ATY-DyM') }}" alt="" height="200" width="300">
    <br>
    <br>
    <div>
        Transaction ID : {{ $transaction->id }}
    </div>
    <div>
        User ID : {{ $transaction->user_id }}
    </div>
    <div>
        User Nickname : {{ $transaction->user_nickname }}
    </div>
    <div>
        Product : {{ $transaction->Product->name }}
    </div>
    <div>
        Price : Rp. {{ $transaction->total }}
    </div>
    <div>
        Thank you for purchasing at Pisonz Store. Your transaction will be processed in 5-10 minutes. Please head to our
        website to track your transaction status.
    </div>
</body>

</html>
