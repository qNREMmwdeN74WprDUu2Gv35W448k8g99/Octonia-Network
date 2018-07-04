<section class="content">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title"><?= $Lang->get("DONATION"); ?></h3>
            </div>
            <div class="box-body">
                <div id="error_msg"></div>
                <button type="button" class="btn btn-large btn-block btn-success" onclick="DONATION.addDonation()">
                    <?= $Lang->get("ADD_DONATION") ?>
                </button>
                <hr>
                <table class="table table-hover" id="donation_list">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th><?= $Lang->get('EMAIL_DONATION') ?></th>
                        <th><?= $Lang->get('GLOBAL__ACTIONS') ?></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach($donations as $v): $v = current($v);?>
                        <tr id="donation-<?= $v['id'] ?>">
                            <th id="donation-<?= $v['id'] ?>-id"><?= $v['id'] ?></th>
                            <td id="donation-<?= $v['id'] ?>-email"><?= $v['email'] ?></td>
                            <td>
                                <a href="#" onclick="DONATION.editDonation(<?= $v['id'] ?>);" class="btn btn-info"><?= $Lang->get('GLOBAL__EDIT') ?></a>
                                <a href="#" onclick="DONATION.removeDonation(<?= $v['id'] ?>);" class="btn btn-danger"><?= $Lang->get('GLOBAL__DELETE') ?></a>
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

<!-- DONATION Form Modal -->
<div class="modal fade" id="donation_modal" tabindex="-1" role="dialog" aria-labelledby="donation_modal_label">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="add_donation_modal_label"><?= $Lang->get("ADD_DONATION") ?></h4>
            </div>
            <form id="donation_form" action="">
                <div class="modal-body">
                    <div id="modal_alert_msg"></div>
                    <input type="hidden" name="action" id="action">
                    <input type="hidden" name="id" id="id">
                    <div class="form-group">
                        <label for="email"><?= $Lang->get("EMAIL_DONATION") ?></label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="<?= $Lang->get("EMAIL_PLACEHOLDER") ?>">
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
    var DONATION = {};
    DONATION.editDonation = function(id){
      data = {};
      data["data[_Token][key]"] = '<?= $csrfToken ?>';
        $.ajax({
            method: "POST",
            data: data,
            url: "<?= $this->Html->url(array('controller' => 'donation', 'admin' => false, 'action' => 'ajax_get_donation')) ?>/" + id
        })
            .done(function(data) {
                if(typeof data == "object"){
                    $('#donation_modal').modal('show');
                    $('#donation_form #action').val("edit");
                    $('#donation_form #id').val(data.id);
                    $('#donation_form #email').val(data.email);
                }
                else if(data == 0)
                    $('#error_msg').html('' +
                        '<div class="alert alert-error">' +
                        '<?= $Lang->get("DONATION_LOAD_ERROR") ?>' +
                        '</div>'
                    );

            })
            .fail(function() {
                $('#error_msg').html('' +
                    '<div class="alert alert-error">' +
                    '<?= $Lang->get("DONATION_LOAD_ERROR") ?>' +
                    '</div>'
                );
            })
            .always(function() {
            });
    };
    DONATION.removeDonation = function(id){
        if(confirm("<?= $Lang->get("DONATION_CONFIRM_REMOVING") ?>")){
          data = {};
          data['id'] = id;
          data["data[_Token][key]"] = '<?= $csrfToken ?>';
            $.ajax({
                method: "POST",
                url: "<?= $this->Html->url(array('controller' => 'donation', 'action' => 'ajax_remove_donation')) ?>",
                data: data
            })
                .done(function(data) {
                    if(data == 0){
                        $('#error_msg').html('' +
                            '<div class="alert alert-success">' +
                            '<?= $Lang->get("DONATION_SUCCESSFULY_REMOVED") ?>' +
                            '</div>'
                        );
                        $('#donation-' + id).remove();
                    }
                    else
                        $('#error_msg').html('' +
                            '<div class="alert alert-error">' +
                            '<?= $Lang->get("DONATION_REMOVING_ERROR") ?>' +
                            '</div>'
                        );

                })
                .fail(function() {
                    $('#error_msg').html('' +
                        '<div class="alert alert-error">' +
                        '<?= $Lang->get("DONATION_REMOVING_ERROR") ?>' +
                        '</div>'
                    );
                })
                .always(function() {
                });
        }
    };
    DONATION.addDonation = function(){
        $('#donation_form #action').val("add");
        $('#donation_modal').modal("show");
    }
    DONATION.submitForm = function(event){
        event.preventDefault();
        event.stopPropagation();

        var inputs = {
            action: $('#donation_form #action').val(),
            id: $('#donation_form #id').val(),
            email: $('#donation_form #email').val()
        };
        inputs["data[_Token][key]"] = '<?= $csrfToken ?>';
        $.ajax({
            method: "POST",
            url: "<?= $this->Html->url(array('controller' => 'donation', 'action' => 'ajax_save_donation')) ?>",
            data: inputs
        })
            .done(function(data) {
                console.log(data);
                if(typeof data == "object"){
                    console.log(data);
                    $('#error_msg').html('' +
                        '<div class="alert alert-success">' +
                        '<?= $Lang->get("DONATION_SUCCESSFULY_EDITED") ?>' +
                        '</div>'
                    );
                    if(data.action == "add")
                        $("#donation_list tbody").append(
                            "<tr id=\"donation-" + data.id + "\">" +
                            "<th id=\"donation-" + data.id + "-id\">" + data.id + "</th>" +
                            "<td id=\"donation-" + data.id + "-elauk\">" + data.email + "</td>" +
                            "<td>" +
                            "<a href=\"#\" onclick=\"DONATION.editDonation(" + data.id + ");\" class=\"btn btn-info\"><?= $Lang->get('EDIT') ?></a>" +
                            "<a href=\"#\" onclick=\"DONATION.removeDonation(" + data.id + ");\" class=\"btn btn-danger\"><?= $Lang->get('DELETE') ?></a>" +
                            "</td>"+
                            "</tr>"
                        );
                    else{
                        $('#donation-' + data.id + "-id").text(data.id);
                        $('#donation-' + data.id + "-email").text(data.email);
                    }
                    $('#donation_modal').modal("hide");
                }
                else if(data == 0)
                    $('#modal_alert_msg').html('' +
                        '<div class="alert alert-error">' +
                        '<?= $Lang->get("DONATION_ERROR") ?>' +
                        '</div>'
                    );

            })
            .fail(function() {
                $('#modal_alert_msg').html('' +
                    '<div class="alert alert-error">' +
                    '<?= $Lang->get("DONATION_ERROR") ?>' +
                    '</div>'
                );
            })
            .always(function() {
            });
    };

    $('#donation_form').submit(DONATION.submitForm);
    $('#donation_modal').on('hide.bs.modal', function(event){
        $("#donation_form :input").each(function(){
            var input = $(this);
            input.val("");
        });
    });

</script>
