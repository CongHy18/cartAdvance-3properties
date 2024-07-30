<div class="photoUpload-zone">
	<div class="photoUpload-detail" id="photo3Upload-preview">
		<?=$func->getImage(['class' => 'rounded', 'size-error' => '350x350x1', 'upload' => $photo3Detail['upload'], 'image' => $photo3Detail['image'], 'alt' => 'Alt Photo'])?>
	</div>
	<label class="photoUpload-file" id="photo3-zone" for="file3-zone">
		<input type="file" name="file3" id="file3-zone">
		<i class="fas fa-cloud-upload-alt"></i>
		<p class="photoUpload-drop">Kéo và thả hình vào đây</p>
		<p class="photoUpload-or">hoặc</p>
		<p class="photoUpload-choose btn btn-sm bg-gradient-success">Chọn hình</p>
	</label>
	<div class="photoUpload-dimension"><?=$photo3Detail['dimension']?></div>
</div>