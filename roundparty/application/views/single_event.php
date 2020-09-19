
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
                        
                           <ul>
   
                              <li><a href="#"><span><i class="fas fa-user"></i></span> Welcome <span class="orange">Sourabh Sen</span></a></li>
                                </ul>
                                <ul>
                                    <li><a href="http://itsolution.co.in/roundparty_new/User_controller/logout"><span><i class="fas fa-sign-out-alt"></i></span> Logout</a></li>
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
                      <a class="navbar-brand" href="http://itsolution.co.in/roundparty_new/"><img src="http://itsolution.co.in/roundparty_new/assets/images/logo.png" alt="logo"></a>
                    </div>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                      <ul class="nav navbar-nav navbar-right">
                        <li><a href="http://itsolution.co.in/roundparty_new/">Home</a></li>
                        <li><a href="http://itsolution.co.in/roundparty_new/create_event">Create an Event</a></li>
                        <li><a href="http://itsolution.co.in/roundparty_new/product">Buy Packages</a></li>
                        <li><a href="http://itsolution.co.in/roundparty_new/my_event">Use Our Planner</a></li>
                        <li><a href="http://itsolution.co.in/roundparty_new/help">Help</a></li>
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
				<h1>Event Detail</h1>
				<ul>
					<li><a href="http://itsolution.co.in/roundparty_new/index">Home</a></li>
					<li><span> / </span></li>
					<li>Event Detail</li>
				</ul>
			</div>
		</div>
	</div>
</div>

<div class="my_pg_wrapper">
	<div class="container">
		<div class="row">
			<?php 
				foreach($single_data as $row)
				{
			?>
			<div class="col-md-7 col-sm-7 col-xs-12">
				<div class="my_detail_default_box">
					<div class="my_default_title">
		                <div class="my_default_title_left">
		                  <span class="my_tg"><?php echo $row->type;?></span>
		                  <h1><?php echo $row->title;?></h1>
		                </div>
		                <div class="my_default_title_right">
		                  	<ul>
	                            <!-- <li><span><i class="far fa-clock"></i></span> 8:00PM - 11:00PM</li> -->
	                            <li><span><i class="fas fa-map-marker-alt"></i></span> <?php echo $row->event_location;?></li>
	                        </ul>
		                </div>
		              </div>
					<div class="my_default_img_gallery">
						<div id="main_area">
				        	<div  id="slider">
			                    <div class="row">
			                        <div class="col-sm-12" id="carousel-bounding-box">
			                            <div class="carousel slide" id="myCarousel">
			                                <div class="carousel-inner">
			                                	<?php
					                                    $images = $row->image;
					                                    $imagea = explode(' ',$images);
					                                    $length = count($imagea);
					                                    $i=0;
					                                        do{
					                            ?>
			                                    <div class="item <?php echo !$i ? 'active' : ''; ?>" data-slide-number="<?php echo $i; ?>">
			                                    	<img src="<?php echo base_url();?>/img/<?php echo $imagea[$i];?>" alt="<?php echo $imagea[$i];?>"/>
			                                    </div>
			                                    <?php
					                                $i++; 
					                                }while($i < $length) 
					                            ?>
			                                    <!-- <div class="item" data-slide-number="1">
			                                        <img src="http://itsolution.co.in/roundparty_new/assets/images/evnt1-1.jpg">
			                                    </div>
			                                    <div class="item" data-slide-number="2">
			                                        <img src="http://itsolution.co.in/roundparty_new/assets/images/evnt1-2.jpg">
			                                    </div>
			                                    <div class="item" data-slide-number="3">
			                                        <img src="http://itsolution.co.in/roundparty_new/assets/images/evnt1-3.jpg">
			                                    </div>
			                                    <div class="item" data-slide-number="4">
			                                        <img src="http://itsolution.co.in/roundparty_new/assets/images/evnt2.jpg">
			                                    </div>
			                                    <div class="item" data-slide-number="5">
			                                        <img src="http://itsolution.co.in/roundparty_new/assets/images/evnt2-1.jpg">
			                                    </div>
			                                    <div class="item" data-slide-number="6">
			                                        <img src="http://itsolution.co.in/roundparty_new/assets/images/evnt2-2.jpg">
			                                    </div>
			                                    <div class="item" data-slide-number="7">
			                                        <img src="http://itsolution.co.in/roundparty_new/assets/images/evnt2-3.jpg">
			                                    </div> -->
			                                </div>
			                                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			                                    <span><i class="fas fa-chevron-left"></i></span>
			                                </a>
			                                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			                                    <span><i class="fas fa-chevron-right"></i></span>
			                                </a>
			                            </div>
			                        </div>
			                    </div>
			                </div>
				            <div id="slider-thumbs">
				                <ul class="hide-bullets">
				                	<?php
					                    $images = $row->image;
					                    $imagea = explode(' ',$images);
					                    $length = count($imagea);
					                    $i=0;
					                    do{
					                ?>
				                    <li><a id="carousel-selector-<?php echo $i;?>"><img src="<?php echo base_url();?>/img/<?php echo $imagea[$i];?>" alt="<?php echo $imagea[$i];?>"/></a></li>
				                    <?php
					                    $i++; 
					                    }while($i < $length) 
					                ?>
				                    <!-- <li><a id="carousel-selector-1"><img src="http://itsolution.co.in/roundparty_new/assets/images/evnt1-1.jpg"></a></li>
				                    <li><a id="carousel-selector-2"><img src="http://itsolution.co.in/roundparty_new/assets/images/evnt1-2.jpg"></a></li>
				                    <li><a id="carousel-selector-3"><img src="http://itsolution.co.in/roundparty_new/assets/images/evnt1-3.jpg"></a> </li>
				                    <li><a id="carousel-selector-4"><img src="http://itsolution.co.in/roundparty_new/assets/images/evnt2.jpg"></a></li>
				                    <li><a id="carousel-selector-5"><img src="http://itsolution.co.in/roundparty_new/assets/images/evnt2-1.jpg"></a></li>
				                    <li><a id="carousel-selector-6"><img src="http://itsolution.co.in/roundparty_new/assets/images/evnt2-2.jpg"></a></li>
				                    <li><a id="carousel-selector-7"><img src="http://itsolution.co.in/roundparty_new/assets/images/evnt2-3.jpg"></a></li> -->
				                </ul>
				            </div>
					    </div>
					</div>
				</div>
				<div class="my_detail_default_box">
					<h2 class="my_detail_default_box_heading">About</h2>
					<p><?php echo $row->special_instructions;?></p>
				</div>
			</div>
			<div class="col-md-5 col-sm-5 col-xs-12">
				<div class="my_detail_default_box">
					<div class="event_detail_right">
						<h2 class="my_detail_default_box_heading">Event Details</h2>
						<ul>
							<li><span>Event title</span> <?php echo $row->title;?></li>
							<li><span>Event type</span> <?php echo $row->type;?></li>
							<li><span>Address</span> <?php echo $row->event_location;?></li>
							<li><span>Postcode</span> <?php echo $row->event_location_postcode;?></li>
							<li><span>Age group</span> <?php echo $row->age;?></li>
							<li><span>Date</span> <?php echo $row->event_date;?></li>
							<li><span>Time</span> <?php echo $row->start_time;?> - <?php echo $row->end_time;?></li>

						</ul>
					</div>
				</div>
				<div class="my_detail_default_box">
					<div class="event_srvc_right">
						<h2 class="my_detail_default_box_heading">Event Services</h2>
						<ul>
		                    <li>
		                    	<img src="http://itsolution.co.in/roundparty_new/assets/images/srvc1.png"> Ballons <span>7:00PM - 9:00PM</span>
		                    </li>
		                    <li>
		                    	<img src="http://itsolution.co.in/roundparty_new/assets/images/srvc3.png"> Magician <span>7:00PM - 9:00PM</span>
		                    </li>
		                    <li>
		                    	<img src="http://itsolution.co.in/roundparty_new/assets/images/srvc5.png"> Ballon Model <span>7:00PM - 9:00PM</span>
		                    </li>
		                    <li>
		                    	<img src="http://itsolution.co.in/roundparty_new/assets/images/srvc7.png"> Face Painting <span>7:00PM - 9:00PM</span>
		                    </li>
		                    <li>
		                    	<img src="http://itsolution.co.in/roundparty_new/assets/images/srvc9.png"> Bubble Performer <span>7:00PM - 9:00PM</span>
		                    </li>
		                    <li>
		                    	<img src="http://itsolution.co.in/roundparty_new/assets/images/srvc10.png"> Mascots <span>7:00PM - 9:00PM</span>
		                    </li>
		                </ul>
					</div>
				</div>
			</div>
			<?php
				}
			?>
		</div>
	</div>
</div>



<div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="footer_box footer_box_1">
                 <a href="http://itsolution.co.in/roundparty_new/"><img src="http://itsolution.co.in/roundparty_new/assets/images/logo.png" alt="logo"></a>
                         
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
                            <li><a href="http://itsolution.co.in/roundparty_new/features">Features</a></li>
                            <li><a href="http://itsolution.co.in/roundparty_new/careers">Careers</a></li>
                            <li><a href="http://itsolution.co.in/roundparty_new/team_value">Team Value</a></li>
                            <li><a href="http://itsolution.co.in/roundparty_new/family_organiser">Family Organiser</a></li>
                            <li><a href="http://itsolution.co.in/roundparty_new/health_visitors">Health Visitors</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="footer_box footer_box_3">
                        <h1>Legal</h1>
                        <ul class="ftr_menu_links">
                            <li><a href="http://itsolution.co.in/roundparty_new/privacy_policy">Privacy Policy</a></li>
                            <li><a href="http://itsolution.co.in/roundparty_new/terms_of_services">Terms of Services</a></li>
                            <li><a href="http://itsolution.co.in/roundparty_new/cookies">Cookies</a></li>
                            <li><a href="http://itsolution.co.in/roundparty_new/policy">Policy</a></li>
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