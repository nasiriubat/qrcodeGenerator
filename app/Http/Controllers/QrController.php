<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QrController extends Controller
{
    public function calender(Request $request)
    {
        $start = $request->start_date ?? new \DateTime('next saturday 7pm');
        $end = $request->end_date ?? new \DateTime('next saturday 11pm');
        $summary = $request->summary ??  'Interview with Neil DeGrasse Tyson';
        $description = $request->description ?? 'Meet Mr. Tyson at Per Se and interview him about the asteroid Apophis';
        $location = $request->summary ?? 'Time Warner Center, 10 Columbus Cir, New York, NY 10023, USA';

        return QRCode::calendar($start, $end, $summary, $description, $location)->svg();
    }
    
    public function email(Request $request)
    {

        $to = $request->to ?? 'john.doe@example.com';
        $subject = $request->subject ?? 'QR Code Message';
        $body = $request->body ?? 'This email was created from a QR Code!';

        return QRCode::email($to, $body, $subject)->png();
    }
}
