<?php include_once 'database.php';

?>
<header><a id="headertitle" href="main.php">Eat.com</a>
<nav>
<div class="menuCategory">
<a href="search.php">Search</a>
</div>
<div class="menuCategory">

<span class="navtitle">Recipe</span>
<div class="withSeveralLinks">
<?php foreach (getAllRecipes() as $recipe) {?>
<a href="recipe.php?recipe=<?php echo $recipe["code"];?>"><?php echo $recipe["label"];?></a>
<?php }?>
</div>
</div>
<div class="menuCategory">
<a href="contact.php">Contact us</a>
</div>
</nav>
</header>