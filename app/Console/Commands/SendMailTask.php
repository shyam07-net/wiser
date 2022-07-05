<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\users;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
class SendMailTask extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'Send:mail';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
    //     $myArray = array('mobile','watch','jeans','laptop','bike','car','bus','train');
    //     // Random shuffle
    //     shuffle($myArray);
    //   // First element is random now
    //     $randomValue = $myArray[0];
    //     $dataSize  = DB::table('testingmail')->get(); 
    //     foreach($dataSize as $list)
    //     {

    //     $data =['Subject' => 'CRM Rajeev','email' =>$list->email,'gift'=>$randomValue];
    //     $email_blade = 'COMMEN.Email.SendTaskMail';
    //     Mail::send($email_blade, $data, function ($message) use ($data) {
    //     $message->from('wiseowl24.net@gmail.com', 'CRM Testing Please Ignore');
    //     $message->to($data['email'], $data['Subject'])->subject($data['Subject']);
    //     });
    //   }
    }
}
