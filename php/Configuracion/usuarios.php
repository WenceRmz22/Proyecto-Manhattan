<?php 
if ( isset($_GET['del']) ){
				$del = ($_GET['del']);
				echo "DELETE FROM usuarios WHERE usuid='".$del."'";
				$db->query("DELETE FROM usuarios WHERE usuid='".$del."'");
			}
;
?>
<div class="dx-viewport">
    <div class="demo-container">
        <div id="data-grid-demo">
            <div id="gridContainer"></div>
        </div>
    </div>
</div>
