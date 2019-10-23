<!-- Mobile menu modal -->
<div class="modal fade right" id="navbarModal" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-full modal-dialog-centered" role="document"> 
		<div class="modal-content">
			<div class="modal-header"> 
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span class="navbar-toggler-icon modal-close"><i class="material-icons">close</i></span>
				</button>
			</div> <!-- modal header -->
			<div class="modal-body p-4" id="modal-menu">
					<div class="navbarModal" id="navbarNavModal">
						<?php
							$args = array(
							'theme_location' => 'mobile',
							'depth'      => 2,
							'container'  => false,
							'menu_class'     => 'navbar-nav-modal',
							'walker'     => new Bootstrap_Walker_Nav_Menu()
							);
							if (has_nav_menu('primary')) {
							wp_nav_menu($args);
							}
						?>
					</div>  <!-- navbar -->
				</div> <!-- modal body -->
				<img class="barquito_modal" src="/wp-content/themes/iberbrandwp/img/barquito.svg" alt="barquito IBERBRAND"/>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				</div> <!-- modal footer -->
			</div> <!-- modal content -->
		</div> <!-- modal dialog -->
	</div> <!-- modal -->
<!-- Mobile menu modal END -->

