			<div class="row expanded" id="footer">
				<div class="small-12 medium-4 columns">
					<ul class="sidebar menu vertical text-left">
					<?php if ( ! dynamic_sidebar('footer1') ) : ?>
						<li>{static sidebar item 1}</li>
					<?php endif; ?>
					</ul>
				</div>
				<div class="small-12 medium-4 columns">
					<ul class="sidebar menu vertical text-left">
					<?php if ( ! dynamic_sidebar('footer2') ) : ?>
						<li>{static sidebar item 1}</li>
					<?php endif; ?>
					</ul>
				</div>
				<div class="small-12 medium-4 columns">
					<ul class="sidebar menu vertical text-left">
					<?php if ( ! dynamic_sidebar('footer3') ) : ?>
						<li>{static sidebar item 1}</li>
					<?php endif; ?>
					</ul>
				</div>
				<div class="small-12 columns">
					<p>&copy; <?php echo date('Y'); ?> <?php bloginfo('title'); ?>. Registered Office: 10 Redchurch Street, London E2 7DD</p>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="reveal" id="searchForm" data-reveal data-animation-in="slide-in-up" data-animation-out="slide-out-down">
	<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
		<span class="screen-reader-text"><h3>Search for:</h3></span>
		<div class="input-group">
			<input type="search" class="input-group-field" placeholder="Search …" value="" name="s" title="Search for:" />
			<div class="input-group-button">
				<input type="submit" class="button" value="Search" />
			</div>
		</div>
	</form>
	<button class="close-button" data-close aria-label="Close modal" type="button"><span aria-hidden="true">&times;</span></button>
</div>

<?php wp_footer(); ?>

</body>
</html>