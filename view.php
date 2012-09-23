<?php
echo $inputForm;

if($usedSelector) {
    echo "<p>Used selector: <b>$usedSelector</b></p>";
    
    if($resultCount === 0) {
        echo __("No pages found.");
    } else {
        sprintf(__("%d pages found."), $resultCount);
    
        echo $pager;
        
        echo $resultTable;
        
        echo $pager;
    }
}