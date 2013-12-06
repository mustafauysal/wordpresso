<?php get_header(); ?>

<ol class="Sections">

	<li id="kim" class="Section SectionCover">
		<?php get_section('Cover'); ?>
	</li>
	<!-- /#blog/.Section/.SectionCover -->


	<li id="blog" class="Section SectionBlog">
		<?php  get_section('Blog'); ?>
	</li>
	<!-- /#blog/.Section/.SectionBlog -->


	<li id="lab" class="Section SectionLab">
		<?php  get_section('Lab'); ?>
	</li>
	<!-- /#lab/.Section/.SectionLab -->


	<li id="activity" class="Section SectionActivity">
		<?php  get_section('Activity'); ?>
	</li>
	<!-- /#lab/.Section/.SectionActivity -->

</ol>

<?php get_footer(); ?>