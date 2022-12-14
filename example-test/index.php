<!DOCTYPE html>
<html>
<head>
    <title>YouTube Channel PHP Class</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--main-style-->
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet/less" href="css/main.less" type="text/css">
</head>
<body data-page="home">
<div id="Wrapper">
    <div class="container-fluid">
        <div class="logo">
            <span class="fa fa-youtube-square"></span>
            YT-Channel
            <p>YouTube Channel PHP Class</p>
        </div>
        <div class="tabs">
            <div class="row">
                <div class="col-lg-2 col-md-3 col-sm-4">
                    <ul class="buttons">
                        <li class="active"><a href="#Channel-Info">Channel Info</a></li>
                        <li><a href="#Channel-Statistics">Channel Statistics</a></li>
                        <li><a href="#Channel-Playlists">Channel Playlists</a></li>
                        <li><a href="#Channel-Videos">Channel Videos</a></li>
                        <li><a href="#Channel-Search">Channel Search</a></li>
                        <li><a href="#Channel-Popular">Channel Popular</a></li>
                        <li><a href="#Playlist-Videos">Playlist Videos</a></li>
                        <li><a href="#Related-Video">Related Video</a></li>
                        <li><a href="#Video-Comments">Video Comments</a></li>
                        <li><a href="#Video-Info">Video Info</a></li>
                        <li><a href="#Iframe-Player"><span>NEW</span> Iframe Player</a></li>
                        <li><a href="#Channel-ID">Get Channel ID</a></li>
                        <li><a href="#Playlist-ID">Get Playlist ID</a></li>
                        <li><a href="#Video-ID">Get Video ID</a></li>
                        <li><a href="#Public-Search">Public Search</a></li>
                    </ul>
                </div>
                <div class="col-lg-10 col-md-9 col-sm-8">
                    <div class="tab-content active" id="Channel-Info">
                        <form action="ajax-data.php" method="post">
                            <input type="hidden" name="yt_data" value="channel_info">
                            <h3>Get Channel Info</h3>
                            <p><span class="text-danger"> Example ID = UCsim_WStpPtRtxMShy7_VAQ </span></p>
                            <div class="row">
                                <div class="col-xs-8">
                                    <input type="text" name="yt_value" class="form-control input-lg" placeholder="Channel ID" required>
                                </div>
                                <div class="col-xs-4">
                                    <button type="submit" class="btn btn-lg btn-block btn-success">Get Data</button>
                                </div>
                            </div>
                        </form>
                        <div class="code">

                        </div>
                    </div>
                    <!--/Channel-Info-->
                    <div class="tab-content" id="Channel-Statistics">
                        <form action="ajax-data.php" method="post">
                            <input type="hidden" name="yt_data" value="channel_statistics">
                            <h3>Get Channel Statistics</h3>
                            <p><span class="text-danger"> Example ID = UCsim_WStpPtRtxMShy7_VAQ </span></p>
                            <div class="row">
                                <div class="col-xs-8">
                                    <input type="text" name="yt_value" class="form-control input-lg" placeholder="Channel ID" required>
                                </div>
                                <div class="col-xs-4">
                                    <button type="submit" class="btn btn-lg btn-block btn-success">Get Data</button>
                                </div>
                            </div>
                        </form>
                        <div class="code">

                        </div>
                    </div>
                    <!--/Channel-Statistics-->
                    <div class="tab-content" id="Channel-Playlists">
                        <form action="ajax-data.php" method="post">
                            <input type="hidden" name="yt_data" value="channel_playlists">
                            <h3>Get Channel Playlists</h3>
                            <p><span class="text-danger"> Example ID = UCsim_WStpPtRtxMShy7_VAQ </span></p>
                            <div class="row">
                                <div class="col-xs-8">
                                    <input type="text" name="yt_value" class="form-control input-lg" placeholder="Channel ID" required>
                                </div>
                                <div class="col-xs-4">
                                    <button type="submit" class="btn btn-lg btn-block btn-success">Get Data</button>
                                </div>
                            </div>
                        </form>
                        <div class="code">

                        </div>
                    </div>
                    <!--/Channel-Playlists-->
                    <div class="tab-content" id="Channel-Videos">
                        <form action="ajax-data.php" method="post">
                            <input type="hidden" name="yt_data" value="channel_videos">
                            <h3>Get Channel Videos</h3>
                            <p><span class="text-danger"> Example ID = UCsim_WStpPtRtxMShy7_VAQ </span></p>
                            <div class="row">
                                <div class="col-xs-8">
                                    <input type="text" name="yt_value" class="form-control input-lg" placeholder="Channel ID" required>
                                </div>
                                <div class="col-xs-4">
                                    <button type="submit" class="btn btn-lg btn-block btn-success">Get Data</button>
                                </div>
                            </div>
                        </form>
                        <div class="code">

                        </div>
                    </div>
                    <!--/Channel-Videos-->
                    <div class="tab-content" id="Channel-Search">
                        <form action="ajax-data.php" method="post">
                            <input type="hidden" name="yt_data" value="channel_search">
                            <h3>Get Channel Search</h3>
                            <p><span class="text-danger"> Example Keywords = Envato , Graphic Designs, Photoshop </span></p>
                            <div class="row">
                                <div class="col-xs-8">
                                    <input type="text" name="yt_value" class="form-control input-lg" placeholder="Envato , Graphic Designs, Photoshop" required>
                                </div>
                                <div class="col-xs-4">
                                    <button type="submit" class="btn btn-lg btn-block btn-success">Get Data</button>
                                </div>
                            </div>
                        </form>
                        <div class="code">

                        </div>
                    </div>
                    <!--/Channel-Search-->
                    <div class="tab-content" id="Channel-Popular">
                        <form action="ajax-data.php" method="post">
                            <input type="hidden" name="yt_data" value="channel_popular">
                            <h3>Get Channel Popular Videos</h3>
                            <p><span class="text-danger"> Example ID = UCsim_WStpPtRtxMShy7_VAQ </span></p>
                            <div class="row">
                                <div class="col-xs-8">
                                    <input type="text" name="yt_value" class="form-control input-lg" placeholder="Channel ID" required>
                                </div>
                                <div class="col-xs-4">
                                    <button type="submit" class="btn btn-lg btn-block btn-success">Get Data</button>
                                </div>
                            </div>
                        </form>
                        <div class="code">

                        </div>
                    </div>
                    <!--/Channel-Popular-->
                    <div class="tab-content" id="Playlist-Videos">
                        <form action="ajax-data.php" method="post">
                            <input type="hidden" name="yt_data" value="playlist_videos">
                            <h3>Get Playlist Videos</h3>
                            <p><span class="text-danger"> Example ID =  PLsmLWgOTo1296W7Dn7kC59DDI5-CDdjyl </span></p>
                            <div class="row">
                                <div class="col-xs-8">
                                    <input type="text" name="yt_value" class="form-control input-lg" placeholder="Playlist ID" required>
                                </div>
                                <div class="col-xs-4">
                                    <button type="submit" class="btn btn-lg btn-block btn-success">Get Data</button>
                                </div>
                            </div>
                        </form>
                        <div class="code">

                        </div>
                    </div>
                    <!--/Playlist-Videos-->
                    <div class="tab-content" id="Related-Video">
                        <form action="ajax-data.php" method="post">
                            <input type="hidden" name="yt_data" value="related_videos">
                            <h3>Get Related Videos</h3>
                            <p><span class="text-danger"> Example ID =  hKyW17BB38k </span></p>
                            <div class="row">
                                <div class="col-xs-8">
                                    <input type="text" name="yt_value" class="form-control input-lg" placeholder="Video ID" required>
                                </div>
                                <div class="col-xs-4">
                                    <button type="submit" class="btn btn-lg btn-block btn-success">Get Data</button>
                                </div>
                            </div>
                        </form>
                        <div class="code">

                        </div>
                    </div>
                    <!--/Related-Video-->
                    <div class="tab-content" id="Video-Comments">
                        <form action="ajax-data.php" method="post">
                            <input type="hidden" name="yt_data" value="video_comments">
                            <h3>Get Video Comments</h3>
                            <p><span class="text-danger"> Example ID =  hKyW17BB38k </span></p>
                            <div class="row">
                                <div class="col-xs-8">
                                    <input type="text" name="yt_value" class="form-control input-lg" placeholder="Video ID" required>
                                </div>
                                <div class="col-xs-4">
                                    <button type="submit" class="btn btn-lg btn-block btn-success">Get Data</button>
                                </div>
                            </div>
                        </form>
                        <div class="code">

                        </div>
                    </div>
                    <!--/Video-Comments-->
                    <div class="tab-content" id="Video-Info">
                        <form action="ajax-data.php" method="post">
                            <input type="hidden" name="yt_data" value="video_info">
                            <h3>Get Video Info</h3>
                            <p><span class="text-danger"> Example ID =  hKyW17BB38k </span></p>
                            <div class="row">
                                <div class="col-xs-8">
                                    <input type="text" name="yt_value" class="form-control input-lg" placeholder="Video ID" required>
                                </div>
                                <div class="col-xs-4">
                                    <button type="submit" class="btn btn-lg btn-block btn-success">Get Data</button>
                                </div>
                            </div>
                        </form>
                        <div class="code">

                        </div>
                    </div>
                    <!--/Video-Info-->
                    <div class="tab-content" id="Channel-ID">
                        <form action="ajax-data.php" method="post">
                            <input type="hidden" name="yt_data" value="channel_id_url">
                            <h3>Get Channel ID BY Username</h3>
                            <p><span class="text-danger"> Example Name =  Envato </span></p>
                            <div class="row">
                                <div class="col-xs-8">
                                    <input type="text" name="yt_value" class="form-control input-lg" placeholder="User Name" required>
                                </div>
                                <div class="col-xs-4">
                                    <button type="submit" class="btn btn-lg btn-block btn-success">Get Data</button>
                                </div>
                            </div>
                        </form>
                        <div class="code">

                        </div>
                    </div>
                    <!--/Channel-ID-->
                    <div class="tab-content" id="Playlist-ID">
                        <form action="ajax-data.php" method="post">
                            <input type="hidden" name="yt_data" value="playlist_id_url">
                            <h3>Get Playlist ID From URL</h3>
                            <p><span class="text-danger"> Example Name =  https://www.youtube.com/playlist?list=PLsmLWgOTo128Us68yvhQbQ9wQ3K4s8pWi </span></p>
                            <div class="row">
                                <div class="col-xs-8">
                                    <input type="url" name="yt_value" class="form-control input-lg" placeholder="http://" required>
                                </div>
                                <div class="col-xs-4">
                                    <button type="submit" class="btn btn-lg btn-block btn-success">Get Data</button>
                                </div>
                            </div>
                        </form>
                        <div class="code">

                        </div>
                    </div>
                    <!--/Playlist-ID-->
                    <div class="tab-content" id="Video-ID">
                        <form action="ajax-data.php" method="post">
                            <input type="hidden" name="yt_data" value="video_id_url">
                            <h3>Get Video ID From URL</h3>
                            <p><span class="text-danger"> Example Name =  https://www.youtube.com/watch?v=PcgKKOCJSCE </span></p>
                            <div class="row">
                                <div class="col-xs-8">
                                    <input type="url" name="yt_value" class="form-control input-lg" placeholder="http://" required>
                                </div>
                                <div class="col-xs-4">
                                    <button type="submit" class="btn btn-lg btn-block btn-success">Get Data</button>
                                </div>
                            </div>
                        </form>
                        <div class="code">

                        </div>
                    </div>
                    <!--/Video-ID-->
                    <div class="tab-content" id="Public-Search">
                        <form action="ajax-data.php" method="post">
                            <input type="hidden" name="yt_data" value="public_search">
                            <h3>Get Channel Search</h3>
                            <p><span class="text-danger"> Example Keywords = Enavto or Lessons or Cars or Natural  </span></p>
                            <div class="row">
                                <div class="col-xs-8">
                                    <input type="text" name="yt_value" class="form-control input-lg" placeholder="Channel ID" required>
                                </div>
                                <div class="col-xs-4">
                                    <button type="submit" class="btn btn-lg btn-block btn-success">Get Data</button>
                                </div>
                            </div>
                        </form>
                        <div class="code">

                        </div>
                    </div>
                    <!--/Public-Search-->
                    <div class="tab-content" id="Iframe-Player">
                        <form action="ajax-data.php" method="post">
                            <input type="hidden" name="yt_data" value="iframe_player">
                            <h3>Iframe Player Test</h3>
                            <p><span class="text-primary"> Enter Video ID or URL  </span></p>
                            <p><span class="text-danger"> Example ID =  hKyW17BB38k </span></p>
                            <div class="row">
                                <div class="col-xs-8">
                                    <input type="text" name="yt_value" class="form-control input-lg" placeholder="Video ID or URL" required>
                                </div>
                                <div class="col-xs-4">
                                    <button type="submit" class="btn btn-lg btn-block btn-success">Get Data</button>
                                </div>
                            </div>
                        </form>
                        <div class="code">

                        </div>
                    </div>
                    <!--/Iframe-Player-->
                </div>
            </div>
        </div>
    </div>
</div>
<!--/Wrapper-->
<div class="loading_window"></div>
<!--java scripts file-->
<script type="text/javascript" src="js/jquery/jquery.js"></script>
<script type="text/javascript" src="js/less/less.js"></script>
<script type="text/javascript" src="js/bootstrap/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery/custom-functions.js"></script>
<script type="text/javascript" src="js/jquery/jquery.custom.js"></script>
<!--/java scripts file-->
</body>
</html>