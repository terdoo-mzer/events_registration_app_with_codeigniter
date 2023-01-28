 
<!----- Main/Home Dashboard page ------>
<div class="checkin_error">
  <div class="close_btn">x</div>
  </div>
<div class="form-container">
  
    <form id="checkinForm" action="">
      <input autofocus type="text" name="attendeeId_input" placeholder="Enter Particpant ID to checkin...">
      <button type="submit" id="checkin">Check In</button>
    </form>
  </div>

  <section class="greeting_text">
  
    <h1>Good Morning <?= session()->get('name')?>!</h1>
  </section>
  <div class="card_container">
    <div class="card card1">
      <div class="card_text">
        <h2 class="card_heading"><b>Registered Participants</b></h2>
        <p class="card_number" id="registered_num"></p>
      </div>
    </div>

    <div class="card card2">
      <div class="card_text">
        <h2 class="card_heading"><b>Checked In Participants</b></h2>
        <p class="card_number" id="checkedin_num"></p>
      </div>
    </div>

    <div class="card card3">
      <div class="card_text">
        <h2 class="card_heading"><b>Non-Checked In</b></h2>
        <p class="card_number" id="reg_checked_diff"></p>
      </div>
    </div>


  </div>
