<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Astra
 * @since 1.0.0
 */

?>
<?php astra_entry_before(); ?>
<article
<?php
		echo wp_kses_post(
			astra_attr(
				'article-page',
				array(
					'id'    => 'post-' . get_the_id(),
					'class' => join( ' ', get_post_class() ),
				)
			)
		);
		?>
>
	<?php astra_entry_top(); ?>
	<body style="margin:0; font-family: Arial, Helvetica, sans-serif; background: linear-gradient(120deg,#f5f7fb,#eef6ff); display:flex; align-items:center; justify-content:center; min-height:100vh;">

  <!-- Card container -->
  <section style="background:#ffffff; width:90%; max-width:900px; border-radius:12px; box-shadow:0 6px 18px rgba(20,30,60,0.12); padding:28px; display:flex; gap:24px; align-items:center;">

    <!-- Avatar -->
    <div style="flex:0 0 140px; text-align:center;">
      <img alt="Rohit Ray Danuwar" src="<?php echo get_template_directory_uri();?>/image.jpg"
           style="width:120px; height:120px; border-radius:50%; object-fit:cover; display:block; margin:0 auto 12px; border:4px solid #e6f0ff;" />
      <div style="font-size:13px; color:#657487;">Engineering Student</div>
    </div>

    <!-- Main info -->
    <div style="flex:1;">
      <h1 style="margin:0 0 8px; font-size:24px; color:#0b2540;">Rohit Ray Danuwar</h1>
      <p style="margin:0 0 16px; color:#415566; line-height:1.45;">
        Hi — I'm <strong>Rohit Ray Danuwar</strong>, an Engineering student passionate about software development, data analysis, and building practical solutions.
        I enjoy converting ideas into working projects, learning new tools and algorithms, and collaborating on real-world problems.
      </p>

      <!-- Quick stats / skills -->
      <div style="display:flex; gap:12px; flex-wrap:wrap; margin-bottom:16px;">
        <span style="font-size:13px; background:#eef6ff; color:#0b2540; padding:6px 10px; border-radius:999px;">HTML &amp; CSS</span>
        <span style="font-size:13px; background:#fff7ec; color:#6a3e00; padding:6px 10px; border-radius:999px;">JavaScript</span>
        <span style="font-size:13px; background:#f3f7ec; color:#2f4d1f; padding:6px 10px; border-radius:999px;">Python</span>
        <span style="font-size:13px; background:#f0eefb; color:#2d2370; padding:6px 10px; border-radius:999px;">Data Analysis</span>
      </div>

      <!-- About / Goals -->
      <div style="display:flex; gap:18px; align-items:flex-start; flex-wrap:wrap;">
        <div style="flex:1; min-width:220px;">
          <h3 style="margin:0 0 8px; font-size:16px; color:#0b2540;">About me</h3>
          <p style="margin:0; color:#556777; font-size:14px; line-height:1.45;">
            Currently studying engineering, I'm focused on practical programming, digital systems and data-driven projects. I like to solve problems using clean code and simple, maintainable designs.
          </p>
        </div>

        <div style="flex:0 0 200px; min-width:180px;">
          <h3 style="margin:0 0 8px; font-size:16px; color:#0b2540;">Goals</h3>
          <ul style="margin:0; padding-left:18px; color:#556777; font-size:14px; line-height:1.5;">
            <li>Build full-stack web projects.</li>
            <li>Learn machine learning fundamentals.</li>
            <li>Contribute to open-source.</li>
          </ul>
        </div>
      </div>

      <!-- Contact -->
      <div style="margin-top:18px; display:flex; gap:12px; align-items:center; flex-wrap:wrap;">
        <a href="mailto:your.email@example.com" style="text-decoration:none; font-size:14px; padding:10px 14px; border-radius:8px; border:1px solid rgba(11,37,64,0.08); display:inline-block; color:#0b2540;">Email</a>
        <a href="#" style="text-decoration:none; font-size:14px; padding:10px 14px; border-radius:8px; border:1px solid rgba(11,37,64,0.08); display:inline-block; color:#0b2540;">Portfolio</a>
        <a href="#" style="text-decoration:none; font-size:14px; padding:10px 14px; border-radius:8px; border:1px solid rgba(11,37,64,0.08); display:inline-block; color:#0b2540;">LinkedIn</a>
      </div>
    </div>

  </section>

</body>
	<?php astra_entry_content_single_page(); ?>

	<?php
		astra_edit_post_link(
			sprintf(
				/* translators: %s: Name of current post */
				esc_html__( 'Edit %s', 'astra' ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			),
			'<footer class="entry-footer"><span class="edit-link">',
			'</span></footer><!-- .entry-footer -->'
		);
		?>

	<?php astra_entry_bottom(); ?>

</article><!-- #post-## -->

<?php astra_entry_after(); ?>
