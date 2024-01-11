<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package JCU_Openhouse
 */

 get_header();
 ?>
 
 <div id="primary" class="content-area">
	 <main id="main" class="site-main">
 
		 <h1>James Cook University Open House</h1>
		 <h2>Welcome to James Cook University!</h2>
		 <p>At James Cook University (JCU), we are a vibrant community that strives for excellence and innovation. Since our founding in 1970, we have been committed to providing world-class education and research opportunities, particularly in the areas of health, environment and economics in the tropics. James Cook University also offers a wide range of academic and non-academic facilities and services for students, including libraries, housing, athletic facilities, financial aid and/or scholarships, study abroad and exchange programmes, online courses and distance learning opportunities, and administrative services.</p>
		 
		 <section class="f-banner">
			 <img src="<?php echo get_template_directory_uri(); ?>/images/nbanner.jpg" alt="Banner Image">
		 </section>
		 <section class="HL">
			 <h2>University Snapshot</h2>
 
			 <h2>Fields of Study / Degree Levels</h2>
			 <p>There are six major fields of study and four degree levels. From the lowest undergraduate degree to the highest postgraduate degree. The matrix is designed to help quickly determine the academic scope and degree levels at James Cook University.</p>
 
			 <h2>Programs and Courses</h2>
			 <p>Arts and Humanities, Languages and Cultures, Business and Social Sciences, Medicine and Health, Science and Technology, and Engineering.</p>
		 </section>
 
		 <!-- Section 1 -->
		 <section class="f-banner">
			 <img src="<?php echo get_template_directory_uri(); ?>/images/nbanner.jpg" alt="Banner Image">
		 </section>
		 <section class="HL">
			 <h2>Our Teaching Philosophy</h2>
			 <p>Our approach to education is rooted in developing a deep understanding of mathematics and science principles, which serves as a strong foundation for our students. Through personalized worksheets and assessments, our students are able to apply this understanding and gain confidence in their abilities, enabling them to excel and reach the pinnacle of academic success.</p>
 
			 <h2>Nurturing a Love for Learning</h2>
			 <p>We have been helping our students to achieve success in their educational journey and in their lives by nurturing a love for learning.</p>
		 </section>
 
		 <!-- Section 2 -->
		 <section class="f-banner">
			 <img src="<?php echo get_template_directory_uri(); ?>/images/nbanner.jpg" alt="Banner Image">
		 </section>
		 <section class="HL">
			 <h2>Preparing Students to Achieve Success</h2>
			 <p>Raising confident and successful learners since 2018. Our students are at the center of everything we do here at Baizonn, and their well-being and success in learning are at our hearts. And while we educate our students, we also equip them with the right knowledge, skills, and attitude to help them solve problems, think big, and seek excellence.</p>
 
			 <h2>Passionate Teachers that Make a Difference</h2>
			 <p>Our teachers motivate and nurture every student to achieve their best and to build the right attitudes to develop a love for learning. We hire teachers with a passion for teaching and the qualifications and experience to create an amazing classroom environment for their students.</p>
		 </section>
 
	 </main><!-- #main -->
 </div><!-- #primary -->

 <section class="team-members">
     <div class="container">
         <h2>Team Members</h2>
         
         <!-- Image 1 -->
         <div class="team-member">
             <img src="<?php echo get_template_directory_uri(); ?>/images/Xinmeng.jpg" alt="Xinmeng Yang">
             <p>John Doe</p>
         </div>

         <!-- Image 2 -->
         <div class="team-member">
             <img src="<?php echo get_template_directory_uri(); ?>/images/logo_main.png" alt="Team Member 2">
             <p>Jane Smith</p>
         </div>

         <!-- Image 3 -->
         <div class="team-member">
             <img src="<?php echo get_template_directory_uri(); ?>/images/logo_main.png" alt="Team Member 3">
             <p>Bob Johnson</p>
         </div>

         <!-- Image 4 -->
         <div class="team-member">
             <img src="<?php echo get_template_directory_uri(); ?>/images/logo_main.png" alt="Team Member 4">
             <p>Alice Brown</p>
         </div>
     </div><!-- .container -->
 </section><!-- .team-members -->
 
 <?php
 get_footer();
 ?>
