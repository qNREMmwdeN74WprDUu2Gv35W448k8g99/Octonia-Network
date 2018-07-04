<br><br><br>
<div class="container">
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><?= $Lang->get('ONLINE__TITLE') ?></h3>
            </div>
            <div class="panel-body">
                <?php if ($list != "NEED_SERVER_ON") { ?>
                    <table class="table table-bordered dataTable">
                        <thead>
                        <tr>
                            <th><?= $Lang->get('ONLINE__USER') ?></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($list as $k => $v) { ?>
                            <tr>
                                <td><img width="30px;" src="<?= $this->Html->url('/API/get_head_skin/' . $v) ?>/30"
                                         style="margin-right:25px; border-radius:5px; max-width:25px"> <?= $v ?></td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                <?php } else { ?>
                    <div class="alert alert-danger"><?= $Lang->get('ONLINE__SERVER_OFF') ?></div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>