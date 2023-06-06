<?php
namespace App\services;
 Use MailchimpMarketing\ApiClient;
class mailchimp {

public function addToNewsletter($email, $links = null){
    $links ??=config('services.mailchimp.lists.subscribers');
    request()->validate([
        'email'=>['required','email']
    ]);

   
    return $this->client()->lists->addListMember($links,
        [ "email_address" => request('email'),
         "status" => "subscribed", ] );
    
}

protected function client(){
    return (new ApiClient())->setConfig([
        'apiKey' => config('services.mailchimp.key'),
        'server' => 'us21'
    ]);

}

}