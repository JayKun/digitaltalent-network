<!DOCTYPE html>
<html>
<head>
	<title><?php echo $name;?>'s Profile</title>
           <link rel="stylesheet" href=<?php echo base_url("../../assets/basic.css"); ?> />
           <link rel="stylesheet" href=<?php echo base_url("../../assets/profile.css"); ?> />
</head>
<style>
    .navbar
    {
        position: absolute;
        top:0;
        margin:0;
    }
</style>
<body>
    <?php 
    $resume = base_url("../../resume/".$resume_url);
    $profileImg = base_url("../../img/profiles/").$img_url;
    ?>
    
    <div id="profile"">
        <div id="side-bar">
            <div id="profile-pic">
                <img src=<?php echo $profileImg; ?> height="200" width="150"/>
            </div>
            <div class="profile-info">
             <a href=<?php echo $resume?> ><button class="btn btn-success">Download Resume</button></a>
             <h5><b>NAME</b>:  <?=$name?></h5>
             <h5><b>YEAR</b>:  <?=$year?> </h5>
             <h5><b>SKILLS</b>: <?=$skills?> </h5>
            </div>
        </div>
    </div>
<div id="navi">
	
            <div id="content-first">
                <h2><b>Resume</b></h2>
 
                    <div class="resume">
                        <iframe src=<?=$resume?> style="width:718px; height:700px;" frameborder="0"></iframe> 
                    </div>
            </div>
		<div class="video video-intro">
		<h3>Introductory Video</h3>
                
			<iframe width="420" height="315"
src="https://www.youtube.com/embed/B4l_kbox0mI">
</iframe>

		</div>
		<div class="video video-interest">
		<h3>Interest Video</h3>
                
			<iframe width="420" height="315"
src="https://www.youtube.com/embed/B4l_kbox0mI">
</iframe>
		</div>
		<div class="video video-questions">
		<h3>Other</h3>
                
			<iframe width="420" height="315"
src="https://www.youtube.com/embed/B4l_kbox0mI">
</iframe>
		</div>
</div>

</body>

</html>