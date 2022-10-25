<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP Package | Pricing</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <style>
        body {
            background: rgb(133, 14, 53);
            color: rgb(255, 245, 228);
        }
    </style>
</head>

<body>

    <!-- navbar -->
    <div class="container mt-4 mb-5" style="padding: 0">
        <nav class="navbar pull-right navbar-expand-lg bg-light" style="background-color: rgb(133, 14, 53)!important; color:rgb(255, 245, 228)!important">
            <div class="container-fluid">
                <a class="navbar-brand" href="#" style=" color:rgb(255, 245, 228)!important"><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="rgb(255, 245, 228)" class="bi bi-box-seam" viewBox="0 0 16 16">
                            <path d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5l2.404.961L10.404 2l-2.218-.887zm3.564 1.426L5.596 5 8 5.961 14.154 3.5l-2.404-.961zm3.25 1.7-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923l6.5 2.6zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464L7.443.184z" />
                        </svg></span> OOP Package</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="index.php" style="color:rgb(255, 245, 228)!important">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#" style="color:rgb(255, 124, 124)!important">Pricing</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <div class="container mt-5">
        <div class="row mt-5">
            <p class="lead" style="padding: 0;">Default Package</p>

            <table class="table" style="color:rgb(255, 245, 228)">
                <thead>
                    <tr>
                        <th scope="col">Weight</th>
                        <th scope="col">Air</th>
                        <th scope="col">Truck</th>
                        <th scope="col">Mail</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1 to 8</th>
                        <td>2.00</td>
                        <td>1.50</td>
                        <td>.50</td>
                    </tr>
                    <tr>
                        <th scope="row">9 to 16</th>
                        <td>3.00</td>
                        <td>2.35</td>
                        <td>1.50</td>
                    </tr>
                    <tr>
                        <th scope="row">17 and over</th>
                        <td>4.50</td>
                        <td>3.25</td>
                        <td>2.15</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="row mt-5">
            <p class="lead" style="padding: 0;">Insured Package</p>

            <table class="table" style="color:rgb(255, 245, 228)">
                <thead>
                    <tr>
                        <th scope="col">Shipping Cost Before Insurance</th>
                        <th scope="col">Additional Cost</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">0 to 1.00</th>
                        <td>2.45</td>
                    </tr>
                    <tr>
                        <th scope="row">1.01 to 3.00</th>
                        <td>3.95</td>
                    </tr>
                    <tr>
                        <th scope="row">3.01 and over</th>
                        <td>5.55</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- footer -->
    <div class="container mt-5">
        <hr>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                <p class="lead">References</p>
                <a href="https://www.w3schools.com/php/php_oop_inheritance.asp" style="color:rgb(255, 245, 228)" target="_blank">w3schools.com/php/php_oop_inheritance</a>
                <a href="https://colorhunt.co/palette/820000b9005bff7c7cfee0c0" style="color:rgb(255, 245, 228)" target="_blank">colorhunt.co/palette/820000b9005bff7c7cfee0c0</a>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                <p class="lead footer-title-text">Links</p>
                <a href="https://github.com/CattoDoesCode/midterm-ds-a" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="rgb(255, 245, 228)" class="bi bi-github" viewBox="0 0 16 16">
                        <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"></path>
                    </svg>
                </a>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 mb-3" style="color:rgb(255, 245, 228)">
                <figure>
                    <blockquote class="blockquote">
                        <p>©2022 Xel Morales. All rights reserved.</p>
                    </blockquote>
                    <figcaption class="blockquote-footer" style="color: rgb(255, 245, 228)">
                        Made with custom <cite title="Source Title">HTML, CSS, Bootstrap 5</cite>
                    </figcaption>
                </figure>
            </div>
        </div>
    </div>

</body>

</html>