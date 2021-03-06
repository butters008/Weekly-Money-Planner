<?php
//declare variables and require/include files here
include "helperFiles/header.php"; 

$moneyHave = 0;
$moneyIncome = 0;
$moneyExpense = 0;
$moneyEnd = 0;

class money{
    function moneyStart(){
        $moneyHave = $moneyEnd;
    }

    function addMoney($moneyIncome){
        $moneyHave += $moneyIncome;
    }

    function removeMoney($moneyIncome){
        $moneyHave -= $moneyExpense;
    }

    function moneyForNextWeek(){
        $moneyEnd = $moneyHave;
    }
}

$userMoney = new money;

if(isset($_POST["submit"])){

    //Declaring and assigning variables from form
    $recipeName = $_POST["recipeName"];
    $cookTime = $_POST["cookTime"];
    $recipeInstuction = $_POST["recipeInstuction"];

    //testing - success assigning from form to variables
    echo "$recipeName<br>";
    echo "$cookTime<br>";
    echo "$recipeInstuction<br>";

    
    $sql = "INSERT INTO recipe (recipe_name, cook_time, recipe_instructions) VALUES ($recipeName, $cookTime, $recipeInstuction);"; 
    // mysqli_query($link, $sql);
    
    // Prepare the statement
    $stmt = $link->prepare($sql);
    // Bind the parameters
    $stmt->bind_param('sss', $recipeName, $cookTime, $recipeInstuction);
    //Execute the statement
    $stmt->execute();

    // Bind the results - I dont think I need to use Bind....
    // $stmt->bind_result($rID,$rName,$rCookTime,$rInstructions,$rImage, $iID,$iName,$iMeasureType, $iQty);

    echo "<p>Recipe Added to database</p>";

}

?>
<main>
<br/><br/>
    <!-- <center> -->
    <div id="showMoney">
        <p></p>
    </div>
    <form id="moneyInput" action="" method="post">
        <label for="">Money Name</label>
        <input type="text">
        <select name='MoneyType' id='MoneyType'>
            <option value='nothing'></option>
            <option value='Income'>Income</option>
            <option value='Expense'>Expense</option>
        </select>
        <select name='WhichDay' id='WhichDay'>
            <option value='nothing'></option>
            <option value='Monday'>Monday</option>
            <option value='Tuesday'>Tuesday</option>
            <option value='Wednesday'>Wednesday</option>
            <option value='Thursday'>Thursday</option>
            <option value='Friday'>Friday</option>
            <option value='Saturday'>Saturday</option>
            <option value='Sunday'>Sunday</option>
        </select>
        <button type="submit">Submit</button>
    </form>
    <!-- </center> -->
<br/><br/><br/><br/>
    <table>
        <thead>
            <tr class="dayOfWeek">
                <th>Monday</th><!-- Start of the Week  -->  
                <th>Tuesday</th>
                <th>Wednesday</th>
                <th>Thursday</th>
                <th>Friday</th>
                <th>Saturday</th>
                <th>Sunday</th><!-- End of the Week  -->
            </tr>
            <!-- We are going to have the total amounts each day -->
            <tr class="dailyAmount">
                <th>Amount: </th><!-- Start of the Week  -->
                <th>Amount: </th>
                <th>Amount: </th>
                <th>Amount: </th>
                <th>Amount: </th>
                <th>Amount: </th>
                <th>Amount: </th><!-- End of the Week  -->
            </tr>
        </thead>
        <!-- This is where we are going to have the items Depost/Widthdrawls to be added-->
        <tbody>
            <tr>
                <td></td><!-- Start of the Week  -->
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td><!-- End of the Week  -->
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <th></th>
            </tr>
        </tfoot>
    </table>
</main>
<?php include "helperFiles/footer.php"; ?>