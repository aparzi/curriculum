/**
 * Created by aparzi on 17/10/17.
 */

var number = Math.floor((Math.random() * 5) + 1);

switch (number) {

    case 1:
        $('head').append('<link rel="stylesheet" type="text/css" href="assets/css/color/orange.css">');
        break;

    case 2:
        $('head').append('<link rel="stylesheet" type="text/css" href="assets/css/color/green.css">');
        break;

    case 3:
        $('head').append('<link rel="stylesheet" type="text/css" href="assets/css/color/lime.css">');
        break;

    case 4:
        $('head').append('<link rel="stylesheet" type="text/css" href="assets/css/color/purple.css">');
        break;

    case 5:
        $('head').append('<link rel="stylesheet" type="text/css" href="assets/css/color/red.css">');
        break;
}
