
<?php require_once("../resources/config.php"); ?>
<?php include(TEMPLATE_FRONT . DS . "header.php") ?>
<?php require_once("../resources/functions.php");?>


<?php
require '../vendor/autoload.php';

/*class Order{

    public $id;
    public $currency;
    public $total = 0;
    public $products = [];



}

class Product{


    public $id;
    public $sku;
    public $title;
    public $price;
    public $currency;
    public $subTotal =0;
    public $quantity =0;


}





if(isset($_POST['submit'])){


    $paypal = new Paypal();
    $payer = new Payer();
    $payer->setPaymentMethod('paypal');

//    $item = new Item();

    $itemList = new ItemList();

    $item = new Item();

    $details = new Details();

    $amount = new Amount();

    $transaction = new Transaction();

    $redirectUrls = new redirectUrls();

    $payment = new Payment();


    $x = 0;
    $total =0;




 if(isset($_POST)){


         $products =[];


            for($i=0; $i < count($_POST['product_title']); $i++) {

                $order = new Order;

                $product[$i] = new Product;

                $product[$i]->id = $_POST['product_id'][$i];
                $product[$i]->sku = uniqid();
                $product[$i]->title = $_POST['product_title'][$i];
                $product[$i]->price = $_POST['product_price'][$i];
                $product[$i]->quantity = $_POST['product_quantity'][$i];

                $product[$i]->subTotal = $product[$i]->price * $product[$i]->quantity;
                $product[$i]->currency = $_POST['currency_code'];

                $total += $product[$i]->subTotal;



                $order->total = $total;







                $item->setName($product[$i]->title);
                $item->setPrice($product[$i]->price);
                $item->setQuantity($product[$i]->quantity);
                $item->setCurrency($product[$i]->currency);
                $item->setSku(uniqid());


                $products[] = $product[$i];


                $itemList->setItems($products);



                $details->setSubtotal($order->total);



                $amount->setCurrency('US')->setTotal($order->total)->setDetails($details);


                $transaction->setAmount($amount)->setItemList($itemList)->setDescription('Payment for something')->setInvoiceNumber(uniqid());


//                $redirectUrls->setReturnUrl('http://localhost:8888/ecom/public')->setCancelUrl('http://localhost:8888/ecom/public/pay.php?success=false');


                $payment->setIntent('sale')->setPayer($payer)->setRedirectUrls($redirectUrls)->setTransactions([$transaction]);

                $payment->create($paypal);




            }
        }


            }
*/
          /* echo "<pre>";

        var_dump($itemList);

       echo "</pre>";*/

       echo show_paypal(); 

       echo cart();

            ?>



<?php include(TEMPLATE_FRONT . DS . "footer.php") ?>
