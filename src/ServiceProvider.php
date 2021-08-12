<?php

namespace Edwin\DcatFileManager;

use Dcat\Admin\Extend\ServiceProvider as DcatServiceProvider;
use Dcat\Admin\Admin;
use Dcat\Admin\Form;
use Edwin\DcatFileManager\Form\Field;

class ServiceProvider extends DcatServiceProvider
{
	protected $js = [
        'js/index.js',
    ];
	protected $css = [
		'css/index.css',
	];

	public function register()
	{
		//
	}

	public function init()
	{
		parent::init();

        // 视图
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'edwin-file-manager');

        // 加载插件
        Admin::booting(function () {
            Form::extend('libfile', Field\LibFile::class);
            Form::extend('libimage', Field\LibImage::class);
        });
	}
}
