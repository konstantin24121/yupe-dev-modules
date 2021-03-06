<?php

use yupe\components\WebModule;

class CouponModule extends WebModule
{
    const VERSION = '0.9.7';

    public function getDependencies()
    {
        return ['cart'];
    }

    public function getEditableParams()
    {
        return [];
    }

    public function getNavigation()
    {
        return [
            [
                'icon' => 'fa fa-fw fa-list-alt',
                'label' => Yii::t('CouponModule.coupon', 'Coupons list'),
                'url' => ['/coupon/couponBackend/index']
            ],
            [
                'icon' => 'fa fa-fw fa-plus-square',
                'label' => Yii::t('CouponModule.coupon', 'Create coupon'),
                'url' => ['/coupon/couponBackend/create']
            ],

        ];
    }

    public function getAdminPageLink()
    {
        return '/coupon/couponBackend/index';
    }

    public function getVersion()
    {
        return self::VERSION;
    }

    public function getCategory()
    {
        return Yii::t('CouponModule.coupon', 'Store');
    }

    public function getName()
    {
        return Yii::t('CouponModule.coupon', 'Coupons');
    }

    public function getDescription()
    {
        return Yii::t('CouponModule.coupon', 'Store coupon module');
    }

    public function getAuthor()
    {
        return Yii::t('CouponModule.coupon', 'amylabs team');
    }

    public function getAuthorEmail()
    {
        return Yii::t('CouponModule.coupon', 'hello@amylabs.ru');
    }

    public function getUrl()
    {
        return 'http://amylabs.ru';
    }

    public function getIcon()
    {
        return 'fa fa-fw fa-tags';
    }

    public function init()
    {
        parent::init();

        $this->setImport(
            [
                'coupon.models.*',
            ]
        );
    }

    public function getAuthItems()
    {
        return [
            [
                'type' => AuthItem::TYPE_TASK,
                'name' => 'Coupon.CouponBackend.Management',
                'description' => Yii::t('CouponModule.coupon', 'Manage coupons'),
                'items' => [
                    [
                        'type' => AuthItem::TYPE_OPERATION,
                        'name' => 'Coupon.CouponBackend.Index',
                        'description' => Yii::t('CouponModule.coupon', 'Coupons list'),
                    ],
                    [
                        'type' => AuthItem::TYPE_OPERATION,
                        'name' => 'Coupon.CouponBackend.Create',
                        'description' => Yii::t('CouponModule.coupon', 'Create coupon'),
                    ],
                    [
                        'type' => AuthItem::TYPE_OPERATION,
                        'name' => 'Coupon.CouponBackend.Update',
                        'description' => Yii::t('CouponModule.coupon', 'Update coupon'),
                    ],
                    [
                        'type' => AuthItem::TYPE_OPERATION,
                        'name' => 'Coupon.CouponBackend.View',
                        'description' => Yii::t('CouponModule.coupon', 'View coupon'),
                    ],
                    [
                        'type' => AuthItem::TYPE_OPERATION,
                        'name' => 'Coupon.CouponBackend.Delete',
                        'description' => Yii::t('CouponModule.coupon', 'Delete coupon'),
                    ],
                ],
            ],
        ];
    }
}
