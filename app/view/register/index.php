<div class="container-fluid d-flex">
    <div class="col-lg-4 col-md-12 wow fadeInUp m-auto mt-5" data-wow-delay="0.5s">
        <h2>Register Now!</h2>
        <form action="register/save" method="post">

            <div class="row g-3">
                <div class="col-md-12">
                    <div class="form-floating">
                        <!-- <select style="background:none" name="country" id="country" class="form-control">
                                        <option value="">India</option>
                                    </select> -->
                        <input style="background:none" class="form-control" type="text" value="India" disabled>
                        <label for="name">Country</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating">
                        <select style="background:none" name="state_id" id="states_select" class="form-control">
                            <option>--Select State--</option>
                            <?php
                                            foreach($data as $info)
                                            {
                                        ?>
                            <option value="<?=$info['id'] ?>"><?=$info['name'] ?></option>
                            <?php
                                            }
                                        ?>
                        </select>
                        <label for="name">States</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating">
                        <select style="background:none" name="city_id" id="cities_select" class="form-control">
                        </select>
                        <label for="name">City</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="reg_name" placeholder="Your Name">
                        <label for="name">Your Name</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating">
                        <input type="email" class="form-control" id="reg_email" placeholder="Your Email">
                        <label for="email">Your Email</label>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-floating">
                        <input type="number" class="form-control" id="reg_mobile" placeholder="Mobile No.">
                        <label for="mobile">Mobile No.</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating">
                        <input type="password" class="form-control" placeholder="Create Password" id="reg_password">
                        <label for="password">Create Password</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating">
                        <input type="password" class="form-control" placeholder="Confirm Password" id="reg_cpassword">
                        <label for="password">Confirm Password</label>
                    </div>
                </div>
                <div class="col-12">
                    <button id="register" class="btn btn-primary w-100 py-3" type="button">Register</button>
                </div>
                <div class="col-12 text-center">
                <a href="<?=ROOT?>register/login" id="register" class="btn btn-dark bg-dark w-100 py-3" type="button">Already have an account!</a>
                    
                    
                </div>
            </div>
        </form>
    </div>
</div>