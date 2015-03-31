<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <nav class="navbar">
                <div class="container">
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav">
                            <?php foreach ($array_navigation as $name => $value) { ?>
                                <li><a href="<?php echo $value; ?>"><?php echo $name; ?></a></li> 
                            <?php } ?>
                        </ul> 
                    </div>
                </div><!--/.container-->
            </nav><!--/nav-->
        </div>
    </div>
</div>
