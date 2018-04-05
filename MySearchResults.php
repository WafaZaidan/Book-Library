
<html>
    <head>
        <!--put title-->
        <!--Two includes without tags around in the style page-->
        <?php
        include 'Styles/allPagesStyle.php';
       
        ?>

    </head>
    <body>

        <form  method="post" action="SearchByTitle.php"  id="searchform" class="navbar-form navbar-right">
            <div class="floatRight">
                Book title search: <input  type="text" name="search">
                <button type="submit" name="submit" id="searchButton" onclick="getSearchResult()" value="Search">Search</button>
            </div>
        </form>
        <?php
         require 'Functions.php';

        use function Functions\logException;
        
//Establishing Connection
        $dsn = "mysql:host=localhost;dbname=Library_v6";
        $user = "root";
        $password = null;
        $options = null;


        try {
            $pdo = new PDO($dsn, $user, $password, $options);
        } catch (PDOException $e) {
        header("location:error.php");
              logException($e);
        }

        // Getting user Query
        if (isset($_GET['search'])) {
            $search = filter_var($_GET['search'], FILTER_SANITIZE_STRING, FILTER_SANITIZE_ENCODED);
        } else {
            echo "Whoops invalid search";
            
        }

        //Looping throug Mysql Data
        $result = $pdo->prepare("SELECT * FROM book WHERE Title LIKE '%$search%';");
        $result->execute();
        $rows = $result->fetchAll();
        $num_rows = count($rows);

        try {

            if ($num_rows > 0) {
                echo "<h2>Your search result for <i>$search</i> </h2>";
                echo" <table class=\"resultsTable\">
        <tr>
        <th>Image</th>
            <th>Title</th>
            <th>Publish Date</th>
            <th>Times Book Borrowed</th>
               <th>Cart</th>
        </tr>";


                foreach ($rows as $tablerow) {
                    if (!isset($tablerow['PublishDate']) or ! isset($tablerow['Title']) or ! isset($tablerow['PublishDate']) or ! isset($tablerow['TimesBookBorrowed'])) {

                        throw new Exception("whoops");
                    }

                    echo '<tr> <td>' . '<img src=' . $tablerow['image'] . ' width="70" height="110"/> </td>';
                    echo '<td>' . $tablerow["Title"] . '</td>';
                    echo '<td>' . $tablerow["PublishDate"] . '</td>';
                    echo '<td>' . $tablerow["TimesBookBorrowed"] . '</td>';
                    echo '  <td>     <div class="middle">
                    <a href= "Cart.php" class="text"> Add to Cart 
                    <img src="images/Cart.png" alt="cart" width="20" height="20" /> </a>
            </div></td> </tr>';
                }
            } else {
                echo "<h3>No results matching your search '$search' found</h3>";
            }
        } catch (Exception $e) {
            header("location:error.php");
            logException($e);
        }
        ?>

    </table>
</body>
</html>