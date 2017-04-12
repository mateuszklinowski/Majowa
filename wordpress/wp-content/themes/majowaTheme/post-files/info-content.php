<?php $custom_values = get_post_custom();?>

<?php if(isset($custom_values['where'][0]) && $custom_values['where'][0] !=''){
    echo "<h5>Gdzie:</h5>";
    echo "<h4>".$custom_values['where'][0]."</h4>";
}
?>
<?php if(isset($custom_values['when'][0]) && $custom_values['when'][0] !=''){
    echo "<h5>Kiedy:</h5>";
    echo "<h4>".$custom_values['when'][0]."</h4>";
}
?>
<?php if(isset($custom_values['forwho'][0]) && $custom_values['forwho'][0] !=''){
    echo "<h5>Dla kogo:</h5>";
    echo "<h4>".$custom_values['forwho'][0]."</h4>";
}
?>
<?php if(isset($custom_values['instructor'][0]) && $custom_values['instructor'][0] !=''){
    echo "<h5>Instruktor:</h5>";
    echo "<h4>".$custom_values['instructor'][0]."</h4>";
}
?>
<?php if(isset($custom_values['about'][0]) && $custom_values['about'][0] !=''){
    echo "<h5>O czym:</h5>";
    echo "<h4>".$custom_values['about'][0]."</h4>";

}
?>
<?php if(isset($custom_values['cykl'][0]) && $custom_values['cykl'][0] !=''){
    echo "<h5>Cykl:</h5>";
    echo "<h4>".$custom_values['cykl'][0]."</h4>";
}
?>