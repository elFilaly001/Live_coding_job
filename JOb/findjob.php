<?php
include_once 'job.php';
include 'connect.php';

if (isset($_POST)) {
    $id = isset($_POST['id']) ? $_POST['id'] : NULL;
    $jobs = new Job($conn);

    $result = $jobs->getJobId($id);

    foreach ($result as $job) :
?>
    
                <?= "<p>{$job['title']} ---- {$job['description']} </p>" ?>

           
<?php

    endforeach;
}
?>
