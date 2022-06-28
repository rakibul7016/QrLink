<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>QrLink</title>
</head>
<body>
    <div>

        <form action="{{ url('/make') }}" method="post">
            @csrf
            <input type="text" name="orginal_url">
            <input type="submit" value="generate" name="sent">
        </form><br><br><br>
        @if (session('success_message'))
        {{ $demo = session('success_message') }}
        {!! QrCode::size('300')->generate($demo) !!}
        @endif







    </div>
    <br>
    {{-- Ai genaretor --}}
    <div >

        <h1>Generate title by AI</h1>
        <form action="{{ route('result') }}" method="POST">
            @csrf
            <label for=""> Input Your Keyword</label>
            <input type="text" name="topic" placeholder="input keyword">
            <button type="submite">Genarete</button>
        </form>

    </div>
    <div>
        @if (isset($result))
        <h3>Outoput:</h3>
        <div style="white-space: pre-line;">{{ $result }}</div>
            
        @endif


    </div>
</body>
</html>
