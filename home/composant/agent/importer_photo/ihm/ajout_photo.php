<form method="POST" action="index.php?demande=ajouter_photo_agent"  id="theForm"  role="form" class="form-horizontal form-groups-bordered" enctype='multipart/form-data'>
			
<table>
<tr>
					<input type="hidden" name="id" value=<?php echo $id; ?>>
					
					<td>Ajouter une photo de profil : </td><td> <input type="file" class="form-control" name="agentPhoto" id="field-file" placeholder="Placeholder">
</td><td><button type="submit"  class="btn btn-success btn-block btn-login">
				<i class="entypo-right-open-mini">Ajouter</i></td>
</tr></table>
			
</form>
					

							