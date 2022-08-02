<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Template</title>

    <!-- Load Bootstrap 5 Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Load our styles bundle -->
    <link rel="stylesheet" href="./css/bundle.css">

</head>
<body>

    <?php 
    
        $isMirroredOnHorizontalLayout = false;

        $bootstrapOrderClass = $isMirroredOnHorizontalLayout ? 'order-md-2' : '';
    
    ?>

    <div class="Hero container-fluid">
        <div class="container">
            <div class="row">

                <div class="Hero__image col-md-6 <?= $bootstrapOrderClass ?>">
                    Some Image
                </div>

                <div class="Hero__text col-md-6">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>

            </div><!-- /row -->
        </div><!-- /container -->
    </div><!-- /container-fluid -->

    <footer>

        <!-- Load Boostrap 5 scripts bundle which includes Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

        <!-- Load our custom js scripts bundle -->
        <script src="dist/js/bundle.js"></script>

    </footer>
    
</body>
</html>