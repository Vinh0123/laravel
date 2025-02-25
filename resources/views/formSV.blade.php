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
        @error('name')
            <p style="color: red; font-weight: bold">{{ $message }}</p>
        @enderror
        <label for="age">Age:</label>
        <input type="text" name="age"><br>
        @error('age')
            <p style="color: red; font-weight: bold">{{ $message }}</p>
        @enderror
        <label for="date">Date:</label>
        <input type="text" name="date" ><br>
        @error('date')
            <p style="color: red; font-weight: bold">{{ $message }}</p>
        @enderror
        <label for="phone">Phone:</label>
        <input type="text" name="phone" ><br>
        @error('phone')
            <p style="color: red; font-weight: bold">{{ $message }}</p>
        @enderror
        <label for="address">Address:</label>
        <input type="text" name="address" ><br>
        @error('address')
            <p style="color: red; font-weight: bold">{{ $message }}</p>
        @enderror
        <div>
        </div>

        <button type="submit">Submit</button>
    </form>

    @if(isset($users))
    @foreach ($users as $user)
        <ul>
            <li><strong>Name:</strong> {{ $user['name'] }}</li>
            <li><strong>Age:</strong> {{ $user['age'] }}</li>
            <li><strong>Date:</strong> {{ $user['date'] }}</li>
            <li><strong>Phone:</strong> {{ $user['phone'] }}</li>
            <li><strong>Address:</strong> {{ $user['address'] }}</li>
        </ul>
    @endforeach
    @endif


</body>
</html>
