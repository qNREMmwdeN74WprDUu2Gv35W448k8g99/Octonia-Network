<br><br><br>
<div class="container">
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><?= $Lang->get('BANLIST__TITLE') ?></h3>
            </div>
            <div class="panel-body">
                <?php if($list != "NEED_SERVER_ON") { ?>
                    <table class="table table-bordered dataTable">
                        <thead>
                        <tr>
                            <th><?= $Lang->get('BANLIST__USER') ?></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($list as $k => $v) { ?>
                            <tr>
                                <td><img width="30px;" src="<?= $this->Html->url('/API/get_head_skin/'.$v) ?>/30" style="margin-right:25px; border-radius:5px; max-width:25px"> <?= $v ?></td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                <?php } else { ?>
                    <div class="well">
                        <div class="alert alert-danger"><?= $Lang->get('BANLIST__SERVER_OFF') ?></div>
                    </div>
                <?php } ?>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><?= $Lang->get('BANLIST__SITE') ?></h3>
            </div>
            <div class="panel-body">
                <table class="table table-bordered dataTable">
                    <thead>
                    <tr>
                        <th><?= $Lang->get('BANLIST__USER') ?></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach($users as $k2=>$v2): $v2 = current($v2); ?>
                        <?php if($v2['rank'] == 5){ ?>
                            <tr>
                                <td><img width="30px;" src="<?= $this->Html->url('/API/get_head_skin/'.$v2["pseudo"]) ?>/30" style="margin-right:25px; border-radius:5px; max-width:25px"> <?= $v2["pseudo"] ?></td>
                            </tr>
                        <?php }elseif($v2['rank'] == 1){ } ?>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>