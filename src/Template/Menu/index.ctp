<section class="content">
	<div class="row panel-header panel-action">
		<button type="button" id="add-new" class="btn btn-primary btn-same-width" onclick="createProduct()">Thêm mới</button>
		<button type="button" id="refresh" class="btn btn-primary btn-same-width">Tải lại</button>
	</div>
	<div class="row tbl-top">
		<div class="box-body">
			<h3><?= __('Danh sách Menu') ?></h3>
			<table class="table table-bordered table-hover tbl-dislay" id="listProduct">
				<thead class="table-bg-header text-centers">
					<tr class="text-bold">
						<th class="hidden">ID</th>
						<th class="text-center">Tên</th>
						<th class="text-center">Icon</th>
						<th class="text-center">Link</th>
						<th class="text-center">Cấp cha</th>
						<th class="col-delete text-center"></th>
						<th class="col-delete text-center"></th>
					</tr>
				</thead>
				<tbody>
                    <?php foreach ($menu as $itm): ?>
                    <tr>
						<td class="hidden"><?= $this->Number->format($itm->id) ?></td>
						<td><?= h($itm->name) ?></td>
						<td class="col-icon"><i class="<?= h($itm->Icon) ?>"></i></td>
						<td><?= h($itm->link) ?></td>
						<td><?= $this->Number->format($itm->parentid) ?></td>
						<td class="col-delete text-center">
							<button type="button" id="btnDelete" class="btn btn-danger btn-xs">
								<span class="glyphicon glyphicon-trash">							
							</button>
						</td>
						<td class="col-delete text-center">
							<button type="button" id="btnEdit" class="btn btn-primary btn-xs">
								<span class="glyphicon glyphicon-pencil"></span>
							</button>
						</td>
					</tr>
                    <?php endforeach; ?>
            		</tbody>
			</table>
		</div>
	</div>
</section>

<div class="modal fade" id="prodcutDetail">
	<div class="modal-dialog modal-lg modal-width-cus">
		<div class="modal-content">
			<div class="modal-header">
				<a href="#" class="close" data-dismiss="modal">&times;</a>
				<h4>Product Detail</h4>
			</div>
			<form id="newProduct">
				<div class="modal-body"></div>
				<div class="modal-footer">
					<button type="reset" class="btn btn-default" data-dismiss="modal">Đóng</button>
					<button id="saveOrder" type="submit" class="btn btn-primary">Lưu</button>
				</div>
			</form>
		</div>
	</div>
</div>