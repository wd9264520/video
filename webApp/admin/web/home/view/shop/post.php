<extend file='master'/>
<block name="content">
	<form action="" method="post" class="form-horizontal">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">商铺设置</h3>
			</div>
			<div class="panel-body">
				<div class="form-group">
					<label class="col-sm-2 control-label">店铺名称</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" name="title" value="{{$field['title']}}">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">联系电话</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" name="tel" value="{{$field['tel']}}">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">店铺图片</label>
					<div class="col-sm-8">
						<div class="input-group">
							<input type="text" class="form-control" name="thumb" readonly=""  value="{{$field['thumb']}}">
							<div class="input-group-btn">
								<button onclick="upImage(this)" class="btn btn-default" type="button">选择图片</button>
							</div>
						</div>
						<div class="input-group" style="margin-top:5px;">
							<img src="{{$field['thumb']}}" class="img-responsive img-thumbnail" width="150">
							<em class="close" style="position:absolute; top: 0px; right: -14px;" title="删除这张图片" onclick="removeImg(this)">×</em>
						</div>
					</div>

					<script>
						//上传图片
						function upImage(obj) {
							require(['util'], function (util) {
								options = {
									multiple: false,//是否允许多图上传
									data:'',
									hash:1
									//hash为确定上传文件标识（可以以用户编号，标识为此用户上传的文件，系统使用这个字段值来显示文件列表），data为数据表中的data字段值，开发者根据业务需要自行添加
								};
								util.image(function (images) {             //上传成功的图片，数组类型 
									$("[name='thumb']").val(images[0]);
									$(".img-thumbnail").attr('src', images[0]);
								}, options)
							});
						}

						//移除图片 
						function removeImg(obj) {
							$(obj).prev('img').attr('src', 'resource/images/nopic.jpg');
							$(obj).parent().prev().find('input').val('');
						}
					</script>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">店铺介绍</label>
					<div class="col-sm-8">
						<textarea id="container" name="content" style="height:300px;width:100%;">{{$field['content']}}</textarea>
						<script>
							util.ueditor('container', {hash:2,data:'hd'}, function (editor) {
								//这是回调函数 editor是百度编辑器实例
							});
						</script>
					</div>
				</div>
			</div>
		</div>
		<button type="submit" class="btn btn-primary">保存</button>
	</form>
</block>