<section class="content">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title"><?= $Lang->get("STAFF"); ?></h3>
            </div>
            <div class="box-body">
			<div class="alert alert-info alert-dismissible alert-colored" role="alert">
                <button class="close" type="button" data-dismiss="alert" aria-label="Close"><i class="hc-close"></i>
                </button>Nouveau ! Possible de classer les Staffs ! <a href="http://dev-time.eu/topic/63.devtime" target="_blank">Plus d'info sur ce lien</a>
			</div>
                <div id="error_msg"></div>
                <button type="button" class="btn btn-large btn-block btn-success" onclick="STAFF.addStaff()">
                    <?= $Lang->get("ADD_STAFF") ?>
                </button>
                <hr>
                <table class="table table-hover" id="staff_list">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th><?= $Lang->get('USER_STAFF') ?></th>
						<th><?= $Lang->get('CLASSEMENT_STAFF') ?></th>
                        <th><?= $Lang->get('RANK_STAFF') ?></th>
						<th><?= $Lang->get('DESCRIPTION_STAFF') ?></th>
                        <th><?= $Lang->get('GLOBAL__ACTIONS') ?></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach($staffs as $v): $v = current($v);?>
                        <tr id="staff-<?= $v['id'] ?>">
                            <th id="staff-<?= $v['id'] ?>-id"><?= $v['id'] ?></th>
                            <td id="staff-<?= $v['id'] ?>-user"><?= $v['user'] ?></td>
							<td id="staff-<?= $v['id'] ?>-classement"><?= $v['classement'] ?></td>
                            <td id="staff-<?= $v['id'] ?>-rank"><?= $v['rank'] ?></td>
							<td id="staff-<?= $v['id'] ?>-description"><?= $v['description'] ?></td>
                            <td>
                                <a href="#" onclick="STAFF.editStaff(<?= $v['id'] ?>);" class="btn btn-info"><?= $Lang->get('GLOBAL__EDIT') ?></a>
                                <a href="#" onclick="STAFF.removeStaff(<?= $v['id'] ?>);" class="btn btn-danger"><?= $Lang->get('GLOBAL__DELETE') ?></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
</section>

<!-- Staff Form Modal -->
<div class="modal fade" id="staff_modal" tabindex="-1" role="dialog" aria-labelledby="staff_modal_label">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="add_staff_modal_label"><?= $Lang->get("ADD_STAFF") ?></h4>
            </div>
            <form id="staff_form" action="">
                <div class="modal-body">
                    <div id="modal_alert_msg"></div>
                    <input type="hidden" name="action" id="action">
                    <input type="hidden" name="id" id="id">
                    <div class="form-group">
                        <label for="user"><?= $Lang->get("USER_STAFF") ?></label>
                        <input type="text" class="form-control" id="user" name="user" placeholder="<?= $Lang->get("USER_PLACEHOLDER") ?>">
                    </div>
                    <div class="form-group">
                        <label for="classement"><?= $Lang->get("CLASSEMENT_STAFF") ?></label>
                        <input type="number" class="form-control" id="classement" name="classement" placeholder="<?= $Lang->get("CLASSEMENT_PLACEHOLDER") ?>">
                    </div>
                    <div class="form-group">
                        <label for="rank"><?= $Lang->get("RANK_STAFF") ?></label>
                        <input type="text" class="form-control" id="rank" name="rank" placeholder="<?= $Lang->get("RANK_PLACEHOLDER") ?>">
                    </div>
                    <div class="form-group">
                        <label for="description"><?= $Lang->get("DESCRIPTION_STAFF") ?></label>
                        <textarea class="form-control" name="description" id="description" placeholder="<?= $Lang->get("DESCRIPTION_PLACEHOLDER") ?>"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><?= $Lang->get("GLOBAL__CLOSE") ?></button>
                    <button type="submit" class="btn btn-primary"><?= $Lang->get("GLOBAL__SUBMIT") ?></button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    var STAFF = {};
    STAFF.editStaff = function(id){
      data = {};
      data["data[_Token][key]"] = '<?= $csrfToken ?>';
        $.ajax({
            method: "POST",
            data: data,
            url: "<?= $this->Html->url(array('controller' => 'staff', 'admin' => false, 'action' => 'ajax_get_staff')) ?>/" + id
        })
            .done(function(data) {
                if(typeof data == "object"){
                    $('#staff_modal').modal('show');
                    $('#staff_form #action').val("edit");
                    $('#staff_form #id').val(data.id);
                    $('#staff_form #user').val(data.user);
					$('#staff_form #classement').val(data.classement);
                    $('#staff_form #rank').val(data.rank);
					$('#staff_form #description').val(data.description);
                }
                else if(data == 0)
                    $('#error_msg').html('' +
                        '<div class="alert alert-error">' +
                        '<?= $Lang->get("STAFF_LOAD_ERROR") ?>' +
                        '</div>'
                    );

            })
            .fail(function() {
                $('#error_msg').html('' +
                    '<div class="alert alert-error">' +
                    '<?= $Lang->get("STAFF_LOAD_ERROR") ?>' +
                    '</div>'
                );
            })
            .always(function() {
            });
    };
    STAFF.removeStaff = function(id){
        if(confirm("<?= $Lang->get("STAFF_CONFIRM_REMOVING") ?>")){
          data = {};
          data['id'] = id;
          data["data[_Token][key]"] = '<?= $csrfToken ?>';
            $.ajax({
                method: "POST",
                url: "<?= $this->Html->url(array('controller' => 'staff', 'action' => 'ajax_remove_staff')) ?>",
                data: data
            })
                .done(function(data) {
                    if(data == 0){
                        $('#error_msg').html('' +
                            '<div class="alert alert-success">' +
                            '<?= $Lang->get("STAFF_SUCCESSFULY_REMOVED") ?>' +
                            '</div>'
                        );
                        $('#staff-' + id).remove();
                    }
                    else
                        $('#error_msg').html('' +
                            '<div class="alert alert-error">' +
                            '<?= $Lang->get("STAFF_REMOVING_ERROR") ?>' +
                            '</div>'
                        );

                })
                .fail(function() {
                    $('#error_msg').html('' +
                        '<div class="alert alert-error">' +
                        '<?= $Lang->get("STAFF_REMOVING_ERROR") ?>' +
                        '</div>'
                    );
                })
                .always(function() {
                });
        }
    };
    STAFF.addStaff = function(){
        $('#staff_form #action').val("add");
        $('#staff_modal').modal("show");
    }
    STAFF.submitForm = function(event){
        event.preventDefault();
        event.stopPropagation();

        var inputs = {
            action: $('#staff_form #action').val(),
            id: $('#staff_form #id').val(),
            user: $('#staff_form #user').val(),
			classement: $('#staff_form #classement').val(),
			rank: $('#staff_form #rank').val(),
            description: $('#staff_form #description').val()
        };
        inputs["data[_Token][key]"] = '<?= $csrfToken ?>';
        $.ajax({
            method: "POST",
            url: "<?= $this->Html->url(array('controller' => 'staff', 'action' => 'ajax_save_staff')) ?>",
            data: inputs
        })
            .done(function(data) {
                console.log(data);
                if(typeof data == "object"){
                    console.log(data);
                    $('#error_msg').html('' +
                        '<div class="alert alert-success">' +
                        '<?= $Lang->get("STAFF_SUCCESSFULY_EDITED") ?>' +
                        '</div>'
                    );
                    if(data.action == "add")
                        $("#staff_list tbody").append(
                            "<tr id=\"staff-" + data.id + "\">" +
                            "<th id=\"staff-" + data.id + "-id\">" + data.id + "</th>" +
                            "<td id=\"staff-" + data.id + "-user\">" + data.user + "</td>" +
							"<td id=\"staff-" + data.id + "-classement\">" + data.classement + "</td>" +
							"<td id=\"staff-" + data.id + "-rank\">" + data.rank + "</td>" +
                            "<td id=\"staff-" + data.id + "-description\">" + data.description + "</td>" +
                            "<td>" +
                            "<a href=\"#\" onclick=\"STAFF.editStaff(" + data.id + ");\" class=\"btn btn-info\"><?= $Lang->get('GLOBAL__EDIT') ?></a>" +
                            "<a href=\"#\" onclick=\"STAFF.removeStaff(" + data.id + ");\" class=\"btn btn-danger\"><?= $Lang->get('GLOBAL__DELETE') ?></a>" +
                            "</td>"+
                            "</tr>"
                        );
                    else{
                        $('#staff-' + data.id + "-id").text(data.id);
                        $('#staff-' + data.id + "-user").text(data.user);
						$('#staff-' + data.id + "-classement").text(data.classement);
						$('#staff-' + data.id + "-rank").text(data.rank);
                        $('#staff-' + data.id + "-description").text(data.description);
                    }
                    $('#staff_modal').modal("hide");
                }
                else if(data == 0)
                    $('#modal_alert_msg').html('' +
                        '<div class="alert alert-error">' +
                        '<?= $Lang->get("STAFF_ERROR") ?>' +
                        '</div>'
                    );

            })
            .fail(function() {
                $('#modal_alert_msg').html('' +
                    '<div class="alert alert-error">' +
                    '<?= $Lang->get("STAFF_ERROR") ?>' +
                    '</div>'
                );
            })
            .always(function() {
            });
    };

    $('#staff_form').submit(STAFF.submitForm);
    $('#staff_modal').on('hide.bs.modal', function(event){
        $("#staff_form :input").each(function(){
            var input = $(this);
            input.val("");
        });
    });

</script>
