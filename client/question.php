<div class="container">
    <div class="row">
    <div class="col-8">  
    <h1 class="heading">Question</h1>
         <?php
        include('./common/db.php');
        if(isset($_GET['c-id'])){
        $query = "select * from question where category_id=$cid";
        }else{
        $query = "select * from question";
        }
        $result = $conn->query($query);

        if($result){
            foreach($result as $row){
                $title = $row['title'];
                $id = $row['id'];
                echo "<div class='question-list'>
                <h4>
                <a href='?q-id=$id'>$title</a>
                </h4>
                </div>";
            }
        }
    ?>
</div>
<div class="col-4">
        <?php
            include('./client/categorieslist.php');
        ?>
</div>
</div>
</div>