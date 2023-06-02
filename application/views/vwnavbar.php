<nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
    </div>
    <ul class="nav navbar-top-links navbar-right">
        <li style="padding: 20px">
            <span class="m-r-sm text-muted welcome-message">Welcome to CU Radirah Mr/s <?= $this->session->userdata('username')?>.</span>
        </li>
        
        <li>
            <a href="<?= base_url('auth/fn_logout')?>">
                <i class="fa fa-sign-out"></i> Log out
            </a>
        </li>
        
    </ul>

</nav>