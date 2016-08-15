﻿<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet", href="lib/bootstrap.min.css" />
        <link rel="stylesheet", href="css/utils.css" />
        <script src="lib/jquery-2.1.4.min.js"></script>
        <script src="lib/fallback.min.js"></script>
        <script src="js/dependencies.js"></script>
        <script src="js/utils.js"></script>
        <script src="lib/bootstrap.min.js"></script>
        <script src="gsoc2016/ccNetViz.js"></script>
        <script src="gsoc2016/js/gridLayout.js"></script>
        <script src="gsoc2016/OpenSans-Regular.json"></script>
        <script src="gsoc2016/project-1.js"></script>
        <script src="gsoc2016/project-2.js"></script>
        <title>My experience of participating in GSoC 2016</title>
    </head>
    <body>      
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>My experience of participating in GSoC 2016</h2>
                </div>
                <div class="col-md-6">
                    <img src="../img/banner-gsoc2016.png" class="img-responsive center-block" />
                </div>
                <div class="col-md-6">
                    <blockquote>
                        Do not be afraid of anything. Him who is afraid the failure persecuted. Fear is sometimes permissible in everyday life. But at crucial moment you chase the fear away. Having doubted even for a moment, you will be defeated.
                        <footer>Takuan Soho</footer>
                    </blockquote>
                </div>
                <div class="col-md-12">
                    <h4>
                        A little bit about the project...
                    </h4>
                    <p>
                        Hello! I want to to tell a little about the "summer internships" for students and what I did this summer :)
                    </p>
                    <p>
                        I worked on the project from <a href="http://helikarlab.org">Computational Biology @ University of Nebraska-Lincoln</a>. And these are my mentors who helped me in all the way of work <a href="http://helikarlab.org/members.html#">David Tichy, Tom Helikar</a>. 
                    </p>
                    <p>
                        During this summer I needed perform two designs for library <a href="https://github.com/helikarlab/ccNetViz">ccNetViz</a>. All my code can be viewed here in this repository <a href="https://github.com/Znbiz/HelikarLab">https://github.com/Znbiz/HelikarLab</a>. And here is you can see <a href="https://github.com/Znbiz/HelikarLab/commits/master">the commits</a>.
                    </p>
                </div>
                <div class="col-md-12">
                    <h4>
                        Intention.
                    </h4>
                    <ol>
                        <li> 
                            Develop a algorithm of drawing graph on a rectangular grid for the library <a href="https://github.com/helikarlab/ccNetViz">ccNetViz</a>. On the the drawn graph should clearly defined by clusters.
                        </li>
                        <li>
                            Develop a SDF text generator that can run on the client side for the library <a href="https://github.com/helikarlab/ccNetViz">ccNetViz</a>.
                        </li>
                    </ol>
                </div>
                <div class="col-md-12">
                    <h4>
                        Target 1. Algorithm for of drawing graph on a rectangular grid.
                    </h4>
                    <p>
                        Before me stood next task: to develop an algorithm capable to draw graphs are on a rectangular grid. Drawing required such a manner that clusters be clearly visible. For a basis of offers to take the following algorithm <a href="http://bioinformatics.oxfordjournals.org/content/21/9/2036.full#F1">algorithm for automatic drawing of biochemical networks</a>. I has implemented his, the code can be viewed <a href=https://github.com/Znbiz/HelikarLab/tree/master/Grid%20layout%20algorithm/Variant%202>here the</a>. By of this algorithm had to eventually refuse because his operating speed on graphs with the number of vertices is greater than 10 exp fall. This happened due to the fact that in the algorithm is based on a complicated enumeration method.
                    </p>
                    <p>
                        I suggested to move away from of this method and develop your own. My option was as search of a special number for each vertex, which would allow for one pass the vertices at a certain distance from each other. By this number was the number of of optimal ways extending through the top. Below are the pros and cons of this approach, and will show some examples of the algorithm.
                    </p>
                    <p>
                        Goodies: 
                        <ul>
                            <li>On small graphs of (<= 100 vertices) are clearly visible clusters </li>
                            <li>On the several orders of magnitude faster than algorithms, which also draws on the gridе</li>
                            <li>Simple to understanding</li>
                        </ul>
                    </p>
                    <p>
                        Minuses: 
                        <ul>
                            <li>Very slow if the graph more than ~ 200 nodes. As compared with the force algorithm</li>
                            <li>In some graphs of bad is the division of into clusters</li>
                        </ul>
                    </p>
                    <p>
                        <h5>
                            Conclusion:
                        </h5>
                        <br/>
                        The algorithm has been adopted, but not embedded in the library as well as the on Graphs with the number of vertices of> 1000 browser hangs for a long time. I have a assumption on how to improve my algorithm quality and speed of, but this need to spend more time. Algorithm code can be found here <a href="https://github.com/Znbiz/HelikarLab/blob/master/src/layout/grid.js">github</a>
                    </p>
                    <div class="row">
                        <div class="col-md-12">
                            <h5>
                                Examples:
                            </h5>
                        </div>

                        <div class="col-md-6">
                            <p>
                                Count "HGF" drawn by the force algorithm not on the grid
                            </p>
                            <p>
                                On the drawing the graph spent <span id="graph_1_time"></span> мс
                            </p>
                            <canvas id="graph_1_img" style="height: 250px;" class="img-responsive center-block"/>
                            <script type="text/javascript">Draw("graph_1_img", "graph_1_time", "HGF", 1); </script>
                        </div>
                        <div class="col-md-6">
                            <p>
                                Count "HGF" drawn by my algorithm on grid
                            </p>
                            <p>
                                On the drawing the graph spent <span id="graph_2_time"></span> мс
                            </p>
                            <canvas id="graph_2_img" style="height: 250px;" class="img-responsive center-block"/>
                            <script type="text/javascript">Draw("graph_2_img", "graph_2_time", "HGF", 2); </script>
                        </div>

                        <div class="col-md-6">
                            <p>
                                Count "Bronchiseptica" drawn by the force algorithm not on the grid
                            </p>
                            <p>
                                On the drawing the graph spent <span id="graph_3_time"></span> мс
                            </p>
                            <canvas id="graph_3_img" style="height: 250px;" class="img-responsive center-block"/>
                            <script type="text/javascript">Draw("graph_3_img", "graph_3_time", "Bronchiseptica", 1); </script>
                        </div>
                        <div class="col-md-6">
                            <p>
                                Count "Bronchiseptica" drawn by my algorithm on grid
                            </p>
                            <p>
                                On the drawing the graph spent <span id="graph_4_time"></span> мс
                            </p>
                            <canvas id="graph_4_img" style="height: 250px;" class="img-responsive center-block"/>
                            <script type="text/javascript">Draw("graph_4_img", "graph_4_time", "Bronchiseptica", 2); </script>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <h4>
                        Target 2. Development SDF generator for text.
                    </h4>
                    <p>
                        Now the library <a href="https://github.com/helikarlab/ccNetViz">ccNetViz</a> draws signatures of vertices in one texture. This slows down the the rendering of the text with increasing the graph, and also makes it impossible to work with a variety of effects for text.
                    </p>
                    <p>
                        To achieve the goal, it was decided to split task into several ones of subproblems.
                        <ol>
                            <li> 
                                Develop a generator SDF text more precise SDF atlas. What is the SDF can find out from the article <a href="http://www.valvesoftware.com/publications/2007/SIGGRAPH2007_AlphaTestedMagnification.pdf">Improved Alpha-Tested Magnification for Vector Textures and Special Effects</a>. The main thing this algorithm been to realize such a way that it worked on the client side.
                            </li>
                            <li>
                                Make the display of text such a way order to its texture is created for each character. That is drawing of each character separately.
                            </li>
                            <li>
                                Integrate the above tools to the library.
                            </li>
                        </ol>
                    </p>
                    <p>
                        SDF implements a simple algorithm in pure JavaScript to get the results which could not be incorporated into ccNetViz library. Since the processing time atlas containing 250 characters occupied a more than 10 seconds. After by me been a proposal to make all the calculations algortima using WebGL. The result of this decisions was the reduction in the processing time of the atlas 250 characters to a few tenths of a second ~ 0.6 seconds. The following is a working generator SDF.
                    </p>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#categoryCollapse2">
                                    To display SDF generator, click on the header
                                </a>
                            </h4>
                        </div>
                        <div id="categoryCollapse2" class="panel-collapse collapse">
                            <div class="panel-body">  
                                <div class="row">
                                    <iframe src="gsoc2016/index.html" class="col-lg-12 col-md-12 col-sm-12" height="1000px"></iframe>   
                                </div>
                            </div>
                        </div>
                    </div>

                    <p>
                        Also, the possibility has been implemented in libraries to use the pre-generated on the server atlases. 
                    </p>

                    <p>
                        <strong>All three methods of displaying the names of vertices included in the library. Pluses and minuses these three approaches displaying text.</strong>
                    </p>
                    <div class="row">
                        <div class="col-md-4">
                            <p>
                                Rendering the vertex the names on the same texture (as it was before)
                                <br/>
                                Goodies:
                                <ul>
                                    <li>
                                        No need to access the server
                                    </li>
                                    <li>
                                        The average speed of of drawing
                                    </li>
                                    <li>
                                        Ability to specify your unique font
                                    </li>
                                </ul>
                                Minuses:
                                <ul>
                                    <li>
                                        Resource-costly work with text
                                    </li>
                                    <li>
                                        With an increase in quality of the text decreases
                                    </li>
                                </ul>
                            </p>
                        </div>
                        <div class="col-md-4">
                            <p>
                                When the vertex of drawing names for each character uses its own texture. Texture is is taken from the SDF atlas generated on the client 
                                <br/>
                                Goodies:
                                <ul>
                                    <li>
                                        No need to access the server
                                    </li>
                                    <li>
                                        The text is displayed as vectorial. With an increase in he does not lose the quality.
                                    </li>
                                    <li>
                                        Ability to specify your unique font
                                    </li>
                                    <li>   
                                        The possibility to apply to the text of various effects and more accurately configure the display of titles vertices
                                    </li>
                                </ul>
                                Minuses:
                                <ul>
                                    <li>
                                        Low of drawing speed compared with other methods. The higher the quality of of generation SDF atlas and the more is required draw the of symbols on the atlas, the more time is required.
                                    </li>
                                </ul>
                            </p>
                        </div>
                        <div class="col-md-4">
                            <p>
                                When the vertex of drawing names for each character uses its own texture. Texture is is taken from the SDF atlas advance generated on the server 
                                <br/>
                                Goodies:
                                <ul>
                                    <li>
                                        High quality atlas SDF
                                    </li>
                                    <li>
                                        High-speed of drawing of text
                                    </li>
                                </ul>
                                Minuses:
                                <ul>
                                    <li>
                                        It is necessary to access the server
                                    </li>
                                    <li>
                                        You can not set your unique font
                                    </li>
                                </ul>
                            </p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <h5>
                                Comparison: <small>To see the the name of the graph vertices increase</small>
                            </h5>
                        </div>

                        <div class="col-md-4">
                            <p>
                                Rendering the vertex the names on the same texture (as it was before)
                            </p>
                            <p>
                                Time spent in the rendering graphics: <span id="time_text_1"></span> мс
                            </p>
                            <p>
                                <canvas id="img_text_1" class="img-responsive center-block"/>
                            </p>
                            <p>
                                <img src="gsoc2016/images/project-2-znbiz76.PNG" class="img-responsive center-block" />
                            </p>
                            <script type="text/javascript">Draw_project_2(1, "img_text_1", "time_text_1"); </script>
                        </div>
                        <div class="col-md-4">
                            <p>
                                When the vertex of drawing names for each character uses its own texture. Texture is is taken from the SDF atlas generated on the client
                            </p>
                            <p>
                                Time spent in the rendering graphics: <span id="time_text_2"></span> мс
                            </p>
                            <p>
                                <canvas id="img_text_2" class="img-responsive center-block"/>
                            </p>
                            <p>
                                <img src="gsoc2016/images/project-2-znbiz76-2.PNG" class="img-responsive center-block" />
                            </p>
                            <script type="text/javascript">Draw_project_2(2, "img_text_2", "time_text_2"); </script>
                        </div>
                        <div class="col-md-4">
                            <p>
                                When the vertex of drawing names for each character uses its own texture. Texture is is taken from the SDF atlas advance generated on the server 
                            </p>
                            <p>
                                Time spent in the rendering graphics: <span id="time_text_3"></span> мс
                            </p>
                            <p>
                                <canvas id="img_text_3" class="img-responsive center-block"/>
                            </p>
                            <p>
                                <img src="gsoc2016/images/project-2-znbiz76-3.PNG" class="img-responsive center-block" />
                            </p>
                            <script type="text/javascript">Draw_project_2(3, "img_text_3", "time_text_3"); </script>
                        </div>
                    </div>
                    <p>
                        <h5>
                            Conclusion:
                        </h5>
                        <br/>
                        I have suggestion that the quality atlas of drawing on the client side can be improved. In order to optimize and improvement of SDF algorithm WebGL take long, so as earlier no one this implemented the algorithm on WebGL. There are where to develop :)
                    </p>
                </div>
            </div>
        </div>

        <link rel="stylesheet", href="css/footer.css" />
        <div class="navbar navbar-fixed-bottom footer">
            <div class="col-xs-1"></div>
            <div class="col-xs-5">
                <h6 class="pull-left">
                    &copy; ZNbiz, 2016
                </h6>
            </div>
            <div class="col-xs-5">
                <h6 class="pull-right">
                    Обратная связь: <a href="mailto:nekrasov.aleks1992@gmail.com">nekrasov.aleks1992@gmail.com</a>
                </h6>
            </div>
        </div>   
    </body>
</html>