<?php
    // include "./databases/database.php";
?>

<!DOCTYPE html>
<html>
    <header>
        <title>Lista</title>
        <?php include"./header.php"; ?>

        <script src="./processors/jsProcessor.js"></script>

        <style>
            .hide {
                display: none;
            }

            .box {
                border: 2px solid gray;
                width: 100px;
                height: 100px;
                margin: auto;
                margin-top: 30px;
            }

            .square {
                width: 80px;
                height: 80px;
                background-color: blueviolet;
                margin: auto;
            }

            /* this cluase has to be below box, else wont effect */
            .drag-over {
                border: 2px dashed red;
            }
        </style>
    </header>
    
    <script>
        // testing();
        displayNavBar(false, "mainHeader");
    </script>

    <body>
        <div class="mainContainer">
            <div class="firstDiv">
                <div class="secondDiv">
                </div>
            </div>
        </div>

        <script src="./processors/dragNDrop.js"></script>
    </body>

    <footer>
        <?php include"./footer.php"; ?>
    </footer>
</html>