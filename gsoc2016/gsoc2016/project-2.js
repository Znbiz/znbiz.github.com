function Draw_project_2(variant, id_img, id_time){
	var styles = {}

	if(variant == 1){
		styles = {
              background: { color: "rgb(255, 255, 255)" },  //background color of canvas, default: "rgb(255, 255, 255)"
              node: { //predefined style
                minSize: 8,   //minimum size of node representation in pixels, default: 6
                maxSize: 16,    //maximum size of node representation in pixels, default: 16
                color: "rgb(255, 0, 0)",  //node color (combined with node image), default: "rgb(255, 255, 255)"
                texture: "gsoc2016/images/circle.png",   //node image
                label: {
                  hideSize: 16,   //minimum size (height) for the label to be displayed
                  color: "rgb(0, 0, 0)",  //label color, default: "rgb(120, 120, 120)"
                  font: "15px Arial, Helvetica, sans-serif", //label font, default: "11px Arial, Helvetica, sans-serif"
                  SDF: {
                    SDF: false,
                    // SDFatlas: "OpenSans-Regular.png", // "null" - if the image to be generated
                    // SDFmetrics: metrics // "null" - if the image to be generated
                  }
                }
              },
              edge: {   //predefined style
                width: 2,   //edge width in pixels, default: 1
                color: "rgb(86, 86, 86)",   //edge color, default: "rgb(204, 204, 204)"
                arrow: {
                  minSize: 6,   //minimum size of arrow in pixels, default: 6
                  maxSize: 12,  //maximum size of arrow, default: 12
                  aspect: 2,  //aspect of arrow image, default: 1
                  texture: "gsoc2016/images/arrow.png",  //arrow image
                  hideSize: 2   //minimum size of arrow to be displayed
                }
              },
              nodeBlue: {   //custom style
                color: "rgb(0, 0, 255)"
              },
              nodeGiant: {  //custom style
                minSize: 16
              },
              nodeWithSmallBlueLabel: {   //custom style
                label: {
                  color: "rgb(0, 0, 255)",
                  font: "11px Arial, Helvetica, sans-serif"
                }
              },
              edgeWideYellow: {   //custom style
                width: 4,
                color: "rgb(255, 255, 0)"
              },
              edgeWithWhiteArrow: {   //custom style
                arrow: {
                  color: "rgb(255, 255, 255)"
                }
              }
           }
	} else if (variant == 2) {
		styles = {
              background: { color: "rgb(255, 255, 255)" },  //background color of canvas, default: "rgb(255, 255, 255)"
              node: { //predefined style
                minSize: 8,   //minimum size of node representation in pixels, default: 6
                maxSize: 16,    //maximum size of node representation in pixels, default: 16
                color: "rgb(255, 0, 0)",  //node color (combined with node image), default: "rgb(255, 255, 255)"
                texture: "gsoc2016/images/circle.png",   //node image
                label: {
                  hideSize: 16,   //minimum size (height) for the label to be displayed
                  color: "rgb(0, 0, 0)",  //label color, default: "rgb(120, 120, 120)"
                  font: "20px Arial, Helvetica, sans-serif", //label font, default: "11px Arial, Helvetica, sans-serif"
                  SDF: {
                    SDF: true,
                    // SDFatlas: "OpenSans-Regular.png", // "null" - if the image to be generated
                    // SDFmetrics: metrics // "null" - if the image to be generated
                  }
                }
              },
              edge: {   //predefined style
                width: 2,   //edge width in pixels, default: 1
                color: "rgb(86, 86, 86)",   //edge color, default: "rgb(204, 204, 204)"
                arrow: {
                  minSize: 6,   //minimum size of arrow in pixels, default: 6
                  maxSize: 12,  //maximum size of arrow, default: 12
                  aspect: 2,  //aspect of arrow image, default: 1
                  texture: "gsoc2016/images/arrow.png",  //arrow image
                  hideSize: 2   //minimum size of arrow to be displayed
                }
              },
              nodeBlue: {   //custom style
                color: "rgb(0, 0, 255)"
              },
              nodeGiant: {  //custom style
                minSize: 16
              },
              nodeWithSmallBlueLabel: {   //custom style
                label: {
                  color: "rgb(0, 0, 255)",
                  font: "11px Arial, Helvetica, sans-serif"
                }
              },
              edgeWideYellow: {   //custom style
                width: 4,
                color: "rgb(255, 255, 0)"
              },
              edgeWithWhiteArrow: {   //custom style
                arrow: {
                  color: "rgb(255, 255, 255)"
                }
              }
           }
	} else if (variant == 3) {
		styles = {
              background: { color: "rgb(255, 255, 255)" },  //background color of canvas, default: "rgb(255, 255, 255)"
              node: { //predefined style
                minSize: 8,   //minimum size of node representation in pixels, default: 6
                maxSize: 16,    //maximum size of node representation in pixels, default: 16
                color: "rgb(255, 0, 0)",  //node color (combined with node image), default: "rgb(255, 255, 255)"
                texture: "gsoc2016/images/circle.png",   //node image
                label: {
                  hideSize: 16,   //minimum size (height) for the label to be displayed
                  color: "rgb(0, 0, 0)",  //label color, default: "rgb(120, 120, 120)"
                  font: "15px Arial, Helvetica, sans-serif", //label font, default: "11px Arial, Helvetica, sans-serif"
                  SDF: {
                    SDF: true,
                    SDFatlas: "gsoc2016/OpenSans-Regular.png", // "null" - if the image to be generated
                    SDFmetrics: metrics // "null" - if the image to be generated
                  }
                }
              },
              edge: {   //predefined style
                width: 2,   //edge width in pixels, default: 1
                color: "rgb(86, 86, 86)",   //edge color, default: "rgb(204, 204, 204)"
                arrow: {
                  minSize: 6,   //minimum size of arrow in pixels, default: 6
                  maxSize: 12,  //maximum size of arrow, default: 12
                  aspect: 2,  //aspect of arrow image, default: 1
                  texture: "gsoc2016/images/arrow.png",  //arrow image
                  hideSize: 2   //minimum size of arrow to be displayed
                }
              },
              nodeBlue: {   //custom style
                color: "rgb(0, 0, 255)"
              },
              nodeGiant: {  //custom style
                minSize: 16
              },
              nodeWithSmallBlueLabel: {   //custom style
                label: {
                  color: "rgb(0, 0, 255)",
                  font: "11px Arial, Helvetica, sans-serif"
                }
              },
              edgeWideYellow: {   //custom style
                width: 4,
                color: "rgb(255, 255, 0)"
              },
              edgeWithWhiteArrow: {   //custom style
                arrow: {
                  color: "rgb(255, 255, 255)"
                }
              }
             }
	}
	var graph = new ccNetViz(document.getElementById(id_img), {styles :  styles});
    var nodes = [
      { "label": "ZNbiz1"},
    { "label": "2"},
    { "label": "3"},
    { "label": "4"},
    { "label": "5"},
    { "label": "6"},
    { "label": "7"},
    { "label": "8"},
    { "label": "9"},
    { "label": "10"},
    { "label": "11"},
    { "label": "12"},
    { "label": "13"},
    { "label": "14"},
    { "label": "15"},
    { "label": "16"},
    { "label": "17"},
    { "label": "18"},
    { "label": "19"},
    { "label": "20"},
    { "label": "21"},
    { "label": "22"},
    { "label": "23"},
    { "label": "24"},
    { "label": "25"},
    { "label": "26"},
    { "label": "27"},
    { "label": "28"},
    { "label": "29"},
    { "label": "30"},
    { "label": "31"},
    { "label": "32"},
    { "label": "33"},
    { "label": "34"},
    { "label": "35"},
    { "label": "36"},
    { "label": "37"},
    { "label": "38"},
    { "label": "39"},
    { "label": "40"},
    { "label": "41"},
    { "label": "42"},
    { "label": "43"},
    { "label": "44"},
    { "label": "45"},
    { "label": "46"},
    { "label": "47"},
    { "label": "48"},
    { "label": "49"},
    { "label": "50"},
    { "label": "51"},
    { "label": "52dddddddddddddddddddddddddBCL"},
    { "label": "53"},
    { "label": "54"},
    { "label": "55"},
    { "label": "56"},
    { "label": "57"},
    { "label": "58"},
    { "label": "59"},
    { "label": "60"},
    { "label": "61"},
    { "label": "62"},
    { "label": "63"},
    { "label": "64"},
    { "label": "65"},
    { "label": "sdfdgsdgdgsdgdfgsfgsasdjkghasdjghsdjflgsdfjkadgnlkdguae rutkxfbzjsd  asfs af dgsdfgsdfgsdfgsdfg66"},
    { "label": "67"},
    { "label": "68"},
    { "label": "6sgdfsgsdgsgsdfg9"},
    { "label": "70"},
    { "label": "71"},
    { "label": "72"},
    { "label": "73cbxcgsdgset"},
    { "label": "74"},
    { "label": "75"},
    { "label": "76"},
    { "label": "77"},
    { "label": "78"},
    { "label": "79"},
    { "label": "80"},
    { "label": "81"},
    { "label": "82"},
    { "label": "83"},
    { "label": "84"},
    { "label": "85"},
    { "label": "86"},
    { "label": "etddsds"},
    { "label": "88"},
    { "label": "sdfsdf89"},
    { "label": "90"},
    { "label": "91"},
    { "label": "92"},
    { "label": "93"},
    { "label": "94"},
    { "label": "sdfsf95"},
    { "label": "96"},
    { "label": "97qwrqwrqwrqrqwrqwrqwr"},
    { "label": "98"},
    { "label": "99"},
    { "label": "100"}
    ];
    var edges = [
        { "source": 0, "target": 12 },
    { "source": 1, "target": 14 },
    { "source": 2, "target": 5 },
    { "source": 3, "target": 36 },
    { "source": 4, "target": 87 },
    { "source": 5, "target": 72 },
    { "source": 6, "target": 84 },
    { "source": 7, "target": 48 },
    { "source": 8, "target": 73 },
    { "source": 9, "target": 23 },
    { "source": 10, "target": 4 },
    { "source": 11, "target": 45 },
    { "source": 12, "target": 80 },
    { "source": 13, "target": 77 },
    { "source": 14, "target": 63 },
    { "source": 15, "target": 64 },
    { "source": 16, "target": 84 },
    { "source": 17, "target": 1 },
    { "source": 18, "target": 45 },
    { "source": 19, "target": 24 },
    { "source": 20, "target": 36 },
    { "source": 21, "target": 63 },
    { "source": 22, "target": 98 },
    { "source": 23, "target": 47 },
    { "source": 24, "target": 99 },
    { "source": 25, "target": 32 },
    { "source": 26, "target": 42 },
    { "source": 27, "target": 18 },
    { "source": 28, "target": 5 },
    { "source": 29, "target": 2 },
    { "source": 30, "target": 16 },
    { "source": 31, "target": 63 },
    { "source": 32, "target": 4 },
    { "source": 33, "target": 48 },
    { "source": 34, "target": 12 },
    { "source": 35, "target": 72 },
    { "source": 36, "target": 98 },
    { "source": 37, "target": 67 },
    { "source": 38, "target": 81 },
    { "source": 39, "target": 82 },
    { "source": 40, "target": 30 },
    { "source": 41, "target": 63 },
    { "source": 42, "target": 32 },
    { "source": 43, "target": 41 },
    { "source": 44, "target": 82 },
    { "source": 45, "target": 39 },
    { "source": 46, "target": 17 },
    { "source": 47, "target": 16 },
    { "source": 48, "target": 26 },
    { "source": 49, "target": 9 },
    { "source": 50, "target": 79 },
    { "source": 51, "target": 6 },
    { "source": 52, "target": 19 },
    { "source": 53, "target": 57 },
    { "source": 54, "target": 49 },
    { "source": 55, "target": 20 },
    { "source": 56, "target": 39 },
    { "source": 57, "target": 27 },
    { "source": 58, "target": 28 },
    { "source": 59, "target": 90 },
    { "source": 60, "target": 37 },
    { "source": 61, "target": 77 },
    { "source": 62, "target": 11 },
    { "source": 63, "target": 2 },
    { "source": 64, "target": 68 },
    { "source": 65, "target": 77 },
    { "source": 66, "target": 86 },
    { "source": 67, "target": 97 },
    { "source": 68, "target": 94 },
    { "source": 69, "target": 12 },
    { "source": 70, "target": 54 },
    { "source": 71, "target": 68 },
    { "source": 72, "target": 12 },
    { "source": 73, "target": 38 },
    { "source": 74, "target": 40 },
    { "source": 75, "target": 15 },
    { "source": 76, "target": 50 },
    { "source": 77, "target": 80 },
    { "source": 78, "target": 10 },
    { "source": 79, "target": 37 },
    { "source": 80, "target": 10 },
    { "source": 81, "target": 89 },
    { "source": 82, "target": 37 },
    { "source": 83, "target": 23 },
    { "source": 84, "target": 28 },
    { "source": 85, "target": 20 },
    { "source": 86, "target": 18 },
    { "source": 87, "target": 37 },
    { "source": 88, "target": 61 },
    { "source": 89, "target": 65 },
    { "source": 90, "target": 55 },
    { "source": 91, "target": 66 },
    { "source": 92, "target": 81 },
    { "source": 93, "target": 69 },
    { "source": 94, "target": 48 },
    { "source": 95, "target": 66 },
    { "source": 96, "target": 86 },
    { "source": 97, "target": 28 },
    { "source": 98, "target": 42 },
    { "source": 99, "target": 32 }
    ];

    for(var i = 0; i < edges.length; i++) {
      edges[i].source = nodes[edges[i].source]
      edges[i].target = nodes[edges[i].target]
    }

    for(var i = 0; i < nodes.length; i++) {
    	nodes[i].label = "ZNbiz@" + i;
    }

    var time = Date.now();
    graph.set(nodes, edges, "force");
    graph.draw();

    time = Date.now() - time;
    $("#"+id_time).append(time.toFixed(2));
}