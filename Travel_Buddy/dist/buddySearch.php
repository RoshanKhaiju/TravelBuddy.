<?php
require "../includes/header2.php";
?>

    <!-- search buddy section start -->
    <section class="search" id="search">
        <div class="max-width">
            <h2 class="title">Search buddy</h2>
            <div class="search-content">
                <div class="column left">
                    <div class="text">Search by:</div>
                    <form action="#">
                        <div class="field">
                            <input type="search" name="" id=""placeholder="Enter Region or city..." required>
                        </div>
                        <div class="fields">
                            <div class="field dateFrom">
                                <label for="dateFrom">From</label>
                                <input type="date" name="" id="">
                            </div>
                            <div class="field dateUntil">
                                <label for="dateUntil">Until</label>
                                <input type="date" name="" id="">
                            </div>
                        </div>
                        <div class="fields">
                            <div class="field ageFrom">
                                <label for="ageFrom">Age from</label>
                                <input type="number" name="" id="">
                            </div>
                            <div class="field ageTo">
                                <label for="ageTo">Age to</label>
                                <input type="number" name="" id="">
                            </div>
                        </div>
                        <div class="radio">
                            <input type="radio" name="gender" id="" checked> All
                            <input type="radio" name="gender"> Male
                            <input type="radio" name="gender"> Female
                        </div>
                        <div class="button">
                            <button type="submit"><i class="fas fa-search"></i> Search</button>
                        </div>
                        
                    </form>
                    <div class="add" id="add">
                        <p onclick="myFunction()"><i class="fas fa-plus"></i> Add yourself to the list</p>
                        <div class="add-form" id="add-form">
                            <form action="#">
                                <div class="field">
                                    <label for="name">Name</label>
                                    <input type="text" name="" id=""placeholder="Enter name..." required>
                                </div>
                                <div class="field">
                                    <label for="travellingFrom">Travelling From</label>
                                    <input type="text" name="" id=""placeholder="Enter place travelling from..." required>
                                </div>
                                <div class="field">
                                    <label for="travellingTo">Travelling to</label>
                                    <input type="text" name="" id=""placeholder="Enter places travelling to..." required>
                                </div>
                                <div class="fields">
                                    <div class="field dateFrom">
                                <label for="dateFrom">From</label>
                                <input type="date" name="" id="">
                                    </div>
                                    <div class="field dateUntil">
                                <label for="dateUntil">Until</label>
                                <input type="date" name="" id="">
                                    </div>
                                </div>
                                <div class="field textarea">
                                    <label for="description">Description</label>
                                    <br>
                                    <textarea cols="30" rows="10" placeholder="Write about yourself.." required></textarea>
                                </div>
                                <div class="field">
                                    <label for="age">Age</label>
                                    <input type="number" name="" id=""placeholder="Enter age..." required>
                                </div>
                                <div class="radio">
                                    <input type="radio" name="gender"> Male
                                    <input type="radio" name="gender"> Female
                                </div>
                                <div class="field">
                                    <label for="laguageSpoken">Language Spoken</label>
                                    <input type="text" name="" id=""placeholder="Enter spoken languages..." required>
                                </div>
                                <div class="field">
                                    <label for="contactDetails">Contact details</label>
                                    <input type="tel" name="" id=""placeholder="Enter contact number..." required>
                                    <br><br>
                                    <input type="email" name="" id=""placeholder="Enter email..." required>
                                </div>
                                <div class="button">
                                    <button type="submit" >Submit</button>
                                </div>
                        
                            </form>
                        </div>
                    </div>
                </div>
                <div class="column right">

                    <div class="card">
                        <div class="box">
                            <a href="description.php"><img src="../images/travellers/traveller-1.jpg"></a>
                            <div class="text">Traveller One</div>
                            <p><span>Dates:</span> Sep 2020 - Mar 2021</p>
                            <p><span>Destination:</span> Pokhara</p>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing  elit. Inventore sapiente aliquam voluptas recusandae corrupti dolores, soluta earum, ad fugiat vitae distinctio, perferendis doloribus! Ipsam maxime alias, dicta incidunt dolorem atque!</p>
                        </div>
                        <a href="description.php">Profile</a>
                    </div>
        
                    <div class="card">
                        <div class="box">
                            <a href="description.php"><img src="../images/travellers/traveller-2.jpg"></a>
                            <div class="text">Traveller One</div>
                            <p><span>Dates:</span> Sep 2020 - Mar 2021</p>
                            <p><span>Destination:</span> Pokhara</p>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing  elit. Inventore sapiente aliquam voluptas recusandae corrupti dolores, soluta earum, ad fugiat vitae distinctio, perferendis doloribus! Ipsam maxime alias, dicta incidunt dolorem atque!</p>
                        </div>
                        <a href="description.php">Profile</a>
                    </div>

                    <div class="card">
                        <div class="box">
                            <a href="description.php"><img src="../images/travellers/traveller-3.jpg"></a>
                            <div class="text">Traveller One</div>
                            <p><span>Dates:</span> Sep 2020 - Mar 2021</p>
                            <p><span>Destination:</span> Pokhara</p>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing  elit. Inventore sapiente aliquam voluptas recusandae corrupti dolores, soluta earum, ad fugiat vitae distinctio, perferendis doloribus! Ipsam maxime alias, dicta incidunt dolorem atque!</p>
                        </div>
                        <a href="description.php">Profile</a>
                    </div>

                    <div class="card">
                        <div class="box">
                            <a href="description.php"><img src="../images/travellers/traveller-4.jpg"></a>
                            <div class="text">Traveller One</div>
                            <p><span>Dates:</span> Sep 2020 - Mar 2021</p>
                            <p><span>Destination:</span> Pokhara</p>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing  elit. Inventore sapiente aliquam voluptas recusandae corrupti dolores, soluta earum, ad fugiat vitae distinctio, perferendis doloribus! Ipsam maxime alias, dicta incidunt dolorem atque!</p>
                        </div>
                        <a href="description.php">Profile</a>
                    </div>
                        
                </div>
            </div>
        </div>
    </section>

<?php
require "../includes/footer.php";
?>