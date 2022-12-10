<?php

    include('qrlib.php');
    include('config.php');

    // how to build raw content - QRCode with detailed Business Card (VCard)

    $tempDir = EXAMPLE_TMP_SERVERPATH;

    // here our data
    $name         = $_POST['name'];
    //$sortName     = $_POST['sortname'];
    //$phone        = $_POST['phone'];
   // $phonePrivate = $_POST['phoneprivate'];
   // $phoneCell    = $_POST['phonecell'];
    $orgName      = $_POST['orgname'];
    $whatsapp      = $_POST['whatsapp'];
    $officephone= $_POST['officephone'];


    $email        = $_POST['email'];

    // if not used - leave blank!
    //$addressLabel     = $_POST['addresslabel'];
    //$addressPobox     = $_POST['addresspobox'];
    //$addressExt       = $_POST['addressext'];
   // $addressStreet    = $_POST['addressstreet'];
   // $addressTown      = $_POST['addresstown'];
   // $addressRegion    = $_POST['addressregion'];
   // $addressPostCode  = $_POST['addresspostcode'];
   // $addressCountry   = $_POST['addresscountry'];
    $website=$_POST['website'];
    $address=$_POST['address'];
    $jobtitle=$_POST['jobtitle'];


    // we building raw data
    $codeContents  = 'BEGIN:VCARD'."\n";
    $codeContents .= 'VERSION:2.1'."\n";
    //$codeContents .= 'N:'.$sortName."\n";
   

    $codeContents .= 'FN:'.$name."\n";
    $codeContents .= 'ORG:'.$orgName."\n";

    $codeContents .= 'TEL;WORK;VOICE:'.$whatsapp."\n";
    $codeContents .= 'TEL;HOME;VOICE:'.$officephone."\n";
    //$codeContents .= 'TEL;TYPE=cell:'.$phoneCell."\n";

    /*$codeContents .= 'ADR;TYPE=work;'.
        'LABEL="'.$addressLabel.'":'
        .$address.';'."\n";
        .$addressExt.';'
        .$addressStreet.';'
        .$addressTown.';'
        .$addressPostCode.';'
        .$addressCountry
    ."\n";*/
    $codeContents .='ADR;WORK:'.$address."\n";
    $codeContents .= 'EMAIL:'.$email."\n";
    $codeContents .= 'URL;type=pref:'.$website."\n";
    $codeContents .= 'TITLE:'.$jobtitle."\n";


    $codeContents .= 'END:VCARD';
$r=rand();
    // generating
    //QRcode::png($codeContents, $tempDir.'026.png', QR_ECLEVEL_L, 3);
    QRcode::png($codeContents, $tempDir.$r.'.png', QR_ECLEVEL_L, 3);


    // displaying
    //echo '<img src="'.EXAMPLE_TMP_URLRELPATH.'026.png" />';
    //echo '<img src="'.EXAMPLE_TMP_URLRELPATH.$r.'.png" />';
    echo '<div id="result"><a href=/phpqrcode/temp/'.$r.'.png'.' download><img src="'.EXAMPLE_TMP_URLRELPATH.$r.'.png" /></a></div>';

    

  