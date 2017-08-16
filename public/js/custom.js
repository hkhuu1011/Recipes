// $(document).ready(function () {
//     // alert('load!');
//
//     // Get recipe_id from database
//     $.get('recipe_id');
//
//     // Function to concatenate id to API
//     function recipeDatabase() {
//         var $key = "9ub7D5HCt5mshVvYO5Gq6ApS1GvRp1ZIouOjsnN9KNREY35tAc"
//         var $recipeId = $();
//
//         $.ajax({
//             url:"https://spoonacular-recipe-food-nutrition-v1.p.mashape.com/recipes/" + $recipeId +"/information?includeNutrition=true",
//             type: "GET",
//             async: false,
//             success: function (data) {
//                 $(".display").html(data);
//             }
//         })
//     }
//
//     recipeDatabase();
// })