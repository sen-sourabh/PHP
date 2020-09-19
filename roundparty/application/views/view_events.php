<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="shortcut icon" type="image/x-icon" href="http://itsolution.co.in/roundparty_new/assets/images/favi.png">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Round Party</title>
    <meta name="description" content="Free Web tutorials">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <link href="http://itsolution.co.in/roundparty_new/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://itsolution.co.in/roundparty_new/assets/css/fontawesome-all.min.css" rel="stylesheet">
    <link href="http://itsolution.co.in/roundparty_new/assets/css/animate.css" rel="stylesheet">
    <link href="http://itsolution.co.in/roundparty_new/assets/css/datepicker.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link href="http://itsolution.co.in/roundparty_new/assets/css/my_css.css" rel="stylesheet">
    <link href="http://itsolution.co.in/roundparty_new/assets/css/main-style.css" rel="stylesheet">
    <link href="http://itsolution.co.in/roundparty_new/assets/css/responsive.css" rel="stylesheet">
    <!-- <link href="http://itsolution.co.in/roundparty_new/assets/css/full-calender.css" rel="stylesheet"> -->

    <link rel="stylesheet" type="text/css" href="http://itsolution.co.in/roundparty_new/assets/css/jquery-ui-custom-1.11.2.min.css" />
    <link rel="stylesheet" type="text/css" href="http://itsolution.co.in/roundparty_new/assets/css/calenstyle.css" />
    <link rel="stylesheet" type="text/css" href="http://itsolution.co.in/roundparty_new/assets/css/calenstyle-jquery-ui-override.css" />
    <link rel="stylesheet" type="text/css" href="http://itsolution.co.in/roundparty_new/assets/css/calenstyle-iconfont.css" />
    
</head>
<body>

    <header>
        <div class="top_bar">
            <div class="container-fluid">
                <div class="top_bar_in">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="top_bar_left">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                    <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="top_bar_right">
                                <ul>
                                    <li><a href="http://itsolution.co.in/roundparty_new/loginuser"><span><i class="fas fa-user"></i></span> Login </a></li>
                                    <li><a href="http://itsolution.co.in/roundparty_new/registration"><span><i class="fas fa-user-plus"></i></span> Register </a></li>
                                </ul>
                                <ul>
                                    <li><a href="http://itsolution.co.in/roundparty_new/business_registration"><span><i class="fas fa-phone"></i></span> Register Your Business</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar_area">
            <div class="container-fluid">
                <div class="navbar_area_in">
                    <nav class="navbar navbar-default">
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                      <a class="navbar-brand" href="index.html"><img src="http://itsolution.co.in/roundparty_new/assets/images/logo.png" alt="logo"></a>
                    </div>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                      <ul class="nav navbar-nav navbar-right">
                        <li><a href="http://itsolution.co.in/roundparty_new/index">Home</a></li>
                        <li><a href="index">Create an Event</a></li>
                        <li><a href="#">Buy Packages</a></li>
                        <li><a href="#">Use Our Planner</a></li>
                        <li><a href="#">Help</a></li>
                      </ul>
                    </div>
                  </nav>
                </div>
            </div>
        </div>
    </header>


<div class="my_small_banner">
	<div class="my_small_banner_overlay">
		<div class="container">
			<div class="my_small_banner_in">
				<h1>All Events</h1>
				<ul>
					<li><a href="http://itsolution.co.in/roundparty_new/index">Home</a></li>
					<li><span> / </span></li>
					<li>All Events</li>
				</ul>
			</div>
		</div>
	</div>
</div>

<div class="my_pg_wrapper">
	<div class="container">
		<!-- <div class="row">
			<div class="my_subtitle col-md-12">
				<h1>Create Event</h1>
			</div>
		</div> -->
		<div class="row">
			<div class="col-md-12">
			<div class="create_event_dashboard">
				<div class="my_default_form create_event_dashboard_form">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Type</th>
                                <th>Special Instructions</th>
                                <th>Event Location</th>
                                <th>Location Postcode</th>
                                <th>Age Group</th>
                                <th>Date</th>
                                <th>Start time</th>
                                <th>End Time</th>
                                <th>Image</th>
                                <th>Edit / Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                foreach($data as $row)
                                {
                            ?>
                            <tr>
                                <td><?php echo $row->title;?></td>
                                <td><?php echo $row->type;?></td>
                                <td><?php echo $row->special_instructions;?></td>
                                <td><?php echo $row->event_location;?></td>
                                <td><?php echo $row->event_location_postcode;?></td>
                                <td><?php echo $row->age;?></td>
                                <td><?php echo $row->event_date;?></td>
                                <td><?php echo $row->start_time;?></td>
                                <td><?php echo $row->end_time;?></td>
                                <td>
                                    <?php
                                    $images = $row->image;
                                    $imagea = explode(' ',$images);
                                    $length = count($imagea);
                                    $i=0;
                                        do{
                                    ?>
                                        <img src="<?php echo base_url();?>/img/<?php echo $imagea[$i];?>" alt="<?php echo $imagea[$i];?>" style="width:30px;height:30px;"/>
                                    <?php
                                        $i++; 
                                        }while($i < $length) 
                                    ?>
                                </td>
                                <td><a href="edit_events?id=<?php echo $row->id;?>">Edit</a>/<a href="delete_event?id=<?php echo $row->id;?>">Delete</a></td>
                            </tr>
                            <?php 
                                }
                            ?>
                        </tbody>
                    </table>
				</div>
			</div>
			</div>
		</div>
	</div>
</div>


<div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="footer_box footer_box_1">
                        <img src="http://itsolution.co.in/roundparty_new/assets/images/logo.png" alt="logo">
                        <p>We are a children’s event planning company specializing in family entertainment, birthday parties, corporate and charity functions.</p>
                        <ul>
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                            <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="footer_box footer_box_2">
                        <h1>Discover</h1>
                        <ul class="ftr_menu_links">
                            <li><a href="#">Features</a></li>
                            <li><a href="#">Careers</a></li>
                            <li><a href="#">Team Value</a></li>
                            <li><a href="#">Family Organiser</a></li>
                            <li><a href="#">Health Visitors</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="footer_box footer_box_3">
                        <h1>Legal</h1>
                        <ul class="ftr_menu_links">
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms of Services</a></li>
                            <li><a href="#">Cookies</a></li>
                            <li><a href="#">Policy</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="footer_box footer_box_4">
                        <h1>Contact Us</h1>
                        <div class="ftr_info">
                        <h4><span><i class="far fa-envelope"></i></span> info@example.com</h4>
                        <h4><span><i class="fas fa-phone"></i></span> +1 (123) 456-7890</h4>
                        <h4><span><i class="fas fa-map-marker-alt"></i></span> Dummy Address Location, 123456. USA</h4>
                    </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="footer_bottom">
                    <p>© 2018 Round Party. All Rights Reserved</p>
                </div>
            </div>
        </div>
    </div>


    <div class="scrollup"><span><i class="fas fa-angle-up"></i></span></div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://itsolution.co.in/roundparty_new/assets/js/bootstrap.min.js"></script>
    <script src="http://itsolution.co.in/roundparty_new/assets/js/fontawesome-all.min.js"></script>
    <script src="http://itsolution.co.in/roundparty_new/assets/js/wow.js"></script>
    <script src="http://itsolution.co.in/roundparty_new/assets/js/slider.js"></script>
    <script src="http://itsolution.co.in/roundparty_new/assets/js/datepicker.js"></script>
    <script src="http://itsolution.co.in/roundparty_new/assets/js/custom.js"></script>
    <!-- <script src="http://itsolution.co.in/roundparty_new/assets/js/full-calender.js"></script> -->

    <script type="text/javascript" src="http://itsolution.co.in/roundparty_new/assets/js/jquery-ui-custom-1.11.2.min.js"></script>
    <script type="text/javascript" src="http://itsolution.co.in/roundparty_new/assets/js/calenstyle.js"></script>
    <script type="text/javascript" src="http://itsolution.co.in/roundparty_new/assets/js/CalJsonGenerator.js"></script>
    <script type="text/javascript" src="http://itsolution.co.in/roundparty_new/assets/js/my_js.js"></script>

    <script>
    $(document).ready(function() {
        var date = new Date();
        var d = date.getDate();
        var m = date.getMonth();
        var y = date.getFullYear();
        /*  className colors
        className: default(transparent), important(red), chill(pink), success(green), info(blue)
        */      
        /* initialize the external events
        -----------------------------------------------------------------*/
        $('#external-events div.external-event').each(function() {
        
            // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
            // it doesn't need to have a start or end
            var eventObject = {
                title: $.trim($(this).text()) // use the element's text as the event title
            };
            
            // store the Event Object in the DOM element so we can get to it later
            $(this).data('eventObject', eventObject);
            
            // make the event draggable using jQuery UI
            $(this).draggable({
                zIndex: 999,
                revert: true,      // will cause the event to go back to its
                revertDuration: 0  //  original position after the drag
            });
            
        });
    
        /* initialize the calendar
        -----------------------------------------------------------------*/
        var calendar =  $('#calendar').fullCalendar({
            header: {
                left: 'title',
                center: 'agendaDay,agendaWeek,month',
                right: 'prev,next today'
            },
            editable: true,
            firstDay: 1, //  1(Monday) this can be changed to 0(Sunday) for the USA system
            selectable: true,
            defaultView: 'month',
            
            axisFormat: 'h:mm',
            columnFormat: {
                month: 'ddd',    // Mon
                week: 'ddd d', // Mon 7
                day: 'dddd M/d',  // Monday 9/7
                agendaDay: 'dddd d'
            },
            titleFormat: {
                month: 'MMMM yyyy', // September 2009
                week: "MMMM yyyy", // September 2009
                day: 'MMMM yyyy'                  // Tuesday, Sep 8, 2009
            },
            allDaySlot: false,
            selectHelper: true,
            select: function(start, end, allDay) {
                var title = prompt('Event Title:');
                if (title) {
                    calendar.fullCalendar('renderEvent',
                        {
                            title: title,
                            start: start,
                            end: end,
                            allDay: allDay
                        },
                        true // make the event "stick"
                    );
                }
                calendar.fullCalendar('unselect');
            },
            droppable: true, // this allows things to be dropped onto the calendar !!!
            drop: function(date, allDay) { // this function is called when something is dropped
            
                // retrieve the dropped element's stored Event Object
                var originalEventObject = $(this).data('eventObject');
                
                // we need to copy it, so that multiple events don't have a reference to the same object
                var copiedEventObject = $.extend({}, originalEventObject);
                
                // assign it the date that was reported
                copiedEventObject.start = date;
                copiedEventObject.allDay = allDay;
                
                // render the event on the calendar
                // the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
                $('#calendar').fullCalendar('renderEvent', copiedEventObject, true);
                
                // is the "remove after drop" checkbox checked?
                if ($('#drop-remove').is(':checked')) {
                    // if so, remove the element from the "Draggable Events" list
                    $(this).remove();
                }
                
            },
            // events: [
            //     {
            //         title: 'All Day Event',
            //         start: new Date(y, m, 1)
            //     },
            //     {
            //         id: 999,
            //         title: 'Repeating Event',
            //         start: new Date(y, m, d-3, 16, 0),
            //         allDay: false,
            //         className: 'info'
            //     }
            // ],          
        });
    });
</script>

</body>

</html>