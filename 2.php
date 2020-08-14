<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <h1>Test</h1>
    <form method="POST" name="frmpost" action="">
  <div class="form-group">
    <label for="exampleInputEmail1">Nama Usia Kota</label>
    <input type="text" class="form-control" id="user" aria-describedby="emailHelp" placeholder="nama usia kota" name="user">
    </div>

  <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <?php
    $nam = $_POST['user'];
    $user =  explode(" ",$_POST['user']);
    $usia= $user[1];
 	
    ?>

    <table border="1" width="50%" >
    	<tr>
    		<td>
    			nama
    		</td>
    		<td>
    			usia
    		</td>
    		<td>
    			kota
    		</td>
    	</tr>
    	<tr> <nav></nav>
    		<td><?php echo strval($user[0]);?> </td>
    		<td><?php echo floatval($usia);?> </td>
    		<td><?php echo strval($user[2]);?> </td>
    	</tr>
    </table>

select nm_film from film where pendapatan = min(pendapatan)

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>