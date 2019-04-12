@extends('layouts.main')
@section('content')






    <!--************************************
                    Main Start
            *************************************-->
    <main id="sj-main" class="sj-main sj-haslayout sj-sectionspace">
        <div id="sj-twocolumns" class="sj-twocolumns">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-5 col-lg-4 col-xl-3">
                        <aside id="sj-sidebarvtwo" class="sj-sidebar">
                            <div class="sj-widget sj-widgetsearch">
                                <div class="sj-widgetcontent">
                                    <form class="sj-formtheme sj-formsearch">
                                        <fieldset>
                                            <input type="search" name="search" class="form-control" placeholder="Search here">
                                            <button type="submit" class="sj-btnsearch"><i class="lnr lnr-magnifier"></i></button>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                            <div class="sj-widget sj-widgetspeciality">
                                <div class="sj-widgetheading">
                                    <h3>By Specialty</h3>
                                </div>
                                <div class="sj-widgetcontent">
                                    <div class="sj-selectgroup">
                                                <span class="sj-checkbox">
                                                    <input id="sj-viewall" type="checkbox" name="speciality" value="sj-viewall">
                                                    <label for="sj-viewall">View All<em>(230)</em></label>
                                                </span>
                                        <span class="sj-checkbox">
                                                    <input id="sj-oncology" type="checkbox" name="speciality" value="sj-oncology">
                                                    <label for="sj-oncology">Hematology/Oncology<em>(37)</em></label>
                                                </span>
                                        <span class="sj-checkbox">
                                                    <input id="sj-care" type="checkbox" name="speciality" value="sj-care">
                                                    <label for="sj-care">Pulmonary/Critical Care<em>(29)</em></label>
                                                </span>
                                        <span class="sj-checkbox">
                                                    <input id="sj-padiatrics" type="checkbox" name="speciality" value="sj-padiatrics">
                                                    <label for="sj-padiatrics">Pediatrics<em>(27)</em></label>
                                                </span>
                                        <span class="sj-checkbox">
                                                    <input id="sj-neurology" type="checkbox" name="speciality" value="sj-neurology">
                                                    <label for="sj-neurology">Neurology/Neurosurgery<em>(23)</em></label>
                                                </span>
                                        <span class="sj-checkbox">
                                                    <input id="sj-disease" type="checkbox" name="speciality" value="sj-disease">
                                                    <label for="sj-disease">Infectious Disease<em>(22)</em></label>
                                                </span>
                                    </div>
                                </div>
                            </div>
                            <div class="sj-widget sj-widgetarticles">
                                <div class="sj-widgetheading">
                                    <h3>By Article Type</h3>
                                </div>
                                <div class="sj-widgetcontent">
                                    <div class="sj-selectgroup">
                                                <span class="sj-checkbox">
                                                    <input id="sj-viewalltwo" type="checkbox" name="speciality" value="sj-viewalltwo">
                                                    <label for="sj-viewalltwo">View All<em>(216)</em></label>
                                                </span>
                                        <span class="sj-checkbox">
                                                    <input id="sj-psddesign" type="checkbox" name="speciality" value="sj-psddesign">
                                                    <label for="sj-psddesign">Psd Design<em>(37)</em></label>
                                                </span>
                                        <span class="sj-checkbox">
                                                    <input id="sj-htmltemplate" type="checkbox" name="speciality" value="sj-htmltemplate">
                                                    <label for="sj-htmltemplate">HTML Template<em>(29)</em></label>
                                                </span>
                                        <span class="sj-checkbox">
                                                    <input id="sj-wordpress" type="checkbox" name="speciality" value="sj-wordpress">
                                                    <label for="sj-wordpress">Wordpress<em>(27)</em></label>
                                                </span>
                                        <span class="sj-checkbox">
                                                    <input id="sj-joomla" type="checkbox" name="speciality" value="sj-joomla">
                                                    <label for="sj-joomla">Joomla<em>(23)</em></label>
                                                </span>
                                    </div>
                                </div>
                            </div>
                            <div class="sj-widget sj-widgetdate">
                                <div class="sj-widgetheading">
                                    <h3>By Date</h3>
                                </div>
                                <div class="sj-widgetcontent">
                                    <div class="sj-selectgroup">
                                                <span class="sj-checkbox">
                                                    <input id="sj-viewallthree" type="checkbox" name="speciality" value="sj-viewallthree">
                                                    <label for="sj-viewallthree">View All<em>(216)</em></label>
                                                </span>
                                        <span class="sj-checkbox">
                                                    <input id="sj-tenyear" type="checkbox" name="speciality" value="sj-tenyear">
                                                    <label for="sj-tenyear">Past 10 Years<em>(37)</em></label>
                                                </span>
                                        <span class="sj-checkbox">
                                                    <input id="sj-fifteenyears" type="checkbox" name="speciality" value="sj-fifteenyears">
                                                    <label for="sj-fifteenyears">Past 15 Years<em>(29)</em></label>
                                                </span>
                                        <span class="sj-checkbox">
                                                    <input id="sj-twentyyears" type="checkbox" name="speciality" value="sj-twentyyears">
                                                    <label for="sj-twentyyears">Past 20 Years<em>(27)</em></label>
                                                </span>
                                        <span class="sj-checkbox">
                                                    <input id="sj-twentyfiveyears" type="checkbox" name="speciality" value="sj-twentyfiveyears">
                                                    <label for="sj-twentyfiveyears">Past 25 Years<em>(23)</em></label>
                                                </span>
                                    </div>
                                    <div class="sj-filterbtns">
                                        <a class="sj-btn" href="javascript:void(0)">Apply Filter</a>
                                        <a class="sj-btn" href="javascript:void(0)">Reset All</a>
                                    </div>
                                </div>
                            </div>
                        </aside>
                    </div>
                    <div class="col-12 col-sm-12 col-md-7 col-lg-4 col-xl-6">
                        <div id="sj-content" class="sj-content">
                            <span class="sj-showitems">Showing <em>1</em> to <em>20</em> of <em>153</em> Articles</span>

                            <div class="sj-articles">
                                <form class="sj-formtheme sj-formsortitems">
                                    <fieldset>
                                        <div class="form-group">
                                            <em>Sort By: </em>
                                            <span class="sj-select">
                                                        <select>
                                                            <option>Name</option>
                                                            <option>Name 2</option>
                                                            <option>Name 3</option>
                                                            <option>Name 4</option>
                                                        </select>
                                                    </span>
                                        </div>
                                        <div class="form-group">
                                            <em>Arrange: </em>
                                            <span class="sj-select">
                                                        <select>
                                                            <option>Des</option>
                                                            <option>Asc</option>
                                                        </select>
                                                    </span>
                                        </div>
                                        <div class="form-group">
                                            <em>Show: </em>
                                            <span class="sj-select">
                                                        <select>
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                            <option>6</option>
                                                        </select>
                                                    </span>
                                        </div>
                                    </fieldset>
                                </form>
                                <article class="sj-post sj-editorchoice">
                                    <figure class="sj-postimg">
                                        <img src="img/img-08.jpg" alt="image description">
                                    </figure>
                                    <div class="sj-postcontent">
                                        <div class="sj-head">
                                            <span class="sj-username"><a href="javascript:void(0);">Hillary Farnham</a></span>
                                            <h3><a href="javascript:void(0);">Better-Quality Compounded Drugs</a></h3>
                                        </div>
                                        <div class="sj-description">
                                            <p>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna...</p>
                                        </div>
                                        <a class="sj-btn" href="javascript:void(0);">View Full Article</a>
                                    </div>
                                </article>
                                <article class="sj-post sj-editorchoice">
                                    <figure class="sj-postimg">
                                        <img src="img/img-08.jpg" alt="image description">
                                    </figure>
                                    <div class="sj-postcontent">
                                        <div class="sj-head">
                                            <span class="sj-username"><a href="javascript:void(0);">Hillary Farnham</a></span>
                                            <h3><a href="javascript:void(0);">Better-Quality Compounded Drugs</a></h3>
                                        </div>
                                        <div class="sj-description">
                                            <p>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna...</p>
                                        </div>
                                        <a class="sj-btn" href="javascript:void(0);">View Full Article</a>
                                    </div>
                                </article>
                                <article class="sj-post sj-editorchoice">
                                    <figure class="sj-postimg">
                                        <img src="img/img-08.jpg" alt="image description">
                                    </figure>
                                    <div class="sj-postcontent">
                                        <div class="sj-head">
                                            <span class="sj-username"><a href="javascript:void(0);">Hillary Farnham</a></span>
                                            <h3><a href="javascript:void(0);">Better-Quality Compounded Drugs</a></h3>
                                        </div>
                                        <div class="sj-description">
                                            <p>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna...</p>
                                        </div>
                                        <a class="sj-btn" href="javascript:void(0);">View Full Article</a>
                                    </div>
                                </article>
                                <article class="sj-post sj-editorchoice">
                                    <figure class="sj-postimg">
                                        <img src="img/img-08.jpg" alt="image description">
                                    </figure>
                                    <div class="sj-postcontent">
                                        <div class="sj-head">
                                            <span class="sj-username"><a href="javascript:void(0);">Hillary Farnham</a></span>
                                            <h3><a href="javascript:void(0);">Better-Quality Compounded Drugs</a></h3>
                                        </div>
                                        <div class="sj-description">
                                            <p>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna...</p>
                                        </div>
                                        <a class="sj-btn" href="javascript:void(0);">View Full Article</a>
                                    </div>
                                </article>
                                <article class="sj-post sj-editorchoice">
                                    <figure class="sj-postimg">
                                        <img src="img/img-08.jpg" alt="image description">
                                    </figure>
                                    <div class="sj-postcontent">
                                        <div class="sj-head">
                                            <span class="sj-username"><a href="javascript:void(0);">Hillary Farnham</a></span>
                                            <h3><a href="javascript:void(0);">Better-Quality Compounded Drugs</a></h3>
                                        </div>
                                        <div class="sj-description">
                                            <p>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna...</p>
                                        </div>
                                        <a class="sj-btn" href="javascript:void(0);">View Full Article</a>
                                    </div>
                                </article>
                                <article class="sj-post sj-editorchoice">
                                    <figure class="sj-postimg">
                                        <img src="img/img-08.jpg" alt="image description">
                                    </figure>
                                    <div class="sj-postcontent">
                                        <div class="sj-head">
                                            <span class="sj-username"><a href="javascript:void(0);">Hillary Farnham</a></span>
                                            <h3><a href="javascript:void(0);">Better-Quality Compounded Drugs</a></h3>
                                        </div>
                                        <div class="sj-description">
                                            <p>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna...</p>
                                        </div>
                                        <a class="sj-btn" href="javascript:void(0);">View Full Article</a>
                                    </div>

                                </article>
                                <div class="sj-filterbtns">
                                    <a class="sj-btn" href="javascript:void(0)">Previous</a>
                                    <a class="sj-btn" href="javascript:void(0)">Next</a>
                                </div>
                            </div>
                        </div>


                    </div>








                    <div class="col-12 col-sm-12 col-md-5 col-lg-4 col-xl-3">
                        <aside id="sj-sidebar" class="sj-sidebar sj-sidebarvtwo">
                            <div class="sj-widget sj-widgetimpactfector">
                                <div class="sj-widgetcontent">
                                    <ul>
                                        <li>
                                            <h3>Impact Factor<span>2.125</span></h3>
                                            <h3>5 Year Impact Factor<span>2.853</span></h3>
                                        </li>
                                        <li>
                                            <h3>Dr. Desmond Bratton</h3>
                                            <div class="sj-description">
                                                <p>Consectetur adipisicing elit sedo amod tempor incididunt. <a href="javascript:void(0)">Read More</a></p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sj-widget sj-widgetnoticeboard">
                                <div class="sj-widgetheading">
                                    <h3>Notice Board</h3>
                                </div>
                                <div class="sj-widgetcontent">
                                    <ul>
                                        <li><a href="javascript:void(0);">Adipisicing elitaium sed dotas eiusm tempor incididunt utae labore etiate dolore magna aliqua enim.</a></li>
                                        <li><a href="javascript:void(0);">Labore etiat dolore magna aliquaen ad minim veniam.</a></li>
                                        <li><a href="javascript:void(0);">Duis aute irure dolor in reprehender</a></li>
                                    </ul>
                                </div>
                            </div>




                            <div class="sj-widget sj-widgetadd">
                                <div class="sj-widgetcontent">
                                    <figure class="sj-addimage"><a href="javascript:void(0);"><img src="img/img-08.jpg" alt="image description"></a></figure>
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!--************************************
            Main End
    *************************************-->

@endsection