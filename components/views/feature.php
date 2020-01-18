<?php
use yii\helpers\Html;
?>
<?php if (!empty($hits)): ?>
    <div class="features_items"><!--features_items-->
        <h2 class="title text-center">Features Items</h2>
        <?php foreach ($hits as $hit): ?>
            <div class="col-sm-4">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <?= Html::img("@web/images/products/{$hit->img}", ['alt'=>$hit->name])?>
                            <h2>$<?= $hit->price ?></h2>
                            <p class="features_items_name"><?= $hit->name ?></p>
                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>
                        <div class="product-overlay">
                            <div class="overlay-content">
                                <h2>$<?= $hit->price ?></h2>
                                <p><?= $hit->name ?></p>
                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                            </div>
                            <?php if ($hit->new): ?>
                                <?=Html::img("@web/images/home/new.png", ['alt' => 'Новинка', 'class' => 'new']) ?>
                            <?php elseif ($hit->sale): ?>
                                <?=Html::img("@web/images/home/sale.png", ['alt' => 'Скидка', 'class' => 'new']) ?>
                            <?php else: echo ''?>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="choose">
                        <ul class="nav nav-pills nav-justified">
                            <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                            <li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div><!--features_items-->
<?php endif; ?>
