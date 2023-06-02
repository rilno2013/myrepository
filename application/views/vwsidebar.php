<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header text-center">
                <div class="dropdown profile-element">
                    <img alt="image" height="100" width="100" class="rounded-circle" src="<?= base_url()?>assets/img/dadirah.png"/>
                </div>
                <div class="logo-element">
                    C.U.
                </div>
            </li>
            <?php 
                $treemenu=$this->session->userdata("treemenu");
                foreach($treemenu as $menu){
                    if($menu->menutype=="HD"){
                       echo "<li class=\"active\">
                                <a href=\"".site_url($menu->link)."\"><i class=\"fa fa-th-large\"></i> <span class=\"nav-label\">".$menu->menuname."</span></a>
                            </li>";
                    }
                    if($menu->menutype=="H"){
                       echo "<li>
                                <a href=\"#\"><i class=\"fa fa-bar-chart-o\"></i> <span class=\"nav-label\">".$menu->menuname."</span><span class=\"fa arrow\"></span>
                                </a>";
                               if(isset($menu->submenu)){
                                    echo "<ul class=\"nav nav-second-level collapse\">";
                                        foreach($menu->submenu as $sub){
                                            echo "<li><a href=\"".site_url($sub->link)."\">".$sub->menuname."</a></li>";
                                        }
                                        
                                    echo "</ul>";
                               }
                               
                                
                        echo "</li>";
                    }

                }
            ?>
            
            
            
        </ul>

    </div>
</nav>