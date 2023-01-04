<?php
if(!defined('SOURCES')) die("Error");

/* Kiểm tra active search */
if(isset($config['search']))
{
	$arrCheck = array();
	$actCheck = '';
	if($act=='search_static' || $act=='save_static' || $act=='save-watermark' || $act=='preview-watermark') $actCheck = 'search_static';
	else $actCheck = 'man_search';
	foreach($config['search'][$actCheck] as $k => $v) $arrCheck[] = $k;
	if(!count($arrCheck) || !in_array($type,$arrCheck)) $func->transfer("Trang không tồn tại", "index.php", false);
}
else
{
	$func->transfer("Trang không tồn tại", "index.php", false);
}

switch($act)
{
	/* searchs */
	case "man_search":
	get_searchs();
	$template = "search/man/searchs";
	break;
	case "add_search":
	$template = "search/man/search_add";
	break;
	case "edit_search":
	get_search();
	$template = "search/man/search_edit";
	break;
	case "save_search":
	save_search();
	break;
	case "delete_search":
	delete_search();
	break;

	default:
	$template = "404";
}
/* Get search */
function get_searchs()
{
	global $d, $func, $curPage, $items, $paging, $type;

	$per_page = 10;
	$startpoint = ($curPage * $per_page) - $per_page;
	$limit = " limit ".$startpoint.",".$per_page;
	$sql = "select * from #_search where type = ? order by stt,id desc $limit";
	$items = $d->rawQuery($sql,array($type));
	$sqlNum = "select count(*) as 'num' from #_search where type = ? order by stt,id desc";
	$count = $d->rawQueryOne($sqlNum,array($type));
	$total = $count['num'];
	$url = "index.php?com=search&act=man_search&type=".$type;
	$paging = $func->pagination($total,$per_page,$curPage,$url);
}

/* Edit search */
function get_search()
{
	global $d, $func, $curPage, $item, $list_cat, $type;
	
	$id = (isset($_GET['id'])) ? htmlspecialchars($_GET['id']) : 0;

	if(!$id) $func->transfer("Không nhận được dữ liệu", "index.php?com=search&act=man_search&type=".$type."&p=".$curPage, false);

	$item = $d->rawQueryOne("select * from #_search where id = ? and type = ? limit 0,1",array($id,$type));

	if(!$item['id']) $func->transfer("Dữ liệu không có thực", "index.php?com=search&act=man_search&type=".$type."&p=".$curPage, false);
}

/* Save search */
function save_search()
{
	global $d, $func, $curPage, $config, $type;

	if(empty($_POST)) $func->transfer("Không nhận được dữ liệu", "index.php?com=search&act=man_search&type=".$type."&p=".$curPage, false);

	/* Post dữ liệu */
	$data = (isset($_POST['data'])) ? $_POST['data'] : null;
	$dataMultiTemp = (isset($_POST['dataMulti'])) ? $_POST['dataMulti'] : null;
	if($data)
	{
		foreach($data as $column => $value)
		{
			$data[$column] = htmlspecialchars($value);
		}
	}

	$id = (isset($_POST['id'])) ? htmlspecialchars($_POST['id']) : 0;
	$data['min'] = (isset($data['min']) && $data['min'] != '') ? str_replace(",","",$data['min']) : 0;
	$data['max'] = (isset($data['max']) && $data['max'] != '') ? str_replace(",","",$data['max']) : 0;
	$data['tygia'] = (isset($data['tygia']) && $data['tygia'] != '') ? str_replace(",","",$data['tygia']) : 0;
	if($id)
	{
		$data['hienthi'] = (isset($data['hienthi'])) ? 1 : 0;
		$d->where('id', $id);
		$d->where('type', $type);
		if($d->update('search',$data)) $func->transfer("Cập nhật dữ liệu thành công", "index.php?com=search&act=man_search&type=".$type."&p=".$curPage);
		else $func->transfer("Cập nhật dữ liệu bị lỗi", "index.php?com=search&act=man_search&type=".$type."&p=".$curPage, false);
	}
	else
	{
		$numbersearch = (isset($config['search']['man_search'][$type]['number_search'])) ? $config['search']['man_search'][$type]['number_search'] : 0;

		if($numbersearch && $dataMultiTemp)
		{
			$success = 0;

			for($i=0;$i<count($dataMultiTemp);$i++)
			{
				$success_tieude = 0;
				$dataMulti = $dataMultiTemp[$i];
				$dataMulti['hienthi'] = (isset($dataMultiTemp[$i]['hienthi'])) ? 1 : 0;
				$dataMulti['min'] = (isset($dataMulti['min']) && $dataMulti['min'] != '') ? str_replace(",","",$dataMulti['min']) : 0;
				$dataMulti['max'] = (isset($dataMulti['max']) && $dataMulti['max'] != '') ? str_replace(",","",$dataMulti['max']) : 0;
				$dataMulti['tygia'] = (isset($dataMulti['tygia']) && $dataMulti['tygia'] != '') ? str_replace(",","",$dataMulti['tygia']) : 0;
				$dataMulti['type'] = $type;


				if(isset($config['search']['man_search'][$type]['tieude_search']) && $config['search']['man_search'][$type]['tieude_search'] == true)
				{
					if(!empty($dataMulti['tenvi']))
					{
						$success_tieude = 1;
					}
					
				}
				if($success_tieude)


				{
					if($d->insert('search',$dataMulti))
					{
						$success = 1;
					}
					else
					{
						$func->transfer("Lưu dữ liệu bị lỗi", "index.php?com=search&act=man_search&type=".$type."&p=".$curPage, false);
					}
				}
			}

			if($success == 0)
			{
				$func->transfer("Lưu dữ liệu bị lỗi", "index.php?com=search&act=man_search&type=".$type."&p=".$curPage, false);
			}
			else
			{
				$func->transfer("Lưu dữ liệu thành công", "index.php?com=search&act=man_search&type=".$type."&p=".$curPage);
			}
		}
		$func->transfer("Dữ liệu rỗng", "index.php?com=search&act=man_search&type=".$type."&p=".$curPage, false);
	}
}

/* Delete search */
function delete_search()
{
	global $d, $func, $curPage, $type;
	
	$id = (isset($_GET['id'])) ? htmlspecialchars($_GET['id']) : 0;

	if($id)
	{
		$row = $d->rawQueryOne("select id from #_search where id = ? and type = ? limit 0,1",array($id,$type));

		if(isset($row['id']) && $row['id'] > 0)
		{
			$func->delete_file(UPLOAD_search.$row['search']);
			$d->rawQuery("delete from #_search where id = ? and type = ?",array($id,$type));
			$func->transfer("Xóa dữ liệu thành công", "index.php?com=search&act=man_search&type=".$type."&p=".$curPage);
		}
		else $func->transfer("Xóa dữ liệu bị lỗi", "index.php?com=search&act=man_search&type=".$type."&p=".$curPage, false);
	}
	
	else $func->transfer("Không nhận được dữ liệu", "index.php?com=search&act=man_search&type=".$type."&p=".$curPage, false);
}
?>