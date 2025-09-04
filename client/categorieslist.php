<div class="container">
    <h1 class="">Catogaries </h1>
    <?php
    include('./common/db.php');
        $query = "select * from category";
        $result = $conn->query($query);

        if($result){
            foreach($result as $row){
                $title =ucfirst($row['name']);
                $id = $row['id'];
                echo "<div class='question-list'>
                <h4>
                <a href='?c-id=$id'>$title</a>
                </h4>
                </div>";
            }
        }

?>
</div>