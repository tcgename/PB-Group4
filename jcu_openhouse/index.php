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

<?php
echo "<div class='f-banner'><img src='images/nbanner.jpg'></div>
<div class='weizhi'>Your position：<a href='index.php'>Home</a> > Height light</div>
<div class='HL'>
	<h2>Our Teaching Philosophy</h2>
	<p>Our approach to education is rooted in developing a deep understanding of mathematics and science principles, which serves as a strong foundation for our students. Through personalized worksheets and assessments, our students are able to apply this understanding and gain confidence in their abilities, enabling them to excel and reach the pinnacle of academic success.</p>
	<h2>Nurturing a Love for Learning</h2>
	<p>We have been helping ours students to achieve success in their educational journey and in their lives by nurturing a love for learning.</p>
</div>";
?>
<?php
echo "<div class='f-banner'><img src='images/nbanner.jpg'></div>
<div class='HL'>
	<h2>Preparing Students to Achieve Success</h2>
	<p>Raising confident and successful learners since 2018. Our students are at the center of everything we do here at Baizonn and their well-being and success in learning is at our hearts. And while we educate our students, we also equip them with the right knowledge, skills and attitude to help them solve problems, think big and seek excellence.</p>
	<h2>Passionate Teachers that Make a Difference</h2>
	<p>Our teachers motivate and nurture every student to achieve their best and to build the right attitudes to develop a love for learning. We hire teachers with a passion for teaching and the qualifications and experience to create an amazing classroom environment for their students.</p>
</div>";
?>

<?php
get_sidebar();
get_footer();
