<?php
include "helperFiles/header.php"; 
echo "Hello!"
?>

<table>
    <thead>
        <tr>
            <th>Monday</th>
            <th>Tuesday</th>
            <th>Wednesday</th>
            <th>Thursday</th>
            <th>Friday</th>
            <th>Saturday</th>
            <th>Sunday</th>
        </tr>
        <!-- We are going to have the total amounts each day -->
        <tr>
            <th>Amount: </th>
            <th>Amount: </th>
            <th>Amount: </th>
            <th>Amount: </th>
            <th>Amount: </th>
            <th>Amount: </th>
            <th>Amount: </th>
        </tr>
    </thead>
    <!-- This is where we are going to have the items Depost/Widthdrawls to be added-->
    <tbody>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </tbody>
    <tfoot>
        <tr>
            <th></th>
        </tr>
    </tfoot>
</table>
<?php include "helperFiles/footer.php"; ?>