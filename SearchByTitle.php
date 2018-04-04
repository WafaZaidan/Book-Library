<!DOCTYPE  HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"  "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>

        <title>Search Results</title>
        <?php include 'Styles/allPagesStyle.php'; ?>

    <form  method="post" action="SearchByTitle.php"  id="searchform" class="navbar-form navbar-right">
        <div class="floatRight">
            Book title search: <input  type="text" name="search">
            <button type="submit" name="submit" id="searchButton" onclick="getSearchResult()" value="Search">Search</button>
        </div>
    </form>


</head>
<p><body>

    <?php
    if (isset($_POST['search'])) {
        $search = filter_var($_POST['search'], FILTER_SANITIZE_STRING, FILTER_SANITIZE_ENCODED);
        echo "<h2>Your search result for " . "'" . "<i>$search</i>" . "'</h2>";
    } else {
        die("invalid search");
    }



    if (isset($_POST['submit'])) {
        if (preg_match("/^[  a-zA-Z]+/", $_POST['search'])) {
            $dsn = "mysql:host=localhost;dbname=Library_v6";
            $user = "root";
            $password = null;
            $options = null;



            try {
                $pdo = new PDO($dsn, $user, $password, $options);
            } catch (PDOException $e) {
                echo($e->getMessage("Snap, we can't connect to our database!"));
            }

            $result = $pdo->query("SELECT * FROM book AS b JOIN author AS a ON b.Author_ID = a.Author_ID JOIN status as s ON b.Status_ID = s.Status_ID WHERE b.Title LIKE '%$search%'");
            $rows = $result->fetchAll();

            $num_rows = count($rows);
            if ($num_rows > 0) {

                echo" <table class=\"resultsTable\">
        <tr>
        <th>Image</th>
            <th>Title</th>
            <th>Firstname</th>
            <th>Lastname</th>
               <th>Cart</th>
        </tr>";
                foreach ($rows as $tablerow) {
                    echo '<tr>';
                     echo '<tr> <td>' . '<img src='.$tablerow['image'].' width="70" height="110"/> </td>';
                    echo '<td>' . $tablerow["Title"] . '</td>';
                    echo '<td>' . $tablerow["Firstname"] . " " . $tablerow["lastname"] . '</td>';
                    echo '<td>' . $tablerow["Status"] . '</td>';
                      echo '  <td>     <div class="middle">
                    <a href= "Cart.php" class="text"> Add to Cart 
                    <img src="images/Cart.png" alt="cart" width="20" height="20" /> </a>
            </div></td> </tr>';
                }
            } else {
                echo "No results matching your search found";
            }
        }
    }
    ?>
</table>
</body>
</html>