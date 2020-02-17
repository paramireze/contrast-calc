<div class="navbar navbar-expand-lg fixed-top navbar-dark bg-primary">
    <div class="container">
        <a href="<?php echo root_http_path(); ?>" class="navbar-brand">Contrast Calculator</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo root_http_path(); ?>/index.php?show=calculation-details">Calculation Details <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo root_http_path(); ?>/index.php?show=about">About <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id="download">Calculation Details <span class="caret"></span></a>
                    <div class="dropdown-menu" aria-labelledby="download">
                        <a class="dropdown-item" href="<?php echo root_http_path(); ?>/index.php?show=site-rules">Site Rules</a>
                        <a class="dropdown-item" href="<?php echo root_http_path(); ?>/index.php?show=debug">Debug</a>
                        <a class="dropdown-item" href="<?php echo root_http_path(); ?>/index.php?show=protocols">Protocols</a>
                        <a class="dropdown-item" href="<?php echo root_http_path(); ?>/index.php?show=size-images">Size Images</a>
                        <a class="dropdown-item" href="<?php echo root_http_path(); ?>/index.php?show=weight-to-volume">Weight to Volume</a>
                        <a class="dropdown-item" href="<?php echo root_http_path(); ?>/index.php?show=mappings">Mappings</a>
                        <div class="dropdown-divider"></div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>