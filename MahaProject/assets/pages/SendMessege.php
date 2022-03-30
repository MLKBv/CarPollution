<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>ارسل رسالة</title>

    <!-- jQuery -->
    <script src="assets/js/jquery-2.0.0.min.js" type="text/javascript"></script>

    <!-- Bootstrap4 files-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>

    <div class="container padding-y">
        <div class="card mx-auto" style="max-width: 420px; margin:100px;">
            <div class="card-body text-center">
                <div class="row">
                    <div class="col">
                        <form action="#" method="post">

                            <div class="form-group">
                                <button type="submit" class="btn btn-warning"><i class="bi bi-save"></i>ارسال
                                    تحذير</button>
                            </div>

                        </form>
                    </div>
                    <div class="col">
                        <form action="../pages/SendMessegeTwo.php" method="post">

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">ارسال رسالة</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>