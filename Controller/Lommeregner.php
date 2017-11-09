<?php
ini_set('display_errors',0);
if (isset($_POST['submit']))
{
    $num1=$_POST['number1'];
    $num2=$_POST['number2'];

    if (is_numeric['$num1'] && is_numeric['$num2'])
    {
        if (isset($_POST['n']))
        {
            $operation = $_POST['n'];
            switch($operation)
            {
                case '+':
                    $result=$num1+$num2;
                    break;

                case '-':
                    $result=$num1-$num2;
                    break;

                case '*':
                    $result=$num1*$num2;
                    break;

                case '/':
                    $result=$num1/$num2;
                    break;

            }
        }
    }
}


require_once '../vendor/autoload.php';
Twig_Autoloader::register();
$loader = new Twig_Loader_Filesystem('../view');
$twig = new Twig_Environment($loader, array(
    // 'cache' => '/path/to/compilation_cache',
    'auto_reload' => true
));
$template = $twig->loadTemplate('showit.twig');
$parametersToTwig = array("result" => $result);
echo $template->render($parametersToTwig);
?>