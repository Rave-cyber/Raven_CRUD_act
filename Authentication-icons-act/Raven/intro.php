<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Petals & Posies</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .header,
        .header * {
            box-sizing: border-box;
        }

        .header {
            background: linear-gradient(180deg, rgba(57, 127, 72, 1.00) 10.999999940395355%, rgba(154, 185, 161, 1.00) 55.50000071525574%, rgba(26, 93, 41, 1.00) 100%);
            height: 650px;
            position: relative;
            overflow: hidden;
        }

        .rectangle-1 {
            background: #d9d9d9;
            border-radius: 100px;
            opacity: 0.75;
            width: 399px;
            height: 582px;
            position: absolute;
            left: 42px;
            top: 43px;
            box-shadow: -5px 3px 14px 0px rgba(0, 0, 0, 0.49), -21px 14px 25px 0px rgba(0, 0, 0, 0.43), -46px 31px 33px 0px rgba(0, 0, 0, 0.25), -82px 54px 39px 0px rgba(0, 0, 0, 0.07), -128px 85px 43px 0px rgba(0, 0, 0, 0.01);
        }

        .image {
            width: 339px;
            height: 401px;
            position: absolute;
            left: 72px;
            top: 133px;
            object-fit: cover;
        }

        .text {
            color: #ffffff;
            text-align: left;
            font-family: 'Inter-ExtraLight', sans-serif;
            font-size: 24px;
            font-weight: 200;
            position: absolute;
            left: 656px;
            top: 465px;
            width: 418px;
            height: 137px;
        }

        .text2 {
            color: #ffffff;
            text-align: left;
            font-family: 'Italianno-Regular', sans-serif;
            font-size: 70px;
            font-weight: 400;
            position: absolute;
            left: 656px;
            top: 43px;
            width: 492px;
            height: 231px;
        }

        .get-started-btn {
            position: absolute;
            left: 500px;
            top: 500px;
            background-color: #28a745;
            color: #ffffff;
            border: none;
            padding: 20px 20px;
            border-radius: 5px;
            font-size: 16px;
            text-align: center;
            text-decoration: none;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
        }

        .get-started-btn:hover {
            background-color: #218838;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="header">
        <div class="rectangle-1"></div>
        <img class="image" src="img1.png" alt="Flower Image" />
        <div class="text">
            "Let every bloom tell a story, and every petal be a memory. In the language of flowers, love is always in full bloom."
        </div>
        <!-- Get Started Button -->
        <a href="main.php" class="get-started-btn">Get Started</a>
        <div class="text2">
            "Petals & Posies: Where Every Bloom Tells a Story"
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
