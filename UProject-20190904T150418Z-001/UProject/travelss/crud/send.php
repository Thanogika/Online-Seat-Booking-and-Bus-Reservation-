  <?php
    // download fpdf class (http://fpdf.org)
    require ("FPDF/fpdf.php");
    require ("WriteHTML.php"); 
    $pdf=new PDF_HTML(); 
    //$pdf-->AliasNbPages();
    $pdf->SetAutoPageBreak(true, 15);

    // fpdf object
    $pdf->AddPage();

    $pdf->SetFont('Arial','B',14);
    $pdf->WriteHTML('
    <h1>Vanguard Appraisals Price Estimate</h1>
    ');

    $pdf->SetFont('Arial','B',7);

    $htmlTable='
    <table align=\"center\"  style=\"width:85px; ;\">
        <tr>
            <td colspan="4" align="center" style="text-align:center;" >
                <span style="text-transform:uppercase; font-weight:bold; font-size:20px; text-align:center;">Contact Information</span>
            </td>
        </tr>
        <tr>
            <td align="left" style="background-color:#eee; padding-left:10px; width:20px; ">
                <b>Sales:</b>
            </td>
            <td align="left" style="padding-left:10px; background-color:#ffffff; width:30px;">
                '.$Sales.'
            </td>
            <td align="left" style="background-color:#eee; padding-left:10px; width:20px;">
                <b>Sales E-Mail:</b>
            </td>
            <td align="left" style="padding-left:10px; background-color:#ffffff; width:30px;">
                '.$from.'
            </td>
        </tr>
        <tr>
            <td align="left" style="background-color:#eee; padding-left:10px; width:20px; ">
                <b>client Name:</b>
            </td>
            <td align="left" style="padding-left:10px; background-color:#ffffff; width:30px;">
                '.$client.'
            </td>
            <td align="left" style="background-color:#eee; padding-left:10px; width:20px; ">
                <b>Company, State:</b>
            </td>
            <td align="left" style="padding-left:10px; background-color:#ffffff; width:30px;">
                '.$Company.', '.$state.'
            </td>
        </tr>
        <tr>
            <td align="left" style="background-color:#eee; padding-left:10px; width:20px; ">
                <b>client Phone:</b>
            </td>
            <td align="left" style="padding-left:10px; background-color:#ffffff; width:30px;">
                '.$client_phone.'
            </td>
            <td align="left" style="background-color:#eee; padding-left:10px; width:20px; ">
                <b>client E-mail:</b>
            </td>
            <td align="left" style="padding-left:10px; background-color:#ffffff; width:30px;">
                '.$email_from.'
            </td>
        </tr>
    </table>
    <table align="center" width="100px" style="width:100px;">
        <tr>
            <td>
                '.$txt.'
            </td>   
        </tr>
    </table>
    ';

    $pdf->WriteHTML("

    $htmlTable

    <br /><br /><P style=\"font-size:10px; color:#ff0000; text-align:center; margin-bottom:4px;\">* Prices below are only an estimated price and is in no way an official cost from Vanguard Appraisals, Inc.</p><br />".$txt."<br /><center><p style=\"font-family: 'Century Gothic',CenturyGothic,AppleGothic,sans-serif; font-size:18px; width:90%; text-align:left;\">For an official price quote, or to get a quote on hardware items, please contact Vanguard Appraisals home office at (319)365-8625 or by e-mail at <a href=\"mailto:info@camavision.com\">info@camavision.com</a>.</p>");

    $pdf->SetFont('Arial','B',6);
    $pdf->Output();

    ?>


                            <div class="entry-content">
                            <?php

                                if(isset($_POST['send'])) {
                                    $to = "email@someemail.com"; 
                                    $txt = $_POST['data'];


                                    $filename = "Price_Estimate.pdf";
                                    $pdf->Output('Price_Estimate.pdf','D');
                                    $attachment = chunk_split(base64_encode($fileatt));
                                    $eol = PHP_EOL;
                                    $boundary = md5(time());

                                    function died($error) { 
                                        // your error code can go here   
                                        echo "We are very sorry, but there were error(s) found with the form you submitted. ";   
                                        echo "These errors appear below.<br /><br />";   
                                        echo $error."<br /><br />";  
                                        echo "Please go back and fix these errors.<br /><br />";     
                                        die();   
                                    }
                                    // validation expected data exists 
                                    if(!isset($_POST['Company']) ||  
                                        !isset($_POST['state']) ||   
                                        !isset($_POST['sales_rep']) ||
                                        !isset($_POST['email']) ||
                                        !isset($_POST['client']) ||
                                        !isset($_POST['client_email']) ||
                                        !isset($_POST['client_phone'])) {    
                                        died('We are sorry, but there appears to be a problem with the form you submitted.');    

                                    }
                                    $Company = $_POST['Company']; // required 
                                    $state = $_POST['state']; // required 
                                    $Sales = $_POST['sales_rep']; // required
                                    $from = $_POST['email']; // required
                                    $client = $_POST['client']; // required     
                                    $client_email = $_POST['client_email']; // not required 
                                    $client_phone = $_POST['client_phone']; // not required
                                    $date = date("F j, Y"); 



                                    $error_message = ""; 
                                    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';                                  
                                    if(!preg_match($email_exp,$from)) { 
                                        $error_message .= 'The Email Address you entered does not appear to be valid.<br />';        
                                    }
                                        $string_exp = "/^[A-Za-z .'-]+$/";
                                    if(!preg_match($string_exp,$Company)) { 
                                        $error_message .= 'The Company you entered does not appear to be valid.<br />';      
                                    }
                                    if(!preg_match($string_exp,$Sales)) { 
                                        $error_message .= 'The Company you entered does not appear to be valid.<br />';      
                                    }
                                    if(!preg_match($string_exp,$client)) { 
                                        $error_message .= 'The Company you entered does not appear to be valid.<br />';      
                                    }   

                                    if(strlen($error_message) > 0) { 
                                        died($error_message); 
                                    }
                                        $email_message = "Form details below.\n\n";
                                    function clean_string($string) { 
                                      $bad = array("content-type","bcc:","to:","cc:","href");    
                                      return str_replace($bad,"",$string);   
                                    }    
                                    $subject = "Price Quote Submission";;
                                    $subject2 = "Sales Copy of Price Quote Submission";


                                    //Web Copy                              
                                    $web_message .=  "<center><table align=\"center\"  style=\"width:85%; ;\"><tr> ";   
                                            $web_message .= "<td colspan=\"4\" align=\"center\" style=\"text-align:center;\" ><span style=\"text-transform:uppercase; font-weight:bold; font-size:20px; text-align:center;\">Contact Information</span></td>";
                                        $web_message .= "</tr><tr>";        
                                                $web_message .= "<td align=\"left\" style=\"background-color:#eee; padding-left:10px; width:20%; \"><b>Representative:</b></td>";
                                                $web_message .= "<td align=\"left\" style=\"padding-left:10px; background-color:#ffffff; width:30%;\">".clean_string($representative)."</td>";
                                                $web_message .= "<td align=\"left\" style=\"background-color:#eee; padding-left:10px; width:20%; \"><b>Rep's E-Mail:</b></td>";
                                                $web_message .= "<td align=\"left\" style=\"padding-left:10px; background-color:#ffffff; width:30%;\">".clean_string($from)."</td>";
                                            $web_message .= "</tr><tr>";
                                                $web_message .= "<td align=\"left\" style=\"background-color:#eee; padding-left:10px; width:20%; \"><b>client's Name:</b></td>";
                                                $web_message .= "<td align=\"left\" style=\"padding-left:10px; background-color:#ffffff; width:30%;\">".clean_string($client)."</td>";
                                                $web_message .= "<td align=\"left\" style=\"background-color:#eee; padding-left:10px; width:20%; \"><b>company, State:</b></td>";
                                                $web_message .= "<td align=\"left\" style=\"padding-left:10px; background-color:#ffffff; width:30%;\">".clean_string($company).", ".clean_string($state)."</td>";
                                            $web_message .= "</tr><tr>";
                                                $web_message .= "<td align=\"left\" style=\"background-color:#eee; padding-left:10px; width:20%; \"><b>Assessor's Phone:</b></td>";
                                                $web_message .= "<td align=\"left\" style=\"padding-left:10px; background-color:#ffffff; width:30%;\">".clean_string($client_phone)."</td>";
                                                $web_message .= "<td align=\"left\" style=\"background-color:#eee; padding-left:10px; width:20%; \"><b>client's E-mail:</b></td>";
                                                $web_message .= "<td align=\"left\" style=\"padding-left:10px; background-color:#ffffff; width:30%;\">".clean_string($email_from)."</td>";          
                                            $web_message .= "</tr>";
                                    $web_message .= "</tr></table></center><br /><br />";
                                    $web_message .= "<P style=\"font-size:10px; color:#ff0000; text-align:center; margin-bottom:4px;\">* Prices below are only an estimated price and is in no way an official cost .</p><br />".$txt."<br />";

                                        $web_message .= "<center><p style=\"font-family: 'Century Gothic',CenturyGothic,AppleGothic,sans-serif; font-size:18px; width:90px; text-align:left;\">For an official price quote, or to get a quote on hardware items, please contact home office.</p></center>";



                                    //Office Copy                               
                                    $message .= "<style> 
                                                table { width:700px; }
                                                table th { padding: 4px 10px; background-color: #396ba5; color:#ffffff; }
                                                table td {padding-bottom:0px; padding-top:0px; }
                                                td {padding-left:15px;}

                                                </style>";
                                    $message .= "<p style=\"text-align:center; font-size:10px;\">Some Company</p>";         
                                    $message .=  "<table align=\"center\" border=\"2\" cellpadding=\"0\" cellspacing=\"0\" width=\"700\" style=\"border-collapse: collapse;\"><tr> ";
                                        $message .= "<td>";
                                            $message .= "<table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"700\"><tr>";
                                                $message .= "<td align=\"left\" style=\"padding:10px;\"><img src=\"" width=\"250\" height=\"56\" /></td>";
                                                $message .= "<td align=\"right\" style=\"padding:10px;\">Address<br />City, State, Zip Code<br />Telephone | Fax </td>";
                                            $message .= "</tr></table>";
                                        $message .= "</td>";
                                    $message .= "</tr><tr>";
                                        $message .= "<td align=\"center\" ><h2 style=\"text-transform:uppercase;\">Price Estimate</h2></td>";
                                    $message .= "</tr><tr>";
                                        $message .= "<td align=\"left\" style=\"padding:10px;\" >The following price quote was submitted on <b>".$date."</b> from ".clean_string($sales).".</td>";
                                    $message .= "</tr><tr>";
                                        $message .= "<td><br/>";
                                            $message .= "<table align=\"center\" border=\"1\" cellpadding=\"0\" cellspacing=\"0\" width=\"700\" ><tr>";
                                                $message .= "<td align=\"left\" style=\"background-color:#eee; padding-left:10px; \"><b>sales:</b></td>";
                                                $message .= "<td align=\"left\" style=\"padding-left:10px;\">".clean_string($sales)."</td>";
                                                $message .= "<td align=\"left\" style=\"background-color:#eee; padding-left:10px;\"><b>Rep's E-Mail:</b></td>";
                                                $message .= "<td align=\"left\" style=\"padding-left:10px;\">".clean_string($from)."</td>";
                                            $message .= "</tr><tr>";
                                                $message .= "<td align=\"left\" style=\"background-color:#eee; padding-left:10px;\"><b>client's Name:</b></td>";
                                                $message .= "<td align=\"left\" style=\" padding-left:10px;\">".clean_string($client)."</td>";
                                                $message .= "<td align=\"left\" style=\"background-color:#eee; padding-left:10px;\"><b>company, State:</b></td>";
                                                $message .= "<td align=\"left\" style=\"padding-left:10px;\">".clean_string($company).", ".clean_string($state)."</td>";
                                            $message .= "</tr><tr>";
                                                $message .= "<td align=\"left\" style=\"background-color:#eee; padding-left:10px;\"><b>client's Phone:</b></td>";
                                                $message .= "<td align=\"left\" style=\" padding-left:10px;\">".clean_string($client_phone)."</td>";
                                                $message .= "<td align=\"left\" style=\"background-color:#eee; padding-left:10px;\"><b>client's E-mail:</b></td>";
                                                $message .= "<td align=\"left\" style=\"padding-left:10px;\">".clean_string($email_from)."</td>";

                                            $message .= "</tr></table><br/><br/><br />";
                                        $message .= "</td>";

                                    $message .= "</tr><tr  >";
                                        $message .= "<td  style=\"padding:10px; text-align:center; border-bottom: 0px solid #ffffff;\"><span style=\"font-size:10px; color:#ff0000; text-align:center;\">* Prices below are only an estimated price and is in no way an official cost from Vanguard Appraisals, Inc.</span><br />".$txt."</td>";
                                    $message .= "</tr><tr>";
                                        $message .= "<td style=\"padding:10px; height:25px; border-top:0px solid #ffffff; border-bottom:0px solid #ffffff;\">&nbsp;</td>";
                                    $message .= "</tr><tr>";
                                        $message .= "<td align=\"center\" style=\"padding:10px;\" ><span style=\"font-size:10px; color:#ff0000; text-align:center;\">* Please do not reply back to this E-Mail</span></td> ";
                                    $message .= "</tr></table>";


                                    //sales Copy     
                                    $message2 .= "<style> 
                                                table { width:700px; }
                                                table th { padding: 4px 10px; background-color: #396ba5; color:#ffffff; }
                                                table td {padding-bottom:0px; padding-top:0px; }
                                                td {padding-left:15px;}
                                                </style>";
                                    $message2 .= "<p style=\"text-align:center; font-size:10px;\">Price Estimat</p>";           
                                    $message2 .=  "<table align=\"center\" border=\"2\" cellpadding=\"0\" cellspacing=\"0\" width=\"700\" style=\"border-collapse: collapse;\"><tr> ";
                                        $message2 .= "<td>";
                                            $message2 .= "<table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"700\"><tr>";
                                                $message2 .= "<td align=\"left\" style=\"padding:10px;\"><img src=\"http://demo.camavision.com/VCSWeb/wp-content/uploads/2016/10/BLUE-Vanguard-horizontal_250x56.jpg\" width=\"250\" height=\"56\" /></td>";
                                                $message2 .= "<td align=\"right\" style=\"padding:10px;\">Address<br />City, State Zip<br />Telephone | Fax</td>";
                                            $message2 .= "</tr></table>";
                                        $message2 .= "</td>";
                                    $message2 .= "</tr><tr>";
                                        $message2 .= "<td align=\"center\" ><h2 style=\"text-transform:uppercase;\">Price Estimate</h2></td>";
                                    $message2 .= "</tr><tr>";
                                        $message2 .= "<td align=\"left\" style=\"padding:10px;\" ><h3 align=\"center\" style=\"text-align:center;\">".$date."</h3>Thank you for submitting the following price quote on ".$date.". It has been successfully submited to the home office. You can see the items selected and an estimated cost below. Please remember that this is just an estimated cost and it is in no way an official cost . Please contact the home office .<br/><br/></td>";
                                    $message2 .= "</tr><tr>";
                                        $message2 .= "<td><br/>";
                                            $message2 .= "<table align=\"center\" border=\"1\" cellpadding=\"0\" cellspacing=\"0\" width=\"700\" ><tr>";
                                                $message2 .= "<td align=\"left\" style=\"background-color:#eee; padding-left:10px;\"><b>client's Name:</b></td>";
                                                $message2 .= "<td align=\"left\" style=\" padding-left:10px;\">".clean_string($client)."</td>";
                                                $message2 .= "<td align=\"left\" style=\"background-color:#eee; padding-left:10px;\"><b>company, State:</b></td>";
                                                $message2 .= "<td align=\"left\" style=\"padding-left:10px;\">".clean_string($company).", ".clean_string($state)."</td>";
                                            $message2 .= "</tr><tr>";
                                                $message2 .= "<td align=\"left\" style=\"background-color:#eee; padding-left:10px;\"><b>client's Phone:</b></td>";
                                                $message2 .= "<td align=\"left\" style=\" padding-left:10px;\">".clean_string($client_phone)."</td>";
                                                $message2 .= "<td align=\"left\" style=\"background-color:#eee; padding-left:10px;\"><b>client's E-mail:</b></td>";
                                                $message2 .= "<td align=\"left\" style=\"padding-left:10px;\">".clean_string($email_from)."</td>";

                                            $message2 .= "</tr></table><br/><br/><br />";
                                        $message2 .= "</td>";                                   
                                    $message2 .= "</tr><tr  >";
                                        $message2 .= "<td  style=\"padding:10px; text-align:center;\"><span style=\"font-size:10px; color:#ff0000; text-align:center;\">* Prices below are only an estimated price and is in no way an official cost.</span><br />".$txt."</td>";
                                    $message2 .= "</tr><tr>";
                                        $message2 .= "<td style=\"padding:10px; border-bottom:0px solid #ffffff;\">For an official price quote, or to receive a quote on hardware items, please contact home office .</td>";
                                    $message2 .= "</tr><tr>";
                                        $message2 .= "<td style=\"padding:10px; height:25px; border-top:0px solid #ffffff; border-bottom:0px solid #ffffff;\">&nbsp;</td>";
                                    $message2 .= "</tr><tr>";
                                        $message2 .= "<td align=\"center\" style=\"padding:10px;\" ><span style=\"font-size:10px; color:#ff0000; text-align:center;\">* Please do not reply back to this E-Mail</span></td> ";
                                    $message2 .= "</tr></table>";


                                    // main header (multipart mandatory)
                                    $headers  = "From: ".clean_string($from);
                                    $headers .= "MIME-Version: 1.0"; 
                                    $headers .= "Content-Type: multipart/mixed;boundary=\"" . $boundary . "\"\r\n"; 


                                    // attachment
                                    $output = "--".$boundary."\r\n";
                                    $output .= "Content-Type: text/pdf; name=\"Price_Estimate.pdf\";\r\n";
                                    $output .= "Content-Disposition: attachment;\r\n\r\n";                              
                                    $output .= $attachment."\r\n\r\n";
                                    $output .= "--".$boundary."\r\n";
                                     $output .= "Content-type: text/html; charset=\"utf-8\"\r\n";
                                    $output .= "Content-Transfer-Encoding: 8bit\r\n\r\n";
                                    $output .= $message."\r\n\r\n";
                                    $output .= "--".$boundary."--\r\n\r\n";



                                    // create sales email headers
                                    $headers2 = "From: ".$to. "\r\n";
                                    $headers2 .= "MIME-Version: 1.0\r\n";
                                    $headers2 .= "Content-Type: text/html; charset=UTF-8\r\n";
                                    $headers2 .= "Content-Transfer-Encoding: 8bit";
                                    $headers2 .= $message.$eol.$eol;



                                    mail($to,$subject,$output,$headers);
                                    mail($from,$subject2,$message2,$headers2); 

                                    if(mail($to,$subject,$output,$headers))
                                       {
                                         echo "<p style=\"font-family: 'Century Gothic',CenturyGothic,AppleGothic,sans-serif; font-size:18px; margin-top:-50px;\" >Thank you for submitting the following price quote on ".$date.". It has been successfully submited to the home office. You can see the items selected and an estimated cost below. Please remember that this is just an estimated cost and it is in no way an official cost from Vanguard Appraisals, Inc. Please contact the home office .</p>";
                                       }
                                       else
                                       {
                                         echo "<p style=\"font-family: 'Century Gothic',CenturyGothic,AppleGothic,sans-serif; font-size:18px; margin-top:-50px;\" >We are very sorry, but there were error(s) found with the price quote you submitted. Please return back to the price quote page and try re-submitting the form again.  Any questions or to receive an official estimate by phone, please contact the home office.  Thank you.</p>";
                                       }
                            ?>



                            <!-- include your own success html here -->


                            <div style="width:100%;"> 

                            <?php echo $web_message ?>
                            </div> 

                            <?php

                            }

                            ?>

                        </div>

                        </article>
                    </div><!-- #main -->