<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- INCLUDE MAIN SCRIPT: -->
    <script src='{{URL::asset('mirrorfile/dist/JeelizVTOWidget.js')}}'></script>

    <!-- For icons adjust fame or resize canvas -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>

    <!-- Font for the header only: -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">

    <!-- main stylesheet: -->
    <link rel='stylesheet' href='{{URL::asset('mirrorfile/css/JeelizVTOWidget.css')}}' />

    <title>Document</title>
    <meta charset='utf-8' />
    <!-- Forbid resize on pinch with IOS Safari: -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no"/>
    <!-- INCLUDE MAIN SCRIPT: -->
    <link rel="stylesheet" href="{{URL::asset('front/css/bootstrap.min.css')}}">

    <script>
        let _isResized = false;
        function test_resizeCanvas() {
            // halves the height:
            let halfHeightPx = Math.round(window.innerHeight / 2).toString() + 'px';

            const domWidget = document.getElementById('JeelizVTOWidget');
            domWidget.style.maxHeight = (_isResized) ? 'none' : halfHeightPx;

            _isResized = !_isResized;
        }


        function get_initialSKU(){
            // look if a SKU is provided as a URL parameters:
            const queryString = window.location.search;
            const URLParams = new URLSearchParams(queryString);
            const sku = URLParams.get('sku') || 'rayban_aviator_or_vertFlash';
            console.log('Initial SKU =', sku);
            return sku;
        }


        // entry point:
        function main() {
            JEELIZVTOWIDGET.start({
                //sku: get_initialSKU(),
                searchImageMask: '{{asset('front/images/home/logo.png')}}',
                searchImageColor: 0xeeeeee,
                callbackReady: function(){
                    console.log('INFO: JEELIZVTOWIDGET is ready :)');
                },
                onError: function(errorLabel){ // this function catches errors, so you can display custom integrated messages
                    alert('An error happened. errorLabel =' + errorLabel)
                    switch(errorLabel) {
                        case 'WEBCAM_UNAVAILABLE':
                            // the user has no camera, or does not want to share it.
                            break;

                        case 'NOFILE':
                            // the user send an image, but it is not here
                            break;

                        case 'WRONGFILEFORMAT':
                            // the user upload a file which is not an image or corrupted
                            break;

                        case 'INVALID_SKU':
                            // the provided SKU does not match with a glasses model
                            break;

                        case 'FALLBACK_UNAVAILABLE':
                            // we cannot switch to file upload mode. browser too old?
                            break;

                        case 'PLACEHOLDER_NULL_WIDTH':
                        case 'PLACEHOLDER_NULL_HEIGHT':
                            // Something is wrong with the placeholder
                            // (element whose id='JeelizVTOWidget')
                            break;

                        case 'FATAL':
                        default:
                            // a bit error happens:(
                            break;
                    } // end switch
                } // end onError()
            }) // end JEELIZVTOWIDGET.start call
            {{--JEELIZVTOWIDGET.load_modelStandalone('../../../glasses3D/{{$model->glassesModel}}');--}}
        } // end main()


        function load_modelBySKU(){
            const sku = prompt('Please enter a glasses model SKU:', 'rayban_wayfarer_havane_marron');
            if (sku){
                JEELIZVTOWIDGET.load(sku);
            }
        }

    </script>
    <style>
        .closeMirror{
            position: fixed;
            background-color: red;
            width: 45px;
            height: 45px;
            border-radius: 50%;
            top: 13px;
            right: 20px;
            text-align: center;
            align-items: center;
            overflow: hidden;
            display: flex;
            justify-content: center;
        }
        .myCar{
            border: 5px solid #d8e418 !important;
            width: 100px;
            height: 100px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
        }
        .owl-carousel .owl-item img {
            display: block;
            width: 100%;
            height: 100%;
            border-radius: 50%;
        }
        #JeelizVTOWidgetChangeModelContainer {
            /*bottom: 67px;*/
            height: 40px;
            display: flex !important;
            justify-content: center;
        }
    </style>

</head>
<body onload="main()">
    <!-- Start This to show Spacefic Glasses-->
    <div class='content' id="show_glasses">
        <div id='JeelizVTOWidget'>
            <canvas id='JeelizVTOWidgetCanvas'></canvas>

            <div class='JeelizVTOWidgetControls JeelizVTOWidgetControlsTop'>
                <!-- ADJUST BUTTON: -->
                <button id='JeelizVTOWidgetAdjust'>
                    <div class="buttonIcon"><i class="fas fa-arrows-alt"></i></div>Adjust
                </button>

                <!-- RESIZE WIDGET BUTTON: -->
                <button id='buttonResizeCanvas' onclick='test_resizeCanvas();'>
                    <div class="buttonIcon"><i class="fas fa-sync-alt"></i></div>Resize widget
                </button>
            </div>

            <!-- CHANGE MODEL BUTTONS: -->
            <!--###################################################-->
            <div class='JeelizVTOWidgetControls' id='JeelizVTOWidgetChangeModelContainer'>
                @if(substr($model->glassesModel, -4) == "json")
                    <button onclick="JEELIZVTOWIDGET.load_modelStandalone('../../../glasses3D/{{$model->glassesModel}}')">Click to test</button>
                @else
                    <button onclick="JEELIZVTOWIDGET.load('{{$model->glassesModel}}')">Click to test</button>
                @endif
            </div>
            <!--###################################################-->

            <!-- BEGIN ADJUST NOTICE -->
            <div id='JeelizVTOWidgetAdjustNotice'>
                Move the glasses to adjust them.
                <button class='JeelizVTOWidgetBottomButton' id='JeelizVTOWidgetAdjustExit'>Quit</button>
            </div>
            <!-- END AJUST NOTICE -->
        </div>
    </div>

    <!--this Button to close Mirror and came back to Home-->
    <section class="closeMirror">
        <a class="close" href="{{ url()->previous() }}">
            <span>&times;</span>
        </a>
    <!-- EndThis to show Spacefic Glasses-->
</body>
<script src='{{ asset('front/js//jquery.min.js') }}'></script>
<script src="{{URL::asset('front/js/popper.min.js')}}"></script>
<script src="{{URL::asset('front/js/bootstrap.min.js')}}"></script>
<script src="{{URL::asset('front/js/owl.carousel.min.js')}}"></script>
<script src="{{URL::asset('front/js/main.js')}}"></script>
<script>
    ///*==========================JeelizVTOWidget==============================*/
    function myFunction(my_model) {
        document.getElementById('show_glasses').style.display="block";
        main();
    }
    ///*==========================JeelizVTOWidget==============================*/
</script>
</html>



