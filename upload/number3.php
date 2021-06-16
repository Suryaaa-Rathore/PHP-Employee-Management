
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  	<?php 
  	if ($_SERVER['REQUEST_METHOD'] == "POST") {
  		$num = $_POST['number'];
  		$len = strlen($num);
  		$str = (string)$num;
  		$last = "";
  		$f1 = "";
  		$f2 = "";
  		$f3 = "";
  		$ml = 10 - $len;
  		$no = "";
  		// substr function 

  		for ($i=$len-1; $i >= $ml; $i--) { 
  			$last .= $str[$i];
  		}
  		for ($i=9; $i >= 0; $i--) { 
  			$no .= $last[$i];
  		}
  			

  		//str_split function 

  		for ($i=0; $i <3 ; $i++) { 
  			$f1 .= $no[$i];
  		}
  		for ($i=3; $i <6 ; $i++) { 
  			$f2 .= $no[$i];
  		}
  		for ($i=6; $i < 10 ; $i++) { 
  			$f3 .= $no[$i];
  		}

  		

  		
  		
  	}
  	?>

	<div class="container col-md-5 ">
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method = "POST" >
		  <div class="form-group ">
		    <label for="exampleInputEmail1">Number</label>
		    <input type="text" minlength="10" maxlength="13" required class="form-control" id="number" name="number" placeholder="9876543210" aria-describedby="emailHelp">
		  </div>
		 
		  <button type="submit" class="btn btn-primary col-md-12">Submit</button>
		</form>

		<?php
		echo "<br>";
		echo "(";
		echo $f1;
		echo ")";
		echo "-";
		echo $f2;
		echo "-";
		echo $f3;
		// echo $last;

		?>
		

    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
