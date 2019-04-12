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
                            <div class="sj-widget sj-widgetvolissue">
                                <div class="sj-widgetheading">
                                    <h3>By Volume and Issue</h3>
                                </div>
                                <div class="sj-widgetcontent">
                                    <form class="sj-formtheme sj-formissuevol">
                                        <fieldset>
                                            <div class="form-group">
                                                <input type="text" name="volissue" class="form-control" placeholder="Vol no.">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="issuenumber" class="form-control" placeholder="Issue no.">
                                            </div>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                            <div class="sj-widget sj-widgetsearchdate">
                                <div class="sj-widgetheading">
                                    <h3>By Date</h3>
                                </div>
                                <div class="sj-widgetcontent">
                                    <form class="sj-formtheme sj-formsearchbydate">
                                        <fieldset>
                                            <div class="form-group sj-inputwithicon">
                                                <i class="fab fa-calendar"></i>
                                                <input type="text" name="date" class="form-control" placeholder="YYYY - MM - DD">
                                            </div>
                                            <div class="sj-filterbtns">
                                                <a class="sj-btn" href="javascript:void(0)">Apply Filter</a>
                                                <a class="sj-btn" href="javascript:void(0)">Reset All</a>
                                            </div>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                            <div class="sj-widget sj-widgetrecentissues">
                                <div class="sj-widgetheading">
                                    <h3>Recent Issues</h3>
                                </div>
                                <div class="sj-widgetcontent">
                                    <ul>
                                        <li><a href="javascript:void(0);"><span>View All</span><em>(216)</em></a></li>
                                        <li><a href="javascript:void(0);"><span>Current Issue</span><em>(37)</em></a></li>
                                        <li><a href="javascript:void(0);"><span>December 28, 2017</span><em>(27)</em></a></li>
                                        <li><a href="javascript:void(0);"><span>December 21, 2017</span><em>(23)</em></a></li>
                                        <li><a href="javascript:void(0);"><span>December 14, 2017</span><em>(22)</em></a></li>
                                    </ul>
                                </div>
                            </div>
                        </aside>
                    </div>
                    <div class="col-12 col-sm-12 col-md-7 col-lg-4 col-xl-6">
                        <div id="sj-content" class="sj-content">
                            <div class="sj-issuesyears">
                                <div id="sj-accordion" class="sj-accordion" role="tablist" aria-multiselectable="true">
                                    <div class="sj-panel">
                                        <h4>2010-2018</h4>
                                        <div class="sj-panelcontent">
                                            <div class="sj-recordholder">
                                                <a class="sj-btnrecord" href="javascript:void(0);"><span>2018</span><i class="fa fa-angle-right"></i></a>
                                                <a class="sj-btnrecord" href="javascript:void(0);"><span>2017</span><i class="fa fa-angle-right"></i></a>
                                                <a class="sj-btnrecord" href="javascript:void(0);"><span>2016</span><i class="fa fa-angle-right"></i></a>
                                                <a class="sj-btnrecord" href="javascript:void(0);"><span>2015</span><i class="fa fa-angle-right"></i></a>
                                                <a class="sj-btnrecord" href="javascript:void(0);"><span>2014</span><i class="fa fa-angle-right"></i></a>
                                                <a class="sj-btnrecord" href="javascript:void(0);"><span>2013</span><i class="fa fa-angle-right"></i></a>
                                                <a class="sj-btnrecord" href="javascript:void(0);"><span>2012</span><i class="fa fa-angle-right"></i></a>
                                                <a class="sj-btnrecord" href="javascript:void(0);"><span>2011</span><i class="fa fa-angle-right"></i></a>
                                                <a class="sj-btnrecord" href="javascript:void(0);"><span>2010</span><i class="fa fa-angle-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sj-panel">
                                        <h4>1990<i class="fa fa-angle-down"></i></h4>
                                        <div class="sj-panelcontent">
                                            <div class="sj-recordholder">
                                                <a class="sj-btnrecord" href="javascript:void(0);"><span>2018</span><i class="fa fa-angle-right"></i></a>
                                                <a class="sj-btnrecord" href="javascript:void(0);"><span>2017</span><i class="fa fa-angle-right"></i></a>
                                                <a class="sj-btnrecord" href="javascript:void(0);"><span>2016</span><i class="fa fa-angle-right"></i></a>
                                                <a class="sj-btnrecord" href="javascript:void(0);"><span>2015</span><i class="fa fa-angle-right"></i></a>
                                                <a class="sj-btnrecord" href="javascript:void(0);"><span>2014</span><i class="fa fa-angle-right"></i></a>
                                                <a class="sj-btnrecord" href="javascript:void(0);"><span>2013</span><i class="fa fa-angle-right"></i></a>
                                                <a class="sj-btnrecord" href="javascript:void(0);"><span>2012</span><i class="fa fa-angle-right"></i></a>
                                                <a class="sj-btnrecord" href="javascript:void(0);"><span>2011</span><i class="fa fa-angle-right"></i></a>
                                                <a class="sj-btnrecord" href="javascript:void(0);"><span>2010</span><i class="fa fa-angle-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sj-panel">
                                        <h4>1980<i class="fa fa-angle-down"></i></h4>
                                        <div class="sj-panelcontent">
                                            <div class="sj-recordholder">
                                                <a class="sj-btnrecord" href="javascript:void(0);"><span>2018</span><i class="fa fa-angle-right"></i></a>
                                                <a class="sj-btnrecord" href="javascript:void(0);"><span>2017</span><i class="fa fa-angle-right"></i></a>
                                                <a class="sj-btnrecord" href="javascript:void(0);"><span>2016</span><i class="fa fa-angle-right"></i></a>
                                                <a class="sj-btnrecord" href="javascript:void(0);"><span>2015</span><i class="fa fa-angle-right"></i></a>
                                                <a class="sj-btnrecord" href="javascript:void(0);"><span>2014</span><i class="fa fa-angle-right"></i></a>
                                                <a class="sj-btnrecord" href="javascript:void(0);"><span>2013</span><i class="fa fa-angle-right"></i></a>
                                                <a class="sj-btnrecord" href="javascript:void(0);"><span>2012</span><i class="fa fa-angle-right"></i></a>
                                                <a class="sj-btnrecord" href="javascript:void(0);"><span>2011</span><i class="fa fa-angle-right"></i></a>
                                                <a class="sj-btnrecord" href="javascript:void(0);"><span>2010</span><i class="fa fa-angle-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sj-panel">
                                        <h4>1970<i class="fa fa-angle-down"></i></h4>
                                        <div class="sj-panelcontent">
                                            <div class="sj-recordholder">
                                                <a class="sj-btnrecord" href="javascript:void(0);"><span>2018</span><i class="fa fa-angle-right"></i></a>
                                                <a class="sj-btnrecord" href="javascript:void(0);"><span>2017</span><i class="fa fa-angle-right"></i></a>
                                                <a class="sj-btnrecord" href="javascript:void(0);"><span>2016</span><i class="fa fa-angle-right"></i></a>
                                                <a class="sj-btnrecord" href="javascript:void(0);"><span>2015</span><i class="fa fa-angle-right"></i></a>
                                                <a class="sj-btnrecord" href="javascript:void(0);"><span>2014</span><i class="fa fa-angle-right"></i></a>
                                                <a class="sj-btnrecord" href="javascript:void(0);"><span>2013</span><i class="fa fa-angle-right"></i></a>
                                                <a class="sj-btnrecord" href="javascript:void(0);"><span>2012</span><i class="fa fa-angle-right"></i></a>
                                                <a class="sj-btnrecord" href="javascript:void(0);"><span>2011</span><i class="fa fa-angle-right"></i></a>
                                                <a class="sj-btnrecord" href="javascript:void(0);"><span>2010</span><i class="fa fa-angle-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sj-panel">
                                        <h4>1960<i class="fa fa-angle-down"></i></h4>
                                        <div class="sj-panelcontent">
                                            <div class="sj-recordholder">
                                                <a class="sj-btnrecord" href="javascript:void(0);"><span>2018</span><i class="fa fa-angle-right"></i></a>
                                                <a class="sj-btnrecord" href="javascript:void(0);"><span>2017</span><i class="fa fa-angle-right"></i></a>
                                                <a class="sj-btnrecord" href="javascript:void(0);"><span>2016</span><i class="fa fa-angle-right"></i></a>
                                                <a class="sj-btnrecord" href="javascript:void(0);"><span>2015</span><i class="fa fa-angle-right"></i></a>
                                                <a class="sj-btnrecord" href="javascript:void(0);"><span>2014</span><i class="fa fa-angle-right"></i></a>
                                                <a class="sj-btnrecord" href="javascript:void(0);"><span>2013</span><i class="fa fa-angle-right"></i></a>
                                                <a class="sj-btnrecord" href="javascript:void(0);"><span>2012</span><i class="fa fa-angle-right"></i></a>
                                                <a class="sj-btnrecord" href="javascript:void(0);"><span>2011</span><i class="fa fa-angle-right"></i></a>
                                                <a class="sj-btnrecord" href="javascript:void(0);"><span>2010</span><i class="fa fa-angle-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sj-panel">
                                        <h4>1950<i class="fa fa-angle-down"></i></h4>
                                        <div class="sj-panelcontent">
                                            <div class="sj-recordholder">
                                                <a class="sj-btnrecord" href="javascript:void(0);"><span>2018</span><i class="fa fa-angle-right"></i></a>
                                                <a class="sj-btnrecord" href="javascript:void(0);"><span>2017</span><i class="fa fa-angle-right"></i></a>
                                                <a class="sj-btnrecord" href="javascript:void(0);"><span>2016</span><i class="fa fa-angle-right"></i></a>
                                                <a class="sj-btnrecord" href="javascript:void(0);"><span>2015</span><i class="fa fa-angle-right"></i></a>
                                                <a class="sj-btnrecord" href="javascript:void(0);"><span>2014</span><i class="fa fa-angle-right"></i></a>
                                                <a class="sj-btnrecord" href="javascript:void(0);"><span>2013</span><i class="fa fa-angle-right"></i></a>
                                                <a class="sj-btnrecord" href="javascript:void(0);"><span>2012</span><i class="fa fa-angle-right"></i></a>
                                                <a class="sj-btnrecord" href="javascript:void(0);"><span>2011</span><i class="fa fa-angle-right"></i></a>
                                                <a class="sj-btnrecord" href="javascript:void(0);"><span>2010</span><i class="fa fa-angle-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sj-panel">
                                        <h4>1940<i class="fa fa-angle-down"></i></h4>
                                        <div class="sj-panelcontent">
                                            <div class="sj-recordholder">
                                                <a class="sj-btnrecord" href="javascript:void(0);"><span>2018</span><i class="fa fa-angle-right"></i></a>
                                                <a class="sj-btnrecord" href="javascript:void(0);"><span>2017</span><i class="fa fa-angle-right"></i></a>
                                                <a class="sj-btnrecord" href="javascript:void(0);"><span>2016</span><i class="fa fa-angle-right"></i></a>
                                                <a class="sj-btnrecord" href="javascript:void(0);"><span>2015</span><i class="fa fa-angle-right"></i></a>
                                                <a class="sj-btnrecord" href="javascript:void(0);"><span>2014</span><i class="fa fa-angle-right"></i></a>
                                                <a class="sj-btnrecord" href="javascript:void(0);"><span>2013</span><i class="fa fa-angle-right"></i></a>
                                                <a class="sj-btnrecord" href="javascript:void(0);"><span>2012</span><i class="fa fa-angle-right"></i></a>
                                                <a class="sj-btnrecord" href="javascript:void(0);"><span>2011</span><i class="fa fa-angle-right"></i></a>
                                                <a class="sj-btnrecord" href="javascript:void(0);"><span>2010</span><i class="fa fa-angle-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sj-panel">
                                        <h4>1930<i class="fa fa-angle-down"></i></h4>
                                        <div class="sj-panelcontent">
                                            <div class="sj-recordholder">
                                                <a class="sj-btnrecord" href="javascript:void(0);"><span>2018</span><i class="fa fa-angle-right"></i></a>
                                                <a class="sj-btnrecord" href="javascript:void(0);"><span>2017</span><i class="fa fa-angle-right"></i></a>
                                                <a class="sj-btnrecord" href="javascript:void(0);"><span>2016</span><i class="fa fa-angle-right"></i></a>
                                                <a class="sj-btnrecord" href="javascript:void(0);"><span>2015</span><i class="fa fa-angle-right"></i></a>
                                                <a class="sj-btnrecord" href="javascript:void(0);"><span>2014</span><i class="fa fa-angle-right"></i></a>
                                                <a class="sj-btnrecord" href="javascript:void(0);"><span>2013</span><i class="fa fa-angle-right"></i></a>
                                                <a class="sj-btnrecord" href="javascript:void(0);"><span>2012</span><i class="fa fa-angle-right"></i></a>
                                                <a class="sj-btnrecord" href="javascript:void(0);"><span>2011</span><i class="fa fa-angle-right"></i></a>
                                                <a class="sj-btnrecord" href="javascript:void(0);"><span>2010</span><i class="fa fa-angle-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sj-panel">
                                        <h4>1920<i class="fa fa-angle-down"></i></h4>
                                        <div class="sj-panelcontent">
                                            <div class="sj-recordholder">
                                                <a class="sj-btnrecord" href="javascript:void(0);"><span>2018</span><i class="fa fa-angle-right"></i></a>
                                                <a class="sj-btnrecord" href="javascript:void(0);"><span>2017</span><i class="fa fa-angle-right"></i></a>
                                                <a class="sj-btnrecord" href="javascript:void(0);"><span>2016</span><i class="fa fa-angle-right"></i></a>
                                                <a class="sj-btnrecord" href="javascript:void(0);"><span>2015</span><i class="fa fa-angle-right"></i></a>
                                                <a class="sj-btnrecord" href="javascript:void(0);"><span>2014</span><i class="fa fa-angle-right"></i></a>
                                                <a class="sj-btnrecord" href="javascript:void(0);"><span>2013</span><i class="fa fa-angle-right"></i></a>
                                                <a class="sj-btnrecord" href="javascript:void(0);"><span>2012</span><i class="fa fa-angle-right"></i></a>
                                                <a class="sj-btnrecord" href="javascript:void(0);"><span>2011</span><i class="fa fa-angle-right"></i></a>
                                                <a class="sj-btnrecord" href="javascript:void(0);"><span>2010</span><i class="fa fa-angle-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sj-panel">
                                        <h4>1900<i class="fa fa-angle-down"></i></h4>
                                        <div class="sj-panelcontent">
                                            <div class="sj-recordholder">
                                                <a class="sj-btnrecord" href="javascript:void(0);"><span>2018</span><i class="fa fa-angle-right"></i></a>
                                                <a class="sj-btnrecord" href="javascript:void(0);"><span>2017</span><i class="fa fa-angle-right"></i></a>
                                                <a class="sj-btnrecord" href="javascript:void(0);"><span>2016</span><i class="fa fa-angle-right"></i></a>
                                                <a class="sj-btnrecord" href="javascript:void(0);"><span>2015</span><i class="fa fa-angle-right"></i></a>
                                                <a class="sj-btnrecord" href="javascript:void(0);"><span>2014</span><i class="fa fa-angle-right"></i></a>
                                                <a class="sj-btnrecord" href="javascript:void(0);"><span>2013</span><i class="fa fa-angle-right"></i></a>
                                                <a class="sj-btnrecord" href="javascript:void(0);"><span>2012</span><i class="fa fa-angle-right"></i></a>
                                                <a class="sj-btnrecord" href="javascript:void(0);"><span>2011</span><i class="fa fa-angle-right"></i></a>
                                                <a class="sj-btnrecord" href="javascript:void(0);"><span>2010</span><i class="fa fa-angle-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
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
                                <span class="sj-headtitle">Advertisment 270 x270</span>
                                <div class="sj-widgetcontent">
                                    <figure class="sj-addimage"><a href="javascript:void(0);"><img src="images/widget-add.jpg" alt="image description"></a></figure>
                                </div>
                            </div>
                            <div class="sj-widget sj-widgetquestions">
                                <div class="sj-widgetheading">
                                    <h3>Question Of The Week</h3>
                                </div>
                                <div class="sj-widgetcontent">
                                    <div class="sj-description">
                                        <p>Consectetur adipisicing elit, sed aeiuse tempor incididunt ut labore etamiudon magna aliqua enim ad minim?</p>
                                    </div>
                                    <div class="sj-questions">
                                        <div class="sj-selectgroup">
                                                    <span class="sj-radio">
                                                        <input id="sj-qone" type="radio" name="question" value="qone" checked="">
                                                        <label for="sj-qone">Sputum stain for acid-fast bacilli</label>
                                                    </span>
                                            <span class="sj-radio">
                                                        <input id="sj-qtwo" type="radio" name="question" value="qtwo">
                                                        <label for="sj-qtwo">Pleural biopsy</label>
                                                    </span>
                                            <span class="sj-radio">
                                                        <input id="sj-qthree" type="radio" name="question" value="qthree">
                                                        <label for="sj-qthree">Pleural fluid amylase</label>
                                                    </span>
                                            <span class="sj-radio">
                                                        <input id="sj-qfour" type="radio" name="question" value="qfour">
                                                        <label for="sj-qfour">Pleural fluid cytology</label>
                                                    </span>
                                        </div>
                                        <a class="sj-btn" href="javascript:void(0);">Submit Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="sj-widget sj-widgetadd">
                                <div class="sj-widgetcontent">
                                    <figure class="sj-addimage"><a href="javascript:void(0);"><img src="images/widget-add2.jpg" alt="image description"></a></figure>
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