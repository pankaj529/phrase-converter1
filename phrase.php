<?php
define("TITLE", "Phrase convertor" );

if (isset( $_POST["fix_submit"]))
{
    //take value from textarea
    $Typed = ucfirst(strtolower( $_POST["typed_phrase"]) );
    
    //store array of  phrases
    $a = array(
        
        "A bird in the hand is worth two in the bush",
        
        "A bunch of fives",
        
        "A chain is only as strong as its weakest link",
        
        "A diamond in the rough",
        
        "A diamond is forever"
    
    
    
    
    );
    
    
    $b = array(
        
        
        
        
        
        "It's better to have a lesser but certain advantage than the possibility of a greater one that may come to nothing.",
        
        
        "A fist The fives are the five fingers.",
        
        "The proverb has a literal meaning, although the 'weakest link' referred to is figurative and usually applies to a person or technical feature rather than the link of an actual chain.",
        
        
        "Someone who is basically good hearted but lacking social graces and respect for the law.",
       
        "Advertising slogan for De Beers' diamonds."


    
    );
    
    $actualMeaning = str_replace ($a,$b,$Typed);
    
    
    
    
    
}



?>



<DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo TITLE; ?></title>
    
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>

<body>
   <div class="container">
       <h1><?php echo TITLE; ?></h1>
       
       <p class="lead">Type your phrase i gave you actual meaning
       </p>
       
       <div class="row">
            <form class="col-sm-8 col-sm-offset-2" action="" method="post">
              
               <textarea placeholder="Type your phrase" class="form-control input-lg" name="typed_phrase"></textarea><br>
              
                <button type="submit" class="btn btn-primary btn-lg 
               float-right " name="fix_submit" >Meaning!</button>
                
            </form>
           
           
           
       </div>
       
       <?php 
       if( isset ( $_POST["fix_submit"] ) )
       {
           echo "<strong class='text-danger'>Your phrase</strong>
          <h4>".ucwords($Typed)."</h4><hr>";
           
       }
       
           echo "<strong class='text-success'> Meaning of phrase </strong>
          <h4>".ucwords($actualMeaning)."</h4>";
           
           
           
       
       
       
       ?>
       
       
       
       
       
       
       
       
   </div>
   
    
    
    
    
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
