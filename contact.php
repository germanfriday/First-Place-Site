<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Photography</title>
<style type="text/css">
@import url("css/styles.css");
</style>
<script src="js/common.js" type="text/javascript"></script>
</head>
<body id="contact">
<div id="wrapper">
  <?php include("includes/header.php") ?>
  <img id="masthead" src="images/contact_masthead.jpg" alt=""/>
  <div id="content">
    <h2>Contact</h2>
    <form method="post" action="process.php">
      <div id="text_left">
        <p><strong>First Place Photography</strong><br />
          (586) 484-8194<br />
          <a href="mailto:info@firstplacephotography.com">info@firstplacephotography.com</a></p>
        <p>
          <label for="first_name">First Name</label>
          <br />
          <input type="text" name="first_name" tabindex="1" />
        </p>
        <p>
          <label for="last_name">Last Name</label>
          <br />
          <input type="text" name="last_name" tabindex="2" />
        </p>
        <p>
          <label for="phone">Phone</label>
          <br />
          <input type="text" name="phone" tabindex="6" />
        </p>
        <p>
          <label for="email">eMail</label>
          <br />
          <input type="text" name="email" tabindex="7" />
        </p>
      </div>
      <div id="text_right">
        <p>
          <label for="address">Address</label>
          <br />
          <input type="text" name="address"  tabindex="3"/>
        </p>
        <p>
          <label for="city">City</label>
          <br />
          <input type="text" name="city" tabindex="4" />
        </p>
        <p>
          <label for="state">State</label>
          <br />
          <select name="state" tabindex="5">
            <option value="" selected="selected">- Select a State -</option>
            <option value="AL">Alabama</option>
            <option value="AK">Alaska</option>
            <option value="AZ">Arizona</option>
            <option value="AR">Arkansas</option>
            <option value="CA">California</option>
            <option value="CO">Colorado</option>
            <option value="CT">Connecticut</option>
            <option value="DE">Delaware</option>
            <option value="DC">District Of Columbia</option>
            <option value="FL">Florida</option>
            <option value="GA">Georgia</option>
            <option value="HI">Hawaii</option>
            <option value="ID">Idaho</option>
            <option value="IL">Illinois</option>
            <option value="IN">Indiana</option>
            <option value="IA">Iowa</option>
            <option value="KS">Kansas</option>
            <option value="KY">Kentucky</option>
            <option value="LA">Louisiana</option>
            <option value="ME">Maine</option>
            <option value="MD">Maryland</option>
            <option value="MA">Massachusetts</option>
            <option value="MI">Michigan</option>
            <option value="MN">Minnesota</option>
            <option value="MS">Mississippi</option>
            <option value="MO">Missouri</option>
            <option value="MT">Montana</option>
            <option value="NE">Nebraska</option>
            <option value="NV">Nevada</option>
            <option value="NH">New Hampshire</option>
            <option value="NJ">New Jersey</option>
            <option value="NM">New Mexico</option>
            <option value="NY">New York</option>
            <option value="NC">North Carolina</option>
            <option value="ND">North Dakota</option>
            <option value="OH">Ohio</option>
            <option value="OK">Oklahoma</option>
            <option value="OR">Oregon</option>
            <option value="PA">Pennsylvania</option>
            <option value="RI">Rhode Island</option>
            <option value="SC">South Carolina</option>
            <option value="SD">South Dakota</option>
            <option value="TN">Tennessee</option>
            <option value="TX">Texas</option>
            <option value="UT">Utah</option>
            <option value="VT">Vermont</option>
            <option value="VA">Virginia</option>
            <option value="WA">Washington</option>
            <option value="WV">West Virginia</option>
            <option value="WI">Wisconsin</option>
            <option value="WY">Wyoming</option>
          </select>
        </p>
        <p>
          <label for="zip">Zip Code</label>
          <br />
          <input type="text" name="zip" tabindex="8" />
        </p>
        <p>
          <label for="comments">Comments</label>
          <br />
          <textarea name="comments" rows="3" cols="30" tabindex="9"></textarea>
        </p>
        <p>
          <input id="contact_btn" type="submit" name="submit" onclick="action" value="Contact Me" tabindex="10" />
        </p>
      </div>
    </form>
  </div>
</div>
<?php include("includes/footer.php") ?>
</body>
</html>
