 <div id="page-footer" class="container-fluid">
	      <div class="container">
	        <div class="row">
	          <div class="col-md-6">
	            <p>Address Line 1</p>
	            <p>Address Line 2</p>
	            <p>London</p>
	            <p>555-555-8888</p>
	            <?php $year = date("Y"); ?>
		        <p><?php printf(__('&copy Eleanor Tetlow %d', 'needletherapy'), $year); ?></p>
	          </div> <!-- /.col -->
	          <div class="col-md-6"> 
	            <form>
	              <div class="form-group">
	                <label for="exampleInputEmail1">Mailing List</label>
	                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
	              </div>
	              <button type="submit" class="btn btn-default">Sign up</button>
	            </form>
	            <div>
	              <span class="glyphicon glyphicon-globe" aria-hidden="true"></span>
	            </div>
	          </div> <!-- /.col -->
	        </div> <!-- /.row -->
	      </div> <!-- /.container -->
	    </div> <!-- /.container-fluid #footer -->
	</div> <!-- /#main -->
	<?php wp_footer(); ?>
  </body>
</html>