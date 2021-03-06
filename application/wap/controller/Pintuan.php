<?php
/**
 * Pintuan.php
 * Niushop商城系统 - 团队十年电商经验汇集巨献!
 * =========================================================
 * Copy right 2015-2025 山西牛酷信息科技有限公司, 保留所有权利。
 * ----------------------------------------------
 * 官方网址: http://www.niushop.com.cn
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和使用。
 * 任何企业和个人不允许对程序代码以任何形式任何目的再发布。
 * =========================================================
 * @author : niuteam
 * @date : 2015.1.17
 * @version : v1.0.0.0
 */

namespace app\wap\controller;

/**
 * 拼团控制器
 */
class Pintuan extends Order
{
	/**
	 * 我的拼单
	 */
	public function lists()
	{
		$this->assign("title", "我的拼单");
		$this->assign("title_before", "我的拼单");
		return $this->view($this->style . 'pintuan/lists');
	}
	
	/**
	 * 拼团分享界面
	 */
	public function share()
	{
		$this->assign("title", "拼团分享");
		$this->assign("title_before", "拼团分享");
		$goods_id = request()->get("goods_id");
		$this->assign("goods_id", $goods_id);
		return $this->view($this->style . 'pintuan/share');
	}
}