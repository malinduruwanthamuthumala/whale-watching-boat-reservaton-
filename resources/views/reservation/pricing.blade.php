@extends('layouts.basic')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="../../css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="../../css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Bangers" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Bangers|Monoton|Ultra" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Bangers|Monoton|Satisfy|Ultra" rel="stylesheet">
@section('content')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">


<div class="container">
	<div class="row" style="margin-top:80px">
		<!--basic-->
		
		<div class="col s12 m4">
		    <div class="card">
		        <div class="card-content">
		            <div class="card-title green white-text">
		                <h3>Basic</h3>
                        <h5>$20</h5>
                        <h6>LKR 3500</h6>
		            </div>
		            <ul class="collection">
		                <li class="collection-item">one person</li>
		                <li class="collection-item">welcome drink</li>
		                <li class="collection-item">life insuarance</li>
		                <li class="collection-item">Live Support</li>
		               
		            </ul>
		        </div>
		        
		        <div class="card-action">
		            <div class="btn btn-block btn-large pink">Sing Up</div>
		        </div>
		    </div>
		</div>
		
		<!--standard-->
		
		<div class="col s12 m4">
		    <div class="card">
		        <div class="card-content">
		            <div class="card-title yellow darken-4 white-text">
                        <h3>standard</h3>
		                <h5>$35</h5>
		                <h6>LKR 6000</h6>
		            </div>
		            <ul class="collection">
		                <li class="collection-item">two persons</li>
		                <li class="collection-item">Welcome drink</li>
		                <li class="collection-item">life insuarence</li>
		                <li class="collection-item">Live Support</li>
		               
		            </ul>
		        </div>
		        
		        <div class="card-action">
		            <div class="btn btn-block btn-large pink">Sing Up</div>
		        </div>
		    </div>
		</div>
		
		<!--pro-->
		
		<div class="col s12 m4">
		    <div class="card">
		        <div class="card-content">
		            <div class="card-title blue white-text">
                        <h3>PRO</h3>
		                <h5>$15</h5>
		                <h6>LKR 2500 PER HEAD</h6>
		            </div>
		            <ul class="collection">
		                <li class="collection-item">More than five persons</li>
		                <li class="collection-item">welcome drink</li>
		                <li class="collection-item">life insuarennce</li>
		                <li class="collection-item">Live Support</li>
		                
		            </ul>
		        </div>
		        
		        <div class="card-action">
		            <div class="btn btn-block btn-large pink">Sing Up</div>
		        </div>
		    </div>
		</div>
		
		
		
		
	</div>
</div>
@endsection
<style>
    .container {
    margin-top: 100px;
}
.card-title {
    padding: 10px;
}
.card-content {
    text-align: center;
    padding: 0px !important;
}
ul li {
    padding: 20px !important;
    font-weight: bold;
}
.card {
    transition: .5s;
}
.card:hover {
    transform: scale(1.05);
    transition: .5s;
}
</style>