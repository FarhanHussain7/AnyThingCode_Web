<div class="container"> 
    <div class="row">
    <div class="col-8">
    <h1 class="heading">Question</h1>
    <?php
    include('./common/db.php');

    $query="select * from question where id = $id";
    $result = $conn->query($query);
    $row = $result->fetch_assoc();
    $cid = $row['category_id'];
    if ($result) {
        # code...
        // print_r($row);
        echo "<h4 class='margin-bottom-15 question-title'> Question : ".$row['title']."</h4>
        <p class='margin-bottom-15'>".$row['description']."</p>";
    }
    include('./client/answer.php');
    ?>
    <form action="./server/signup.php" method="post">
        <input type="hidden" name="question_id" value="<?php echo $id ?>" >
    <textarea name="answer" class="form-control margin-bottom-15" placeholder="Your answer......"></textarea>
    <button class="btn btn-primary" >write your answer</button>
    </form>
</div>
    <div class="col-4">
        <?php
        // echo $cid;
        $Categoryquery = "select name from category where id = $cid";
        $Categoryresult = $conn->query($Categoryquery);
        $CategoryRow = $Categoryresult->fetch_assoc();
        echo "<H1>".ucfirst($CategoryRow['name'])."</H1> ";
        $query = "select * from question where category_id = $cid and id!=$id";
        $result = $conn->query($query);
        foreach ($result as $row) {
            $id = $row['id'];
            $title = $row['title'];
            echo "<div class='question-list'>
                <h4><a href=?q-id=$id>$title</a></h4>
            </div>";
        }
        ?>
    </div>
</div>
</div>