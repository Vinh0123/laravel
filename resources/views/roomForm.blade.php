<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý phòng</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            width: 80%;
            margin: 20px auto;
            border: 2px solid navy;
            padding: 20px;
            border-radius: 5px;
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .header h2 {
            margin: 0;
        }
        .buttons {
            display: flex;
            gap: 10px;
        }
        .buttons button {
            padding: 10px 15px;
            border: none;
            cursor: pointer;
            font-size: 16px;
            border-radius: 5px;
        }
        .btn-red {
            background-color: red;
            color: white;
            border: 2px solid blue;
        }
        .btn-orange {
            background-color: orange;
            color: white;
            display: flex;
            align-items: center;
            gap: 5px;
        }
        .form-container {
            margin-top: 20px;
            padding-top: 10px;
            border-top: 2px solid orange;
            display: flex;
            gap: 10px;
        }
        .form-container input {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .image-upload {
            display: flex;
            align-items: center;
            border: 2px solid orange;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
        }
        .image-upload i {
            margin-right: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
    <form action="/roomForm" method="POST">
         @csrf
        <div class="header">
            <h2>Quản lý phòng</h2>
            <div class="buttons">
                <button type= "submit" class="btn-red">Hiển Thị</button>
                <button type="submit" class="btn-orange"><i class="fa fa-calendar"></i> Thêm mới phòng</button>
            </div>
        </div>
            <div class="form-container">
                <input type="text" name="name" placeholder="Tên phòng">
                <input type="text" name="description" placeholder="Mô tả phòng">
                <input type="text" name="price" placeholder="Giá phòng">
                <div class="image-upload">
                    <i class="fa fa-image"></i> Chọn hình ảnh
                    <input name="image" type="file" accept="image/*">
                </div>
            </div>
        </form>
    </div>
</body>
</html>

</body>
</html>