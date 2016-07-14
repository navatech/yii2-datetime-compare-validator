<?php
/**
 * @link      https://github.com/nepstor/yii2-datetime-compare-validator
 * @copyright Copyright (c) 2014 Nikita Krytskiy
 * @license   http://opensource.org/licenses/BSD-3-Clause
 */
namespace navatech\validators\assets;

use yii\web\AssetBundle;

/**
 * Asset bundle provides the javascript files for client validation.
 * @author Nepstor <nepstor_j@mail.ru>
 */
class DateTimeCompareValidatorAsset extends AssetBundle {

	/**
	 * @inheritdoc
	 */
	public $sourcePath = '@vendor/navatech/yii2-datetime-compare-validator/src/web';

	/**
	 * @inheritdoc
	 */
	public $publishOptions = ['forceCopy' => YII_DEBUG];

	/**
	 * @inheritdoc
	 */
	public $js = [
		'js/datetime-compare-validator.js',
	];

	/**
	 * @inheritdoc
	 */
	public $depends = [
		'yii\validators\ValidationAsset',
		'navatech\validators\assets\MomentJsAsset',
	];
}