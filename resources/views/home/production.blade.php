@extends('app')

@section('content')

<link href="{{ URL::asset('css/app.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('css/production_home.css') }}" rel="stylesheet" type="text/css" />

<div class="wrapper">

<div class="card_left">
    <h1>Welcome, {{ $name }}.</h1>
    <p>Thy system successfully recognized your account as  a ‘production staff’.
    Select from the following below to start transactions.
    </p>

    <ul id="menu_ul">
    	<li><a href="#"> <span class="home_icons"><p><img src="../_assets/doc-03.png" style="max-height: 30px; 	" /></p></span><span class="home_links"><h3>Job Order Requests </h3><p>View existing or create new job orders.</p></span></a></li>

        <li><a href="#"> <span class="home_icons"><p><img src="../_assets/on-process-jo-03.png" style="max-height: 30px; 	" /></p></span><span class="home_links"> <h3>On-process Job Orders </h3><p>On-process Job Orders</p></span></a>
        </li>

        <li><a href="#"> <a href="#"> <span class="home_icons"><p><img src="../_assets/jo_done-03.png" style="max-height: 25px; 	" /></p></span> <span class="home_links"> <h3>Job Order History</h3><p>Job Order History</p></a></span>
        </li>

        <li><a href="#"> <a href="#"> <span class="home_icons"><p><img src="../_assets/logout.png" style="max-height: 25px; 	" /></p></span> <span class="home_links"> <h3>Logout </h3><p>No new transactions?</p></a></span>
        </li>

    </ul>


</div>

</div>

@endsection
