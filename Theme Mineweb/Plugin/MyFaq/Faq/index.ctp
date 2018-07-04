<div class="container">

    <div class="panel">
        <div class="container">

<div class="section-header">
                <h2 class="section-title text-center wow fadeInDown"><?= $Lang->get("FAQ") ?></h2>
            </div>

        </div>
        <div class="panel-body">

                <?= (empty($faqs)) ? "<p>Aucune FAQ pour le moment</p>" : ""?>
                


                <?php foreach($faqs as $k=>$v): $v = current($v); ?>


                <div class="tab-pane active in fade" id="faq1-cat-<?= $v['id'] ?>">

                    <div class="panel-group" id="accordion-cat-<?= $v['id'] ?>">




                                <a data-toggle="collapse" data-parent="#accordion-cat-1" href="#collapse-<?= $v['id'] ?>">

                                    <h4 class="panel-title">

                                        <?= $v['question'] ?>

                                        <span class="pull-right"><i class="glyphicon glyphicon-plus"></i></span>

                                    </h4>

                                </a>


                            <div id="collapse-<?= $v['id'] ?>" class="panel-collapse collapse">

                                <div class="panel-body">
                                    <?= $v['answer'] ?>
                                </div>

                            </div>


 
                        </div>
        </div>    

                <?php endforeach; ?>
          


</div>
</div>
</div>
