<?php
namespace Msu\Model;
use Think\Model;
 
class WebMoneyModel extends Model
{
    protected $trueTableName = 'new_webmoney'; 
	protected $connection = array(
        'db_type'  => 'mysql',
        'db_user'  => 'msutest',
        'db_pwd'   => 'Unfw832dfnnm',
        'db_host'  => '192.168.253.4',
        'db_port'  => '3306',
        'db_name'  => 'msu',
        'db_charset' => 'GBK',
        'db_params' =>  array(), // 非必须
    );
}
?>