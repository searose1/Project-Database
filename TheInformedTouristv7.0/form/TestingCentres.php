<?php include_once('whoVisited.php'); ?>

<!DOCTYPE html>
<html>

<head>

    <title>Testing Centres</title>

    <link rel="stylesheet" type="text/css" href="view.css">

    <link href="https://fonts.googleapis.com/css?family=Rancho" rel="stylesheet">

    <link rel="icon" type="image/gif/png" href="LogoFonts.png">

    <script type="text/javascript" src="view.js"></script>

</head>

<body id="main_body">

    <a href="../informed.php"><img id="top" src="LogoFonts.png" alt=""></a>
    <div id="form_container">

        <h1><a>Untitled Form</a></h1>
        <form id="form_32517" class="appnitro" method="post" action="testCentreIns.php">
            <div class="form_description">
                <h2>Testing Centres</h2>
                <p></p>
            </div>
            <ul>

                <li id="li_1">
                    <label class="description" for="element_2">Name of Testing Centre </label>
                    <div>
                        <input id="element_2" name="nametestcentre" class="element text medium" type="text" value="" />
                    </div>
                </li>
                
                <li id="li_2">
                    <label class="description" for="element_2">Website </label>
                    <div>
                        <input id="element_2" name="website" class="element text medium" type="text" maxlength="255" value="" />
                    </div>
                </li>
               
                <li id="li_3">
                    <label class="description" for="element_3">Address </label>
                    <div>
                        <input id="element_3" name="address" class="element text medium" type="text" value="" />
                    </div>
                </li>
                <li id="li_4">
                    <label class="description" for="element_4">Phone Number </label>
                    <div>
                        <input id="element_4" name="phonenumber" class="element text medium" type="text" maxlength="255" value="" />
                    </div>
                </li>
                    
                <li id="li_4">
                    <label class="description" for="element_4">Costs </label>
                    <div>
                        <input id="element_4" name="costTests" class="element text medium" type="text" maxlength="255" placeholder=" Example: €2.50 per sample" value="€" />
                    </div>
                </li>
                    
                <li id="li_3">
                    <label class="description" for="element_3">Details </label>
                    <div>
                        <textarea rows="7" cols="60" name="Details" form="usrform" placeholder="Enter text here...">
</textarea>
                    </div>
                </li>
                
                <li class="buttons">
                    <input type="hidden" name="form_id" value="32517" />

                    <input id="saveForm" class="button_text" type="submit" name="submit" value="Submit" />
                </li>
            </ul>

            <br/>

            <a href="../List_Forms_Health.php">Return to List of Forms</a>

        </form>
        <!--<div id="footer">
            Generated by <a href="http://www.phpform.org">pForm</a>
        </div>-->
    </div>
    <img id="bottom" src="bottom.png" alt="">
</body>

</html>