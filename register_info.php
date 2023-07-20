<?php

// echo "<pre>";
// print_r($_POST);
// die();

error_reporting(0);

if(!empty($_POST)){
    $enter_amt=$_POST['enter_amt'];
    $first_currency=$_POST['first_currency'];
    $second_currency=$_POST['second_currency'];

    $rupeesindollar=72.41;
    $dollarinrupees=0.014;

    $jsonData = ['msg' => '' ,'status' => 1] ;

    $convertintodollar=$enter_amt*$dollarinrupees;
    $convertintorupees=$enter_amt*$rupeesindollar;


    

    if($first_currency=='Rupees' && $second_currency=='Doller'){
        $jsonData['msg'] = "enter_amt rupees contain $convertintodollar dollars.";
    }elseif($first_currency=='Doller' && $second_currency=='Rupees'){
        //echo 
        // echo json_encode($jsonData);
        $jsonData['msg'] = "$enter_amt dollar contain $convertintorupees repees.";

    }else{
        $jsonData['msg'] =  "Please select currency to be converted.";   
        $jsonData['status'] = 1 ;
    }

    echo json_encode($jsonData);


    

}
?>