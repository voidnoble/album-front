<?php foreach($albums as $album): ?>
<div class="item col-xs-4 col-sm-3 col-md-3 col-lg-3">
    <a href="/<?=$album->id?>" class="thumbnail">
        <img alt="<?=$album->name?>" src="/data/albums/<?=substr($album->cover_image, 0, 4)?>/<?=substr($album->cover_image, 4, 2)?>/<?=substr($album->cover_image, 6, 2)?>/thumb/<?=$album->cover_image?>">
        <div class="caption">
            <h4><?=$album->name?></h4>
            <!--
            <p><?=$album->description?></p>
            <p><?=count($album->Photos)?> 건</p>
            <p><?=date("Y-m-d h:i", strtotime($album->created_at))?></p>
            -->
        </div>
    </a>
</div>
<?php endforeach; ?>