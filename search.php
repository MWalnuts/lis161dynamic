 <?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `products` WHERE CONCAT(`id`, `product`, `category`, `dateom`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);

    
}
 else {
    $query = "SELECT * FROM `products`";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    $con = mysqli_connect("localhost", "root", "", "lis161_crud");
    $filter_Result = mysqli_query($con, $query);
    return $filter_Result;
}

?>

<!DOCTYPE html>

<html>
<link rel="stylesheet" type="text/css" href="css/custom.css">
   <link rel="stylesheet" type="text/css" href="css/Dumpy.css">
   <script type="text/javascript" src="menu.js"></script>
    <head>
        <title>Razer Products Search Table</title>
    </head>
    <body> <style>
    table,tr,th,td
            {
                border: 1px solid black;
                text-align: center;
                line-height: 30px;
                margin: auto; }

            }
            </style>

    <div class="dropdown">
  <button onclick="myFunction()" class="dropbtn">Menu</button>
  <div id="myDropdown" class="dropdown-content">
    <a href="index.php">Home</a>
    <a href="keyboard.php">Keyboard</a>
    <a href="mouse.php">Mouse</a>
    <a href="headset.php">Headset</a>
    <a href="other.php">Other Hardwares</a>
    <a href="search.php">Catalog</a>
  </div>
</div>

<div class="dropdown2">
  <button onclick="myFunction2()" class="dropbtn2">My Account</button>
  <div id="myDropdown2" class="dropdown-content2">
    <a href="index2.php?">View Profile</a>
    <a href="server.php?logout=1">Logout</a>
  </div>
</div>
        
        <form action="search.php" method="post">
        <div class="input">
            <input  type="text" name="valueToSearch" placeholder="        Value To Search"><br><br>
            <input type="submit" name="search" value="Filter"><br><br>
            </div>
            
            <table>
                <tr>
                    <th>Id</th>
                    <th>Product Name</th>
                    <th>Category</th>
                    <th>Release Date</th>
                </tr>

      <!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <td><?php echo $row['id'];?></td>
                    <td><?php echo $row['product'];?></td>
                    <td><?php echo $row['category'];?></td>
                    <td><?php echo $row['dateom'];?></td>
                </tr>
                <?php endwhile;?>
            </table>
        </form>
        
    </body>
</html>
