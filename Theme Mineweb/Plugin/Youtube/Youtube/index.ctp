<br><br><br>
<div class="container">
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Galerie de vidéos Youtube</h3>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-4">
                            </div>
                            <div class="col-md-4">
                                <div class="row">
                                    <iframe style="padding: 15px" src="<?= $video['Youtube']['url']; ?>" frameborder="0" allowfullscreen></iframe>
                                </div>
                            </div>
                            <div class="col-md-4">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="row">
                            <?php foreach ($videos as $v): ?>
                                <div class="col-md-4">
                                    <div class="row">
                                        <iframe style="padding: 15px" src="<?= $v['Youtube']['url']; ?>" frameborder="0" allowfullscreen></iframe>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>