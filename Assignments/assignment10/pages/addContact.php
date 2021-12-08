<?php


require_once('classes/StickyForm.php');
$stickyForm = new StickyForm();

function init(){
  global $elementsArr, $stickyForm;

  if(isset($_POST['submit'])){

    $postArr = $stickyForm->validateForm($_POST, $elementsArr);

    if($postArr['masterStatus']['status'] == "noerrors"){
      return addData($_POST);
    }
    else{
      return getForm("",$postArr);
    }
  }

  else {
      return getForm("", $elementsArr);
    } 
}

$elementsArr = [
  "masterStatus"=>[
    "status"=>"noerrors",
    "type"=>"masterStatus"
  ],
	    "name"=>[
	      "errorMessage"=>"<span style='color: red; margin-left: 15px;'>Name cannot be blank and must be a standard name</span>",
    "errorOutput"=>"",
    "type"=>"text",
    "value"=>"Scott Shaper",
		      "regex"=>"name"
	  ],
      "address"=>[
        "errorMessage"=>"<span style='color: red; margin-left: 15px;'>Address cannot be blank and must be a standard address (number and street)</span>",
    "errorOutput"=>"",
    "type"=>"text",
    "value"=>"123 Someplace",
         "regex"=>"address"
    ],
      "city"=>[
        "errorMessage"=>"<span style='color: red; margin-left: 15px;'>City cannot be blank and must be a standard city name</span>",
    "errorOutput"=>"",
    "type"=>"text",
    "value"=>"Anywhere",
          "regex"=>"address"
    ],
      "state"=>[
        "type"=>"select",
        "options"=>["mi"=>"Michigan","oh"=>"Ohio","pa"=>"Pennslyvania","ca"=>"California","tx"=>"Texas"],
          "selected"=>"mi",
          "regex"=>"name"
    ],
	    "phone"=>[
		      "errorMessage"=>"<span style='color: red; margin-left: 15px;'>Phone cannot be blank and must be a valid phone number</span>",
    "errorOutput"=>"",
    "type"=>"text",
    "value"=>"999.999.9999",
          "regex"=>"phone"
    ],
      "email"=>[
          "errorMessage"=>"<span style='color: red; margin-left: 15px;'>Email cannot be blank and must be a valid email address</span>",
    "errorOutput"=>"",
    "type"=>"text",
    "value"=>"sshaper@test.com",
          "regex"=>"email"
    ],
      "birthday"=>[
		    "errorMessage"=>"<span style='color: red; margin-left: 15px;'>Birthday cannot be blank and must be a valid date</span>",
    "errorOutput"=>"",
    "type"=>"text",
		"value"=>"12/25/1999",
		      "regex"=>"birthday"
    ],

    "contact"=>[
        "action"=>"notRequired",
        "type"=>"checkbox",
        "status"=>["newsletter"=>"", "emailUpdates"=>"", "textUpdates"=>""]
    ],
    "age"=>[
        "errorMessage"=>"<span style='color: red; margin-left: 15px;'>You must select an age range</span>",
        "errorOutput"=>"",
        "action"=>"required",
        "type"=>"radio",
        "value"=>["10-18"=>"", "19-30"=>"", "31-50"=>"", "51+"=>""]
    ]

];


function addData($post){
  global $elementsArr;  
      //print_r($_POST);
      require_once('classes/Pdo_methods.php');

      $pdo = new PdoMethods();

      $sql = "INSERT INTO contacts (name, address,city,state, phone, email, birthday, contact, age) VALUES (:name, :address, :city, :state, :phone, :email, :birthday, :contact, :age)";

      /* THIS TAKE THE ARRAY OF CHECK BOXES AND PUT THE VALUES INTO A STRING SEPERATED BY COMMAS  */
      if(isset($_POST['contact'])){
        $contact = "";
        foreach($post['contact'] as $v){
          $contact .= $v.",";
        }
        $contact = substr($contact, 0, -1);
      }
      else{
        $contact = "";
      }

      if(isset($_POST['age'])){
        $age = $_POST['age'];
      }
    

      $bindings = [
        [':name',$post['name'],'str'],
        [':address',$post['address'],'str'],
        [':city',$post['city'],'str'],
        [':state',$post['state'],'str'],
        [':phone',$post['phone'],'str'],
        [':email',$post['email'],'str'],
        [':birthday',$post['birthday'],'str'],
        [':contact',$contact,'str'],
        [':age',$age,'str']
      ];

      $result = $pdo->otherBinded($sql, $bindings);

      if($result == "error"){
        return getForm("<p>There was a problem processing your form</p>", $elementsArr);
      }
      else {
        return getForm("<p>Contact Information Added</p>", $elementsArr);
      }
      
}
   

/*THIS IS THEGET FROM FUCTION WHICH WILL BUILD THE FORM BASED UPON UPON THE (UNMODIFIED OF MODIFIED) ELEMENTS ARRAY. */
function getForm($acknowledgement, $elementsArr){

  global $stickyForm;
  $options = $stickyForm->createOptions($elementsArr['state']);

  /* THIS IS A HEREDOC STRING WHICH CREATES THE FORM AND ADD THE APPROPRIATE VALUES AND ERROR MESSAGES */
  $form = <<<HTML
      <form method="post" action="index.php?page=addContact">
      <div class="form-group">
        <label for="name">Name (letters only){$elementsArr['name']['errorOutput']}</label>
        <input type="text" class="form-control" id="name" name="name" value="{$elementsArr['name']['value']}" >
      </div>
      <div class="form-group">
        <label for="address">Address (just number and street){$elementsArr['address']['errorOutput']}</label>
        <input type="text" class="form-control" id="address" name="address" value="{$elementsArr['address']['value']}" >
      </div>
      <div class="form-group">
        <label for="city">City {$elementsArr['name']['errorOutput']}</label>
        <input type="text" class="form-control" id="city" name="city" value="{$elementsArr['city']['value']}" >
      </div>
      <div class="form-group">
        <label for="state">State</label>
        <select class="form-control" id="state" name="state">
          $options
        </select>
      <div class="form-group">
        <label for="phone">Phone (format 999.999.9999) {$elementsArr['phone']['errorOutput']}</label>
        <input type="text" class="form-control" id="phone" name="phone" value="{$elementsArr['phone']['value']}" >
      </div>
      <div class="form-group">
        <label for="email">Email address {$elementsArr['email']['errorOutput']}</label>
        <input type="text" class="form-control" id="email" name="email" value="{$elementsArr['email']['value']}" >
      </div>
      <div class="form-group">
        <label for="birthday">Date of Birth{$elementsArr['birthday']['errorOutput']}</label>
        <input type="text" class="form-control" id="birthday" name="birthday" value="{$elementsArr['birthday']['value']}" >
      </div>
              
      </div>
      <p>Please check all contact types you would like (optional):</p>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" name="contact[]" id="contact1" value="newsletter"
        {$elementsArr['contact']['status']['newsletter']}>
        <label class="form-check-label" for="contact1">Newsletter</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" name="contact[]" id="contact2" value="emailUpdates" 
        {$elementsArr['contact']['status']['emailUpdates']}>
        <label class="form-check-label" for="financial2">Email Updates</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" name="contact[]" id="contact3" value="textUpdates" 
        {$elementsArr['contact']['status']['textUpdates']}>
        <label class="form-check-label" for="financial3">Text Updates</label>
      </div>
          
      <p>Please select an age range (you must select one):{$elementsArr['age']['errorOutput']}</p>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="age" id="age1" value="10-18"  {$elementsArr['age']['value']['10-18']}>
        <label class="form-check-label" for="age1">10-18</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="age" id="age2" value="19-30"  {$elementsArr['age']['value']['19-30']}>
        <label class="form-check-label" for="age2">19-30</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="age" id="age3" value="31-50"  {$elementsArr['age']['value']['31-50']}>
        <label class="form-check-label" for="age3">31-50</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="age" id="age4" value="51+"  {$elementsArr['age']['value']['51+']}>
        <label class="form-check-label" for="age4">51+</label>
      </div>
      <div>
      <button type="submit" name="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
HTML;

  return [$acknowledgement, $form];

}

?>