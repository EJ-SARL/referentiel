
<hr /><ol class="breadcrumb bc-3" >
	<li>
		<a href="?home"><i class="fa fa-home"></i>Home</a>
	</li>
	<li>
		<a href="?page=recuperer_agents">Projet</a>
	</li>
	<li class="active">
		<strong>Ajouter</strong>
	</li>
</ol>

<div class="row">
			
	<div class="col-md-12">
				
		<div class="panel panel-primary" data-collapsed="0">
				
			<div class="panel-heading">

				<div class="panel-title" style="text-align: center;v">
									
				</div>
								
				

			</div>
					
			<div class="panel-body">
						
				<form method="POST" action="index.php?demande=ajouter_projet"  id="theForm"  role="form" class="form-horizontal form-groups-bordered" enctype='multipart/form-data'>
			
					<div class="form-group">		
						<label class="col-sm-3 control-label" >Projet<abbr style="color:green; font-size:15px;">**</abbr></label>
							<div class="col-sm-5">
								<div class="input-group">
									<span class="input-group-addon"><i class="entypo-user"></i></span>
									<input type="text" name="projet" class="form-control" placeholder="Projet" required="required">
									<span class="input-group-addon"><i class="r"></i></span>
								</div>
							</div>
					</div>

				

					<div class="form-group">		
						
							<label class="col-sm-3 control-label">Description<abbr style="color:green; font-size:15px;">**</abbr></label>	
							
							<div class="col-sm-5">
							
								<textarea class="form-control wysihtml5" data-stylesheet-url="assets/css/wysihtml5-color.css" name="description" id="description"></textarea>
								
							</div>
							
					</div>

					<div class="form-group">
						<div class="col-sm-offset-3 col-sm-5">
							<button type="submit" onclick="validate()" class="btn btn-success btn-block btn-login">
					<i class="entypo-right-open-mini">Ajouter</i>
					</div>
					</div>
							
				</form>
						
			</div>
					
		</div>
			
	</div>
		
</div>	

<!-- Imported styles on this page -->
<link rel="stylesheet" href="assets/js/wysihtml5/bootstrap-wysihtml5.css">
	<link rel="stylesheet" href="assets/js/codemirror/lib/codemirror.css">
	<link rel="stylesheet" href="assets/js/uikit/css/uikit.min.css">
	<link rel="stylesheet" href="assets/js/uikit/addons/css/markdownarea.css">

	<!-- Bottom scripts (common) -->
	<script src="assets/js/gsap/TweenMax.min.js"></script>
	<script src="assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js"></script>
	<script src="assets/js/bootstrap.js"></script>
	<script src="assets/js/joinable.js"></script>
	<script src="assets/js/resizeable.js"></script>
	<script src="assets/js/neon-api.js"></script>
	<script src="assets/js/wysihtml5/wysihtml5-0.4.0pre.min.js"></script>


	<!-- Imported scripts on this page -->
	<script src="assets/js/wysihtml5/bootstrap-wysihtml5.js"></script>
	<script src="assets/js/ckeditor/ckeditor.js"></script>
	<script src="assets/js/ckeditor/adapters/jquery.js"></script>
	<script src="assets/js/uikit/js/uikit.min.js"></script>
	<script src="assets/js/codemirror/lib/codemirror.js"></script>
	<script src="assets/js/marked.js"></script>
	<script src="assets/js/uikit/addons/js/markdownarea.min.js"></script>
	<script src="assets/js/codemirror/mode/markdown/markdown.js"></script>
	<script src="assets/js/codemirror/addon/mode/overlay.js"></script>
	<script src="assets/js/codemirror/mode/xml/xml.js"></script>
	<script src="assets/js/codemirror/mode/gfm/gfm.js"></script>
	<script src="assets/js/icheck/icheck.min.js"></script>
	<script src="assets/js/neon-chat.js"></script>
