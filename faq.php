<?php include 'admin/database.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ'S</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="main.css">

    <link href="img/favi.png" rel="icon">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Funnel+Display:wght@300..800&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Foldit:wght@100..900&display=swap" rel="stylesheet">

    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>

<body>

    <div id="header"></div>
    <script>
        $(document).ready(function() {
            $("#header").load("header.php")
        })
    </script>




        <div class="container-fluid">
            <div class="row bg16">
                <div class="col-md-12" style="height: 160px;"></div>
                <p class="p63 mb-0"><b>Frequently Asked Questions</b></p>
                <p class="p64 mt-2">Explore our most commonly asked questions below.</p>
            </div>
        </div>


        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">

                    <p class="p65 ms-md-5 mt-5"><b>Returns & Exchanges</b></p>

                    <p class="p66 ms-md-5 mt-5"><b>What is your return policy ?</b> <span class="ms-5"><i class="fa fa-caret-right" aria-hidden="true" data-bs-toggle="collapse" data-bs-target="#hide1"></i></span></p>
                    <p class="collapse p67 ms-md-5" id="hide1">We accept No returns acceptable.</p>
                    <hr class="w-80 ms-md-5">

                    <p class="p66 ms-md-5 mt-5 mt-md-4"><b>How do I start a exchange ?</b> <span class="ms-5"><i class="fa fa-caret-right" aria-hidden="true" data-bs-toggle="collapse" data-bs-target="#hide2"></i></span></p>
                    <p class="collapse p67 ms-md-5" id="hide2">Just head to our Replace Portal, enter your order number and email, and follow the steps. You’ll receive a prepaid Replace label if eligible.</p>
                    <hr class="w-80 ms-md-5">

                    <p class="p66 ms-md-5 mt-5 mt-md-4"><b>When will I get my refund ?</b> <span class="ms-5"><i class="fa fa-caret-right icon9" aria-hidden="true" data-bs-toggle="collapse" data-bs-target="#hide3"></i></span></p>
                    <p class="collapse p67 ms-md-5" id="hide3">We will not give any kind of Refund towards our product.</p>
                    <hr class="w-80 ms-md-5">

                    <p class="p66 ms-md-5 mt-5 mt-md-4"><b>Can I exchange an item for a different size?</b> <span class="ms-5"><i class="fa fa-caret-right" aria-hidden="true" data-bs-toggle="collapse" data-bs-target="#hide4"></i></span></p>
                    <p class="collapse p67 ms-md-5" id="hide4">Absolutely! If the size you need is available, we’ll process an exchange once your original item is received.</p>
                    <hr class="w-80 ms-md-5">
                    
                </div>

                <div class="col-md-6">

                    <p class="p65 ms-md-5 mt-5"><b>Ordering & Payment</b></p>

                    <p class="p66 ms-md-5 mt-5"><b>What payment methods do you accept?</b> <span class="ms-5"><i class="fa fa-caret-right" aria-hidden="true" data-bs-toggle="collapse" data-bs-target="#hide5"></i></span></p>
                    <p class="collapse p67 ms-md-5" id="hide5">We accept Visa, Mastercard, AMEX, PayPal, Apple Pay, Google Pay, and Velora gift cards.</p>
                    <hr class="w-80 ms-md-5">

                    <p class="p66 ms-md-5 mt-5 mt-md-4"><b>Can I apply a promo code or gift card at checkout?</b> <span class="ms-5"><i class="fa fa-caret-right" aria-hidden="true" data-bs-toggle="collapse" data-bs-target="#hide6"></i></span></p>
                    <p class="collapse p67 ms-md-5" id="hide6">Yes! You can enter your promo code or gift card in the designated field during checkout before payment.</p>
                    <hr class="w-80 ms-md-5">

                    <p class="p66 ms-md-5 mt-5 mt-md-4"><b>Can I modify or cancel my order after placing it?</b> <span class="ms-5"><i class="fa fa-caret-right" aria-hidden="true" data-bs-toggle="collapse" data-bs-target="#hide7"></i></span></p>
                    <p class="collapse p67 ms-md-5" id="hide7">Orders are processed quickly, but if you contact us within 1 hour of purchase, we’ll do our best to accommodate changes or cancellations.</p>
                    <hr class="w-80 ms-md-5">

                    <p class="p66 ms-md-5 mt-5 mt-md-4"><b>Do you offer pre-orders?</b> <span class="ms-5"><i class="fa fa-caret-right" aria-hidden="true" data-bs-toggle="collapse" data-bs-target="#hide8"></i></span></p>
                    <p class="collapse p67 ms-md-5" id="hide8">Yes, for select items. Pre-order details (estimated shipping date, charges, etc.) will be clearly noted on the product page.</p>
                    <hr class="w-80 ms-md-5">
                    
                </div>


                <div class="col-md-6">

                    <p class="p65 ms-md-5 mt-5"><b>Shipping & Delivery</b></p>

                    <p class="p66 ms-md-5 mt-5"><b>Where do you ship?</b> <span class="ms-5"><i class="fa fa-caret-right" aria-hidden="true" data-bs-toggle="collapse" data-bs-target="#hide9"></i></span></p>
                    <p class="collapse p67 ms-md-5" id="hide9">We currently ship across the India and select international countries. Shipping options and costs are calculated at checkout.</p>
                    <hr class="w-80 ms-md-5">

                    <p class="p66 ms-md-5 mt-5 mt-md-4"><b>How long does shipping take?</b> <span class="ms-5"><i class="fa fa-caret-right" aria-hidden="true" data-bs-toggle="collapse" data-bs-target="#hide10"></i></span></p>
                    <p class="collapse p67 ms-md-5" id="hide10">Standard shipping takes 3–7 business days. Expedited options are available at checkout.</p>
                    <hr class="w-80 ms-md-5">

                    <p class="p66 ms-md-5 mt-5 mt-md-4"><b>How can I track my order?</b> <span class="ms-5"><i class="fa fa-caret-right" aria-hidden="true" data-bs-toggle="collapse" data-bs-target="#hide11"></i></span></p>
                    <p class="collapse p67 ms-md-5" id="hide11">You’ll receive a tracking link via email once your order ships. You can also track your order anytime through your Velora account.</p>
                    <hr class="w-80 ms-md-5">

                    <p class="p66 ms-md-5 mt-5 mt-md-4"><b>What if my package is lost or delayed?</b> <span class="ms-5"><i class="fa fa-caret-right" aria-hidden="true" data-bs-toggle="collapse" data-bs-target="#hide12"></i></span></p>
                    <p class="collapse p67 ms-md-5" id="hide12">If your tracking hasn’t updated in 5+ days or your package is missing, reach out to our Support Team and we’ll help resolve it ASAP.</p>
                    <hr class="w-80 ms-md-5">
                    
                </div>


                <div class="col-md-6">

                    <p class="p65 ms-md-5 mt-5"><b>Sizing & Fit</b></p>

                    <p class="p66 ms-md-5 mt-5"><b>How do I know what size to order?</b> <span class="ms-5"><i class="fa fa-caret-right" aria-hidden="true" data-bs-toggle="collapse" data-bs-target="#hide13"></i></span></p>
                    <p class="collapse p67 ms-md-5" id="hide13">Each product page includes a detailed size guide and fit notes. We also include model sizing for reference.</p>
                    <hr class="w-80 ms-md-5">

                    <p class="p66 ms-md-5 mt-5 mt-md-4"><b>Do your clothes run true to size?</b> <span class="ms-5"><i class="fa fa-caret-right" aria-hidden="true" data-bs-toggle="collapse" data-bs-target="#hide14"></i></span></p>
                    <p class="collapse p67 ms-md-5" id="hide14">Most of our pieces run true to size, but we recommend checking individual product descriptions for specific fit guidance.</p>
                    <hr class="w-80 ms-md-5">

                    <p class="p66 ms-md-5 mt-5 mt-md-4"><b>What if I’m between sizes?</b> <span class="ms-5"><i class="fa fa-caret-right" aria-hidden="true" data-bs-toggle="collapse" data-bs-target="#hide15"></i></span></p>
                    <p class="collapse p67 ms-md-5" id="hide15">If you're between sizes, we suggest sizing up for a more relaxed fit or down for a snug fit — and always feel free to contact us for help!</p>
                    <hr class="w-80 ms-md-5">

                    <p class="p66 ms-md-5 mt-5 mt-md-4"><b>Can I return or exchange if it doesn’t fit?</b> <span class="ms-5"><i class="fa fa-caret-right" aria-hidden="true" data-bs-toggle="collapse" data-bs-target="#hide16"></i></span></p>
                    <p class="collapse p67 ms-md-5" id="hide16">Yes! We want you to love the way it fits. You can return or exchange eligible items within 14 days of delivery.</p>
                    <hr class="w-80 ms-md-5">
                    
                </div>
            </div>
        </div>



<div class="col-md-12" style="height: 50px;"></div>

    <div id="footer"></div>
    <script>
        $(document).ready(function() {
            $("#footer").load("footer.php")
        })
    </script>
</body>

</html>