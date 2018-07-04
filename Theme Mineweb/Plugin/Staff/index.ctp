<div id="content">
  <section class="bar background-white">
    <div class="container vote">
  	  <div class="row">
  		  <div class="col-md-12">
  		    <div class="col-md-12">
  		        <div class="heading text-center">
  		            <h2><?= $Lang->get("STAFF") ?></h2>
  		        </div>
  		            <div class="row">
					    <?= (empty($staffs)) ? "<p>Aucun Staff pour le moment</p>" : ""?>
                        <?php foreach($staffs as $k=>$v): $v = current($v); ?>
                            <div class="col-md-6 col-sm-6">
  		                        <div class="box-image-text blog">
  		                            <div class="content">
  		                                <h4><?= $v['user'] ?> - <?= $v['rank'] ?></h4>
  		                                <img src="https://visage.surgeplay.com/bust/144/<?= $v['user'] ?>" alt="" width="144" height="144" /><br />
  		                                <p class="author-category"><?= $v['description'] ?></p>
  		                            </div>
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

<section class="content-block default-bg">
    <div class="container">
        <div class="section-title">
            <h2>Staff</h2>
            <div class="line"></div>
            <p>l'&eacute;quipe de mod&eacute;ration de skill .</p>
        </div>
        <div class="row">
            <div style="text-align:center;">
                <div class="col-xs-6 col-sm-6 col-md-4">
                    <div class="person">
                        <div class="image">
                            <img alt="image" src="https://minotar.net/avatar/Skill_DuTigre/460.png">
                        </div>
                        <div class="text">
                            <h4 class="name">pseudo</h4>
                            <span>Fondateur</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>