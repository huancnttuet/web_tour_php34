
		<div class="content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="card">
							<div class="header">
								<h4 class="title">Danh sách các tour</h4>
								<p class="category">Here is a subtitle for this table</p>
							</div>
							<div class="content table-responsive table-full-width">
								<table class="table table-hover table-striped">
									<thead>
									<th>ID</th>
									<th>Tên tour</th>
									<th>Giá</th>
									<th>Hành trình</th>
									<th>Địa điểm</th>
									<th>Link ảnh</th>
									<th>Ngày tạo</th>
									<th>Ngày sửa</th>
									</thead>
									<tbody>
									<?php
									if(isset($data) && $data!=null){
										foreach ($data as $key => $r){
									?>
									<tr>
										<td> <?php echo $r->id_tour; ?></td>
										<td> <?php echo $r->tentour; ?></td>
										<td> <?php echo $r->gia; ?></td>
										<td> <?php echo $r->hanhtrinh; ?></td>
										<td> <?php echo $r->diadiem; ?></td>
										<td> <img class="img-thumbnail img-circle" src="<?php echo base_url() ?>/uploads/<?php echo $r->image; ?>"></td>
										<td> <?php echo $r->date_created; ?></td>
										<td> <?php echo $r->date_updated; ?></td>
										<td><a class="btn-danger btn" href="<?php echo base_url()?>admin/users?id=<?php echo $r->id_tour; ?>">Xóa</a></td>
										<td><a class="btn-info btn" href="<?php echo base_url()?>admin/users/add?id=<?php echo $r->id_tour; ?>">Sửa</a></td>
									</tr>
									<?php } }?>
									</tbody>
								</table>

							</div>
						</div>
					</div>

				</div>
			</div>
		</div>

		<style>
			.img-thumbnail{
				height: 180px;
				width: 180px;
			}
			.btn{
				color: #1f1d1d;
			}
		</style>






