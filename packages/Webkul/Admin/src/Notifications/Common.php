<?php

namespace Webkul\Admin\Notifications;

use Illuminate\Mail\Mailable;

class Common extends Mailable
{
    /**
     * @param  array  $data
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the mail representation of the notification.
     */
    public function build()
    {
        return $this
                ->to($this->data['to'])
                ->subject($this->data['subject'])
                ->view('admin::emails.common', [
                    'body' => $this->data['body'],
                ]);
    }
}