<?php
/**
 * 役職マスタ管理
 *
 */
require_once(DIR_APP . "/class/common/dbaccess/Position.php");
class _position_index extends PostAndGetScene
{
	// パラメータ
	var $_edit_type='';	// 登録or修正
	var $_id;			// 登録修正処理ID
	var $_error_flg;	// 登録修正結果

	var $position_list;		// 部署マスタリスト
	var $position_type;		// 部署タイプ

	function check()
	{
		// 権限が無い場合は工数入力画面に強制遷移
		if (!checkAuthPostManagement($_SESSION['manhour']['member']['auth_lv'],$_SESSION['manhour']['member']['post']))
		{
			MCWEB_Util::redirectAction("/input/index/");
		}
	}

	function task(MCWEB_InterfaceSceneOutputVars $access)
	{
		$obj_position		= new Position();
		// 部署マスタ情報取得取得
		$this->position_list = $obj_position->getDataAll(true);	// 削除済み含む
	}
}
?>