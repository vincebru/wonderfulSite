<?php

function getAllRecipes()
{
    $query = 'select * from recipe';
    return executeQuery($query, null);
}

function getRecipeByCode($recipeCode)
{
    $params = array('recipeCode' => $recipeCode);
    $query = '
        select r.*
          from recipe r
          where r.code = :recipeCode
    ';
    return executeQuery($query, $params);
}

function getIngredientByRecipeCode($recipeCode)
{
    $params = array('recipeCode' => $recipeCode);
    $query = '
        select i.label, ir.quantity
          from ingredient i
          inner join ingredient_recipe ir ON ir.ingredient_id = i.ingredient_id
          inner join recipe r ON r.recipe_id = ir.recipe_id
          where r.code = :recipeCode
    ';
    return executeQuery($query, $params);
}

function executeQuery($query, $params)
{
    //FIXME: change dbname by your own dbname
    $bdd = new PDO('mysql:host=localhost;dbname=technoweb', 'root') ;
    try {
        $res = $bdd->prepare($query);
        $res->execute($params);

        $datas = $res->fetchAll();

        $res->closeCursor();

        return $datas;
    } catch (PDOException $e) {
        var_dump($e);
    }
}
?>