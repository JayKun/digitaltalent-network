<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href=<?php echo base_url('../../assets/home.css'); ?>/>
    	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

</head>
<body>	
    
    
<div class="first-strip container-fluid">
	<div class="row">																					
		<div class="fill-screen" style= "background-image: url(img/background.jpg); z-index:1;">
		<center>
			
					<section class="col-md-offset-4 col-md-4 search-box well">
						<h3>Online Student Profile Database</h3>
						<form class="form-group"  method="post" action=<?php echo site_url('search/search_keyword'); ?> >
							<input type="text" class="form-control" name="keyword" id="search">
                                                        <button type="submit" class="btn btn-success" style="margin:10px;"> 
								<span class="glyphicon glyphicon-search"></span> Search 
								</button>	
						</form>
					</section>
				</div>
			</div>
		</center>
		</div>
	</div>																					
</div>

<div class="second-strip container-fluid">
	<div class="row">
		<h1> Main Components of DigiT </h1>
                <br></br>
		<div class="col-sm-3"><h3>Video Introductions</h3>
                     <i class="icon fa fa-play-circle fa-4x" ></i>
                </div>
		<div class="col-sm-3"> <h3>Resume</h3>
                <i class="fa fa-file-text fa-4x"></i>
                </div>
                
		<div class="col-sm-3"> <h3> Search Tags</h3>
                <i class="fa fa-search fa-4x"></i>
                </div>
		<div class="col-sm-3"> <h3>Simple Layout</h3>
                <i class="fa fa-address-card-o fa-4x"></i>
                </div>
	</div>
</div>

<div class="third-strip container-fluid">
	<div class="container-fluid">
	<div class="row">
		<h1>Preview Candidates Through Videos</h1>
               
                <h4> Videos add depth to a candidates' application </h4> 
                <h4> Candidates get to express their creativity and their projects through 3 videos:<em> Personal Introduction, Interests and A video of Their Choice </em></h4>
                 <br></br>
                 <div class="col-md-4">
                     <img src="img/bombLab.png" style="max-height:100%; max-width: 100% "/>
                 </div>
                 <div class="col-md-4">
                     <img src="img/visionPrototype.jpg"  style="max-height:100%; max-width: 100% "/>
                 </div>
                 <div class="col-md-4">
                     
                 </div>
	</div>
	</div>
</div>

<div class="fourth-strip container-fluid" style="overflow: auto;">
	
		<h1>Search by Skill Tags</h1>
                <br></br>
		<h3> Short list candidates using skill tags</h3>
                <br></br>
            <div class="row">
                <div class="col-md-3">
                    <img src="img/nodejs.png" />
                    <h3 style="color: greenyellow">Node js</h3>
                </div>
                <div class="col-md-3">
                    <img src="img/angular.png" />
                    <h3 style="color: red">Angular</h3>
                </div>
                <div class="col-md-3">
                    <img src="img/python.png" />
                    <h3>Python</h3>
                </div>
                <div class="col-md-3">
                    <img src="img/ruby.png"  />
                    <h3 style="color:darkred">Ruby</h3>
                </div>
            </div>
            <br></br>
            <div class="row">
                <div class="col-md-4">
                    <img src="img/camera.png" style="width: 150px; height: 150px"/>
                    <h3 style="color: blueviolet">Photography</h3>
                </div>
                <div class="col-md-4">
                    <img src="img/graph.png" style="width: 200px; height: 200px"/>
                    <h3 style="color: #00ffff">Statistics</h3>
                </div>
                <div class="col-md-4">
                    <img src="img/drawing.png" style="width: 150px; height: 150px"/>
                    <h3 style="color: yellow">Architectural Sketching</h3>
                </div>
            
            </div>
</div>


<div class="fifth-strip container-fluid">
	<div class="container-fluid">
		<h1>How To Create A Profile </h1>
                <br></br>
                <div class="row">
                    <div class="col-md-3">
                        <h2>Step</h2>
                        <img src="./img/one.png" style="max-height: 30%; max-width: 50%"/>
                        <br></br>
                        <p>Submit an application to create a profile through the website. Your personal info, year and resume will be needed</p>
                    </div>
                    <div class="col-md-3">
                        <h2>Step </h2>
                        <img src="./img/two.png" style="max-height: 30%; max-width: 50%"/>
                        <br></br>
                        <p>Submit videos to admin. All videos would be added to a youtube account created specifically for this database</p>
                    </div>
                    <div class="col-md-3" >
                        <h2>Step</h2>
                          <img src="./img/three.png" style="max-height: 30%; max-width: 50%"/>
                          <br></br>
                          <p>Admin adds the information submitted to the database and a new candidate profile is added</p>
                    </div>
                    <div class="col-md-3" >
                        <h2>Step</h2>
                          <img src="./img/four.png" style="max-height: 30%; max-width: 50%"/>
                          <br></br>
                          <p>Recruiters type in the relevant search tags and the candidate shows up on search results </p>
                    </div>
                    
                </div>
	</div>
    
	</div>
</div>


</body>
</html>