@extends('app')

@section('content')

<link href="{{ URL::asset('css/app.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('css/salesperson_home.css') }}" rel="stylesheet" type="text/css" />

<div class="wrapper">

<div class="card_left">
    <h1>Welcome, {{ $name }}.</h1>
    <p>Thy system successfully recognized your account as  a ‘salesperson’.
    Select from the following below to start transactions.
    </p>

    <ul id="menu_ul">
    	<li><a href="job_orders.php" > <span class="home_icons"><p><img src="../_assets/new_transaction.png" style="max-height: 30px; 	" /></p></span><span class="home_links"><h3>Create New Transaction </h3><p>View existing or create new job orders.</p></span></a></li>

        <li><a href="#"> <span class="home_icons"><p><img src="../_assets/view_calendar.png" style="max-height: 30px; 	" /></p></span><span class="home_links"> <h3>View Calendar </h3><p>View upcoming or finishing job orders.</p></span></a>
        </li>

        <li><a href="#"> <a href="#"> <span class="home_icons"><p><img src="../_assets/view_customer-01.png" style="max-height: 25px; 	" /></p></span> <span class="home_links"> <h3>View Customers </h3><p>No new transactions?</p></a></span>
        </li>

        <li><a href="#"> <a href="#"> <span class="home_icons"><p><img src="../_assets/logout.png" style="max-height: 25px; 	" /></p></span> <span class="home_links"> <h3>Logout </h3><p>No new transactions?</p></a></span>
        </li>

    </ul>


</div>

<div class="card_right">


</div>


</div>


@endsection
