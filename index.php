<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<?php include("meta.php"); ?>
<body>
<div id="body">
    <div id="page">
        <div id="thecontent">
		<?php 
        if($_GET['page']=='reports'){
            include("reports.php");
        }else if($_GET['page']=='projects'){ 
            include("projects.php");
        }else if($_GET['page']=='events'){ 
            include("events.php");
        }else if($_GET['page']=='users'){ 
            include("users.php");
        }else if($_GET['page']=='template-project'){ 
            include("template-project.php");
        }else if($_GET['page']=='edit-project'){ 
            include("edit-project.php");
        }else if($_GET['page']=='add-new-projects'){ 
            include("add-new-projects.php");
        }else if($_GET['page']=='add-new-events'){ 
            include("add-new-events.php");
        }else if($_GET['page']=='projects-success'){ 
            include("projects-success.php");
        }else if($_GET['page']=='events-success'){ 
            include("events-success.php");
        }else if($_GET['page']=='user-project-register'){ 
            include("user-project-register.php");
        }else{ 
            include("age-gateway.php");
        }?>
      </div>
    </div><!-- end #page -->
</div><!-- end #body -->		
</body>
</html>