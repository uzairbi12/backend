<!DOCTYPE html>
<html>
  <head>
    <title>Rishton Academy</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body>
    <div class="container-fluid">
      <span class="text-align" style="font-size:6vmin"> Rishton Academy Primary School</span>
      <nav class="navbar navbar-expand-sm bg-light">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
              <li class="nav-item"><a href="index.html">Home</a></li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Student</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="studentAdd.html">Add</a></li>
                  <li><a class="dropdown-item" href="studentView.php">View</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Parent</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="parentAdd.html">Add</a></li>
                  <li><a class="dropdown-item" href="parentView.php">View</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Teacher</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="teacherAdd.html">Add</a></li>
                  <li><a class="dropdown-item" href="teacherView.php">View</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Class</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="classAdd.html">Add</a></li>
                  <li><a class="dropdown-item" href="classView.php">View</a></li>
                </ul>
              </li>
              <li class="nav-item"><a href="contact.html">Contact</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
    <main>
      <table>
        <tr>
          <th width="100px">Parent ID<br><hr></th>
          <th width="100px">First Name<br><hr></th>
          <th width="100px">Last Name<br><hr></th>
          <th width="100px">Address<br><hr></th>
          <th width="100px">Phone<br><hr></th>
          <th width="100px">Email<br><hr></th>
          
        </tr>
        <?php 
        // Database information
        $host = "sdb-57.hosting.stackcp.net";
        $username = "student31-35303135634f";
        $password = "ua92-studentAc";
        $dbname = "student31-35303135634f";

        //Connect to database
        $link = mysqli_connect($host,$username,$password,$dbname);

        //Check connection
        if ($link === false) {
          die("Connection failed: ");
        }

        $sql = mysqli_query($link, "SELECT ParentID, FirstName, LastName, Address, Phone, Email,  FROM Parents");

          while ($row = $sql -> fetch_assoc()) {
            echo "<tr>
    <th>{$row['ParentID']}</th>
    <th>{$row['FirstName']}</th>
    <th>{$row['LastName']}</th>
    <th>{$row['Address']}</th>
    <th>{$row['Phone']}</th>
    <th>{$row['Email']}</th>
    
    </tr>";
          }

        ?>
      </table>
    </main>
  </body>
</html>