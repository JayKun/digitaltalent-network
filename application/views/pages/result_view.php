<!DOCTYPE>
<html>
    <head>
        <title>Search Results</title>
        <link rel="stylesheet" href=<?php echo base_url("../../assets/basic.css"); ?> />
    </head>
    <style>
        h1
        {
            padding:20px;
        }
    </style>
    <body>
        <h1>Search Results :</h1>
        <div class="content">
    <div class ="container">
<table class="table table-stripped table-responsive">
    <thead>
        <tr class="info">
            <th>Name</th>
            <th>Year</th>
            <th>Skills</th>
        </tr>
    </thead>
    <tbody>
<?php

foreach($results as $row){
    ?>
    <tr>
        <td><a href=<?php echo base_url('profile/index/'); echo $row->name; ?> ><?php echo $row->name?></a></td>
        <td><?php echo $row->year?></td>
        <td><?php echo $row->skills?></td>
    </tr>
   
<?php   
}
?>
    </tbody>
</table>
    </div>
        </div>
        </body>
</html>

