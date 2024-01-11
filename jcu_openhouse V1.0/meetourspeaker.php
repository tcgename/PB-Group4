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

<div class="container">
    <h1>Meet Our Speakers</h1>

    <!-- Speaker 1 -->
    <div class="speaker">
        <div class="speaker-image">
            <img src="<?php echo get_template_directory_uri(); ?>/images/staff-carla.jpg" alt="Ms. Carla Bridge">
            <h2 class="speaker-title">Ms. Carla Bridge</h2>
            <p>Head of Department, Foundation Program</p>
            <p>Ms. Carla trained as a teacher in New Zealand before moving to South Korea to teach English. Since then, she has taught in both tertiary and business contexts in China, Vietnam, and Japan. She has regularly been involved in curriculum develop and design, as well as teacher support and training. Her main teaching focus is Academic Literacies and critical thinking.</p>
        </div>
        <div class="speaker-info">
            <div class="session-info">
                <p><strong>Day 1: Charting Your Education Beyond O Levels</strong></p>
                <p>Date: January 15th, 2024 (Monday)</p>
                <p>Time: 7:00 PM – 8:00 PM SGT (Virtual)</p>
            </div>
            <ul class="details-list">
                <li>Join us as we kickstart Day 1 with an informative session by Ms. Carla Bridge on the Pre-University Foundation Program, which provides an alternative pathway to tertiary education to students who have yet to meet the entry requirements to a bachelor’s degree.</li>
                <li>In this session, you will:</li>
                <li>– Understand the learning outcomes of our foundation programs.</li>
                <li>– Explore the diverse degree pathways after the foundation program.</li>
                <li>– Engage with Ms. Carla in a live Q&A session.</li>
                <li>– Hear from our students about their learning experience at JCU.</li>
            </ul>
        </div>
    </div>

    <!-- Speaker 2: Dr. Ai Ni Teoh -->
    <div class="speaker">
        <div class="speaker-image">
            <img src="<?php echo get_template_directory_uri(); ?>/images/teoh-ai-ni.jpg" alt="Dr. Ai Ni Teoh">
            <h2 class="speaker-title">Dr. Ai Ni Teoh</h2>
            <p>Academic Head, Social and Health Sciences | Senior Lecturer, Psychology</p>
            <p>Dr. Ai Ni received her Master of Social Sciences (By Research) degree from National University of Singapore and her Doctor of Philosophy (Health and Social Psychology) degree at North Dakota State University, USA. Dr. Ai Ni is also a researcher in health and social psychology. Her research focuses mainly on psychological and cardiovascular responses to stress.</p>
        </div>
        <div class="speaker-info">
            <div class="session-info">
                <p><strong>Day 2: Navigating the Pathways in Psychology</strong></p>
                <p>Date: January 16th, 2024 (Tuesday)</p>
                <p>Time: 7:00 PM – 8:00 PM SGT (Virtual)</p>
            </div>
            <ul class="details-list">
                <li>Join us in an informative session by Dr. Ai Ni Teoh on the various undergraduate and postgraduate programs offered by the JCU Singapore School of Social and Health Sciences.</li>
                <li>In this session, you will:</li>
                <li>– Learn about the course structure of the psychology programs offered.</li>
                <li>– Discover the pathway to becoming a clinical psychologist.</li>
                <li>– Explore other career options in psychology, including business, counselling, and research.</li>
                <li>– Understand the importance of an accreditation by the Australian Psychology Accreditation Council (APAC) in ensuring the quality and recognition of your degree.</li>
                <li>– Engage with Dr. Ai Ni in a live Q&A session.</li>
                <li>– Hear from our students about their learning experience at JCU.</li>
            </ul>
        </div>
    </div>

    <!-- Speaker 3: Dr. K Thirumaran -->
    <div class="speaker">
        <div class="speaker-image">
            <img src="<?php echo get_template_directory_uri(); ?>/images/thiru.jpg" alt="Dr. K Thirumaran">
            <h2 class="speaker-title">Dr. K Thirumaran</h2>
            <p>Academic Head, Business | Associate Professor, Business</p>
            <p>Dr. Thirumaran received his Master of Arts degree from University of Wisconsin-Madison, USA, and his Doctor of Philosophy degree at National University of Singapore. He is in a team of talented scholars and lecturers specializing in Business, Tourism, Environmental Science, IT and Aquaculture and Urban Planning and Design. His teaching specialization is in tourism. His students can expect very engaging and active learning sessions.</p>
        </div>
        <div class="speaker-info">
            <div class="session-info">
                <p><strong>Day 3: Exploring Opportunities in Business Horizons</strong></p>
                <p>Date: January 17th, 2024 (Wednesday)</p>
                <p>Time: 7:00 PM – 8:00 PM SGT (Virtual)</p>
            </div>
            <ul class="details-list">
                <li>Join us in an informative session by Dr. K Thirumaran and discover the wide range of undergraduate and postgraduate business courses offered by the JCU Singapore Business School.</li>
                <li>In this session, you will:</li>
                <li>– Learn about the course structure of the business programs offered.</li>
                <li>– Explore the various industry-relevant business and commerce majors and the dynamic career possibilities they offer.</li>
                <li>– Discover how the work-integrated learning subject prepares you to succeed in the real business landscape.</li>
                <li>– Understand the importance of an accreditation by The Association to Advance Collegiate Schools of Business (AACSB) in ensuring the quality and recognition of your degree.</li>
                <li>– Engage with Dr. Thirumaran in a live Q&A session.</li>
                <li>– Hear from our students about their learning experience at JCU.</li>
            </ul>
        </div>
    </div>

    <!-- Speaker 4: Dr. Neil Hutchinson -->
    <div class="speaker">
        <div class="speaker-image">
            <img src="<?php echo get_template_directory_uri(); ?>/images/neil.jpg" alt="Dr. Neil Hutchinson">
            <h2 class="speaker-title">Dr. Neil Hutchinson</h2>
            <p>Senior Lecturer, Environmental Science</p>
            <p>Dr. Neil received his Doctor of Philosophy degree in Marine Ecology at The University of Hong Kong. His research interests lie in the area of marine community ecology. During his career, he has worked at a wide range of institutions including universities, government research laboratories, and NGOs, providing research and information to a variety of stakeholders.</p>
        </div>
        <div class="speaker-info">
            <div class="session-info">
                <p><strong>Day 4: Dive into the World of Environmental Science and Aquaculture</strong></p>
                <p>Date: January 18th, 2024 (Thursday)</p>
                <p>Time: 7:00 PM – 8:00 PM SGT (Virtual)</p>
            </div>
            <ul class="details-list">
                <li>Do you have a passion for the environment or aquatic life?</li>
                <li>If you do, this might be the ideal time to turn that passion into a meaningful career!</li>
                <li>With a growing understanding of the environmental impacts of business operations, and an escalating demand for sustainable food sources due to factors like climate change affecting the global food supply, professionals with comprehensive knowledge of environmental science and aquaculture become especially valuable to contribute to The Singapore Green Plan 2030.</li>
                <li>Join us in an informative session by Dr. Neil Hutchinson and discover how the environmental science and aquaculture programs at the JCU Singapore School of Science and Technology can equip you with the skills essential to build a sustainable future within this context.</li>
                <li>In this session, you will:</li>
                <li>– Understand the concept of environmental science and aquaculture and the roles they play in building a sustainable future.</li>
                <li>– Learn about the course structure of the environmental science and aquaculture programs offered and understand the difference between these programs.</li>
                <li>– Explore the career prospects for graduates of environmental science and aquaculture programs in Singapore and Australia.</li>
                <li>– Get a glimpse of the Aquaculture Research and Teaching Faculty at JCU.</li>
                <li>– Engage with Dr. Neil in a live Q&A session.</li>
                <li>– Hear from our students about their learning experience at JCU.</li>
            </ul>
        </div>
    </div>

    <!-- Speaker 4: Dr. Neil Hutchinson -->
    <div class="speaker">
        <div class="speaker-image">
            <img src="<?php echo get_template_directory_uri(); ?>/images/neil.jpg" alt="Dr. Neil Hutchinson">
            <h2 class="speaker-title">Dr. Neil Hutchinson</h2>
            <p>Senior Lecturer, Environmental Science</p>
            <p>Dr. Neil received his Doctor of Philosophy degree in Marine Ecology at The University of Hong Kong. His research interests lie in the area of marine community ecology. During his career, he has worked at a wide range of institutions including universities, government research laboratories, and NGOs, providing research and information to a variety of stakeholders.</p>
        </div>
        <div class="speaker-info">
            <div class="session-info">
                <p><strong>Day 4: Dive into the World of Environmental Science and Aquaculture</strong></p>
                <p>Date: January 18th, 2024 (Thursday)</p>
                <p>Time: 7:00 PM – 8:00 PM SGT (Virtual)</p>
            </div>
            <ul class="details-list">
                <li>Do you have a passion for the environment or aquatic life?</li>
                <li>If you do, this might be the ideal time to turn that passion into a meaningful career!</li>
                <li>With a growing understanding of the environmental impacts of business operations, and an escalating demand for sustainable food sources due to factors like climate change affecting the global food supply, professionals with comprehensive knowledge of environmental science and aquaculture become especially valuable to contribute to The Singapore Green Plan 2030.</li>
                <li>Join us in an informative session by Dr. Neil Hutchinson and discover how the environmental science and aquaculture programs at the JCU Singapore School of Science and Technology can equip you with the skills essential to build a sustainable future within this context.</li>
                <li>In this session, you will:</li>
                <li>– Understand the concept of environmental science and aquaculture and the roles they play in building a sustainable future.</li>
                <li>– Learn about the course structure of the environmental science and aquaculture programs offered and understand the difference between these programs.</li>
                <li>– Explore the career prospects for graduates of environmental science and aquaculture programs in Singapore and Australia.</li>
                <li>– Get a glimpse of the Aquaculture Research and Teaching Faculty at JCU.</li>
                <li>– Engage with Dr. Neil in a live Q&A session.</li>
                <li>– Hear from our students about their learning experience at JCU.</li>
            </ul>
        </div>
    </div>

    <!-- Speaker 5: Associate Professor Roberto Dillon -->
    <div class="speaker">
        <div class="speaker-image">
            <img src="<?php echo get_template_directory_uri(); ?>/images/Roberto-Dillon.jpg" alt="Associate Professor Roberto Dillon">
            <h2 class="speaker-title">Associate Professor Roberto Dillon</h2>
            <p>Academic Head, Science and Technology | Associate Professor, Information Technology</p>
            <p>Dr. Roberto received his Doctor of Philosophy degree in Computer Engineering at University of Genoa. He is active both as an indie developer and as an academic in the field of game design and development. His games have been showcased at events like Sense of Wonder Night in Tokyo, FILE Games in Rio de Janeiro, and the Indie Prize Showcase at Casual Connect Asia besides reaching top positions on Apple’s App Store and Google Play across several countries and categories. He is also the author of several well-received game-related books and was invited to speak at the most important game conferences around the world.</p>
        </div>
        <div class="speaker-info">
            <div class="session-info">
                <p><strong>Day 5: Decode the Future of Technology</strong></p>
                <p>Date: January 19th, 2024 (Friday)</p>
                <p>Time: 7:00 PM – 8:00 PM SGT (Virtual)</p>
            </div>
            <ul class="details-list">
                <li>We are living in an era where technology is innovating at an unprecedented pace, reshaping every aspect of our lives. Today, Singapore’s economy is undergoing intensive digitalization through the national Smart Nation initiative. As technology continues to evolve for the Smart Nation, so do the opportunities it presents.</li>
                <li>Are you drawn to this innovative world of technology?</li>
                <li>If so, and you find yourself still deciding on your specific path in technology, we have the perfect opportunity for you.</li>
                <li>Join us in an informative session by Associate Professor Roberto Dillon and delve deep into the diverse array of technology programs offered at JCU Singapore School of Science and Technology. Be empowered with the insights needed to make informed decisions as you choose your path to build the Smart Nation.</li>
                <li>In this session, you will:</li>
                <li>– Understand the difference between the internet of things, data science, information technology, and cybersecurity disciplines.</li>
                <li>– Learn about the course structure of the internet of things, data science, information technology, and cybersecurity programs.</li>
                <li>– Explore the roles of each area of technology in building a Smart Nation and the exciting career opportunities it presents.</li>
                <li>– Find out more about the accreditations of our technology programs and the collaborations with industry partners in the technology landscape.</li>
                <li>– Engage with Associate Professor Roberto in a live Q&A session.</li>
                <li>– Hear from our students about their learning experience at JCU.</li>
            </ul>
        </div>
    </div>

    <!-- Speaker 6: Associate Professor Jonathan Ramsay -->
    <div class="speaker">
        <div class="speaker-image">
            <img src="<?php echo get_template_directory_uri(); ?>/images/t_jonathan.jpeg" alt="Associate Professor Jonathan Ramsay">
            <h2 class="speaker-title">Associate Professor Jonathan Ramsay</h2>
            <p>Associate Dean, Student Engagement | Associate Professor, Psychology</p>
            <p>Dr. Jonathan received his Doctor of Philosophy in Psychology from Nanyang Technological University in 2014, and a Bachelor of Arts in Psychology and Physiology from the University of Oxford. He has published in many international peer-reviewed journals, such as Nature Human Behaviour, the Journal of Personality, Political Psychology, and Psychology of Religion and Spirituality. His research interests span areas of personality and social psychology, with a particular emphasis on the psychology of religion and spirituality.</p>
        </div>
        <div class="speaker-info">
            <div class="session-info">
                <p><strong>Day 6: Discover the JCU Difference</strong></p>
                <p>Date: January 13th, 2024 (Saturday)</p>
                <p>Time: 1:00 PM – 3:00 PM SGT (Virtual)</p>
            </div>
            <ul class="details-list">
                <li>Well, fulfilling your dreams starts with making a choice: Where do you go?</li>
                <li>Big dreams deserve a high-quality education and a nurturing environment to help you reach your goals. For the past 20 years, the Singapore campus of James Cook University (JCU) has helped students pursue their passions and build a brighter future.</li>
                <li>Join us in two informative sessions and hear from our students’ and alumni’s perspectives on why they chose JCU as their ideal university.</li>
                <li>Student Life and Engagement</li>
                <li>Hear from Associate Professor Jonathan Ramsay on what makes us unique amongst universities.</li>
                <li>In this session, you will:</li>
                <li>– Discover how our direct university experience and esteemed academics team can elevate your tertiary education journey.</li>
                <li>– Explore our university’s prestigious accreditations and achievements.</li>
                <li>– Find out how our Learning Centre team can support your education journey.</li>
                <li>– Discover how our Career Services can help prepare you for future careers with skills workshops, industry connections, and graduate employment support.</li>
                <li>– Learn more about the intercampus exchange program to our Australia campuses.</li>
                <li>– Engage with Associate Professor Jonathan in a live Q&A session.</li>
                <li>– Hear from our students about their learning experience at JCU.</li>
            </ul>
        </div>
    </div>

</div>

<?php
get_footer();
?>


