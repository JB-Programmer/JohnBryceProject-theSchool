<?php
/* TODO1 SHOW IMAGE AFTER SELECTING
 */
    include_once 'header.php';
?>


 <div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<form  method="get" action="../03controllers/coursesrouter.php" enctype="multipart/form-data">
				<div class="form-group">
					 
					<label for="coursename">
						Course Name
					</label>
					<input type="text" class="form-control" name="coursename" id="coursename" />
                </div>
                
				<div class="form-group">
					 
					<label for="coursedescription">
						Description
					</label>
					<input type="text"  class="form-control" name="coursedescription" id="coursedescription" />
				</div>


                <div class="form-group">
                    <label for="image_uploads">Choose images to upload (PNG, JPG)</label>
                    <input type="file" id="image_uploads" name="image_uploads" accept=".jpg, .jpeg, .png" multiple>
                    </div>
                    <div class="preview">
                    <p>No files currently selected for upload</p>
                    </div>
                <div>
  </div>
				<button type="submit" class="btn btn-default" name="addcourse">
					Submit
                </button>
               
			</form>
		</div>
	</div>
</div>

<?php
/* TODO1 SHOW IMAGE AFTER SELECTING
 */
    include_once 'footer.php';
?>
