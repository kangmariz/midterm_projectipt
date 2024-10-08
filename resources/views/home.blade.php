<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grocery List Home</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url("{{asset('images/7690031.jpg')}}");
            background-size: cover;
            background-position: center;
            height: 90vh;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 700px;
            margin: auto;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0);
            border-radius: 8px;
            text-align: center;
            margin-top: 6%;
        }
        @font-face {
            font-family: 'PainFont';
            src: url('../fonts/BunchBlossomsPersonalUse-0nA4.ttf') format('truetype');
            font-weight: normal;
            font-style: normal;
        }


        h1 {
            color: green;
            font-family: 'PainFont';
            font-size: 350%;
        }
        a {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 15px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }
        a:hover {
            background-color: #0056b3;
        }
        p {
            font-size: 15px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome to the Grocery List Application!</h1>
        <p>Your grocery items will be displayed here.</p>
        <a href="{{ route('grocery.index') }}">View Grocery List</a>
    </div>
</body>
</html>
