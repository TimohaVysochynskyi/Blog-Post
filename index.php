<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog-Post | Main</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <header class="p-3 mb-3 border-bottom">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <h1 class="fs-4 mt-1" style="margin-right: 30px;">Blog-Post</h1>
    
                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="#" class="nav-link px-2 link-secondary">Main</a></li>
                    <? if(!empty($_COOKIE['email']) && !empty($_COOKIE['name'])): ?>
                    <li><a href="./user/dashboard.html" class="nav-link px-2 link-body-emphasis">Dashboard</a></li>
                    <li><a href="./user/new-post.html" class="nav-link px-2 link-body-emphasis">New post</a></li>
                    <li><a href="./user/profile.html" class="nav-link px-2 link-body-emphasis">Profile</a></li>
                    <? endif; ?>
                </ul>

                <?php if(!empty($_COOKIE['email']) && !empty($_COOKIE['name'])): ?>
                <div class="dropdown text-end">
                    <a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="./images/user.png" alt="mdo" width="32" height="32" class="rounded-circle">
                    </a>
                    <ul class="dropdown-menu text-small">
                        <li><a class="dropdown-item" href="./user/dashboard.html">Dashboard</a></li>
                        <li><a class="dropdown-item" href="./user/new-post.html">New post</a></li>
                        <li><a class="dropdown-item" href="./user/profile.html">Profile</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Sign out</a></li>
                    </ul>
                </div>
                <?php else: ?>
                <div class="col-md-3 text-end">
                    <a href="./auth/sign-in.html" class="btn btn-outline-primary me-2">Login</a>
                    <a href="./auth/sign-up.html" class="btn btn-primary">Sign-up</a>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </header>



    <div class="album py-5 bg-body-tertiary">
        <div class="container">
    
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <div class="col">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <p class="card-text fs-5" style="font-weight: 500;">Title</p>
                            <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta temporibus quod labore tempore vitae est perferendis mollitia quam.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary" onclick="leaveComment()">Add comment</button>
                                </div>
                                <small class="text-body-secondary">9 mins</small>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
  

    <div id="leave-comment" class="modal modal-sheet position-fixed bg-body-secondary p-4 py-md-5" tabindex="-1" role="dialog"
         style="flex-direction: column; justify-content: center;">
        <div class="modal-dialog w-50" role="document">
            <div class="modal-content rounded-4 shadow">
                <div class="modal-header p-5 pb-4 border-bottom-0">
                    <h1 class="fw-bold mb-0 fs-2">Leave a comment</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onclick="closeComment()"></button>
                </div>
    
                <div class="modal-body p-5 pt-0">
                    <form method="post">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control rounded-3" required>
                            <label>Name</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control rounded-3" required>
                            <label>Email address</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control rounded-3" required>
                            <label>Message</label>
                        </div>
                        <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <div class="container">
        <footer class="py-3 my-4">
            <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Main</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">FAQs</a></li>
            </ul>
            <p class="text-center text-body-secondary">© 2023 Company, Inc</p>
        </footer>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="./js/script.js"></script>
</body>
</html>