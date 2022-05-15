
    <!-- <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Table - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="./assets/bootstrap/css/style.css"> -->
    <?php include_once APPROOT . '/views/inc/head.php'; ?>


<body id="page-top">
    <div id="wrapper">
    <?php include_once APPROOT . '/views/inc/sidebar.php'; ?>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
            <?php include_once APPROOT . '/views/inc/navbar.php';; ?>
                <div class="container-fluid">
                    <h3 class="text-dark mb-4">Team</h3>
                    <div class="card shadow">
                        <div class="card-header py-3 d-flex justify-content-between ">
                            <p class="text-primary m-0 fw-bold">Students Info</p>
                            <button class="btn btn-primary">Add Students</button>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 text-nowrap">
                                </div>
                                <div class="col-md-6">
                                    <div class="text-md-end dataTables_filter" id="dataTable_filter"><label class="form-label"><input type="search" class="form-control form-control-sm" aria-controls="dataTable" placeholder="Search"></label></div>
                                </div>
                            </div>
                            <div class="container table-responsive contacts list-contacts">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Nom complet</th>
                                            <th>Matricule</th>
                                            <th>Genre</th>
                                            <th>Class</th>
                                            <th>Parents</th>
                                            <th>Adresse</th>
                                            <th>Date de naissance</th>
                                            <th>Email</th>
                                            <th>nom du parents</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="user-info d-flex alignitems-center">
                                                    <div class="user-info__img">
                                                        <img class="me-3" src="./assets/img/avatars/avatar (1).svg" alt="User Img" width="55">
                                                    </div>
                                                    <div class="user-info__basic">
                                                        <h5 class="mb-0">jamal raouj</h5>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>123</td>
                                            <td>femme</td>
                                            <td>classe 1</td>
                                            <td>jamal</td>
                                            <td>2000/03/04</td>
                                            <td>jamal@gmail.com</td>
                                            <td>2000/03/04</td>
                                            <td>jamal raouj</td>
                                            <td><span class=" btn btn-success btn-sm text-white">update</span></td>
                                            <td>
                                                <button class="btn btn-danger btn-sm">Delete</button>
                                            </td>
                                        </tr>
                    
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <?php include_once APPROOT . '/views/inc/footer.php'; ?>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
    <!-- <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/theme.js"></script> -->
    <?php include_once APPROOT . '/views/inc/linkJS.php'; ?>
