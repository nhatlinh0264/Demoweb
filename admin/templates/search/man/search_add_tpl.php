<?php
$linkMan = "index.php?com=search&act=man_search&type=".$type."&p=".$curPage;
$linkSave = "index.php?com=search&act=save_search&type=".$type."&p=".$curPage;
?>
<!-- Content Header -->
<section class="content-header text-sm">
	<div class="container-fluid">
		<div class="row">
			<ol class="breadcrumb float-sm-left">
				<li class="breadcrumb-item"><a href="index.php" title="Bảng điều khiển">Bảng điều khiển</a></li>
				<li class="breadcrumb-item"><a href="<?=$linkMan?>" title="<?=$config['search']['man_search'][$type]['title_main_search']?>">Quản lý <?=$config['search']['man_search'][$type]['title_main_search']?></a></li>


				<li class="breadcrumb-item active">Thêm mới <?=$config['search']['man_search'][$type]['title_main_search']?></li>
			</ol>
		</div>
	</div>
</section>
<!-- Main content -->
<section class="content">
	<form method="post" action="<?=$linkSave?>" enctype="multipart/form-data">
		<div class="card-footer text-sm sticky-top">
			<button type="submit" class="btn btn-sm bg-gradient-primary"><i class="far fa-save mr-2"></i>Lưu</button>
			<button type="reset" class="btn btn-sm bg-gradient-secondary"><i class="fas fa-redo mr-2"></i>Làm lại</button>
			<a class="btn btn-sm bg-gradient-danger" href="<?=$linkMan?>" title="Thoát"><i class="fas fa-sign-out-alt mr-2"></i>Thoát</a>
		</div>
		<?php $numbersearch = (isset($config['search']['man_search'][$type]['number_search'])) ? $config['search']['man_search'][$type]['number_search'] : 0; ?>
		<?php for($i=0;$i<$numbersearch;$i++) { $stt = $i+1; ?>
			<div class="card card-primary card-outline text-sm">
				<div class="card-header">
					<h3 class="card-title"><?=$config['search']['man_search'][$type]['title_main_search'].": ".$stt?></h3>
					<div class="card-tools">
						<button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
					</div>
				</div>
				<div class="card-body">
					
					<?php if(
						(isset($config['search']['man_search'][$type]['tieude_search']) && $config['search']['man_search'][$type]['tieude_search'] == true)) { ?>
							<div class="card card-primary card-outline card-outline-tabs">
								<div class="card-header p-0 border-bottom-0">
									<ul class="nav nav-tabs" id="custom-tabs-three-tab-lang" role="tablist">
										<?php foreach($config['website']['lang'] as $k => $v) { ?>
											<li class="nav-item">
												<a class="nav-link <?=($k=='vi')?'active':''?>" id="tabs-lang" data-toggle="pill" href="#tabs-lang-<?=$k?>-<?=$i?>" role="tab" aria-controls="tabs-lang-<?=$k?>-<?=$i?>" aria-selected="true"><?=$v?></a>
											</li>
										<?php } ?>
									</ul>
								</div>
								<div class="card-body">
									<div class="tab-content" id="custom-tabs-three-tabContent-lang">
										<?php foreach($config['website']['lang'] as $k => $v) { ?>
											<div class="tab-pane fade show <?=($k=='vi')?'active':''?>" id="tabs-lang-<?=$k?>-<?=$i?>" role="tabpanel" aria-labelledby="tabs-lang">
												<?php if((isset($config['search']['man_search'][$type]['tieude_search']) && $config['search']['man_search'][$type]['tieude_search'] == true)) { ?>
													<div class="form-group">
														<label for="ten<?=$k?><?=$i?>">Tiêu đề (<?=$k?>):</label>
														<input type="text" class="form-control" name="dataMulti[<?=$i?>][ten<?=$k?>]" id="ten<?=$k?><?=$i?>" placeholder="Tiêu đề (<?=$k?>)">
													</div>
												<?php } ?>
											</div>
										<?php } ?>
									</div>
									<?php if(isset($config['search']['man_search'][$type]['min_search']) && $config['search']['man_search'][$type]['min_search'] == true) { ?>
										<div class="form-group">
											<label for="min<?=$i?>">Min:</label>
											<input type="text" class="form-control format-price" name="dataMulti[<?=$i?>][min]" id="min<?=$i?>" placeholder="Min">
											
										</div>
									<?php } ?>

									<?php if(isset($config['search']['man_search'][$type]['max_search']) && $config['search']['man_search'][$type]['max_search'] == true) { ?>
										<div class="form-group">
											<label for="max<?=$i?>">Max:</label>
											<input type="text" class="form-control format-price" name="dataMulti[<?=$i?>][max]" id="max<?=$i?>" placeholder="Max">
											
										</div>
									<?php } ?>

									<?php if(isset($config['search']['man_search'][$type]['tygia_search']) && $config['search']['man_search'][$type]['tygia_search'] == true) { ?>
										<div class="form-group">
											<label for="tygia<?=$i?>">Tỷ giá:</label>
											<input type="text" class="form-control format-price" name="dataMulti[<?=$i?>][tygia]" id="tygia<?=$i?>" placeholder="Tỷ giá">
											
										</div>
									<?php } ?>

									<div class="form-group">
										<label for="hienthi<?=$i?>" class="d-inline-block align-middle mb-0 mr-2">Hiển thị:</label>
										<div class="custom-control custom-checkbox d-inline-block align-middle">
											<input type="checkbox" class="custom-control-input hienthi-checkbox" name="dataMulti[<?=$i?>][hienthi]" id="hienthi-checkbox<?=$i?>" checked>
											<label for="hienthi-checkbox<?=$i?>" class="custom-control-label"></label>
										</div>
									</div>
									<div class="form-group">
										<label for="stt<?=$i?>" class="d-inline-block align-middle mb-0 mr-2">Số thứ tự:</label>
										<input type="number" class="form-control form-control-mini d-inline-block align-middle" min="0" name="dataMulti[<?=$i?>][stt]" id="stt<?=$i?>" placeholder="Số thứ tự" value="1">
									</div>
								</div>
							</div>
						<?php } ?>
					</div>
				</div>
			<?php } ?>
			<div class="card-footer text-sm">
				<button type="submit" class="btn btn-sm bg-gradient-primary"><i class="far fa-save mr-2"></i>Lưu</button>
				<button type="reset" class="btn btn-sm bg-gradient-secondary"><i class="fas fa-redo mr-2"></i>Làm lại</button>
				<a class="btn btn-sm bg-gradient-danger" href="<?=$linkMan?>" title="Thoát"><i class="fas fa-sign-out-alt mr-2"></i>Thoát</a>
			</div>
		</form>
	</section>