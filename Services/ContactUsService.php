<?php
namespace Modules\HelpCenter\Services;

use Modules\HelpCenter\Entities\ContactUs;
use Modules\HelpCenter\Http\Requests\ContactUsRequest;
use App\Traits\UploadTrait;

use function PHPUnit\Framework\isNull;

class ContactUsService{

    use UploadTrait;

/**
     * Contact user with website
*/
public function contactUs(ContactUsRequest $request) {

    if(!isNull($request->file)){
        $file = $this->uploadOne($request->file , 'assets/files/contacts');
    }
    else {
        $file = null;
    }
   return ContactUs::create([
    'name'      => $request->name,
    'email'     => $request->email,
    'message'   => $request->message,
    'file'      => $file,
    ]);
  }
}
