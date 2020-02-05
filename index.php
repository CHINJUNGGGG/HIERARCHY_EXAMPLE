<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title></title>

    <link rel="stylesheet" href="css/hierarchy-view.css">
    <link rel="stylesheet" href="css/main.css">
</head>

<style>
	.body{
		background-color: #FFFFFF;
	}

</style>	

<body>    
    <section class="basic-style">
        <div class="hv-container">
            <div class="hv-wrapper">
                <div class="hv-item">



	<?php

		include ('connect.php');

		$UNIT_CODE = 6150300000;

		$sql = "SELECT * FROM j3_nrpt WHERE UNIT_CODE = :UNIT_CODE ";
		$stmt=$db->prepare($sql);
		$stmt->bindparam(':UNIT_CODE',$UNIT_CODE);
		$stmt->execute();
		while($row=$stmt->fetch(PDO::FETCH_ASSOC)){

			$UNIT_CODE_1 = $row['UNIT_CODE'];
			$NRPT_NAME = $row['NRPT_NAME'];
			$NRPT_UNIT_PARENT = $row['NRPT_UNIT_PARENT'];

			$NRPT_NAME = explode(' ', $row['NRPT_NAME']);
			$NRPT_NAME = $NRPT_NAME[0];


	?>		

                    <div class="hv-item-parent">
                        <p class="simple-card" style="font-color: black;"><?=$NRPT_NAME?></p>
                    </div>

    <?php  }  ?>


                    <div class="hv-item-children">

    <?php
    
    	$sql1 = "SELECT * FROM j3_nrpt WHERE NRPT_UNIT_PARENT = :UNIT_CODE_1 AND SUBSTRING(UNIT_CODE, 1, 6) != '0001' AND SUBSTRING(UNIT_CODE, 1, 6) != '0900' AND SUBSTRING(UNIT_CODE, 1, 6) != '0002' AND SUBSTRING(UNIT_CODE, 1, 6) != '0003' AND SUBSTRING(UNIT_CODE, 1, 6) != '9999' AND SUBSTRING(UNIT_CODE, 1, 6) != '9998' ";
		$stmt1=$db->prepare($sql1);
		$stmt1->bindparam(':UNIT_CODE_1',$UNIT_CODE_1);
		$stmt1->execute();
		while($row1=$stmt1->fetch(PDO::FETCH_ASSOC)){

		$NRPT_NAME_1 = $row1['NRPT_NAME'];
		$NRPT_UNIT_PARENT_1 = $row1['NRPT_UNIT_PARENT'];

		$NRPT_NAME_1 = explode(' ', $row1['NRPT_NAME']);
		$NRPT_NAME_1 = $NRPT_NAME_1[0];

		$CUT_STR = substr($row1['UNIT_CODE'],6);

		if($CUT_STR != "0001" && $CUT_STR != "0002" && $CUT_STR != "0003" && $CUT_STR != "9999" && $CUT_STR != "9998"  && $CUT_STR != "0900"){


    ?>                	

                        <div class="hv-item-child">
                            <p class="simple-card"><?=$NRPT_NAME_1?></p>
                        </div>
    <?php }} ?>
                    </div>
                </div>
            </div>
        </div>
    </section>



</body>

</html>