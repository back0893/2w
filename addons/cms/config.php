<?php

return [
    [
        'name'    => 'sitename',
        'title'   => '站点名称',
        'type'    => 'string',
        'content' => [
        ],
        'value'   => '我的CMS网站',
        'rule'    => 'required',
        'msg'     => '',
        'tip'     => '',
        'ok'      => '',
        'extend'  => ''
    ],
    [
        //配置唯一标识
        'name'    => 'theme',
        //显示的标题
        'title'   => '皮肤',
        //类型
        'type'    => 'string',
        //数据字典
        'content' => [
        ],
        //值
        'value'   => 'default',
        //验证规则 
        'rule'    => 'required',
        //错误消息
        'msg'     => '',
        //提示消息
        'tip'     => '',
        //成功消息
        'ok'      => '',
        //扩展信息
        'extend'  => ''
    ],
    [
        //配置唯一标识
        'name'    => 'qrcode',
        //显示的标题
        'title'   => '公众号二维码',
        //类型
        'type'    => 'image',
        //数据字典
        'content' => [
        ],
        //值
        'value'   => '/assets/addons/cms/img/qrcode.png',
        //验证规则 
        'rule'    => '',
        //错误消息
        'msg'     => '',
        //提示消息
        'tip'     => '',
        //成功消息
        'ok'      => '',
        //扩展信息
        'extend'  => ''
    ],
    [
        //配置唯一标识
        'name'    => 'default_archives_img',
        //显示的标题
        'title'   => '默认图片',
        //类型
        'type'    => 'image',
        //数据字典
        'content' => [
        ],
        //值
        'value'   => '/assets/addons/cms/img/noimage.jpg',
        //验证规则 
        'rule'    => '',
        //错误消息
        'msg'     => '',
        //提示消息
        'tip'     => '',
        //成功消息
        'ok'      => '',
        //扩展信息
        'extend'  => ''
    ],
    [
        //配置唯一标识
        'name'    => 'default_channel_img',
        //显示的标题
        'title'   => '默认图片',
        //类型
        'type'    => 'image',
        //数据字典
        'content' => [
        ],
        //值
        'value'   => '/assets/addons/cms/img/noimage.jpg',
        //验证规则 
        'rule'    => '',
        //错误消息
        'msg'     => '',
        //提示消息
        'tip'     => '',
        //成功消息
        'ok'      => '',
        //扩展信息
        'extend'  => ''
    ],
    [
        'name'    => 'rewrite',
        'title'   => '伪静态',
        'type'    => 'array',
        'content' => [],
        'value'   => [
            'index/index'    => '/cms/$',
            'channel/index'  => '/cms/c/[:diyname]',
            'tags/index'     => '/cms/t/[:name]',
            'archives/index' => '/cms/a/[:diyname]',
            'page/index'     => '/cms/p/[:diyname]',
            'search/index'   => '/cms/s',
        ],
        'rule'    => 'required',
        'msg'     => '',
        'tip'     => '',
        'ok'      => '',
        'extend'  => ''
    ],
];
