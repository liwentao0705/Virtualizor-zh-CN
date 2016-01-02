<?php

//////////////////////////////////////////////////////////////
//===========================================================
// backup_lang.php
//===========================================================
// SOFTACULOUS VIRTUALIZOR
// Version : 1.0
// Inspired by the DESIRE to be the BEST OF ALL
// ----------------------------------------------------------
// Started by: Alons
// Date:       8th Mar 2010
// Time:       23:00 hrs
// Site:       http://www.virtualizor.com/ (SOFTACULOUS VIRTUALIZOR)
// ----------------------------------------------------------
// Please Read the Terms of use at http://www.virtualizor.com
// ----------------------------------------------------------
//===========================================================
// (c)Softaculous Ltd.
//===========================================================
//////////////////////////////////////////////////////////////

if(!defined('VIRTUALIZOR')){
	
	die('Hacking Attempt');
	
}

$l['err_backup'] = '创建备份时出错';
$l['err_restore'] = '同时恢复VPS时出错';
$l['err_deletevpsbackup'] = '删除VPS备份时出错';

$l['<title>'] = '备份';
$l['page_head'] = '备份';
$l['done'] = '该VPS备份进程已经启动。请您稍等几分钟。备份完成后您将收到电子邮件通知。';
$l['done_restore'] = '该VPS恢复过程已经开始。请您稍等几分钟。恢复完成后您将收到电子邮件通知';
$l['done_deletevpsbackup'] = '该VPS备份删除过程已经完成。您将收到一封电子邮件通知';
$l['cbackup'] = '创建备份';
$l['restore'] = '恢复VPS';
$l['conf_cbackup'] = '您是否确定要创建备份 ?';
$l['conf_restore'] = '您是否确定要通过最新的备份恢复 ?';
$l['conf_del_backup'] = '您是否确定要删除备份 ?';
$l['backup_exp'] = '在这里，您可以创建你的VPS备份，也从旧的备份恢复。';
$l['backupnotify'] = '备份 VPS 中 ...';
$l['restorenotify'] = '恢复 VPS 中...';
$l['del_backupnotify'] = "删除 VPS 中...";
$l['del_backup'] = '删除备份';

$l['backup_email_subject'] = '成功创建VPS备份';
$l['restore_email_subject'] = '成功恢复VPS';
$l['deletevpsbackup_email_subject'] = '成功删除VPS备份';

$l['deletevpsbackup_email_body_start'] = '您的VPS上的删除进程 : [';
$l['backup_email_body_start'] = '您的VPS上的备份进程 : [ ';
$l['restore_email_body_start'] = '您的VPS上的恢复进程 : [';

$l['backup_email_body_end'] = ' ] 已经成功完成.
您将在VPS控制面板日志中浏览通知。

Regards,
{{sn}}';


?>
