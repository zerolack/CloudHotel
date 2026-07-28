<!DOCTYPE html>
<html>
<head>

<title>CloudHotel</title>

<meta name="viewport" content="width=device-width, initial-scale=1">

<style>

.actions-btn{
    display:inline-block;
    background:#1f4e79;
    color:white;
    padding:12px 20px;
    text-decoration:none;
    border-radius:8px;
    font-weight:bold;
}

.actions-btn:hover{
    background:#163a5c;
}

.room-table{
    width:100%;
    border-collapse:collapse;
    background:white;
    margin-top:20px;
}

.room-table th{
    background:#1f4e79;
    color:white;
    padding:12px;
    text-align:left;
}

.room-table td{
    padding:12px;
    border-bottom:1px solid #ddd;
}

.room-table tr:hover{
    background:#f4f6f9;
}

.room-table a{
    text-decoration:none;
    font-weight:bold;
}
<style>

body{
    font-family: Arial, sans-serif;
    margin:0;
    background:#f4f6f9;
}

.actions a{
    display:inline-block;
    background:#1f4e79;
    color:white;
    padding:14px 22px;
    margin:8px;
    text-decoration:none;
    border-radius:10px;
    font-weight:bold;
    transition:0.3s;
}

.actions a:hover{
    background:#163a5c;
    transform:translateY(-3px);
}{
    background:#1f4e79;
    padding:15px;
}

nav a{
    color:white;
    text-decoration:none;
    margin-right:20px;
    font-weight:bold;
}

nav a:hover{
    text-decoration:underline;
}

.container{
    padding:25px;
}

.dashboard-cards{
    display:flex;
    flex-wrap:wrap;
    gap:20px;
}

.card{
    background:white;
    padding:25px;
    width:220px;
    border-radius:12px;
    box-shadow:0 3px 10px rgba(0,0,0,0.1);
    text-align:center;
}

.card h3{
    color:#1f4e79;
}

.card p{
    font-size:28px;
    font-weight:bold;
}

.actions a{
    display:inline-block;
    background:#1f4e79;
   
}

.actions a:hover{
    background:#163a5c;
}

</style>

</head>

<body>

<nav>
<a href="/dashboard/">🏨 CloudHotel</a>
<a href="/dashboard/">Dashboard</a>
<a href="/rooms/">Rooms</a>
<a href="/guests/">Guests</a>
<a href="/bookings/">Bookings</a>
<a href="/payments/">Payments</a>
<a href="/logout.php">Logout</a>
</nav>

<div class="container">
