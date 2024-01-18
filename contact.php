<?php
    session_start();
    require_once 'header.php';
?>
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <div class="card">
                        <div class="card-header bg-dark text-white">
                            Contact
                        </div>
                        <div class="card-body">
                            <form action="contact_post.php" method="post">
                                <div class="mb-3">
                                    <label for="exampleInput1" class="form-label">Name</label>
                                    <input type="name" class="form-control" id="exampleInput1" name="name">
                                    <?php 
                                    if(isset($_SESSION['name_error'])) {
                                        echo $_SESSION['name_error'];
                                    }
                                    ?>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInput2" class="form-label">Email address</label>
                                    <input type="email" class="form-control" id="exampleInput2" name="email">
                                    <?php 
                                    if(isset($_SESSION['email_error'])) {
                                        echo $_SESSION['email_error'];
                                    }
                                    ?>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInput3" class="form-label">Your MSG</label>
                                    <textarea id="exampleInput3" rows="10" class="form-control" name="msg"></textarea>
                                </div>                               
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
<?php 
session_unset();
require_once 'footer.php';
?>
