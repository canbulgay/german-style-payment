@php
    /**
     * TODO: Burada kullanıcının hesabı görebileceği bir alan olacak ve kulanıcı hesap öde düğmesine basabilecek.
     */ 
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Check</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    <div class="container mx-auto text-2xl">
        <div class="grid grid-cols-4 gap-2">
            <div class="p-10 col-span-2 rounded border-4 border-black border-dashed mt-10 bg-gray-100">
                <form action="{{route('test')}}" method="POST">
                    @csrf
                <header>
                    <div class="text-center">
                        {{$admin->company}} <br>
                        {{$admin->street_adress}} <br>
                        {{$admin->zip}}
                    </div>
                        <div>
                            <span>Table : {{$check->id}}</span> <br>
                            <span>{{$check->created_at}}</span>
                        </div>
                    </header>
            <hr>
            <body>
                <div class="grid grid-cols-8 gap-6 my-3">
                    <div class="col-span-2">
                        <span>Quentity</span>
                    </div>
                    <div class="col-span-2">
                        <span>Name</span>
                    </div>
                    <div class="col-span-3 text-center">
                        <span>Rate</span>
                    </div>
                    <div class="col-span-1">

                    </div>
                </div>
                <hr>
                <div class="grid grid-cols-8 gap-4 my-3">
                    @foreach ($items as $item)
                    <div class="col-span-2">
                        <span>{{$item->quentity}}</span>
                    </div>
                    <div class="col-span-2">
                        <span>{{$item->name}}</span>
                    </div>
                    <div class="col-span-3 text-center">
                        <span>{{$item->rate}}</span>
                    </div>
                    <div class="col-span-1">
                        <input type="radio" name="{{$item}}">
                    </div>
                    @endforeach
                </div>
            </body>
            <hr>
            <footer class="mt-5 grid gird cols-6">
                <div class="col-end-5 ">Total : {{$items->sum('total')}}</div>
                <div></div>
            </footer>
            </div>
            <div class="my-10 col-span-2">
                <input type="radio" class="ml-5" name="invoice" value="invoice"> My invoice will be automatically sent to my e-mail <br>
                <button type="submit" class="px-8 py-3 text-white bg-purple-600 rounded cursor-pointer focus:outline-none ml-5 mt-5">Pay with wallet</button>
            </div>
        </form>
    </div>
</div>
</body>
</html>