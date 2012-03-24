<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title> homework 1</title>
        <STYLE>
            <!--
            .red { color: red }
            .blue { color: blue }
            -->
            </STYLE>
    </head>
    <body> 
        <?php
        //proverka dali imame vyveden parametyr
        if(empty($_GET["number"]))
            {echo "No GET variables";}
            else
                {
                //proverka dali parametyra e chislo
                if(is_numeric($_GET["number"]))
                    {
                    echo "The parameter is a number!<br>";
                    //proverka dali chisloto e vyv intervala [0,19999]
                    if ($_GET["number"]>=0 && $_GET["number"]<=19999)
                        {echo "The parameter is within the range [0,19999]<br>";}
                        else
                            {echo '<p class="red">The parameter is not within the range [0,19999]</p><br>';}
                            //proverka za prosto chislo
                            if(IsPrime($_GET["number"]))
                                {echo "The number {$_GET["number"]} is prime !<br>";}
                                else
                                    {echo '<p class="blue">The number '.$_GET["number"].' is NOT prime !</p><br>';}
                    }
                    else
                        {echo '<p class="red">The parameter is not a number!</p><br>';}
                }                
//funkciq za prosto chislo
function IsPrime($num)
{
    if ($num < 2)
        {return FALSE;}
        for ($i=2; $i<=($num / 2); $i++)
        {
            if($num % $i == 0)
                {return FALSE;}
                return TRUE;
        }
}
        ?>
     </body>
</html>
