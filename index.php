<?php
    include("data.php");
    include("inc/function.php");
    include("inc/header.php");

?> 
<div>
    <h1>List:</h1>
    <ol class="fruit_container">
        <?php
            $ramdom = array_rand($list, 17);
            foreach($ramdom as $id){
                echo get_item_html($id , $list[$id]);
            }
        ?>
    </ol>
</div>
<?php
    include("inc/footer.php");
    ?>