<?php
/**
 * Template Name: Course Page
 */

get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="entry-header">
                    <h1 class="entry-title">Courses at JCU Singapore</h1>
                </header><!-- .entry-header -->

                <div class="entry-content">
                    <?php
                    $courses = [
                        [
                            'name' => 'Accounting',
                            'description' => 'Description for Course One.',
                            'contact' => 'Professor A'
                        ],
                        [
                            'name' => 'Business',
                            'description' => 'Description for Course Two.',
                            'contact' => 'Professor B'
                        ],
                        [
                            'name' => 'Early Childhood Education',
                            'description' => 'Description for Course Two.',
                            'contact' => 'Professor B'
                        ],                        [
                            'name' => 'Environmental Science',
                            'description' => 'Description for Course Two.',
                            'contact' => 'Professor B'
                        ],
                        [
                            'name' => 'Games Design',
                            'description' => 'Description for Course Two.',
                            'contact' => 'Professor B'
                        ],                        [
                            'name' => 'Information Technology',
                            'description' => 'Description for Course Two.',
                            'contact' => 'Professor B'
                        ],                        [
                            'name' => 'Psychology',
                            'description' => 'Description for Course Two.',
                            'contact' => 'Professor B'
                        ],                        [
                            'name' => 'Hospitality and Tourism Management',
                            'description' => 'Description for Course Two.',
                            'contact' => 'Professor B'
                        ],
                        [
                            'name' => 'Science',
                            'description' => 'Description for Course Two.',
                            'contact' => 'Professor B'
                        ],                        [
                    ];

                    foreach ($courses as $course): ?>
                        <div class="course">
                            <h2><?php echo $course['name']; ?></h2>
                            <p><?php echo $course['description']; ?></p>
                            <p>Contact: <?php echo $course['contact']; ?></p>
                        </div>
                    <?php endforeach; ?>
                </div><!-- .entry-content -->

            </article><!-- #post-## -->

        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_sidebar();
get_footer();
