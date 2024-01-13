<!DOCTYPE html>
<html>
<head><title>My Website</title><style>
		header {
			background-color: #333;
			color: #fff;
			padding: 20px;
			text-align: center;
		}
		footer {
			background-color: #333;
			color: #fff;
			padding: 20px;
			text-align: center;
		}
	</style>
</head>
<body>
    <?php
    // require get_template_directory() ."hello-elementor/header.php";
        include "header.php";
    echo "<script>alert('welcome');</script>";

    

    ?>
	<main>
		<h2><?php echo " Our Café Story";?></h2>
       <?php
       $arr = [
        [
            "name" => "Jessica Sommer",
            "age" => 30,
            "email" => "Jessica Sommer@126.com"
        ],
        [
            "name" => "Bryan Lambert",
            "age" => 25,
            "email" => "Bryan Lambert@126.com"
        ],
        [
            "name" => "Kristin Foster",
            "age" => 40,
            "email" => "Kristin Foster@126.com"
        ]
    ];
    foreach($arr as $res){
        echo "name:".$res['name']."age:".$res['age']."email:".$res['email']."<br><br>";
    }
        // for loop
        for ($i = 1; $i <= 5; $i++) {
            echo "* " ;
       
        }

        // while
        $i = 1;
        while ($i <= 5) {
            
            if($i ==3){
                echo "*** ";
            }else{
                echo  ": : : :";
            }
            $i++;
        }

        

?>
		<p>We are a Hokkaido based concept café that uses exceptional imported Hokkaido milk quality, the BIEI Jersey milk from Brown Jersey Cows.Hailing all the way from Hokkaido, Japan, Baristart Coffee first started out in June 2015 as a simple coffee stand where one can hear all about the milk produced in Hokkaido and its relation to the coffee scene in Japan. Today, Baristart Coffee has evolved into a lifestyle café serving up a full-range menu. From coffee to desserts and savouries, Coffee & Bakery prides itself on its use of pure uncompromising quality of Hokkaido dairy that is both rich and creamy with a tinge of sweetness.</p>
	</main>
    <?php
     include "footer.php";
    //  require get_template_directory() ."/hello-elementor/footer.php";
    //  require get_template_directory() . '/includes/admin-functions.php';

    ?>
</body>
</html>