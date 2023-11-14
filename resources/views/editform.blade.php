<!DOCTYPE html>
<html>
<head>
	<title>Login&Signup</title>
<meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>LoginForm</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>
<style type="text/css">
/*Login form css*/
body{
      font-family: "Roboto",sans-serif;
      background: linear-gradient(90deg,rgba(141,194,111,1)0%,rgba(118,184,82,1)50%);
    }
    .inner-row{
      height: 100vh;
    }
    .primarybg{
      background: rgba(141,194,111,1);
    }
    .primarybg:hover{
      background-color: green;
    }
    .primaryColor{
      color: rgba(141,194,111,1);
    }
    .form-box{
      background: #fff;
      box-shadow: 0 0 20px 0 rgba(0,0,0,0.2),0 5px 5px 0 rgba(0,0,0,0.24);
    }
    </style>
<body>

    <div class="container">
    	<div class="row justify-content-center align-items-center inner-row">
    		<div class="col-md-5">

    			<div class="form-box p-5">
    				<div class="form-title">
    					<h2 class="fw-bold mb-5"><b>Create your Account</b></h2>
    				</div>
            <div id="error" style="margin-left: 8px;">     </div>
    				<form action="" method="post">
              @csrf
              @method('PUT')
    					<div class="form-floating mb-3">
    						<input type="text" class="form-control form-control-sm" placeholder="Name" id="firstName" name="name" value="{{ $id->name }}">
    						<!--label for="floatingInput">First Name</label-->
    					</div>
    					<div class="form-floating mb-3">
    						<input type="text" class="form-control form-control-sm" placeholder="City" id="lastName" name="city" value="{{  $id->city}}">
    						<!--label for="floatingInput">Email</label-->
    					</div>
    					<div class="form-floating mb-3">
    						<input type="number" class="form-control form-control-sm" placeholder="marks" id="email" name="marks" value="{{ $id->marks }}">
    						<!--label for="floatingInput">Email</label-->
    					</div>
    					<div class="mt-3">
    						<button class="btn primarybg text-white">Edit</button>
    					</div>
    				</form>
  </div>
</div>
</div>
</div>
</body>
</html>
