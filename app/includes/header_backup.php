<!DOCTYPE html>
<html>
<head>
<title>CloudHotel</title>

<style>

body{
    font-family: Arial, sans-serif;
    margin:30px;
    background:#f5f5f5;
}

nav{
    background:#1f4e79;
    padding:15px;
    border-radius:8px;
}

nav a{
    color:white;
    text-decoration:none;
    margin-right:20px;
    font-weight:bold;
}

.container{
    background:white;
    padding:20px;
    margin-top:20px;
    border-radius:8px;
}

.dashboard-cards{
    display:flex;
    flex-wrap:wrap;
    gap:20px;
}

.card{
    background:#eaf2f8;
    padding:20px;
    width:200px;
    border-radius:8px;
    text-align:center;
}

.card h3{
    margin:0;
    color:#1f4e79;
}

.card p{
    font-size:28px;
    font-weight:bold;
}

.actions a{
    display:inline-block;
    background:#1f4e79;
    color:white;
    padding:10px 15px;
    margin:5px;
    text-decoration:none;
    border-radius:5px;
}

</style>

</head>

<body>

<nav>
<a href="/dashboard/">Dashboard</a>
<a href="/rooms/">Rooms</a>
<a href="/guests/">Guests</a>
<a href="/bookings/">Bookings</a>
<a href="/payments/">Payments</a>
<a href="/logout.php">Logout</a>
</nav>

<div class="container">
