<?php

namespace app\admin\controller;


use app\common\controller\Backend;
use think\Config;
use editormd;

/**
 * 控制台
 *
 * @icon fa fa-markdown
 * @remark 用于展示当前系统中的统计数据、统计报表及重要实时数据
 */
class Article extends Backend
{

	/**
	 * 查看
	 */
	public function index()
	{
		return $this->view->fetch();
	}
	public function uploadImg(){
		
		$formats  = array(
			'image' => array('gif', 'jpg', 'jpeg', 'png', 'bmp')
		);

		if (isset($_FILES['editormd-image-file']))
		{        
			$file = $_FILES['editormd-image-file'];
			$date = date('Ymd');
			$savePath = ROOT_PATH .'public/uploads/'.$date . DIRECTORY_SEPARATOR;
			$saveURL = $_SERVER;
				echo '<pre>';
			var_dump($savePath);
			var_dump($saveURL);
			// var_dump($saveURL);
			exit();

			$imageUploader = new EditorMdUploader($savePath, $saveURL, $formats['image'], false);  // Ymdhis表示按日期生成文件名，利用date()函数
		
			$imageUploader->config(array(
				'maxSize' => 1024,        // 允许上传的最大文件大小，以KB为单位，默认值为1024
				'cover'   => true         // 是否覆盖同名文件，默认为true
			));
			
			if ($imageUploader->upload($name))
			{
				$imageUploader->message('上传成功！', 1);
			}
			else
			{
				$imageUploader->message('上传失败！', 0);
			}
		}
	}
}
