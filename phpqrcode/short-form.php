<title>QR Code</title>
<link rel="icon" type="image/x-icon" href="https://cdn-icons-png.flaticon.com/512/1341/1341632.png">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script>
   $(document).ready(function() {

        $('.generate').on('click', function(e) {
          
            e.preventDefault();
          
            $.ajax({
                type: 'post',
                url: 'short-code.php',
                data: $('form').serialize(),
                success: function(result) {
                    $("#result").html(result);
                }
            })

        }); 
       

    });
</script>

<form style="width:50%;margin:auto" class="mt-5 mb-5" >
    <div class="form-group mb-4" >
        <label>Name :</label>
        <input type="text" name="name" class="form-control" />
    </div>
     <!--<div class="form-group mb-4 ">
        <label>Sort Name </label>
        <input type="text" name="sortname" class="form-control" />
    </div>
-->
    <div class="form-group mb-4" >

<label>Office Phone :</label>
 <input type="text" name="officephone" class="form-control" />
</div>
<div class="form-group mb-4" >
<label>Whatsapp :</label>
 <input type="text" name="whatsapp" class="form-control" />
</div>


    <!-- <div class="form-group mb-4" >

       <label>Phone :</label>
        <input type="" name="phone" class="form-control" />
    </div>
    <div class="form-group mb-4">

        <label>Phone Private :</label>
        <input type="text" name="phoneprivate"  class="form-control"/>
    </div>
    <div class="form-group mb-4">

        <label>Phone Cell :</label>
        <input type="text" name="phonecell" class="form-control" />
    </div>-->
    <div class="form-group mb-4">

        <label>Organization :</label>
        <input type="text" name="orgname" class="form-control" />
    </div>
    <div class="form-group mb-4">

        <label>Email :</label>
        <input type="email" name="email" class="form-control" />
    </div>
    <!--
    <div class="form-group mb-4">

        <label>Address Label :</label>
        <input type="text" name="addresslabel" class="form-control" />
    </div>
-->
    <div class="form-group mb-4">

<label>Address:</label>
<input type="text" name="address" class="form-control" />
</div>
    
    <!--<div class="form-group mb-4">

        <label>Address Pobox :</label>
        <input type="text" name="addresspobox"  class="form-control"/>
    </div>
    <div class="form-group mb-4">

        <label>Address Ext :</label>
        <input type="text" name="addressext" class="form-control" />
    </div>
    <div class="form-group mb-4">

        <label>Address Street :</label>
        <input type="text" name="addressstreet" class="form-control"/>
    </div>
    <div class="form-group mb-4">

        <label>Address Town :</label>
        <input type="text" name="addresstown" class="form-control"/>
    </div>
    <div class="form-group mb-4">

        <label>Address Region :</label>
        <input type="text" name="addressregion"class="form-control" />
    </div>
    <div class="form-group mb-4">

        <label>Address Post Code :</label>
        <input type="text" name="addresspostcode" class="form-control"/>
    </div>
    <div class="form-group mb-4">

        <label>Address Country :</label>
        <input type="text" name="addresscountry"class="form-control" />
    </div>-->
    <div class="form-group mb-4">

<label>Website </label>
<input type="text" name="website" class="form-control" />
</div>
    <div class="form-group mb-4">

        <input type="submit" value="Generate" class="btn btn-primary generate">
       
        </div><div id="result"></div>
</form>

