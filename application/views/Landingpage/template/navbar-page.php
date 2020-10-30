<nav id="mainNav" class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a href="<?php echo base_url() ?>" class="navbar-brand active">
            <img src="<?php echo base_url() . 'assets/img/bemundip.png' ?>" alt="" style="width: 50%; height:auto; margin-right:auto;">
        </a>
        <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="nav navbar-nav ml-auto">

                <!-- <li class="nav-item dropdown active">
                    <a class="nav-link dropdown-toggle <?php if(($this->uri->uri_string() == 'page/tentang') || ($this->uri->uri_string() == 'page/bem_fakultas') ) { echo 'active'; } ?> " href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tentang</a>
                    <div  class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a id="drop-style" class="dropdown-item <?php if($this->uri->uri_string() == 'page/tentang') { echo 'active'; } ?> " href="<?php echo base_url(). 'page/tentang' ?>">Tentang BEM UNDIP</a>
                        <a  id="drop-style"class="dropdown-item <?php if($this->uri->uri_string() == 'page/bem_fakultas') { echo 'active'; } ?> " href="<?php echo base_url(). 'page/bem_fakultas' ?>">BEM FAKULTAS</a>
                        <a id="drop-style" class="dropdown-item <?php if($this->uri->uri_string() == 'page/maintanance') { echo 'active'; } ?> "  href="<?php echo base_url() .'page/maintanance'?>">Something else here</a>
                    </div>
                </li> -->
                <li class="nav-item">
                    <a class="nav-link <?php if($this->uri->uri_string() == 'page/proker') { echo 'active'; } ?>" href="<?php echo base_url() .'page/proker'?>">DATABASE</a>
                </li>
              
                <li class="nav-item">
                    <a class="nav-link <?php if($this->uri->uri_string() == 'page/list_buletin') { echo 'active'; } ?>" href="<?php echo base_url() .'page/list_buletin'?>">BULETIN</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if($this->uri->uri_string() == 'page/informasi') { echo 'active'; } ?>" href="<?php echo base_url() .'page/informasi'?>">INFORMASI</a>
                </li>
               
            </ul>

        </div>
    </div>
</nav>