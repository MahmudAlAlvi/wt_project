<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Your Website</title>
</head>
<body>

<div style="background-color: red; padding: 10px; display: flex; justify-content: space-between; align-items: center;">
  <div style="font-weight: bold; font-size: 24px; font-family: 'Arial', sans-serif;">JJARS EVENT Management Company</div>
  <div>



    <a href="host_profile.php" style="text-decoration: none;">
      <button style="background-color: white; border: none; cursor: pointer;">Dashboard</button>
    </a>
    <a href="home.php" style="text-decoration: none;">
    <button style="background-color: white;">Log Out</button>
    </a>
  </div>
</div>


<div style="background-color: white; padding: 10px;">
  <a href="#" style="color: red; font-weight: bold; text-decoration: none;">Home</a>&nbsp;&nbsp;&nbsp;&nbsp;
  <a href="about_us.php" style="color: black; text-decoration: none; font-weight: bold;">About us</a>&nbsp;&nbsp;&nbsp;&nbsp;
  
  <!-- Services Dropdown -->
  <details style="display: inline-block;">
    <summary style="font-weight: bold;">Services</summary>
    <div style="background-color: gray; min-width: 200px; padding: 10px;">
    <a href="corporate_events.php" style="color: black; text-decoration: none; font-weight: bold; display: block;">CORPORATE EVENTS</a>
      <a href="exhibition_stall.php" style="color: black; text-decoration: none; font-weight: bold; display: block;">EXHIBITION STALL</a>
      <a href="influencer_marketing.php" style="color: black; text-decoration: none; font-weight: bold; display: block;">INFLUENCER MARKETING AGENCY</a>
      <a href="singer_booking.php" style="color: black; text-decoration: none; font-weight: bold; display: block;">SINGER & CELEBRITY BOOKING</a>
      <a href="wedding_planner.php" style="color: black; text-decoration: none; font-weight: bold; display: block;">WEDDING PLANNER & MANAGEMENT</a>
     
    </div>
  </details>
  
  &nbsp;&nbsp;&nbsp;&nbsp;
  
  <!-- Media Dropdown -->
  <details style="display: inline-block;">
    <summary style="font-weight: bold;">Media</summary>
    <div style="background-color: gray; min-width: 200px; padding: 10px;">
    <a href="blog.php" style="color: black; text-decoration: none; font-weight: bold; display: block;">BLOG</a>
    <a href="gallery.php" style="color: black; text-decoration: none; font-weight: bold; display: block;">GALLERY</a>
   
    </div>
  </details>
  
  &nbsp;&nbsp;&nbsp;&nbsp;
  
  <a href="contact_us_host.php" style="color: black; text-decoration: none; font-weight: bold;">Contact us</a>&nbsp;&nbsp;&nbsp;&nbsp;
  <a href="search_host.php" style="color: black; text-decoration: none; font-weight: bold;">Search</a>&nbsp;&nbsp;&nbsp;&nbsp;
  <a href="host_event.php" style="color: black; text-decoration: none; font-weight: bold;">Create Event</a>&nbsp;&nbsp;&nbsp;&nbsp;
  <a href="host_sponsor.php" style="color: black; text-decoration: none; font-weight: bold;">Sponsership Management</a>&nbsp;&nbsp;&nbsp;&nbsp;

</div>



<div id="slideshow" style="display: flex; justify-content: center; align-items: center; width: 100%; height: 400px; overflow: hidden;">
  <?php
    $slides = ["../assets/img/p_11.jpg", "../assets/img/p_14.jpg", "../assets/img/p_1.jpg"];
    foreach ($slides as $index => $slide) {
      $style = ($index === 0) ? "display: block;" : "display: none;";
      echo "<img src=\"$slide\" alt=\"Slide " . ($index + 1) . "\" style=\"width: 100%; height: auto; $style\">";
    }
  ?>
</div>





<div style="background-color: white; padding: 10px; text-align: center;">
  <p style="font-size: 24px; font-weight: bold;">Best Event Management Company in Dhaka Bangladesh | Rank#1 Event Planners Dhaka Bangladesh</p>
  
  <div style="display: inline-block; max-width: 1100px;">
    <p style="font-size: 18px; text-align: center; margin: 0 auto; margin-bottom: 20px; color: gray">
      JJARS Event Management Company the Best Event Management Company in <span style="color: red;">Dhaka Bangladesh</span>. We are award-winning event planners in Bangladesh. We have 15 years of experience managing Corporate Events, Conference & Seminars, Exhibition organized, Exhibition stand Fabrication, Brand Activation Event, ATL and BTL activities, product launching event in Bangladesh.
    </p>
    
    <div style="text-align: center; margin-top: 20px;">
      <hr style="border: 1px solid red; width: 100px;">
    </div>
    
    <p style="font-size: 14px; text-align: center; margin: 0 auto; color: gray">
      JJARS Event Management Company & Entertainment is one of the Best Event Management Companies in Dhaka Bangladesh | Rank#1 Event Planners Dhaka Bangladesh. JJARS Event Management Company specializes in flawless and gorgeous event planning. Our team is qualified and experienced in conference organization, brand activation event, exhibition organization, product launching event, exhibition stand fabrication in Bangladesh. As a professional event planning service provider, we do corporate event management, organizing seminars and conferences, organizing concerts and fashion shows, celebrity management, Digital influencer management agency. JJARS Event Management Company – Corporate event management company also known as the organizer of trade fairs and conferences and sports event management. At Event Management Agency Services, we offer event planning services including event planning
services, event coordination, decoration and styling, wedding planning, entertainment and venue sourcing. Here are just a few services which We offer as an event management agency in Bangladesh:
    </p>
  </div>

</div>

<div style="text-align: center; margin-top: 20px;">
  <hr style="border: 1px solid black; width: 100px;">
</div>

<div style="display: flex; justify-content: space-between; max-width: 1100px; margin: 0 auto;">
    <div style="flex: 1; padding: 20px;">
        <h2 style="font-size: 20px; text-align: left;"> Event Management</h2>
        <p style="text-align: left; font-size: 14px;color: gray;">
            Event Management is the process of creation and development of corporate or personal events, such as conferences, festivals, ceremonies, corporate parties, product launchings, BTL activities, concerts, weddings, formal parties, or conventions. It involves researching the brand and identifying the target audience, creating an event concept, and coordinating the technical aspects before starting the event.
        </p>
        <p style="text-align: left; font-size: 14px; color: gray;">
            As professional event managers, we help our clients plan and execute events of various scales. We take responsibility for the creative, technical, and logistical elements, including overall event design, script writing, logistics, budgeting, negotiation, audio-visual production, marketing and communication strategy, brand building, and client service.
        </p>
    </div>
    <div style="flex: 1; padding: 20px;">
        <h2 style="font-size: 20px; text-align: left;">Corporate Event Management</h2>
        <p style="text-align: left; font-size: 14px;color: gray;">
            Corporate Event Management includes corporate team building, corporate awards events, corporate holiday celebration events, corporate seminars, educational events, and corporate charity events. As a Corporate Event Management Company in Bangladesh, we manage and organize conferences, seminars, team building events, press conferences, business/corporate dinners, shareholder/corporate board meetings, year-end functions, trade shows/expos, corporate golf days, outbound/inbound educational and corporate tours, product launches, and executive retreats. We also provide all the logistics in a corporate event, including banners and glow signs design and print, hoardings rental, AV equipment rental, LED screen, video and photography services, live streaming equipment, sound system rental, stage/set design, event interior services, etc. We are skilled in promotions, road shows, canter activates, dealer/customer/dealer interaction programs, trade/retailers meets, staff programs, merchandising, in-shop promotions, and BTL activities.
        </p>
    </div>
</div>

<div style="display: flex; justify-content: space-between; max-width: 1100px; margin: 20px auto;">
    <div style="flex: 1; padding: 20px;">
        <h2 style="font-size: 20px; text-align: left;">Conference & Seminars</h2>
        <p style="text-align: left; font-size: 14px;color: gray;">
            AEE, the event planning company, can work with you to create a unique conference identity. Our team will carefully program content and detailed logistic planning that can include:
            <ul style="list-style-type: none; padding-left: 0; color: gray;">
                <li>-Delegate accommodation booking and venue sourcing</li>
                <li>-Engagement of guest speakers and facilitators</li>
                <li>-Social and partner activities</li>
                <li>-Ground transportation</li>
                <li>-Management of all audiovisual needs and much more</li>
            </ul>
        </p>
    </div>
    <div style="flex: 1; padding: 20px;">
        <h2 style="font-size: 20px; text-align: left;">Event Coordination</h2>
        <p style="text-align: left; font-size: 14px;color: gray;">
            AEE event coordinators specialize in developing innovative ways to inspire, communicate, and entertain. They look after the most important aspects of event production, including lighting, décor, theming, styling, catering, sound, vision, and entertainment.
        </p>
    </div>
</div>

<div style="text-align: center;">
  <p style="font-size: 24px; font-weight: bold; color: red;">Most people are not aware of these things about event planning companies. Let’s explore all the FAQs one by one below.</p>
</div>

<div style="max-width: 800px; margin: 0 auto;">
  <details style="margin-bottom: 20px;">
    <summary style="font-weight: bold; color: black;">What Is Event Management?</summary>
    <p style="color: gray;">Event management refers to the management of any type of event on behalf of the event host. It includes Meeting, Incentives, Conference, seminar, conventions, concerts, trade shows, festivals, ceremonies. Event management Company involves overall design, logistical support, event execution and the management of the entire event project.</p>
  </details>

  <details style="margin-bottom: 20px;">
    <summary style="font-weight: bold; color: black;">Types of event management?</summary>
    <p style="color: gray;">There are different types of event management, A Event manager has to be Specialise in 7 Different Types of Event Management.</p>
    <ul style="color: gray;">
      <li>Corporate events</li>
      <li>Trade shows/expositions</li>
      <li>Fundraising and Charity Events</li>
      <li>Personal events and parties</li>
      <li>Award Ceremonies</li>
      <li>Festivals</li>
      <li>Weddings</li>
    </ul>
  </details>

  <details style="margin-bottom: 20px;">
    <summary style="font-weight: bold; color: black;">What are the 5 C's of event management?</summary>
    <p style="color: gray;">There are 5 basic phases in event management. Its process of planning an event from start to finish, which we have called the 5 C’s. These are – 1. Concept | 2. Coordination | 3. Control | 4. Culmination | 5. Closeout.</p>
  </details>

  <details style="margin-bottom: 20px;">
    <summary style="font-weight: bold; color: black;">Why should I hire an event planner - Event Management Company?</summary>
    <p style="color: gray;">A professional event management company can provide the best event solution which is the importance of event management. Here are some key reasons to consider hiring an event management company. 1. Creative thinking, 2. Meet the latest event trend, 3. Detailed planning, 4. Saves time and money, 5. Smooth Execution</p>
  </details>

 
<details style="margin-bottom: 20px;">
    <summary style="font-weight: bold; color: black;">Event Management course in Bangladesh. Event management course in pdf.</summary>
    <p style="color: gray;">In Bangladesh, there is no any professional institute for Event Management. But as a renowned event management company in Bangladesh, we get lots of request to start the course. Also, we get request for internship! We given all the university students to get internship from our company. Is you interested to learn event management we may recommend the attached pdf. download here.</p>
</details>

<details>
    <summary style="font-weight: bold; color: black;">What is the purpose of Event Management?</summary>
    <p style="color: gray;">The purpose of Event Management can be different for every business, organization, or personal needs. But one thing is can be said for sure, Anyone who is planning for event management wants to promote or showcase something that he has.</p>
</details>
</div>

<div style="background-color: white; color: white; text-align: center; padding: 10px;">
</div>

<div style="background-color: black; color: white; text-align: center; padding: 10px;">
©️ JJARSEMC@2024

    <div style="display: flex; justify-content: space-between; padding: 20px;">
        <div style="width: 23%;">
            <h3 style="color: white; border-bottom: 1px solid red;">Coverage District</h3>
            <ul style="list-style-type: none; color: gray; padding: 0;text-align: left;">
                <li>Dhaka</li>
                <li>Chittagong</li>
                <li>Rajshahi</li>
                <li>Sylhet</li>
                <li>Khulna</li>
                <li>Barisal</li>
                <li>Rangpur</li>
            </ul>
            <hr style="border-color: red;">
        </div>

        <div style="width: 23%;">
            <h3 style="color: white; border-bottom: 1px solid red;">Career</h3>
            <ul style="list-style-type: none; color: gray; padding: 0;text-align: left;">
                <li>Event Manager</li>
                <li>Marketing Executive</li>
                <li>Event Coordinator</li>
                <li>Graphic Designer</li>
                <li>Logistics Manager</li>
                <li>PR Manager</li>
                <li>Finance Manager</li>
            </ul>
            <hr style="border-color: red;">
        </div>

        <div style="width: 23%;">
            <h3 style="color: white; border-bottom: 1px solid red;">Event & Exhibition Logistic</h3>
            <ul style="list-style-type: none; color: gray; padding: 0;text-align: left;  ">
                <li>Aluminium German Hanger</li>
                <li>Event Tent/Canopy Rental</li>
                <li>Octanorm Stall Rent</li>
                <li>Event / Exhibition Furniture</li>
                <li>LED Wall on Rent</li>
                <li>Digital Signage KIOSK Display</li>
                <li>LED Plasma TV</li>
                <li>All Rental Items</li>
            </ul>
            <hr style="border-color: red;">
        </div>

        <div style="width: 23%;">
            <h3 style="color: white; border-bottom: 1px solid red;">CONTACT INFO</h3>
            <p style="color: white;">Dhaka Office: Kuril, Dhaka-1229, Bangladesh</p>
            <p style="color: white;">Mobile: +880 18**********</p>
            <p style="color: white;">Mobile: +880 16**********</p>
            <hr style="border-color: red;">
        </div>
    </div>
</div>
