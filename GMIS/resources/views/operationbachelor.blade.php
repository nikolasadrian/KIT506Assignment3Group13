<!DOCTYPE html>
<html>
<title>Operation - GMIS</title>
<head>
<link rel = "stylesheet" type = "text/css" href = "style.css">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>

<body>

<!--Main Body-->
<div class="container-fluid p-5">
	<div class="row g-3">
    
<!--User View-->
    <div class="col-4 col-lg-2 text-center p-3 border border-2">
		<p class="fw-bold">John Doe</p>
		<p>Bachelor Student</p>
		<form action="{{route('logout')}}">
		<button type="submit" class="btn btn-dark px-3 btn-sm">Log Out</button>
		</form>
	</div>
    
<!-- Operation View-->
    <div class="col-8 col-lg-10 p-3 px-5 border border-2 border-start-0">
    
        <form id="operation" action="{{route('checkoperation_b')}}">
        	<div class="row">
				<div class="col-10">
        			<div class="mb-3 pt-3">
        			<label for="operation" class="form-label">Select an operation</label>
        			<select type="text" name="operation" class="form-select">
            		<option selected>Select one</option>
            			<option>Search, view all classes for a student</option>
            			<option>Search, view all meetings for a student</option>
            			<option>Search, view all students in a group</option>
            			<option>Search, view all groups in a class</option>
        			</select>
                    </div>
               </div>                     
               <div class="col-2 pt-5">
                    <button type="submit" class="btn btn-dark px-3 btn">Select</button>
               </div>     
        	</div>
    	</form>
        
    </div>
            
  
        
</div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script></body>
</html>
