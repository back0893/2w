<?php

namespace addons\cms\controller;
use think\addons\Controller;

/**
 * CMS控制器基类
 */
class Base extends Controller
{

    // 初始化
    public function __construct()
    {
        parent::__construct();
        $config = get_addon_config('cms');
        $this->view->engine->config('view_path', $this->view->engine->config('view_path') . $config['theme'] . DS);
        $this->view->engine->config('taglib_pre_load', 'addons\cms\taglib\Cms');
        $config['indexurl'] = addon_url('cms/index/index');
    }

    protected function _initialize()
    {
        parent::_initialize();
        $action = $this->request->post("action");
        if ($action && $this->request->isPost())
        {
            return $this->$action();
        }
    }

}
