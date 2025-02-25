<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách phòng</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            text-align: center;
        }
        h2 {
            font-size: 2rem;
            margin-bottom: 30px;
        }
        .room-list {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }
        .room-card {
            width: 300px;
            border: 1px solid #ddd;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background: #fff;
            text-align: left;
        }
        .room-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }
        .room-card .info {
            padding: 15px;
        }
        .room-card .info h3 {
            margin: 5px 0;
        }
        .room-card .info .price {
            color: red;
            font-weight: bold;
        }
        .no-rooms {
            color: #888;
            font-size: 1.2rem;
        }
    </style>
</head>
<body>
    <h2>Danh sách phòng</h2>
        <div class="room-list">
                @foreach(session('roomData') as $room)
                <div class="room-card">
                    <img src="{{ asset($room['image'] ?? 'default.jpg') }}" alt="Hình ảnh phòng">
                    <div class="info">
                        <h3>{{ $room['name'] ?? 'Không có tên' }}</h3>
                        <p>{{ $room['description'] ?? 'Không có mô tả' }}</p>
                        <p class="price">{{ number_format($room['price'] ?? 0, 0, ',', '.') }} đ</p>
                    </div>
                </div>
            @endforeach
        </div>
</body>
</html>
