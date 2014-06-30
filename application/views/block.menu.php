<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Zoho Books - Bridge</a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Logout</a></li>
            </ul>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
            <ul class="nav nav-sidebar">
                <li<?php echo ($this->uri->segment(1) == '' || $this->uri->segment(1) == 'home')?' class="active"':''; ?>><a href="/">Dashboard</a></li>
                <li<?php echo ($this->uri->segment(1) == 'banktransactions')?' class="active"':''; ?>><a href="<?php echo site_url('banktransactions'); ?>">Import bank transactions</a></li>
            </ul>
        </div>
