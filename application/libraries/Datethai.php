<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Datethai {
 
         
        function thai_date_and_time($time){   // 19 ธันวาคม 2556 เวลา 10:10:43
            global $dayTH,$monthTH;   
            $thai_date_return = date("j",$time);   
            $thai_date_return.=" ".$monthTH[date("n",$time)];   
            $thai_date_return.= " ".(date("Y",$time)+543);   
            $thai_date_return.= " เวลา ".date("H:i:s",$time);
            return $thai_date_return;   
        } 
        function thai_date_and_time_short($time){   // 19  ธ.ค. 2556 10:10:4
            global $dayTH,$monthTH_brev;   
            $thai_date_return = date("j",$time);   
            $thai_date_return.=" ".$monthTH_brev[date("n",$time)];   
            $thai_date_return.= " ".(date("Y",$time)+543);   
            $thai_date_return.= " ".date("H:i:s",$time);
            return $thai_date_return;   
        } 
        function thai_date_short($time){   // 19  ธ.ค. 2556a
            global $dayTH,$monthTH_brev;   
            $thai_date_return = date("j",$time);   
            $thai_date_return.=" ".$monthTH_brev[date("n",$time)];   
            $thai_date_return.= " ".(date("Y",$time)+543);   
            return $thai_date_return;   
        } 
        function thai_date_fullmonth($time){   // 19 ธันวาคม 2556
            $dayTH = ['อาทิตย์','จันทร์','อังคาร','พุธ','พฤหัสบดี','ศุกร์','เสาร์'];
            $monthTH = [null,'มกราคม','กุมภาพันธ์','มีนาคม','เมษายน','พฤษภาคม','มิถุนายน','กรกฎาคม','สิงหาคม','กันยายน','ตุลาคม','พฤศจิกายน','ธันวาคม'];
            $monthTH_brev = [null,'ม.ค.','ก.พ.','มี.ค.','เม.ย.','พ.ค.','มิ.ย.','ก.ค.','ส.ค.','ก.ย.','ต.ค.','พ.ย.','ธ.ค.'];
            
            $thai_date_return = date("j",$time);   
            $thai_date_return.=" ".$monthTH[date("n",$time)];   
            $thai_date_return.= " ".(date("Y",$time)+543);   
            return $thai_date_return;   
        } 
        function thai_date_short_number($time){   // 19-12-56
            global $dayTH,$monthTH;   
            $thai_date_return = date("d",$time);   
            $thai_date_return.="-".date("m",$time);   
            $thai_date_return.= "-".substr((date("Y",$time)+543),-2);   
            return $thai_date_return;   
        } 

        // Start function
        function shorter($text, $chars_limit)
        {
            // Check if length is larger than the character limit
            if (strlen($text) > $chars_limit)
            {
                // If so, cut the string at the character limit
                $new_text = substr($text, 0, $chars_limit);
                // Trim off white space
                $new_text = trim($new_text);
                // Add at end of text ...
                return $new_text . "...";
            }
            // If not just return the text as is
            else
            {
            return $text;
            }
        }
}
?>