<?php
   $name = $_Post['name'];
   $student_number = $_Post['student-number'];
   $club = $_Post['club']
   $contact_number = $_Post['contact-number'];
   $visitor_email = $_Post['email']
   $reason = $_Post['reason']

   
   $email_from = 'form.html';
   
   $email_subject ="새로운 지원서";

   $email_body = "이름: $name./n".
                 "학번: $student_number./n".
                 "들어가고 싶은 동아리: $club./n".
                 "전화번호: $contact_number./n".
                 "이메일: $visitor_email./n".
                 "지원동기: $reason./n";

                 $to = "hgudongari.gmail.com";
                
                 $headers = "From: $email_from /r/n";

                 $headers = "Reply-To: $viisitor_email /r/n";

                 mail($to,$email_subject,$email_body,$headers);

                 header("Location: form.html");
?> 