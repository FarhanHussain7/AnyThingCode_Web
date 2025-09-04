<div class="container">  
    <div class="offset-sm-1">
    <h5>Answer </h5>
    <?php
    $query= "select * from answer where question_id=$id";
    $result = $conn->query($query);
    foreach($result as $row){
     $answer = $row['answer'];

     echo "<div class='row'>  
     <p class='answer-wraper'>$answer</p>
     </div>";
    }

?>
</div>
</div>