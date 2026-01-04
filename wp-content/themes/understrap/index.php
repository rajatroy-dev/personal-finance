<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();

$container = get_theme_mod('understrap_container_type');
?>

<?php if (is_front_page() && is_home()) : ?>
	<?php get_template_part('global-templates/hero'); ?>
<?php endif; ?>

<div class="wrapper" id="index-wrapper">

	<div class="<?php echo esc_attr($container); ?>" id="content" tabindex="-1">

		<section class="my-4">
			<ul class="nav nav-tabs" id="myTab" role="tablist">
				<li class="nav-item" role="presentation">
					<button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane"
						type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Investments</button>
				</li>
				<li class="nav-item" role="presentation">
					<button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane"
						type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Savings</button>
				</li>
			</ul>
			<div class="tab-content" id="myTabContent">
				<div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab"
					tabindex="0">

					<section class="my-4">
						<div class="accordion" id="accordionExample">
							<div class="accordion-item">
								<h2 class="accordion-header">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
										data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
										Review Recurring Investments
									</button>
								</h2>
								<div id="collapseOne" class="accordion-collapse collapse"
									data-bs-parent="#accordionExample">
									<div class="accordion-body">

										<div class="d-flex justify-content-evenly my-1">
											<a href="#" class="btn btn-success flex-grow-1 me-2">APPROVE</a>
											<a href="#" class="btn btn-danger flex-grow-1 ms-2">REJECT</a>
										</div>

										<div class="table-responsive">
											<table class="table">
												<thead>
													<tr>
														<th scope="col">#</th>
														<th scope="col">Investment</th>
														<th scope="col">Amount</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<th scope="row">1</th>
														<td>Car</td>
														<td>₹10,000.00</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>

					<div class="d-flex justify-content-end my-3">
						<a href="#" class="btn btn-primary w-100">VIEW IN DETAILS</a>
					</div>

					<div class="table-responsive my-3">
						<table class="table">
							<thead>
								<tr>
									<th scope="col">Record</th>
									<th scope="col">Balance</th>
									<th scope="col">Credit</th>
									<th scope="col">Debit</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th scope="row">1</th>
									<td>₹10,000.00</td>
									<td>₹10,000.00</td>
									<td>₹10,000.00</td>
								</tr>
								<tr>
									<th scope="row">2</th>
									<td>₹10,000.00</td>
									<td>₹10,000.00</td>
									<td>₹10,000.00</td>
								</tr>
								<tr>
									<th scope="row">3</th>
									<td>₹10,000.00</td>
									<td>₹10,000.00</td>
									<td>₹10,000.00</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>

				<div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab"
					tabindex="0">

					<section class="my-4">
						<div class="accordion" id="accordionExample">
							<div class="accordion-item">
								<h2 class="accordion-header">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
										data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseOne">
										Review Recurring Savings
									</button>
								</h2>
								<div id="collapseTwo" class="accordion-collapse collapse"
									data-bs-parent="#accordionExample">
									<div class="accordion-body">

										<div class="d-flex justify-content-evenly my-1">
											<a href="#" class="btn btn-success flex-grow-1 me-2">APPROVE</a>
											<a href="#" class="btn btn-danger flex-grow-1 ms-2">REJECT</a>
										</div>

										<div class="table-responsive">
											<table class="table">
												<thead>
													<tr>
														<th scope="col">#</th>
														<th scope="col">Saving</th>
														<th scope="col">Amount</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<th scope="row">1</th>
														<td>Car</td>
														<td>₹10,000.00</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>

					<div class="d-flex justify-content-end my-3">
						<a href="#" class="btn btn-primary w-100">VIEW IN DETAILS</a>
					</div>

					<div class="table-responsive my-3">
						<table class="table">
							<thead>
								<tr>
									<th scope="col">Record</th>
									<th scope="col">Balance</th>
									<th scope="col">Credit</th>
									<th scope="col">Debit</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th scope="row">1</th>
									<td>₹10,000.00</td>
									<td>₹10,000.00</td>
									<td>₹10,000.00</td>
								</tr>
								<tr>
									<th scope="row">2</th>
									<td>₹10,000.00</td>
									<td>₹10,000.00</td>
									<td>₹10,000.00</td>
								</tr>
								<tr>
									<th scope="row">3</th>
									<td>₹10,000.00</td>
									<td>₹10,000.00</td>
									<td>₹10,000.00</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</section>

	</div><!-- #content -->

</div><!-- #index-wrapper -->

<?php
get_footer();
