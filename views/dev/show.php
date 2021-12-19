<ul>
<?php
use yii\helpers\Html;
use yii\widgets\LinkPager; ?>

<?php foreach ($categories as $cat): ?>
    <li>
        <?= Html::encode("{$cat->title} ({$cat->description})") ?>
    </li>
<?php endforeach; ?>
</ul>

