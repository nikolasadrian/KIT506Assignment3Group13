<!DOCTYPE html>
<html>
    <title>Log In - GMIS</title>
    <head>
    <link rel = "stylesheet" type = "text/css" href = "style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </head>

    <body>

<section id="signin" class="search bg-dark text-light">
<div class="container text-center pt-5">

<h1 class="display-5 fs-1 pt-1 pb-3">Log In to <span class="text-danger fst-italic fw-bolder fs-1">UTAS</span><span class="fw-bolder fst-italic fs-1">-GMIS</span></h1>

	<form id="login" action="{{route('checklogin')}}">

    <div class="row pb-1 justify-content-center">
    	<div class="col-auto">
      <input type="text" name="username" class="form-control px-5" placeholder="username" autocomplete="off" required>
    	</div>
    </div>
    <div class="row justify-content-center">
    	<div class="col-auto">
           <input type="password" name="password" class="form-control px-5" placeholder="password" autocomplete="off" required>
        </div>
        <div class="py-4 pb-5">
            <button type="submit" class="btn btn-light">Log In</button>
        </div>
    </div>    

	 <div class="row justify-content-center">
    	<p class="text-secondary">For access to master student account - username: master, password: master</p>
        <p class="text-secondary">For access to bachelor student account - username: bachelor, password: bachelor</p>
    </div>    
    
</form>
</div>	
</section>


    </body>
    
</hyml>