<?php

//php filters are used to validate and sanitize external input.

//validating data => gyat krna ki data proper form me h ya nhi

//Sanitizing data => remove any illegal character from data(information)
'<script>djl</script>';//=>illegal string

print_r(filter_list());

foreach (filter_list() as $value) {
    echo $value."<br>";
}


?>

<table>
    <th></th>
    <?php
    foreach(filter_list() as $key=>$value){
    ?>
    <tr>
        <td><?php echo $key."=>" ?></td>
        <td><?php echo $value ?></td>
    </tr>
    <?php
    }
    ?>
</table>