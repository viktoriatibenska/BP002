<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script src="js/jquery.min.js"></script>
        <script type="text/javascript">
            // If the page is loaded
            $(document).ready(function () {

                // After clicking on the following button of description
                $(".button").click(function () {

                    // Retreive informations about the parrent element
                    // and prepare the request
                    var element = $(this).prev().attr("class"); // unique input identificator of some state
                    var value = $(this).prev().val(); // its value

                    // Sending the request
                    $.ajax({
                        method: "POST",
                        url: "index.php",
                        data: {
                            action: "pattern",    // a name of controller which will be called
                            method: "update",   // a name of method which will be called
                            arguments: {        // data
                                element: element,
                                value: value
                            }
                        }
                    }).done(function (msg) {
                        // Showing results
                        $("#result").html("Reload in 5 sec.<br />" + msg);
                        setTimeout(function () {// wait for 5 secs(2)
                            location.reload(); // then reload the page.(3)
                        }, 5000);
                    });
                });
            });
        </script>
    </head>
    <body>

        <div id="result"></div>

        <!-- Element hodling the one text description value of state-->
        New description: <input type="text" class="<?php echo $pattern->getId(); ?>" value="" />
        <input type="button" class="button" value="Proceed" />

        <br />

        <?php
        echo 'Id:' . $pattern->getId() . '<br/>';
        echo 'Name:' . $pattern->getName() . '<br/>';
        echo 'Description:' . $pattern->getDescription() . '<br/>';
        echo 'Context:' . $pattern->getContext() . '<br/>';
        echo 'Problems:' . $pattern->getProblems() . '<br/>';
        echo 'Consequences:' . $pattern->getConsequences() . '<br/>';
        echo 'Solution:' . $pattern->getSolution() . '<br/>';
        ?>  

    </body>
</html>