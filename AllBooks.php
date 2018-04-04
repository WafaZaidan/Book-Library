

<html>
</body>
           <?php
        include 'Styles/allPagesStyle.php';?>
          <form  method="post" action="SearchByTitle.php"  id="searchform" class="navbar-form navbar-right">
        <div class="floatRight">
            Book title search: <input  type="text" name="search">
            <button type="submit" name="submit" id="searchButton" onclick="getSearchResult()" value="Search">Search</button>
        </div>
    </form>
<style>
    h1 {
        text-align:center;
    }
    h2 {
        display: inline-block;
    }
</style>


<h1> All Books </h1>



<?php
$dsn = "mysql:host=localhost;dbname=library_v6";
$user = "root";
$password = nulL;
$options = null;

try {
    $pdo = new PDO($dsn, $user, $password, $options);
} catch (PDOException $e) {
    die($e->getMessage());
}

$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


try {
    $stmt = $pdo->query("SELECT * FROM book")->fetchAll();
    PDO::FETCH_ASSOC;
//foreach ($stmt as $row) {
//echo "<tr>";
//echo "<td><a href='BookDetails.php?title='>" . $row['Title'] . "</a></td> <br/>";
//echo "</tr>";
//}
    foreach ($stmt as $row) {

        echo "<tr>
            <td><a href='BookDetails.php?book=" . $row[0] . "'>" . $row['Title'] . "</a></td> <br> \n";
    }

    unset($stmt);
} catch (AllBooksException $e) {
    echo $e->getMessage();
    $error = $e->errorInfo();
    die();
}
?>









</body>
</html>




