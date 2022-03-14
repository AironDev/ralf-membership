<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ralf Membership Form</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{asset('css/scrollbar.css')}}">
</head>

<body>

    <div class="main">
        <div class="container">
            <div class="signup-content">
                <div class="signup-img">
                    <img src="{{ asset('images/signup-img.jpg') }}" alt="">
                </div>
                <div class="signup-form" id="style-4-scrollbar" style="max-height: 100vh; overflow-y: scroll;">
                    @if($errors->any() )
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form method="POST" class="register-form" action="{{ route('memberships.store') }}" id="register-form">
                        @csrf()
                        <h2>membership registration form</h2>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="sur_name">Sur Name :</label>
                                <input type="text" name="sur_name" id="name" required />
                            </div>
                            <div class="form-group">
                                <label for="father_name">Other Names :</label>
                                <input type="text" name="other_names" id="father_name" required />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email">Email Address :</label>
                            <input type="text" name="email" id="email" required />
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label for="phone">Phone Number :</label>
                                <input type="text" name="phone" id="phone" required />
                            </div>

                            <div class="form-group">
                                <label for="whatsapp">Whatsapp Number :</label>
                                <input type="text" name="whatsapp" id="whatsapp" required />
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="birth_date">DOB :</label>
                            <input type="text" name="birth_date" id="birth_date">
                        </div>


                        <div class="form-group">
                            <label for="nationality">Nationality :</label>
                            <input type="text" name="nationality" id="nationality" required />
                        </div>


                        <div class="form-radio">
                            <label for="gender" class="radio-label">Gender :</label>
                            <div class="form-radio-item">
                                <input type="radio" name="gender" id="male" checked>
                                <label for="male">Male</label>
                                <span class="check"></span>
                            </div>
                            <div class="form-radio-item">
                                <input type="radio" name="gender" id="female">
                                <label for="female">Female</label>
                                <span class="check"></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="institution">Institution :</label>
                            <input type="text" name="institution" id="institution" required />
                        </div>

                        <div class="form-group">
                            <label for="graduation_year">Year of Graduation :</label>
                            <input type="text" name="graduation_year" id="graduation_year">
                        </div>


                        <div class="form-group">
                            <label for="course_of_study">Course of Study :</label>
                            <input type="text" name="course_of_study" id="course_of_study">
                        </div>





                        <div class="form-group">
                            <label for="qualification">Educational Qualfication :</label>
                            <div class="form-select">
                                <select name="qualification" id="qualification">
                                    <option value=""></option>
                                    <option value="HND">HND</option>
                                    <option value="Bachelors Degree">Bachelors Degree</option>
                                    <option value="Masters">Masters</option>
                                    <option value="PHD">PHD</option>
                                </select>
                                <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                            </div>
                        </div>
                        

                         <div class="form-group">
                            <label for="startup_overview">Tell us about your startup :</label>
                            <textarea name="startup_overview" id="" cols="30" rows="10"></textarea>
                        </div>


                        <div class="form-group">
                            <label for="current_stage">What stage are you at :</label>
                            <div class="form-select">
                                <select name="current_stage" id="current_stage">
                                    <option value=""></option>
                                    <option value="ideation">Idea Stage</option>
                                    <option value="mvp">MVP</option>
                                    <option value="startup">Start-Up Company ( Monthly Revenue above 100,000 Dollars</option>
                                </select>
                                <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="social_problem">What social problem are you passionate about solving ? :</label>
                            <input type="text" name="social_problem" id="social_problem">
                        </div>

                        <div class="form-group">
                            <label for="why_solve_problem">Why are you passionate about solving this problem :</label>
                            <input type="text" name="why_solve_problem" id="why_solve_problem">
                        </div>

                        <div class="form-group">
                            <label for="team_count">How many team members do you have :</label>
                            <input type="text" name="team_count" id="team_count">
                        </div>



                        <div class="form-group">
                            <label for="referer">How did you get to hear about this community :</label>
                            <div class="form-select">
                                <select name="referer" id="referer">
                                    <option value="Friend">Through a friend</option>
                                    <option value="Instagram">Instagram</option>
                                    <option value="Facebook">Facebook</option>
                                    <option value="Whatsapp">Whatsapp</option>
                                    <option value="Others">Others</option>
                                </select>
                                <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="why_join_community">Why have you decided to join RALF :</label>
                            <input type="text" name="why_join_community" id="why_join_community">
                        </div>




                        <div class="form-radio">
                            <label for="is_entreprenuer" class="radio-label">Are you a social impact driven entrepreneur with an idea or an already existing startuo company for development in Africa :</label>
                            <div class="form-radio-item">
                                <input type="radio" value="1" name="is_entreprenuer" id="yes" checked>
                                <label for="yes">Yes</label>
                                <span class="check"></span>
                            </div>
                            <div class="form-radio-item">
                                <input type="radio" value="0" name="is_entreprenuer" id="no">
                                <label for="no">No</label>
                                <span class="check"></span>
                            </div>
                        </div>



                        <div class="form-submit">
                            <input type="submit" value="Reset All" class="submit" name="reset" id="reset" />
                            <input type="submit" value="Submit Form" class="submit" name="submit" id="submit" />
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
