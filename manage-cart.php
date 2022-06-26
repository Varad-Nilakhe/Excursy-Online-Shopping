<?php
    session_start();

    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        if(isset($_POST['i5'])||isset($_POST['i7'])||isset($_POST['i9']))
        {
            if(isset($_SESSION['cart']))
            {
                $myitems=array_column($_SESSION['cart'], 'Laptop_name');
                if(in_array($_POST['Laptop_name'], $myitems))
                {
                    echo"<script>
                alert('Item Already Added');
                window.location.href='XPS-buy.php';
                </script>";
                }
                else{
                    $count=count($_SESSION['cart']);
                    $_SESSION['cart'][$count]=array('Laptop_name'=>$_POST['Laptop_name'],'Laptop_varient'=>$_POST['Laptop_varient'],'Laptop_price' =>$_POST['Laptop_price']);
                    echo"<script>
                    alert('Item Added');
                    window.location.href='Cart.php';
                    </script>";
                }
            }
            else
            {
                $_SESSION['cart'][0]=array('Laptop_name'=>$_POST['Laptop_name'],'Laptop_varient'=>$_POST['Laptop_varient'],'Laptop_price' =>$_POST['Laptop_price']);
                echo"<script>
                alert('Item Added');
                window.location.href='Cart.php';
                </script>";
            }
        }

        if(isset($_POST['Remove_Item']))
        {
            foreach($_SESSION['cart'] as $key=>$value)
            {   echo $_POST['Laptop_name'];
                if($value['Laptop_name']==$_POST['Laptop_name'])
                {   
                    unset($_SESSION['cart'][$key]);
                    $_SESSION['cart']=array_values($_SESSION['cart']);
                    echo"<script>
                    alert('Item Removed');
                    window.location.href='Cart.php';
                    </script>";
                }
            }
        }
    }      
?>