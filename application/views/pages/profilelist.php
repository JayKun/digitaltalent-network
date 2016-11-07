<!DOCTYPE>
<html>
    <head>
        <title>Profile List</title>
        <link rel="stylesheet" href=<?php echo base_url("../../assets/basic.css"); ?> />
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    </head>
    <style>
        h1
        {
            text-align: center;
            padding:20px;
        }
    .navbar
    {
        position: absolute;
        top:0;
        margin:0;
    }

    </style>
    <body>
        <h1>Profile List</h1>
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
 //$query = "SELECT * FROM profiles"; 
$query = $this->db->get('profiles');
$result = $query->result(); 


foreach($result as $row){
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

