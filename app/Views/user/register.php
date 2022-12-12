<main class="container h-100 pt-5 pb-5">
    <div class="jumbotron">

      
        <div class=" my-5">
            <h1 class="display-5">Registration Form</h1>
            <p class='lead'>Kindly fill the form below carefully to register for the event.</p>
            <p class="lead">Please do not register more than once as duplicate entries will be discarded.</p>
        </div>

          <!-- Success Alert -->
          <div id="alert-success" class="alert alert-success alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>

         <!-- Error Alert -->
         <div id="alert-danger" class="alert alert-danger alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>

        <form action="" id="register_form" method="post">
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="first_name">First Name</label>
                    <input type="text" class="form-control" name="first_name" id="first_name" value="<?= set_value('first_name') ?>" placeholder="First Name">
                </div>
                <div class="form-group col-md-4">
                    <label for="middle_name">Middle Name</label>
                    <input type="text" class="form-control" name="middle_name" id="middle_name" value="<?= set_value('middle_name') ?>" placeholder="Middle Name">
                </div>
                <div class="form-group col-md-4">
                    <label for="last_name">Last Name</label>
                    <input type="text" class="form-control" name="last_name" id="last_name" value="<?= set_value('last_name') ?>" placeholder="Last Name">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" id="email" value="<?= set_value('email') ?>" placeholder="Email">
                </div>
                <div class="form-group col-md-6">
                    <label for="phone">Phone</label>
                    <input type="tel" class="form-control" name="phone" id="phone" value="<?= set_value('phone') ?>" placeholder="Phone">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="inputAddress">Address</label>
                    <input type="text" class="form-control" name="residence_address" id="inputAddress" value="<?= set_value('residence_address') ?>" placeholder="1234 Main St">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputCity">City</label>
                    <input type="text" class="form-control" name="city_of_residence" id="inputCity" value="<?= set_value('city_of_residence') ?>" placeholder="City of Residence">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputState">State</label>
                    <select id="inputState" name="state_of_residence" value="<?= set_value('state_of_residence') ?>" class="form-control">
                        <option disabled selected>Choose State of Residence</option>
                        <option value="Benue">Benue</option>
                        <option value="Plateau">Plateau</option>
                        <option value="Abuja">Abuja</option>
                        <option value="Kwara">Kwara</option>
                        <option value="Kogi">Kogi</option>
                    </select>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="job_description">Job Description</label>
                    <select id="job_description" name="job_description" value="<?= set_value('job_description') ?>" class="form-control">
                        <option disabled selected hidden>Choose Job</option>
                        <option value="Product Manager">Product Manager</option>
                        <option value="Fullstack Software Developer">Fullstack Software Developer</option>
                        <option value="Devops Engineer">Devops Engineer</option>
                        <option value="UI/UX Designer">UI/UX Designer</option>
                        <option value="Backend Engineer">Backend Engineer</option>
                        <option value="Mobile Developer">Mobile Developer</option>
                        <option value="Frontend Developer">Frontend Developer</option>
                        <option value="Robots Engineer">Robots Engineer</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputState">Experience Level</label>
                    <select id="inputState" name="experience_level" value="<?= set_value('experience_level') ?>" class="form-control">
                        <option disabled selected hidden>Choose Experience Level</option>
                        <option value="1 Year">1 Year</option>
                        <option value="2 Years">2 Years</option>
                        <option value="Over 5 Years">Over 5 Years</option>
                        <option value="Newbie">Newbie</option>

                    </select>
                </div>
            </div>
            <div class="col-md-12">
                <button type="submit" id="register" class="read_more">Register</button>
            </div>
        </form>
    </div>

</main>