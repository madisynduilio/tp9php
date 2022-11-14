<?


$recipes = array();

$recipes["SweetPotatoMuffins"] = array();
$recipes["SweetPotatoMuffins"]["ingredients"] = array();
$recipes["SweetPotatoMuffins"]["equipment"] = array();
$recipes["SweetPotatoMuffins"]["directions"] = array();

$recipes["SweetPotatoMuffins"]["ingredients"][] = "1 cup white sugar";
$recipes["SweetPotatoMuffins"]["ingredients"][] = "1 cup cooked, mashed sweet potato";
$recipes["SweetPotatoMuffins"]["ingredients"][] = "½ cup olive oil";
$recipes["SweetPotatoMuffins"]["ingredients"][] = "⅓ cup water";
$recipes["SweetPotatoMuffins"]["ingredients"][] = "2 eggs, beaten";
$recipes["SweetPotatoMuffins"]["ingredients"][] = "1 ⅔ cups all-purpose flour";
$recipes["SweetPotatoMuffins"]["ingredients"][] = "1 teaspoon ground cinnamon";
$recipes["SweetPotatoMuffins"]["ingredients"][] = "1 teaspoon baking soda";
$recipes["SweetPotatoMuffins"]["ingredients"][] = "½ teaspoon baking powder";
$recipes["SweetPotatoMuffins"]["ingredients"][] = "½ teaspoon salt";
$recipes["SweetPotatoMuffins"]["ingredients"][] = "½ cup chopped pecans";

$recipes["SweetPotatoMuffins"]["equipment"][] = "Oven";
$recipes["SweetPotatoMuffins"]["equipment"][] = "Muffin Pan";
$recipes["SweetPotatoMuffins"]["equipment"][] = "Measuring Cups";
$recipes["SweetPotatoMuffins"]["equipment"][] = "Medium Mixing Bowl";
$recipes["SweetPotatoMuffins"]["equipment"][] = "Spoon";
 
$recipes["SweetPotatoMuffins"]["directions"][] = "Preheat the oven to 350 degrees F (175 degrees C).";
$recipes["SweetPotatoMuffins"]["directions"][] = "Grease a 12-cup muffin pan or line with paper liners.";
$recipes["SweetPotatoMuffins"]["directions"][] = "Combine sugar, sweet potato, olive oil, water, and eggs in a bowl.";
$recipes["SweetPotatoMuffins"]["directions"][] = "Combine flour, cinnamon, baking soda, baking powder, and salt in a second bowl.";
$recipes["SweetPotatoMuffins"]["directions"][] = "Add flour mixture and pecans to the sweet potato mixture.";
$recipes["SweetPotatoMuffins"]["directions"][] = "Fold gently until just moistened, being careful not to overmix.";
$recipes["SweetPotatoMuffins"]["directions"][] = "Spoon batter into the prepared muffin cups, filling each 3/4 full.";
$recipes["SweetPotatoMuffins"]["directions"][] = "Bake in the preheated oven for 20-25 minutes";
$recipes["SweetPotatoMuffins"]["directions"][] = "Remove from oven and cool on wire rack.";

      
//start peach crisp


$recipes["Salmon"] = array();
$recipes["Salmon"]["ingredients"] = array();
$recipes["Salmon"]["equipment"] = array();
$recipes["Salmon"]["directions"] = array();

$recipes["Salmon"]["ingredients"][] = ">6 tablespoons panko bread crumbs";
$recipes["Salmon"]["ingredients"][] = "1 tablespoon grated Parmesan cheese";
$recipes["Salmon"]["ingredients"][] = "½ teaspoon lemon pepper";
$recipes["Salmon"]["ingredients"][] = "½ teaspoon dried thyme";
$recipes["Salmon"]["ingredients"][] = "½ teaspoon dried parsley";
$recipes["Salmon"]["ingredients"][] = "⅛ teaspoon granulated garlic";
$recipes["Salmon"]["ingredients"][] = "⅛ teaspoon lemon zest";
$recipes["Salmon"]["ingredients"][] = "2 (4 ounce) salmon fillets";
$recipes["Salmon"]["ingredients"][] = "1 tablespoon butter, melted";

$recipes["Salmon"]["equipment"][] = "Oven";
$recipes["Salmon"]["equipment"][] = "Baking Sheet";
$recipes["Salmon"]["equipment"][] = "Aluminum Foil";
$recipes["Salmon"]["equipment"][] = "Bowl";

$recipes["Salmon"]["directions"][] = "Preheat oven to 375 degrees F (190 degrees C). Line a baking sheet with aluminium foil.";
$recipes["Salmon"]["directions"][] = "Combine panko bread crumbs, Parmesan cheese, lemon pepper, thyme, parsley, granulated garlic, and lemon zest in a bowl. Arrange salmon on the prepared baking sheet and brush with melted butter. Sprinkle bread crumb mixture evenly over salmon fillets.";
$recipes["Salmon"]["directions"][] = "Bake in the preheated oven until salmon flakes easily with a fork, 20 to 25 minutes.";

$recipes["fluffyFrenchToast"] = array();
$recipes["fluffyFrenchToast"]["ingredients"] = array();
$recipes["fluffyFrenchToast"]["equipment"] = array();
$recipes["fluffyFrenchToast"]["directions"] = array();

$recipes["fluffyFrenchToast"]["ingredients"][] = "1/4 cup all-purpose flower";
$recipes["fluffyFrenchToast"]["ingredients"][] = "1 cup milk";
$recipes["fluffyFrenchToast"]["ingredients"][] = "3 eggs";
$recipes["fluffyFrenchToast"]["ingredients"][] = "1 tablespoon white sugar";
$recipes["fluffyFrenchToast"]["ingredients"][] = "1 teaspoon vanilla extract";
$recipes["fluffyFrenchToast"]["ingredients"][] = "1/2 teaspoon ground cinnamon";
$recipes["fluffyFrenchToast"]["ingredients"][] = "1 pinch salt";
$recipes["fluffyFrenchToast"]["ingredients"][] = "12 thick slices of bread";
$recipes["fluffyFrenchToast"]["ingredients"][] = "Oil";

$recipes["fluffyFrenchToast"]["equipment"][] = "Stove";
$recipes["fluffyFrenchToast"]["equipment"][] = "Measuring cups";
$recipes["fluffyFrenchToast"]["equipment"][] = "Large mixing bowl";
$recipes["fluffyFrenchToast"]["equipment"][] = "Whisk";
$recipes["fluffyFrenchToast"]["equipment"][] = "Griddle or frying pan";

$recipes["fluffyFrenchToast"]["directions"][] = "Measure all-purpose flour and pour into large mixing bowl.";
$recipes["fluffyFrenchToast"]["directions"][] = "Slowly whisk in milk, eggs, sugar, vanilla extract, cinnamon, and salt until the consistancy is smooth.";
$recipes["fluffyFrenchToast"]["directions"][] = "Lightly oil a griddle or frying pan over medium heat.";
$recipes["fluffyFrenchToast"]["directions"][] = "Soak the bread slices into the milk mixture.";
$recipes["fluffyFrenchToast"]["directions"][] = "Cook the bread slices on the griddle or frying pan. Make sure each side of the bead is golden brown Serve while still hot.";

$requestedID = $_GET["recipeID"];
$requestedID = htmlspecialchars($requestedID);
$requestedID = filter_var($requestedID, FILTER_SANITIZE_STRING);

$requestedList = $_GET["recipeList"];
$requestedList = htmlspecialchars($requestedList);
$requestedList = filter_var($requestedList, FILTER_SANITIZE_STRING);


$requestedOutput = $recipes[$requestedID][$requestedList];

$requestedJSON = "0";

if ($requestedOutput != null) {
  $requestedJSON = json_encode($requestedOutput);
}

echo $requestedJSON;


?>


