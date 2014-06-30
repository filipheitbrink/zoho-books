<?php $this->load->view('block.head.php'); ?>
</head>
<body>

<?php $this->load->view('block.menu.php'); ?>

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <h1 class="page-header">Import banking transactions</h1>
            <form role="form" accept-charset="UTF-8" method="post">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Import</h3>
                    </div>
                    <div class="panel-body">
                        <div class="form-group">
                            <label for="account_id">Select bank account</label>
                            <select class="form-control" id="account_id">
                                <?php foreach ($bankaccounts->bankaccounts as $data){ ?>
                                    <option value="<?php echo $data->account_id; ?>"><?php echo $data->account_name; ?> (<?php echo $data->currency_code; ?>)</option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="csv">CSV String</label>
                            <textarea class="form-control" id="csv" rows="10"></textarea>
                        </div>
                        <button type="submit" class="btn btn-default">Import</button>
                    </div>
                </div>
            </form>
        </div>

<?php $this->load->view('block.foot.php'); ?>

</body></html>