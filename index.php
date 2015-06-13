<table>
    <tr><td>Name</td><td>Phone</td></tr>
    <?php
    while ($row = mysql_fetch_assoc($rs_result)) {
        ?>
        <tr>
            <td><?php echo $row['Name']; ?></td>
            <td><?php echo $row['Phone']; ?></td>
        </tr>
    <?php
    };
    ?>
</table>
<?php

?>
