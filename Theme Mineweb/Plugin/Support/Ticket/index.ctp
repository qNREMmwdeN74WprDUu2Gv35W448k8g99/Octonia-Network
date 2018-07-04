<div id="heading-breadcrumbs">
  <div class="container">
               <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown"><?= $Lang->get('SUPPORT') ?></h2>
            </div>
    <div class="row">
      <div class="col-md-8">
        <h1></h1>
      </div>
      <div class="col-md-4">
        <?php if($isConnected AND $Permissions->can('POST_TICKET')) { ?>
          <button data-toggle="modal" data-target="#post_ticket" style="margin-top:15px;" class="btn btn-template-main transparent btn-block"><icon class="fa fa-pencil-square-o"></icon> <?= $Lang->get('POST_A_TICKET') ?></button>
        <?php } ?>
        </br>
      </div>
    </div>
  </div>
</div>
<div id="content">
  <section>
    <div class="container">
      <div class="row">

        <div class="col-md-12" id="content-tickets">
          <?php if(!empty($tickets)) { ?>
            <?php foreach ($tickets as $key => $value) { ?>
              <?php if($Permissions->can('VIEW_TICKETS') AND $value['Ticket']['private'] == 0 OR $isConnected AND $user['isAdmin'] OR $isConnected AND $user['pseudo'] == $value['Ticket']['author'] OR $Permissions->can('VIEW_ALL_TICKETS')) { ?>
                  <!-- Un ticket -->
                  <div class="col-md-12" id="ticket-<?= $value['Ticket']['id'] ?>">
                    <div class="panel panel-primary">
                      <div class="panel-body">
                        <h3 class="support">
                          <?= $value['Ticket']['title'] ?> <?php if($value['Ticket']['state'] == 1) { echo '<icon style="color: green;" class="fa fa-check" title="'.$Lang->get('RESOLVED').'"></icon>'; } else { echo '<div style="display:inline-block;" id="ticket-state-'.$value['Ticket']['id'].'"><icon class="fa fa-times" style="color:red;" title="'.$Lang->get('UNRESOLVED').'"></icon></div>'; } ?>
                            <span class="pull-right"><small><?= $value['Ticket']['author']?></small></span>
                        </h3>
                        <img class="support" src="<?= $this->Html->url(array('controller' => 'API', 'action' => 'get_head_skin', 'plugin' => false, $value['Ticket']['author'], 80)) ?>" title="<?= $value['Ticket']['author'] ?>">
                        <div class="pull-right">
                          <?php if($isConnected AND $user['isAdmin'] OR $isConnected AND $user['pseudo'] == $value['Ticket']['author'] AND $Permissions->can('DELETE_HIS_TICKET') OR $Permissions->can('DELETE_ALL_TICKETS')) { ?>
                          <p><a id="<?= $value['Ticket']['id'] ?>" title="<?= $Lang->get('GLOBAL__DELETE') ?>" class="ticket-delete btn btn-danger btn-sm"><icon class="fa fa-times"></icon></a></p>
                          <?php } ?>
                          <?php if($value['Ticket']['state'] == 0) { ?>
                            <?php if($isConnected AND $user['isAdmin'] OR $isConnected AND $user['pseudo'] == $value['Ticket']['author'] AND $Permissions->can('RESOLVE_HIS_TICKET') OR $Permissions->can('RESOLVE_ALL_TICKETS')) { ?>
                            <p class="div-ticket-resolved-<?= $value['Ticket']['id'] ?>"><a id="<?= $value['Ticket']['id'] ?>" title="<?= $Lang->get('RESOLVED') ?>" class="ticket-resolved btn btn-success btn-sm"><icon style="font-size: 10px;" class="fa fa-check"></icon></a></p>
                            <?php } ?>
                        <?php } ?>
                        <?php if($Permissions->can('SHOW_TICKETS_ANWSERS')) { ?>
                            <p><button id="<?= $value['Ticket']['id'] ?>" title="<?= $Lang->get('SHOW_ANSWER') ?>" class="btn btn-info btn-sm dropdown_reply"><icon style="font-size: 10px;" class="fa fa-chevron-down"></icon></button></p>
                          <?php } ?>
                          <?php if($value['Ticket']['state'] == 0 AND $isConnected AND $user['isAdmin'] OR $isConnected AND $user['pseudo'] == $value['Ticket']['author'] AND $value['Ticket']['state'] == 0 AND $Permissions->can('REPLY_TO_HIS_TICKETS') OR $Permissions->can('REPLY_TO_ALL_TICKETS')) { ?>
                          <p><button id="<?= $value['Ticket']['id'] ?>" title="<?= $Lang->get('REPLY') ?>" class="btn btn-warning btn-sm ticket-reply"><icon class="fa fa-mail-reply" style="font-size: 10px;"></icon></button></p>
                        <?php } ?>
                      </div>
                        <p class="support"><?= $value['Ticket']['content'] ?></p>
                      </div>
                    </div>
                    <div class="reply reply_<?= $value['Ticket']['id'] ?>">
                      <!-- Une réponse -->
                      <?php if($Permissions->can('SHOW_TICKETS_ANWSERS')) { ?>
                        <?php foreach ($reply_tickets as $k => $v) { ?>
                          <?php if($v['ReplyTicket']['ticket_id'] == $value['Ticket']['id']) { ?>
                          <div id="ticket-reply-<?= $v['ReplyTicket']['id'] ?>">
                            <div class="line-support"></div>
                            <div class="col-md-11 reply-col">
                              <div class="panel panel-primary">
                                <div class="panel-body">
                                  <img class="support" src="<?= $this->Html->url(array('controller' => 'API', 'action' => 'get_head_skin/', 'plugin' => false)) ?>/<?= $v['ReplyTicket']['author']; ?>/50" title="<?= $v['ReplyTicket']['author']; ?>">
                                  <?php if($isConnected AND $user['isAdmin']) { ?>
                                  <div class="pull-right">
                                    <p><button id="<?= $v['ReplyTicket']['id'] ?>" title="<?= $Lang->get('GLOBAL__DELETE') ?>" class="btn btn-danger btn-sm reply-delete"><icon class="fa fa-times"></icon></button></p>
                                </div>
                                <?php } ?>
                                  <p class="support"><?= before_display($v['ReplyTicket']['reply']) ?></p>
                                </div>
                              </div>
                            </div>
                          </div>
                          <?php } ?>
                        <?php } ?>
                      <?php } ?>
                      <!-- - - - - -->
                    </div>
                  </div>
                  <!-- - - - - -->
                <?php } ?>
              <?php } ?>
            <?php } else {
              echo '<div class="alert alert-danger">'.$Lang->get('NO_TICKETS').'</div>';
            } ?>
          </div>

      </div>
    </div>
  </section>
</div>
<div class="modal fade" id="post_ticket" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span>&times;</span><span class="sr-only"><?= $Lang->get('GLOBAL__CLOSE') ?></span></button>
        <h4 class="modal-title"><?= $Lang->get('POST_A_TICKET') ?></h4>
      </div>
      <div class="modal-body">
        <form action="<?= $this->Html->url(array('action' => 'ajax_post')) ?>" class="form-horizontal" data-ajax="true" data-callback-function="afterPostTicket" data-success-msg="false">

          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label"><?= $Lang->get('GLOBAL__TITLE') ?></label>
            <div class="col-sm-10">
              <input type="text" name="title" class="form-control">
            </div>
          </div>

          <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label"><?= $Lang->get('PROBLEM') ?></label>
            <div class="col-sm-10">
              <textarea name="content" class="form-control" rows="3"></textarea>
            </div>
          </div>

          <div class="checkbox">
            <label>
              <input id="private" name="private" type="checkbox"> <?= $Lang->get('PRIVATE_TICKET') ?>
            </label>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" data-dismiss="modal" class="btn btn-default"><?= $Lang->get('GLOBAL__CLOSE') ?></button>
          <button type="submit" class="btn btn-primary"><?= $Lang->get('GLOBAL__SUBMIT') ?></button>
        </form>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="reply_ticket" tabindex="-1" role="dialog" aria-labelledby="reply_ticketLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only"><?= $Lang->get('GLOBAL__CLOSE') ?></span></button>
        <h4 class="modal-title" id="myModalLabel"><?= $Lang->get('REPLY_TO_TICKET') ?></h4>
      </div>
      <div class="modal-body">
        <div class="ticket-reply">Javascript désactiver ?</div>
        <div style="margin-right:490px;" class="line-support"></div>
        <form action="<?= $this->Html->url(array('action' => 'ajax_reply')) ?>" class="form-horizontal" data-ajax="true" data-callback-function="afterReplyTicket" data-success-msg="false">
          <input id="id_reply_form" type="hidden" name="id" value="ID">
          <textarea name="reply" class="form-control" rows="3" placeholder="<?= $Lang->get('YOUR_REPLY') ?>"></textarea>
      </div>
      <div class="modal-footer">
        <button type="button" data-dismiss="modal" class="btn btn-default"><?= $Lang->get('GLOBAL__CLOSE') ?></button>
        <button type="submit" class="btn btn-primary"><?= $Lang->get('GLOBAL__SUBMIT') ?></button>
       </form>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
  function afterPostTicket(request, response) {

    $('#post_ticket').modal('hide');

    var ticket = '<div class="col-md-12" id="ticket-'+response.id+'">';
      ticket += '<div class="panel panel-primary panel-ticket">';
        ticket += '<div class="panel-body">';
          ticket += '<h3 class="support">';
            ticket += request.title;
            ticket += '&nbsp;<div style="display:inline-block;" id="ticket-state-'+response.id+'">';
              ticket += '<icon class="fa fa-times" style="color:red;" title="<?= $Lang->get('UNRESOLVED') ?>"></icon>';
            ticket += '</div>';
          ticket += '</h3>';
          ticket += '<img class="support" src="<?= $this->Html->url(array('controller' => 'API', 'action' => 'get_head_skin', 'plugin' => false)) ?>/<?= $user['pseudo'] ?>/50" title="<?= $user['pseudo'] ?>">';
          ticket += '<p class="support">'+request.content+'</p>';
        ticket += '</div>';
      ticket += '</div>';
    ticket += '</div>';
    console.log(ticket);
    $("#content-tickets").prepend(ticket);

    var nbr_ticket = $('#nbr-ticket').html();
    nbr_ticket = parseInt(nbr_ticket);
    nbr_ticket = nbr_ticket + 1;
    $('#nbr-ticket').html(nbr_ticket);

    var nbr_ticket_unresolved = $('#nbr-ticket-unresolved').html();
    nbr_ticket_unresolved = parseInt(nbr_ticket_unresolved);
    nbr_ticket_unresolved = nbr_ticket_unresolved + 1;
    $('#nbr-ticket-unresolved').html(nbr_ticket_unresolved);

  }

  function afterReplyTicket(request, response) {

    $('#reply_ticket').modal('hide');
    /**
    * Dropdown reply
    **/
    $(".reply_"+request.id).slideToggle("slow");
    if($('.dropdown_reply #'+request.id).attr('class') == 'btn btn-info btn-sm dropdown_reply active') {
        $('.dropdown_reply #'+request.id).empty().html('<icon style="font-size: 10px;" class="fa fa-chevron-down"></icon>');
    } else {
        $('.dropdown_reply #'+request.id).empty().html('<icon style="font-size: 10px;" class="fa fa-chevron-up"></icon>');
    }
    $('.dropdown_reply #'+request.id).toggleClass('active');
    /**
    * end dropdown
    **/
    $('.reply.reply_'+request.id).append('<div class="line-support"></div><div class="col-md-11 reply-col"><div class="panel panel-default panel-support"><div class="panel-body"><img class="support" src="<?= $this->Html->url(array('controller' => 'API', 'action' => 'get_head_skin', 'plugin' => false)) ?>/<?= $user['pseudo']; ?>/50" title="<?= $user['pseudo']; ?>"><p class="support">'+request.reply+'</p></div></div></div>').slideDown(1000);

  }

  $(".ticket-delete").click(function() {

    var inputs = {};
    var id = inputs["id"] = $(this).attr("id");
    inputs["data[_Token][key]"] = '<?= $csrfToken ?>';

    $.post("<?= $this->Html->url(array('action' => 'ajax_delete')) ?>", inputs, function(data) {

      if(data == 'true') {

        $('#ticket-'+id).slideUp(1500); // je le supprime sur la page

        // Calcul pour le changement en temps réél des stats
          var nbr_ticket = $('#nbr-ticket').html();
          nbr_ticket = parseInt(nbr_ticket);
          nbr_ticket = nbr_ticket - 1;
          $('#nbr-ticket').html(nbr_ticket);

        if($('#ticket-state-'+id).html() == '<icon style="color: green;" class="fa fa-check" title="<?= $Lang->get('RESOLVED') ?>"></icon>') {
          var nbr_ticket_resolved = $('#nbr-ticket-resolved').html();
          nbr_ticket_resolved = parseInt(nbr_ticket_resolved);
          nbr_ticket_resolved = nbr_ticket_resolved - 1;
          $('#nbr-ticket-resolved').html(nbr_ticket_resolved);
        } else {
          var nbr_ticket_unresolved = $('#nbr-ticket-unresolved').html();
          nbr_ticket_unresolved = parseInt(nbr_ticket_unresolved);
          nbr_ticket_unresolved = nbr_ticket_unresolved - 1;
          $('#nbr-ticket-unresolved').html(nbr_ticket_unresolved);
        }

      } else {
        console.log(data);
        alert('Error!');
      }
    });
  });

  $(".dropdown_reply").click(function() {
    var id = $(this).attr("id");
    $(".reply_"+id).slideToggle("slow");
    if($(this).attr('class') == 'btn btn-info btn-sm dropdown_reply active') {
      $(this).empty().html('<icon style="font-size: 10px;" class="fa fa-chevron-down"></icon>');
    } else {
      $(this).empty().html('<icon style="font-size: 10px;" class="fa fa-chevron-up"></icon>');
    }
    $(this).toggleClass('active');
  });

  $(".ticket-resolved").click(function() {

    var inputs = {};
    var id = inputs["id"] = $(this).attr("id");
    inputs["data[_Token][key]"] = '<?= $csrfToken ?>';

    $.post("<?= $this->Html->url(array('action' => 'ajax_resolved')) ?>", inputs, function(data) {
      if(data == 'true') {
        $('#ticket-state-'+id).html('<icon style="color: green;" class="fa fa-check" title="<?= $Lang->get('RESOLVED') ?>"></icon>'); // je le passe en résolu sur la page
        // changement des stats en temps réél
        var nbr_ticket_resolved = $('#nbr-ticket-resolved').html();
        nbr_ticket_resolved = parseInt(nbr_ticket_resolved);
        nbr_ticket_resolved = nbr_ticket_resolved + 1;
        $('#nbr-ticket-resolved').html(nbr_ticket_resolved);
        var nbr_ticket_unresolved = $('#nbr-ticket-unresolved').html();
        nbr_ticket_unresolved = parseInt(nbr_ticket_unresolved);
        nbr_ticket_unresolved = nbr_ticket_unresolved - 1;
        $('#nbr-ticket-unresolved').html(nbr_ticket_unresolved);
        $('.div-ticket-resolved-'+id).remove();
        $('.ticket-reply #'+id).remove();
        // Fin des stats
      } else {
        console.log(data);
        alert('Error!');
      }
    });

  });

  $(".ticket-reply").click(function() {
    var id = $(this).attr("id");
    $('#reply_ticket').modal('toggle');
    var content = $('#ticket-'+id).html();
    $('.modal-body .ticket-reply').html(content);
    $('#reply_ticket .pull-right.support').remove();
    $('#reply_ticket .reply_'+id).remove();
    $('#id_reply_form').val(id);
  });

  $(".reply-delete").click(function() {

    var inputs = {};
    var id = inputs["id"] = $(this).attr("id");
    inputs["data[_Token][key]"] = '<?= $csrfToken ?>';

    $.post("<?= $this->Html->url(array('action' => 'ajax_reply_delete')) ?>", inputs, function(data) {
      if(data == 'true') {
        $('#ticket-reply-'+id).slideUp(1500);
      } else {
        alert('Error!');
        console.log(data);
      }
    });
  });
</script>
