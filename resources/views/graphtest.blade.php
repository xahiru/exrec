<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Please provide the website a nickname">
    <title>Help Me Choose - sign up</title>

    <link rel="stylesheet" href="css/kube.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript" src="js/script.js"></script>
     <script type="text/javascript" src="js/vis.js"></script>
    <link href="css/vis.css" rel="stylesheet" type="text/css" />
    <style type="text/css">
        #mynetwork {
            width: 600px;
            height: 400px;
            border: 1px solid lightgray;
        }
    </style>
</head>
<body>
    <div id="wrapper">
        <div class="show-on-small">
            <div id="nav-toggle-box">
                <div id="nav-toggle-brand"><a class="brand" href="step1.html">help me choose</a></div>
                <a href="#" id="nav-toggle" class="toggleme" onclick="toggleNav();"><i class="menu-icon"></i></a>
            </div>
        </div>
        <div id="header-box" class="hide-on-small" style="display: block;">
            <div id="header">
                <div id="header-brand"><a class="brand" href="step1.html">help me choose</a></div>
                <nav id="header-nav">
                    <ul>
                        <li><a href="about.html">About</a></li>
                        <li><a href="instructions.html">Instructions</a></li>
                        <li><a class="header-button" href="add.html">Add a Place</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <div id="main">
            <article>
                <h1>Time to choose!</h1>
                <p>Choose an exprimental choice<br />This is where things begin <br />:-D</p>
            </article>
            <!-- <div class="row"> {{$friends}}</div> -->
            <div class="row">
                <div id="mynetwork"></div>
                <script type="text/javascript">
                    // create an array with nodes

                    // function getParameterByName(name, url) {
                    //         if (!url) url = window.location.href;
                    //        console.log(url);
                    //         name = name.replace(/[\[\]]/g, "\\$&");
                    //         var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
                    //             results = regex.exec(url);
                    //         if (!results) return null;
                    //         if (!results[2]) return '';
                    //         return decodeURIComponent(results[2].replace(/\+/g, " "));
                    //     }
                     
                    // var $friends = getParameterByName('friends');
                    var $friends = {!!$friends!!};
                    var $ids = {!!$ids!!};


                    var $node_list = {};
                    var $singlenode = [];
                    $node_list.singlenode = $singlenode;
                
                    // var index;
                    for (var i = 0; i < $ids.length; i++) {
                        $id =  $ids[i]['id'];
                        $name= $ids[i]['name']
                        var $singlenode = {
                            id: $id,
                            label: $name
                        }
                        $node_list.singlenode.push($singlenode);

                    }

                    var g_edges = {};
                    var edges = [];
                    g_edges.edge = edges;

                    for (index = 0; index < $friends.length; ++index) {
                        $key = $friends[index]['friend_id1'];
                        $key2 = $friends[index]['friend_id2'];

                        edges = {
                            from: $key,
                            to: $key2
                        }
                        g_edges.edge.push(edges);

                    }

                    var nodes = new vis.DataSet($node_list.singlenode);
                    var edges = new vis.DataSet(g_edges.edge);

                    // create a network
                    var container = document.getElementById('mynetwork');

                    // provide the data in the vis format
                    var data = {
                        nodes: nodes,
                        edges: edges
                    };
                    // var options = {};
                    var options = {
                      layout: {
                        randomSeed: undefined,
                        improvedLayout:false,
                        hierarchical: {
                          enabled:false,
                          levelSeparation: 150,
                          nodeSpacing: 100,
                          treeSpacing: 200,
                          blockShifting: true,
                          edgeMinimization: true,
                          parentCentralization: true,
                          direction: 'UD',        // UD, DU, LR, RL
                          sortMethod: 'hubsize'   // hubsize, directed
                        }
                      }
                    }

                    // network.setOptions(options);

                    // initialize your network!
                    var network = new vis.Network(container, data, options);
                </script>
            </div>
            <div class="row">
                <!-- A VERSION -->
                <img id="credits" src="img/BUPT_logo.png" alt="Made by Beijing University of Posts and Telecommunications" />            
                <!-- B VERSION (no image) -->
            </div>            
        </div>
        <footer id="footer">
            <nav>
                <ul>
                    <li><a href="privacy.html">Privacy Policy</a></li>
                    <li class="divider">&middot;</li>
                    <li><a href="terms.html">Terms of Service</a></li>
                    <li class="divider">&middot;</li>
                    <li><a href="contact.html">Contact us</a></li>
                </ul>
            </nav>
        </footer>
    </div>
</body>
</html>