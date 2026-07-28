<!DOCTYPE html>
<html>
<head>
    <title>CloudHotel - Customer Portal</title>
    <style>
        body{
            font-family:Arial;
            background:#f4f4f4;
            margin:0;
        }

        header{
            background:#0d6efd;
            color:white;
            padding:20px;
            text-align:center;
        }

        .container{
            width:90%;
            margin:auto;
            margin-top:40px;
        }

        .card{
            background:white;
            padding:25px;
            border-radius:10px;
            margin-bottom:20px;
            box-shadow:0 2px 6px rgba(0,0,0,.2);
        }

        a.button{
            display:inline-block;
            padding:12px 20px;
            background:#0d6efd;
            color:white;
            text-decoration:none;
            border-radius:5px;
            margin-top:10px;
        }

        a.button:hover{
            background:#084298;
        }
    </style>
</head>

<body>

<header>
<h1>Welcome to CloudHotel</h1>
<p>Book your room online in minutes.</p>
</header>

<div class="container">

<div class="card">
<h2>Book a Room</h2>
<p>Browse available rooms and make a reservation.</p>
<a class="button" href="booking.php">Book Now</a>
</div>

<div class="card">
<h2>My Bookings</h2>
<p>View your reservations.</p>
<a class="button" href="mybookings.php">View Bookings</a>
</div>

<div class="card">
<h2>My Profile</h2>
<p>Manage your account.</p>
<a class="button" href="profile.php">Profile</a>
</div>

</div>

</body>
</html>
