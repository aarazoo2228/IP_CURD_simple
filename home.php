<?php
   session_start();
   require 'db/connection.php';
   ?>
<html>
   <head>
      <title>Home</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
      <!-- jQuery library -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <!-- Popper JS -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <!-- Latest compiled JavaScript -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
   </head>
   <body>
      <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
         <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav mr-auto">
               <li class="nav-item active">
                  <a class="nav-link" href="logout.php">Logout <span class="sr-only">(current)</span></a>
               </li>
            </ul>
            <ul class="navbar-nav ml-auto">
               <li class="nav-item">
                  <h4 class="text-light text-weight-bold"> welcome <?php echo $_SESSION['username'];?></h4>
               </li>
               <li>
            </ul>
         </div>
      </nav>
      <br><br>
      <div class="container">
         <a class="mr-auto btn btn-primary" href="insert.php">Insert NewData</a>
      </div><br>
    
      <div class="container">
         <?php
            $sql = "select * from winners";
            
            
            $result= $db->query($sql);
            if($result->num_rows > 0){?>
         <table class="table table-hover">
            <thead>
               <tr class="table-active">
                  <th scope="col">category</th>
                  <th scope="col">rank</th>
                  <th scope="col">WinnerName</th>
                  <th scope="col">PassNo</th>
                  <th scope="col">date</th>
                  <th scope="col">status</th>
                  <th scope="col">Action</th>
               </tr>
               <?php while($row = $result->fetch_assoc()){?>
               <tr class="table-light">
                  <td><?=$row['category']?></td>
                  <td><?=$row['rank']?></td>
                  <td><?=$row['winnername']?></td>
                  <td><?=$row['passno']?></td>
                  <td><?=$row['date']?></td>
                  <td><?=$row['status']?></td>
                  <td>
                     <a href="insert.php?id=<?php echo $row['id'];?>" class="btn btn-success">Edit</a>
                     <a href="delete.php?id=<?php echo $row['id'];?>" class="btn btn-danger">Delete</a>
                  </td>
               </tr>
            </thead>
            <tbody>
              
               <?php
                  }
                  }
                  else{
                  	echo "0 result";
                  }
                  $db->close();
                  ?>
            </tbody>
         </table>
      </div>
   </body>
</html>