<?php include_once 'database.php';
if (isset($_GET['recipe'])){
    $recipeCode= $_GET['recipe'];
} else {
    include 'main.php';
    die;
}

$recipesData = getRecipeByCode($recipeCode);

if (!empty($recipesData)){
    $currentData = $recipesData[0];
    $ingredients = getIngredientByRecipeCode($recipeCode);
} else {
    include 'main.php';
    die;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Eat.com</title>
    <link rel="stylesheet" href="css/common.css" />
    <link rel="stylesheet" href="css/main.css" />
</head>
<body>
	
    <?php include 'header.php'?>
	<aside>	
		<div id="ingredientList">
    		<table>
    			<tr>
    				<th>
    					name
    				</th>
    				<th>
    					quantity
    				</th>
    			</tr>
    		<?php 
    		foreach ($ingredients as $ingredient){
    		?>
    			<tr>
    				<td>
    					<?php echo($ingredient['label'])?>
    				</td>
    				<td>
    					<?php echo($ingredient['quantity'])?>
    				</td>
    			</tr>
    		<?php }?>
    		</table>
    	</div>

	</aside>

    <section>
    	<img id="recipeImage" src="image/<?php echo $recipeCode?>.jpeg"/>


    	<div class="content">
    		<p>
    			<span class="labelTitle">Preparation time&nbsp;: </span><?php echo $currentData['preparationTime']?><br />
    			<span class="labelTitle">Baking time&nbsp;: </span><?php echo $currentData['bakingTime']?><br />
    		</p>
    		<h1>Preparation</h1>
    		<p>
    			bla bla bla bla bla bla bla blabla bla bla blabla bla bla blabla bla bla blabla bla bla blabla bla bla blabla bla bla blabla bla bla blabla bla bla blabla bla bla blabla bla bla blabla bla bla blabla bla bla blabla bla bla blabla bla bla blabla bla bla blabla bla bla blabla bla bla blabla bla bla blabla bla bla blabla bla bla blabla bla bla blabla bla bla blabla bla bla blabla bla bla blabla bla bla blabla bla bla blabla bla bla blabla bla bla blabla bla bla blabla bla bla bla
    		</p>
    		<h1>Baking</h1>
    		<p>
    			bla bla bla bla bla bla bla blabla bla bla blabla bla bla blabla bla bla blabla bla bla blabla bla bla blabla bla bla blabla bla bla blabla bla bla blabla bla bla blabla bla bla blabla bla bla blabla bla bla blabla bla bla blabla bla bla blabla bla bla blabla bla bla blabla bla bla blabla bla bla blabla bla bla blabla bla bla blabla bla bla blabla bla bla blabla bla bla blabla bla bla blabla bla bla blabla bla bla blabla bla bla blabla bla bla blabla bla bla blabla bla bla bla
    		</p>
    	</div>


    </section>
    <footer>
        <div><a href="http://www.cdiscount.fr">Visit Cdiscount Web site</a></div>
    </footer>
</body>
</html>
