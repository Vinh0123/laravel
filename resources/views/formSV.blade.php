<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Information</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #ffffff; 
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

form {
    background: #ffffff; 
    padding: 20px;
    border-radius: 10px;
    border: 2px solid #ddd; 
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.05);
    width: 300px;
}

label {
    display: block;
    font-weight: bold;
    margin-top: 10px;
    color: #333; 
}

input {
    width: 95%;
    padding: 8px;
    margin-top: 5px;
    border: 1px solid #ccc;
    border-radius: 5px;
    transition: all 0.3s ease-in-out;
    background: #f9f9f9;
}

input:focus {
    border-color: #333;
    background: #fff;
    outline: none;
}

button {
    background-color: #333; 
    color: white;
    border: none;
    padding: 10px;
    width: 100%;
    border-radius: 5px;
    cursor: pointer;
    margin-top: 15px;
    font-size: 16px;
    transition: all 0.3s ease-in-out;
}

button:hover {
    background-color: #555;
}

h3 {
    text-align: center;
    margin-top: 20px;
    color: #333;
}

ul {
    background: #ffffff;
    padding: 15px;
    border-radius: 10px;
    border: 2px solid #ddd;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.05);
    width: 300px;
    margin-top: 10px;
    list-style: none;
    margin-left: 50px;
}

ul li {
    padding: 5px 0;
    color: #333;
}

    </style>
</head>
<body>
    
    <form action="/student" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" name="name"><br>

        <label for="age">Age:</label>
        <input type="text" name="age"><br>

        <label for="email">Date:</label>
        <input type="text" name="date" ><br>

        <label for="phone">Phone:</label>
        <input type="text" name="phone" ><br>

        <label for="address">Address:</label>
        <input type="text" name="address" ><br>
        <div>
            @include('block.error')
        </div>

        <button type="submit">Submit</button>
    </form>

    @if(isset($name, $age, $date, $phone, $address))
        <ul>
            <li><strong>Name:</strong> {{ $name }}</li>
            <li><strong>Age:</strong> {{ $age }}</li>
            <li><strong>Date:</strong> {{ $date }}</li>
            <li><strong>Phone:</strong> {{ $phone }}</li>
            <li><strong>Address:</strong> {{ $address }}</li>
        </ul>
    @endif

</body>
</html>
