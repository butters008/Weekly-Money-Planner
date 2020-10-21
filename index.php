<?php
//declare variables and require/include files here
include "helperFiles/header.php"; 



?>
<main>
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