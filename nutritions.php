<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link href="basicstyle.css" rel="stylesheet" type="text/css">
<link href="responsive.css" rel="stylesheet"  media="screen and
(max-width: 960px)">

	</script>
</head>
<body>

<?php
include_once('diet_functions.php');
?>

<!-- <noofoodintakeperday>diet nutritions</noofoodintakeperday> -->

<h1>Diet nutrition Table</h1>

<?php
//make the database connection
$conn  = db_connect();

//create a query
$sql = "SELECT * FROM nutritions;";
$sql_result = $conn -> query($sql);
$conn -> close();
display_nutritions($sql_result);
?>


<h1>Best Diet Tips</h1>
<img src="images/diet.jpg" width="1400" height="900">

<ul>
<b><h1>My Best Plans.</h1></b>
<li><h2>1. Don't skip breakfast</h2></li>
<p>Skipping breakfast won't help you lose weight. You could miss out on essential nutrients and you may end up snacking more throughout the day because you feel hungry.</p>


<li><h2>2. Eat regular meals</h2></li>
<p>Eating at regular times during the day helps burn calories at a faster rate. It also reduces the temptation to snack on foods high in fat and sugar. 


<li><h2>3. Eat plenty of fruit and veg</h2></li>
<p>Fruit and veg are low in calories and fat, and high in fibre – three essential ingredients for successful weight loss. They also contain plenty of vitamins and minerals. </p>


<li><h2>4. Get more active</h2></li>
<p>Being active is key to losing weight and keeping it off. As well as providing numerous health benefits, exercise can help burn off the excess calories you can't cut through diet alone. Find an activity you enjoy and are able to fit into your routine.</p>


<li><h2>5. Drink plenty of water</h2></li>
<p>People sometimes confuse thirst with hunger. You can end up consuming extra calories when a glass of water is really what you need. </p>


<li><h2>6. Eat high-fibre foods</h2></li>
<p>Foods containing lots of fibre can help keep you to feel full, which is perfect for losing weight. Fibre is only found in food from plants, such as fruit and veg, oats, wholegrain bread, brown rice and pasta, and beans, peas and lentils.</p>


<li><h2>7. Read food labels</h2></li>
<p>Knowing how to read food labels can help you choose healthier options. Use the calorie information to work out how a particular food fits into your daily calorie allowance on the weight loss plan. Find out more about reading food labels.</p>


<li><h2>8. Use a smaller plate</h2></li>
<p>Using smaller plates can help you eat smaller portions. By using smaller plates and bowls, you may be able to gradually get used to eating smaller portions without going hungry. It takes about 20 minutes for the stomach to tell the brain it's full, so eat slowly and stop eating before you feel full.</p>


<li><h2>9. Don't ban foods</h2></li>
<p>Don't ban any foods from your weight loss plan, especially the ones you like. Banning foods will only make you crave them more. There's no reason you can't enjoy the occasional treat as long as you stay within your daily calorie allowance.</p>


<li><h2>10. Don't stock junk food</h2></li>
<p>To avoid temptation, try to not stock junk food – such as chocolate, biscuits, crisps and sweet fizzy drinks – at home. Instead, opt for healthy snacks, such as fruit, unsalted rice cakes, oat cakes, unsalted or unsweetened popcorn, and fruit juice.</p>


<li><h2>11. Cut down on alcohol</h2></li>
<p>A standard glass of wine can contain as many calories as a piece of chocolate. Over time, drinking too much can easily contribute to weight gain. </p>

<li><h2>12. Plan your meals</h2></li>
<p>Try to plan your breakfast, lunch, dinner and snacks for the week, making sure you stick to your calorie allowance.</p>

</ul>

 
</body>
</html>
