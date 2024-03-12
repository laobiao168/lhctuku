<?php

namespace addons\ueditor;

use think\Addons;

/**
 * 百度Ueditor插件
 */
class Ueditor extends Addons
{

    /**
     * 插件安装方法
     * @return bool
     */
    public function install()
    {
        return true;
    }

    /**
     * 插件卸载方法
     * @return bool
     */
    public function uninstall()
    {
        return true;
    }

    /**
     * @param $params
     */
    public function configInit(&$params)
    {
        $config = $this->getConfig();
        $params['ueditor'] = ['classname' => $config['classname'] ?? '.editor'];
        $params['ueditor'] = ['baiduMapAk' => $config['baiduMapAk'] ?? ''];
    }
}
