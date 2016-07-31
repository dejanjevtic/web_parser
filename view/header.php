<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" >Web Parser</a>
    </div>
    <div>
      <ul class="nav navbar-nav">
            <?php if ($name=='index'):?>
                <li class="active"><a href="">Home</a></li>
                <li><a href="about">About</a></li>
            <?php else: ?>
                <li ><a href="index">Home</a></li>
                <li class="active"><a href="">About</a></li>
            <?php endif; ?>
        
      </ul>
    </div>
  </div>
</nav>
        