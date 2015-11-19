@extends('app')

@section('content')
<link href="{{ URL::asset('css/index.css') }}" rel="stylesheet" type="text/css" />
<article>
<div class="info">

<h5>Order Management </h5><h5>Information Systems</h5>
<h3>By <a href="#">zealtec systems</a></h3>
<p>Zealtec’s Order Management Information Systems (OMIS) is a specialized web-based system for printing service sectors that provide printing services such as T-Shirt and tarpaulin printing services. </p>


</div>

<div class="loginSection">
<table class="tableone" cellpadding="0" cellpadding="0">
<tr>
<th><img src="_assets/security.jpg" style="max-width:50px;" /></th>
<td><h2>Getting Started!</h2><p><i>Salesperson | Production | Manager</i></p></td>
</tr>

{!! Form::open(array('autocomplete' => 'off')) !!}
<tr><td colspan="2"><br /><h1>username</h1><input type="text" class="loginfields" name="username"/>	</td></tr>

<tr><td colspan="2"><h1>password</h1><input type="text" class="loginfields" name="password"/>	</td></tr>

<tr><td colspan="2"><input type="submit" value="Login" class="loginsubmit" /></td></tr>
{!! Form::close() !!}

</table>


</div>



</article>

@endsection
