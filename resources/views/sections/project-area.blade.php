<section id="project-area" class="project-area solid-bg">
	<div class="container">
		<div class="row text-center">
			<div class="col-lg-12">
				<h2 class="section-title">Багаторічне виробництво</h2>
				<h3 class="section-sub-title">Наші продукти</h3>
			</div>
		</div>
		<!--/ Title row end -->

		@include('sections.projects_grid', ['categories' => $categories, 'products' => $products, 'show_all_button' => true])
	</div>
	<!--/ Container end -->
</section><!-- Project area end -->