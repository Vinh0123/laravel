<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
body {
    font-family: Arial, sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

.form-container {
    background: #fff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    width: 320px;
    text-align: center;
}

h2 {
    margin-bottom: 15px;
    color: blue;
}

input {
    width: 100%;
    padding: 10px;
    margin: 8px 0;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
    transition: 0.3s;
}

input:focus {
    border-color: blue;
    outline: none;
    box-shadow: 0 0 5px rgba(255, 107, 107, 0.5);
}

button {
    width: 100%;
    padding: 12px;
    border: none;
    border-radius: 5px;
    background: blue;
    color: white;
    font-size: 16px;
    cursor: pointer;
    transition: 0.3s;
}

button:hover {
    background: #e63946;
}

    </style>
</head>
<body>
    <form method="POST" action="/sum">
        @csrf
        <div>
            <label for="">Enter number a:</label><br/>
            <input type="number" name="a" placeholder=""><br/>
            <label for="">Enter number b:</label><br/>
            <input type="number" name="b" placeholder="">
            <button type="submit">Sunmit</button>
            @if(isset($sum))
             <h3>Kết quả: {{ $a }} + {{ $b }} = {{ $sum }}</h3>
            @endif
        </div>
    </form>
</body>
</html>