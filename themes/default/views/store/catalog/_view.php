<?php $productUrl = Yii::app()->createUrl('/store/catalog/show', ['name' => CHtml::encode($data->slug)]); ?>
<div class="col-sm-4 col-item-block">
    <div class="col-item">
        <div class="photo">
            <a href="<?= $productUrl; ?>">
                <img src="<?= $data->getImageUrl(190, 150); ?>"/>
            </a>
        </div>
        <div class="info separator">
            <div class="row">
                <div class="price col-sm-12">
                    <h5>
                        <a href="<?= $productUrl; ?>"><?= CHtml::encode($data->getName()); ?></a>
                    </h5>
                    <h5 class="price-text-color">
                        <?= $data->getResultPrice(); ?> <i class="fa fa-rub"></i>
                    </h5>
                </div>
            </div>
            <div class="separator clear-left">
                <?php if (Yii::app()->hasModule('cart')): ?>
                    <a href="#" class="btn btn-add btn-success btn-block hidden-sm quick-add-product-to-cart" data-product-id="<?= $data->id; ?>" data-cart-add-url="<?= Yii::app()->createUrl('/cart/cart/add');?>"><i class="glyphicon glyphicon-shopping-cart"></i></a>
                <?php endif; ?>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
