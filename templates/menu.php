<!DOCTYPE html>
<html>
    <head>
          <style>
            a:link {
                background-color: #C0C0C0;
              }

              a:visited {
                background-color: #E7E9EB;
              }

              a:hover {
                background-color: #E5E4E2;
              }

              a:active {
                background-color: #71797E;
              } 
          </style>
    </head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <div class="collapse navbar-collapse show justify-content-center">
            <ul class="nav navbar-nav">
              <li><a href=<?php echo base_url('index.php');?>>Home</a></li>
              <li><a href=<?php echo base_url('index.php/pages/aboutme');?>>About Me</a></li>
              <li><a href=<?php echo base_url('index.php/pages/education');?>>Educational Background</a></li>
            </ul> 
         </div>
          </div>
        </div>
</nav>
</body>
</html>