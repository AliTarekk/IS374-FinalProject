
@extends("mainn")

@section("cont")
           






                <!--== DASHBOARD INFO ==-->
                <div class="sb2-2-1">
                    <h2>Admin Dashboard</h2>
                    <p>The .table class adds basic styling (light padding and only horizontal dividers) to a table:</p>
                    <div class="db-2">
                        <ul>
                            <li>
                                <div class="dash-book dash-b-1">
                                    <h5>All Courses</h5>
                                    <h4>948</h4>
                                    <a href="#">View more</a>
                                </div>
                            </li>
                            <li>
                                <div class="dash-book dash-b-2">
                                    <h5>Admission</h5>
                                    <h4>672</h4>
                                    <a href="#">View more</a>
                                </div>
                            </li>
                            <li>
                                <div class="dash-book dash-b-3">
                                    <h5>Students</h5>
                                    <h4>689</h4>
                                    <a href="#">View more</a>
                                </div>
                            </li>
                            <li>
                                <div class="dash-book dash-b-4">
                                    <h5>Enquiry</h5>
                                    <h4>24</h4>
                                    <a href="#">View more</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>





                <!--== User Details ==-->
                <div class="sb2-2-3">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>Student Details</h4>
                                    <p>All about students like name, student id, phone, email, country, city and more</p>
                                </div>
                                <div class="tab-inn">
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>User</th>
                                                    <th>Name</th>
                                                    <th>Phone</th>
                                                    <th>Email</th>
                                                    <th>Country</th>
                                                    <th>Id</th>
                                                    <th>Date of birth</th>
													<th>Status</th>
													<th>View</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><span class="list-img"><img src="images/user/1.png" alt=""></span>
                                                    </td>
                                                    <td><a href="#"><span class="list-enq-name">Marsha Hogan</span><span class="list-enq-city">Illunois, United States</span></a>
                                                    </td>
                                                    <td>+01 3214 6522</td>
                                                    <td>chadengle@dummy.com</td>
                                                    <td>united states</td>
                                                    <td>ST17241</td>
													<td>03 Jun 1990</td>
                                                    <td>
                                                        <span class="label label-success">Active</span>
                                                    </td>
													<td><a href="admin-student-details.html" class="ad-st-view">View</a></td>
                                                </tr>
                                                <tr>
                                                    <td><span class="list-img"><img src="images/user/2.png" alt=""></span>
                                                    </td>
                                                    <td><a href="#"><span class="list-enq-name">Lucas Caden</span><span class="list-enq-city">Illunois, United States</span></a>
                                                    </td>
                                                    <td>+01 8574 6854</td>
                                                    <td>lucas@gmail.com</td>
                                                    <td>Illinois</td>
                                                    <td>ST10231</td>
													<td>16 Feb 1987</td>
                                                    <td>
                                                        <span class="label label-success">Active</span>
                                                    </td>
													<td><a href="admin-student-details.html" class="ad-st-view">View</a></td>
                                                </tr>
                                                <tr>
                                                    <td><span class="list-img"><img src="images/user/4.png" alt=""></span>
                                                    </td>
                                                    <td><a href="#"><span class="list-enq-name">Ethan Oliver</span><span class="list-enq-city">Illunois, United States</span></a>
                                                    </td>
                                                    <td>+01 8574 6854</td>
                                                    <td>Ethan@gmail.com</td>
                                                    <td>Illinois</td>
                                                    <td>ST32168</td>
													<td>21 Jun 1992</td>
                                                    <td>
                                                        <span class="label label-success">Active</span>
                                                    </td>
													<td><a href="admin-student-details.html" class="ad-st-view">View</a></td>
                                                </tr>
                                                <tr>
                                                    <td><span class="list-img"><img src="images/user/5.png" alt=""></span>
                                                    </td>
                                                    <td><a href="#"><span class="list-enq-name">Ethan Oliver</span><span class="list-enq-city">Illunois, United States</span></a>
                                                    </td>
                                                    <td>+01 8574 6854</td>
                                                    <td>Ethan@gmail.com</td>
                                                    <td>Illinois</td>
                                                    <td>ST32168</td>
													<td>21 Jun 1992</td>
                                                    <td>
                                                        <span class="label label-success">Active</span>
                                                    </td>
													<td><a href="admin-student-details.html" class="ad-st-view">View</a></td>
                                                </tr>
                                                <tr>
                                                    <td><span class="list-img"><img src="images/user/1.png" alt=""></span>
                                                    </td>
                                                    <td><a href="#"><span class="list-enq-name">Marsha Hogan</span><span class="list-enq-city">Illunois, United States</span></a>
                                                    </td>
                                                    <td>+01 3214 6522</td>
                                                    <td>chadengle@dummy.com</td>
                                                    <td>united states</td>
                                                    <td>ST17241</td>
													<td>03 Jun 1990</td>
                                                    <td>
                                                        <span class="label label-success">Active</span>
                                                    </td>
													<td><a href="admin-student-details.html" class="ad-st-view">View</a></td>
                                                </tr>
                                                <tr>
                                                    <td><span class="list-img"><img src="images/user/2.png" alt=""></span>
                                                    </td>
                                                    <td><a href="#"><span class="list-enq-name">Lucas Caden</span><span class="list-enq-city">Illunois, United States</span></a>
                                                    </td>
                                                    <td>+01 8574 6854</td>
                                                    <td>lucas@gmail.com</td>
                                                    <td>Illinois</td>
                                                    <td>ST10231</td>
													<td>16 Feb 1987</td>
                                                    <td>
                                                        <span class="label label-success">Active</span>
                                                    </td>
													<td><a href="admin-student-details.html" class="ad-st-view">View</a></td>
                                                </tr>
                                                <tr>
                                                    <td><span class="list-img"><img src="images/user/4.png" alt=""></span>
                                                    </td>
                                                    <td><a href="#"><span class="list-enq-name">Ethan Oliver</span><span class="list-enq-city">Illunois, United States</span></a>
                                                    </td>
                                                    <td>+01 8574 6854</td>
                                                    <td>Ethan@gmail.com</td>
                                                    <td>Illinois</td>
                                                    <td>ST32168</td>
													<td>21 Jun 1992</td>
                                                    <td>
                                                        <span class="label label-success">Active</span>
                                                    </td>
													<td><a href="admin-student-details.html" class="ad-st-view">View</a></td>
                                                </tr>
                                                <tr>
                                                    <td><span class="list-img"><img src="images/user/5.png" alt=""></span>
                                                    </td>
                                                    <td><a href="#"><span class="list-enq-name">Ethan Oliver</span><span class="list-enq-city">Illunois, United States</span></a>
                                                    </td>
                                                    <td>+01 8574 6854</td>
                                                    <td>Ethan@gmail.com</td>
                                                    <td>Illinois</td>
                                                    <td>ST32168</td>
													<td>21 Jun 1992</td>
                                                    <td>
                                                        <span class="label label-success">Active</span>
                                                    </td>
													<td><a href="admin-student-details.html" class="ad-st-view">View</a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>







                <!--== User Details ==-->
                <div class="sb2-2-3">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>Course Details</h4>
                                    <p>All about courses, program structure, fees, best course lists (ranking), syllabus, teaching techniques and other details.</p>
                                </div>
                                <div class="tab-inn">
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Image</th>
                                                    <th>Course Name</th>
													<th>Category</th>
                                                    <th>Durations</th>
													<th>Start Date</th>
                                                    <th>End Date</th>
                                                    <th>Total Seats</th>
													<th>Status</th>
													<th>View</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><span class="list-img"><img src="images/course/sm-1.jpg" alt=""></span>
                                                    </td>
                                                    <td><a href="admin-student-details.html"><span class="list-enq-name">Aerospace Engineering</span><span class="list-enq-city">Illunois, United States</span></a>
                                                    </td>
                                                    <td>Engineering</td>
                                                    <td>60 Days(420hrs)</td>
                                                    <td>03 Jun 2018</td>
                                                    <td>12 Aug 2018</td>
													<td>74</td>
                                                    <td>
                                                        <span class="label label-success">Active</span>
                                                    </td>
													<td><a href="admin-student-details.html" class="ad-st-view">View</a></td>
                                                </tr>
                                                <tr>
                                                    <td><span class="list-img"><img src="images/course/sm-5.jpg" alt=""></span>
                                                    </td>
                                                    <td><a href="admin-student-details.html"><span class="list-enq-name">Fashion Technology</span><span class="list-enq-city">Illunois, United States</span></a>
                                                    </td>
                                                    <td>Fashion</td>
                                                    <td>30 Days(420hrs)</td>
                                                    <td>01 Nov 2018</td>
                                                    <td>01 Dec 2018</td>
													<td>30</td>
                                                    <td>
                                                        <span class="label label-success">Active</span>
                                                    </td>
													<td><a href="admin-student-details.html" class="ad-st-view">View</a></td>
                                                </tr>
                                                <tr>
                                                    <td><span class="list-img"><img src="images/course/sm-2.jpg" alt=""></span>
                                                    </td>
                                                    <td><a href="admin-student-details.html"><span class="list-enq-name">Agriculture Courses</span><span class="list-enq-city">Illunois, United States</span></a>
                                                    </td>
                                                    <td>Agriculture</td>
                                                    <td>25 Days(420hrs)</td>
                                                    <td>05 Jan 2018</td>
                                                    <td>25 Jan 2018</td>
													<td>25</td>
                                                    <td>
                                                        <span class="label label-success">Active</span>
                                                    </td>
													<td><a href="admin-student-details.html" class="ad-st-view">View</a></td>
                                                </tr>
                                                <tr>
                                                    <td><span class="list-img"><img src="images/course/sm-3.jpg" alt=""></span>
                                                    </td>
                                                    <td><a href="admin-student-details.html"><span class="list-enq-name">Marine Engineering</span><span class="list-enq-city">Illunois, United States</span></a>
                                                    </td>
                                                    <td>Ocean / Marine</td>
                                                    <td>06 Months</td>
                                                    <td>12 Feb 2018</td>
                                                    <td>14 Aug 2018</td>
													<td>68</td>
                                                    <td>
                                                        <span class="label label-success">Active</span>
                                                    </td>
													<td><a href="admin-student-details.html" class="ad-st-view">View</a></td>
                                                </tr>
                                                <tr>
                                                    <td><span class="list-img"><img src="images/course/sm-4.jpg" alt=""></span>
                                                    </td>
                                                    <td><a href="admin-student-details.html"><span class="list-enq-name">Building, Construction Management</span><span class="list-enq-city">Illunois, United States</span></a>
                                                    </td>
                                                    <td>Construction</td>
                                                    <td>1 Year</td>
                                                    <td>05 Mar 2018</td>
                                                    <td>16 Mar 2018</td>
													<td>72</td>
                                                    <td>
                                                        <span class="label label-success">Active</span>
                                                    </td>
													<td><a href="admin-student-details.html" class="ad-st-view">View</a></td>
                                                </tr>
                                                <tr>
                                                    <td><span class="list-img"><img src="images/course/sm-1.jpg" alt=""></span>
                                                    </td>
                                                    <td><a href="admin-student-details.html"><span class="list-enq-name">Aerospace Engineering</span><span class="list-enq-city">Illunois, United States</span></a>
                                                    </td>
                                                    <td>Engineering</td>
                                                    <td>60 Days(420hrs)</td>
                                                    <td>03 Jun 2018</td>
                                                    <td>12 Aug 2018</td>
													<td>74</td>
                                                    <td>
                                                        <span class="label label-success">Active</span>
                                                    </td>
													<td><a href="admin-student-details.html" class="ad-st-view">View</a></td>
                                                </tr>
                                                <tr>
                                                    <td><span class="list-img"><img src="images/course/sm-5.jpg" alt=""></span>
                                                    </td>
                                                    <td><a href="admin-student-details.html"><span class="list-enq-name">Fashion Technology</span><span class="list-enq-city">Illunois, United States</span></a>
                                                    </td>
                                                    <td>Fashion</td>
                                                    <td>30 Days(420hrs)</td>
                                                    <td>01 Nov 2018</td>
                                                    <td>01 Dec 2018</td>
													<td>30</td>
                                                    <td>
                                                        <span class="label label-success">Active</span>
                                                    </td>
													<td><a href="admin-student-details.html" class="ad-st-view">View</a></td>
                                                </tr>
                                                <tr>
                                                    <td><span class="list-img"><img src="images/course/sm-2.jpg" alt=""></span>
                                                    </td>
                                                    <td><a href="admin-student-details.html"><span class="list-enq-name">Agriculture Courses</span><span class="list-enq-city">Illunois, United States</span></a>
                                                    </td>
                                                    <td>Agriculture</td>
                                                    <td>25 Days(420hrs)</td>
                                                    <td>05 Jan 2018</td>
                                                    <td>25 Jan 2018</td>
													<td>25</td>
                                                    <td>
                                                        <span class="label label-success">Active</span>
                                                    </td>
													<td><a href="admin-student-details.html" class="ad-st-view">View</a></td>
                                                </tr>
                                                <tr>
                                                    <td><span class="list-img"><img src="images/course/sm-3.jpg" alt=""></span>
                                                    </td>
                                                    <td><a href="admin-student-details.html"><span class="list-enq-name">Marine Engineering</span><span class="list-enq-city">Illunois, United States</span></a>
                                                    </td>
                                                    <td>Ocean / Marine</td>
                                                    <td>06 Months</td>
                                                    <td>12 Feb 2018</td>
                                                    <td>14 Aug 2018</td>
													<td>68</td>
                                                    <td>
                                                        <span class="label label-success">Active</span>
                                                    </td>
													<td><a href="admin-student-details.html" class="ad-st-view">View</a></td>
                                                </tr>
                                                <tr>
                                                    <td><span class="list-img"><img src="images/course/sm-4.jpg" alt=""></span>
                                                    </td>
                                                    <td><a href="admin-student-details.html"><span class="list-enq-name">Building, Construction Management</span><span class="list-enq-city">Illunois, United States</span></a>
                                                    </td>
                                                    <td>Construction</td>
                                                    <td>1 Year</td>
                                                    <td>05 Mar 2018</td>
                                                    <td>16 Mar 2018</td>
													<td>72</td>
                                                    <td>
                                                        <span class="label label-success">Active</span>
                                                    </td>
													<td><a href="admin-student-details.html" class="ad-st-view">View</a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>









                <div class="sb2-2-3">
                    <div class="row">
                        <!--== Country Campaigns ==-->
                        <div class="col-md-6">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>Job Openings</h4>
                                    <p>Randomised words which don't look even slightly believable. If you are going to use a passage</p>
                                </div>
                                <div class="tab-inn">
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Company</th>
                                                    <th>Openings</th>
                                                    <th>Date</th>
                                                    <th>Location</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><span class="txt-dark weight-500">Samsing</span>
                                                    </td>
                                                    <td>50</td>
                                                    <td>15 April 2018</td>
                                                    <td>New york, United States</td>
                                                    <td>
                                                        <span class="label label-success">Active</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><span class="txt-dark weight-500">Microsofts</span>
                                                    </td>
                                                    <td>75</td>
                                                    <td>21 Jun 2018</td>
                                                    <td>New york, United States</td>
                                                    <td>
                                                        <span class="label label-success">Active</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><span class="txt-dark weight-500">Samsing</span>
                                                    </td>
                                                    <td>50</td>
                                                    <td>15 April 2018</td>
                                                    <td>United States</td>
                                                    <td>
                                                        <span class="label label-success">Active</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><span class="txt-dark weight-500">Microsofts</span>
                                                    </td>
                                                    <td>75</td>
                                                    <td>21 Jun 2018</td>
                                                    <td>United States</td>
                                                    <td>
                                                        <span class="label label-success">Active</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>







                        <!--== Country Campaigns ==-->
                        <div class="col-md-6">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>Event Details</h4>
                                    <p>Education is about teaching, learning skills and knowledge.</p>
                                </div>
                                <div class="tab-inn">
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>State</th>
                                                    <th>Client</th>
                                                    <th>Changes</th>
                                                    <th>Budget</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><span class="txt-dark weight-500">California</span>
                                                    </td>
                                                    <td>Beavis</td>
                                                    <td><span class="txt-success"><i class="fa fa-angle-up" aria-hidden="true"></i><span>2.43%</span></span>
                                                    </td>
                                                    <td>
                                                        <span class="txt-dark weight-500">$1478</span>
                                                    </td>
                                                    <td>
                                                        <span class="label label-success">Active</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><span class="txt-dark weight-500">Florida</span>
                                                    </td>
                                                    <td>Felix</td>
                                                    <td><span class="txt-success"><i class="fa fa-angle-up" aria-hidden="true"></i><span>1.43%</span></span>
                                                    </td>
                                                    <td>
                                                        <span class="txt-dark weight-500">$951</span>
                                                    </td>
                                                    <td>
                                                        <span class="label label-danger">Closed</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><span class="txt-dark weight-500">Hawaii</span>
                                                    </td>
                                                    <td>Cannibus</td>
                                                    <td><span class="txt-danger"><i class="fa fa-angle-up" aria-hidden="true"></i><span>-8.43%</span></span>
                                                    </td>
                                                    <td>
                                                        <span class="txt-dark weight-500">$632</span>
                                                    </td>
                                                    <td>
                                                        <span class="label label-default">Hold</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><span class="txt-dark weight-500">Alaska</span>
                                                    </td>
                                                    <td>Neosoft</td>
                                                    <td><span class="txt-success"><i class="fa fa-angle-up" aria-hidden="true"></i><span>7.43%</span></span>
                                                    </td>
                                                    <td>
                                                        <span class="txt-dark weight-500">$325</span>
                                                    </td>
                                                    <td>
                                                        <span class="label label-default">Hold</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><span class="txt-dark weight-500">New Jersey</span>
                                                    </td>
                                                    <td>Hencework</td>
                                                    <td><span class="txt-success"><i class="fa fa-angle-up" aria-hidden="true"></i><span>9.43%</span></span>
                                                    </td>
                                                    <td>
                                                        <span>$258</span>
                                                    </td>
                                                    <td>
                                                        <span class="label label-success">Active</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>




                <!--== User Details ==-->
                <div class="sb2-2-3">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>Google Map</h4>
                                    <p>Education is about teaching, learning skills and knowledge.</p>
                                </div>
                                <div class="tab-inn">
                                    <div class="table-responsive table-desi tab-map">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6290413.804893654!2d-93.99620524741552!3d39.66116578737809!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880b2d386f6e2619%3A0x7f15825064115956!2sIllinois%2C+USA!5e0!3m2!1sen!2sin!4v1469954001005" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>





</body>


</html>


@endsection
