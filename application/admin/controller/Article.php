<?php

namespace app\admin\controller;

use app\common\controller\Backend;
use think\Config;

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

}